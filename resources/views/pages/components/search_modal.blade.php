<!-- Instant Search Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true" style="z-index: 100010;">
    <div class="modal-dialog modal-lg modal-dialog-top" style="margin-top: 60px;">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 16px; overflow: hidden; background: #ffffff;">
            <!-- Header Search Bar -->
            <div class="p-3 border-bottom d-flex align-items-center gap-2" style="background: #0b1a26;">
                <i class="bi bi-search text-info fs-4 ms-2"></i>
                <input type="text" id="searchInput" class="form-control form-control-lg border-0 bg-transparent text-white shadow-none" placeholder="Rechercher un projet, rapport, article ou membre..." autocomplete="off" style="font-size: 16px;">
                <button type="button" class="btn-close btn-close-white me-2" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Results Container -->
            <div id="searchResults" class="modal-body p-4" style="max-height: 480px; overflow-y: auto;">
                <div id="searchPlaceholder" class="text-center text-muted py-4">
                    <i class="bi bi-search display-6 text-secondary d-block mb-2"></i>
                    Tapez des mots-clés (ex: <em>Mangroves, Océanographie, Kribi, Rapport, Bénévole</em>)
                </div>
                <div id="searchContent" class="d-none"></div>
            </div>
        </div>
    </div>
</div>

<!-- Search Script -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('searchInput');
    const searchPlaceholder = document.getElementById('searchPlaceholder');
    const searchContent = document.getElementById('searchContent');
    const searchModal = document.getElementById('searchModal');

    if (searchModal) {
        searchModal.addEventListener('shown.bs.modal', function () {
            searchInput.focus();
        });
    }

    let debounceTimer;
    searchInput.addEventListener('input', function () {
        clearTimeout(debounceTimer);
        const query = searchInput.value.trim();

        if (query.length < 2) {
            searchPlaceholder.classList.remove('d-none');
            searchContent.classList.add('d-none');
            searchContent.innerHTML = '';
            return;
        }

        debounceTimer = setTimeout(() => {
            fetch(`{{ route('api.search') }}?q=${encodeURIComponent(query)}`)
                .then(res => res.json())
                .then(data => {
                    renderResults(data);
                })
                .catch(err => {
                    console.error('Search error:', err);
                });
        }, 250);
    });

    function renderResults(data) {
        searchPlaceholder.classList.add('d-none');
        searchContent.classList.remove('d-none');

        let html = '';
        let totalCount = 0;

        // Articles
        if (data.articles && data.articles.length > 0) {
            totalCount += data.articles.length;
            html += `<h6 class="fw-bold text-uppercase mb-2 text-info" style="font-size: 12px; letter-spacing: 1px;"><i class="bi bi-journal-text me-1"></i>Articles (${data.articles.length})</h6><div class="list-group mb-3">`;
            data.articles.forEach(art => {
                html += `<a href="/aquarticle" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-2">
                    <div><strong>${escapeHtml(art.title)}</strong></div>
                    <span class="badge bg-primary rounded-pill" style="font-size: 11px;">Article</span>
                </a>`;
            });
            html += `</div>`;
        }

        // Rapports
        if (data.rapports && data.rapports.length > 0) {
            totalCount += data.rapports.length;
            html += `<h6 class="fw-bold text-uppercase mb-2 text-info" style="font-size: 12px; letter-spacing: 1px;"><i class="bi bi-file-earmark-pdf me-1"></i>Rapports Scientifiques (${data.rapports.length})</h6><div class="list-group mb-3">`;
            data.rapports.forEach(rap => {
                html += `<a href="/rapport" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-2">
                    <div><strong>${escapeHtml(rap.titre)}</strong></div>
                    <span class="badge bg-danger rounded-pill" style="font-size: 11px;">PDF</span>
                </a>`;
            });
            html += `</div>`;
        }

        // Activites
        if (data.activites && data.activites.length > 0) {
            totalCount += data.activites.length;
            html += `<h6 class="fw-bold text-uppercase mb-2 text-info" style="font-size: 12px; letter-spacing: 1px;"><i class="bi bi-folder-fill me-1"></i>Projets & Activités (${data.activites.length})</h6><div class="list-group mb-3">`;
            data.activites.forEach(act => {
                html += `<a href="/activite" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-2">
                    <div><strong>${escapeHtml(act.titre)}</strong></div>
                    <span class="badge bg-success rounded-pill" style="font-size: 11px;">Projet</span>
                </a>`;
            });
            html += `</div>`;
        }

        // Membres
        if (data.membres && data.membres.length > 0) {
            totalCount += data.membres.length;
            html += `<h6 class="fw-bold text-uppercase mb-2 text-info" style="font-size: 12px; letter-spacing: 1px;"><i class="bi bi-people-fill me-1"></i>Équipe (${data.membres.length})</h6><div class="list-group mb-3">`;
            data.membres.forEach(mem => {
                html += `<a href="/about#chefs" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-2">
                    <div><strong>${escapeHtml(mem.nom)} ${escapeHtml(mem.prenome || '')}</strong> <small class="text-muted">(${escapeHtml(mem.info || '')})</small></div>
                    <span class="badge bg-secondary rounded-pill" style="font-size: 11px;">Membre</span>
                </a>`;
            });
            html += `</div>`;
        }

        if (totalCount === 0) {
            html = `<div class="text-center text-muted py-4"><i class="bi bi-exclamation-circle text-warning fs-3 d-block mb-2"></i>Aucun résultat trouvé pour "${escapeHtml(searchInput.value)}".</div>`;
        }

        searchContent.innerHTML = html;
    }

    function escapeHtml(text) {
        if (!text) return '';
        const div = document.createElement('div');
        div.innerText = text;
        return div.innerHTML;
    }
});
</script>
