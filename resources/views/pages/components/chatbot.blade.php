<!-- Floating Chatbot Action Button (FAB) -->
<button type="button" id="chatbotToggleBtn" class="floating-chatbot-btn shadow-lg" aria-label="Ouvrir le Chatbot AQUAMEN">
    <i class="bi bi-robot"></i>
    <span>AQUA-Bot</span>
    <span class="chat-notification-dot"></span>
</button>

<!-- Chatbot Window Widget -->
<div id="chatbotWindow" class="chatbot-window shadow-lg d-none">
    <!-- Header -->
    <div class="chatbot-header d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center gap-2">
            <div class="chatbot-avatar-container">
                <img src="{{ asset('assets/img/aquamen.png') }}" alt="AQUAMEN Bot Avatar" class="chatbot-avatar">
                <span class="online-indicator"></span>
            </div>
            <div>
                <h6 class="mb-0 fw-bold text-white">AQUA-Bot</h6>
                <small class="text-white-50" style="font-size: 11px;">Assistant virtuel AQUAMEN</small>
            </div>
        </div>
        <div class="d-flex align-items-center gap-2">
            <button type="button" id="chatbotResetBtn" class="btn-chat-header" title="Réinitialiser la discussion">
                <i class="bi bi-arrow-counterclockwise"></i>
            </button>
            <button type="button" id="chatbotCloseBtn" class="btn-chat-header" title="Fermer">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>
    </div>

    <!-- Body / Conversation -->
    <div id="chatbotBody" class="chatbot-body">
        <!-- Initial Message -->
        <div class="chat-message bot-message">
            <div class="message-content">
                Bonjour ! 🌊 Je suis <strong>AQUA-Bot</strong>, l'assistant virtuel d'<strong>AQUAMEN</strong>.<br>
                Comment puis-je vous aider aujourd'hui ?
            </div>
            <span class="message-time">{{ date('H:i') }}</span>
        </div>

        <!-- Default Suggestions -->
        <div id="chatbotDefaultSuggestions" class="chatbot-suggestions mt-2">
            <p class="suggestion-title mb-2"><i class="bi bi-lightbulb me-1"></i>Questions fréquentes :</p>
            <div class="d-flex flex-wrap gap-1">
                <button type="button" class="chip-btn" data-msg="Qui sommes-nous ?">🌊 Qui sommes-nous ?</button>
                <button type="button" class="chip-btn" data-msg="Nos projets & recherches">🎯 Nos projets</button>
                <button type="button" class="chip-btn" data-msg="Comment faire un don ?">💚 Faire un don</button>
                <button type="button" class="chip-btn" data-msg="Devenir bénévole">🤝 Devenir bénévole</button>
                <button type="button" class="chip-btn" data-msg="Consulter les rapports">📄 Rapports</button>
                <button type="button" class="chip-btn" data-msg="Contact & Localisation">📞 Contact</button>
            </div>
        </div>

        <!-- Typing Indicator -->
        <div id="chatbotTyping" class="chat-message bot-message d-none">
            <div class="message-content typing-dots">
                <span></span><span></span><span></span>
            </div>
        </div>
    </div>

    <!-- Footer / Input -->
    <div class="chatbot-footer">
        <form id="chatbotForm" class="d-flex align-items-center gap-2 m-0">
            @csrf
            <input type="text" id="chatbotInput" class="form-control chatbot-input" placeholder="Posez votre question..." autocomplete="off">
            <button type="submit" id="chatbotSendBtn" class="btn chatbot-send-btn" aria-label="Envoyer">
                <i class="bi bi-send-fill"></i>
            </button>
        </form>
    </div>
</div>

<!-- Chatbot Script -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const toggleBtn = document.getElementById('chatbotToggleBtn');
    const closeBtn = document.getElementById('chatbotCloseBtn');
    const resetBtn = document.getElementById('chatbotResetBtn');
    const chatWindow = document.getElementById('chatbotWindow');
    const chatBody = document.getElementById('chatbotBody');
    const chatForm = document.getElementById('chatbotForm');
    const chatInput = document.getElementById('chatbotInput');
    const typingIndicator = document.getElementById('chatbotTyping');
    const notificationDot = toggleBtn.querySelector('.chat-notification-dot');

    const csrfToken = "{{ csrf_token() }}";
    const endpoint = "{{ route('chatbot.message') }}";

    // Toggle Chat Window
    toggleBtn.addEventListener('click', function () {
        chatWindow.classList.toggle('d-none');
        if (!chatWindow.classList.contains('d-none')) {
            chatInput.focus();
            scrollToBottom();
            if (notificationDot) notificationDot.style.display = 'none';
        }
    });

    closeBtn.addEventListener('click', function () {
        chatWindow.classList.add('d-none');
    });

    // Reset Chat
    resetBtn.addEventListener('click', function () {
        const messages = chatBody.querySelectorAll('.chat-message:not(#chatbotTyping)');
        messages.forEach((msg, idx) => {
            if (idx > 0) msg.remove();
        });
        const currentSuggestions = chatBody.querySelectorAll('.chatbot-suggestions');
        currentSuggestions.forEach((sug, idx) => {
            if (idx > 0) sug.remove();
        });
        document.getElementById('chatbotDefaultSuggestions').style.display = 'block';
        scrollToBottom();
    });

    // Delegate Suggestion Chips click
    chatBody.addEventListener('click', function (e) {
        if (e.target && e.target.classList.contains('chip-btn')) {
            const msg = e.target.getAttribute('data-msg');
            if (msg) {
                sendMessage(msg);
            }
        }
    });

    // Form submit
    chatForm.addEventListener('submit', function (e) {
        e.preventDefault();
        const msg = chatInput.value.trim();
        if (msg) {
            sendMessage(msg);
            chatInput.value = '';
        }
    });

    function getCurrentTime() {
        const now = new Date();
        return now.getHours().toString().padStart(2, '0') + ':' + now.getMinutes().toString().padStart(2, '0');
    }

    function appendUserMessage(text) {
        const messageDiv = document.createElement('div');
        messageDiv.className = 'chat-message user-message';
        messageDiv.innerHTML = `
            <div class="message-content">${escapeHtml(text)}</div>
            <span class="message-time">${getCurrentTime()}</span>
        `;
        chatBody.insertBefore(messageDiv, typingIndicator);
        scrollToBottom();
    }

    function appendBotMessage(htmlReply, suggestions = []) {
        const messageDiv = document.createElement('div');
        messageDiv.className = 'chat-message bot-message';
        messageDiv.innerHTML = `
            <div class="message-content">${formatMarkdown(htmlReply)}</div>
            <span class="message-time">${getCurrentTime()}</span>
        `;
        chatBody.insertBefore(messageDiv, typingIndicator);

        if (suggestions && suggestions.length > 0) {
            const sugDiv = document.createElement('div');
            sugDiv.className = 'chatbot-suggestions mt-2';
            let chipsHtml = '<div class="d-flex flex-wrap gap-1">';
            suggestions.forEach(sug => {
                chipsHtml += `<button type="button" class="chip-btn" data-msg="${escapeHtml(sug)}">${escapeHtml(sug)}</button>`;
            });
            chipsHtml += '</div>';
            sugDiv.innerHTML = chipsHtml;
            chatBody.insertBefore(sugDiv, typingIndicator);
        }

        scrollToBottom();
    }

    function showTyping() {
        typingIndicator.classList.remove('d-none');
        scrollToBottom();
    }

    function hideTyping() {
        typingIndicator.classList.add('d-none');
    }

    function scrollToBottom() {
        setTimeout(() => {
            chatBody.scrollTop = chatBody.scrollHeight;
        }, 50);
    }

    function escapeHtml(text) {
        const div = document.createElement('div');
        div.innerText = text;
        return div.innerHTML;
    }

    function formatMarkdown(text) {
        return text.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');
    }

    function sendMessage(msg) {
        appendUserMessage(msg);
        showTyping();

        fetch(endpoint, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
                'Accept': 'application/json'
            },
            body: JSON.stringify({ message: msg })
        })
        .then(response => response.json())
        .then(data => {
            hideTyping();
            if (data.reply) {
                appendBotMessage(data.reply, data.suggestions || []);
            } else {
                appendBotMessage("Désolé, une erreur s'est produite. Veuillez réessayer.");
            }
        })
        .catch(error => {
            hideTyping();
            console.error('Chatbot error:', error);
            // Fallback offline response
            appendBotMessage("Pour nous contacter directement, téléphonez au <strong>+237 697 49 78 92</strong> ou envoyez un email à <a href='mailto:contact@aquamen.org'>contact@aquamen.org</a>.", [
                'Nos projets & recherches',
                'Comment faire un don ?'
            ]);
        });
    }
});
</script>
