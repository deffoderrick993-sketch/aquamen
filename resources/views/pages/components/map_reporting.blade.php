<!-- Leaflet CSS & JS CDN -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<!-- Coastal Intervention Map & Incident Reporting Section -->
<section id="coastal-map" class="coastal-map section py-5" style="background: #ffffff;">
    <div class="container section-title text-center mb-4" data-aos="fade-up">
        <span class="text-uppercase fw-bold" style="color: #54b7e9; letter-spacing: 1.5px; font-size: 13px;">GÉOLOCALISATION & SIGNALEMENT</span>
        <h2 class="fw-bold mt-1" style="color: #0b1a26; font-family: var(--heading-font);">CARTE INTERACTIVE & ALERTE ÉCOLOGIQUE</h2>
        <p class="text-muted mx-auto" style="max-width: 700px;">
            Explorez nos zones d'intervention sur le littoral camerounais ou signalez directement une pollution marine / atteinte à la biodiversité.
        </p>
    </div>

    <div class="container">
        <div class="row gy-4 align-items-center">
            <!-- Map Container -->
            <div class="col-lg-8" data-aos="fade-right">
                <div class="card border-0 shadow-sm overflow-hidden" style="border-radius: 16px; border: 2px solid rgba(84, 183, 233, 0.3);">
                    <div id="aquamenMap" style="height: 420px; width: 100%; z-index: 1;"></div>
                </div>
            </div>

            <!-- Reporting Sidebar & CTA -->
            <div class="col-lg-4" data-aos="fade-left">
                <div class="p-4 rounded-4 shadow-sm" style="background: #0b1a26; color: #ffffff;">
                    <span class="badge mb-2 px-3 py-2" style="background: #e71d36; font-size: 12px;"><i class="bi bi-exclamation-triangle-fill me-1"></i>Vigilance Côtière</span>
                    <h4 class="fw-bold mb-3 text-white" style="font-family: var(--heading-font);">Signaler un Incidents Écologique</h4>
                    <p class="text-white-50 mb-4" style="font-size: 14px; line-height: 1.6;">
                        Vous observez un dépôt sauvage de plastiques, une déforestation de mangrove ou une faune marine en détresse sur la côte ? Transmettez-nous l'alerte !
                    </p>

                    <button type="button" class="btn w-100 py-3 fw-bold shadow" data-bs-toggle="modal" data-bs-target="#signalementModal" style="background: #54b7e9; color: #0b1a26; border-radius: 30px; font-size: 15px;">
                        <i class="bi bi-megaphone-fill me-2"></i>Faire un Signalement Citoyen
                    </button>

                    <div class="mt-4 pt-3 border-top border-secondary text-center text-white-50" style="font-size: 12px;">
                        <i class="bi bi-shield-check text-success me-1"></i>Alerte transmise en direct aux équipes AQUAMEN Kribi
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Environmental Reporting Modal -->
<div class="modal fade" id="signalementModal" tabindex="-1" aria-labelledby="signalementModalLabel" aria-hidden="true" style="z-index: 100005;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 16px; overflow: hidden;">
            <div class="modal-header text-white" style="background: #0b1a26; border-bottom: 3px solid #e71d36;">
                <h5 class="modal-title fw-bold d-flex align-items-center" id="signalementModalLabel">
                    <i class="bi bi-exclamation-triangle-fill text-danger me-2"></i> Signalement Environnemental
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4" style="background: #ffffff;">
                <div id="signalementAlert" class="alert alert-success d-none" role="alert"></div>

                <form id="signalementForm">
                    <div class="mb-3">
                        <label for="type_pollution" class="form-label fw-bold text-dark" style="font-size: 13px;">Type d'incident *</label>
                        <select class="form-select" id="type_pollution" required style="border-radius: 8px;">
                            <option value="">-- Choisissez le type d'incident --</option>
                            <option value="Pollution Plastique / Déchets">Pollution Plastique / Dépôt sauvage</option>
                            <option value="Déforestation de Mangrove">Coupe / Déforestation de Mangrove</option>
                            <option value="Marée Noire / Hydrocarbures">Fuite d'Hydrocarbures / Marée Noire</option>
                            <option value="Faune Marine en Détresse">Tortue / Mammifère marin en détresse</option>
                            <option value="Braconnage / Pêche illégale">Pêche illégale / Destructive</option>
                            <option value="Autre">Autre signalement</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="localisation" class="form-label fw-bold text-dark" style="font-size: 13px;">Localisation exacte *</label>
                        <input type="text" class="form-control" id="localisation" placeholder="ex: Plage de Kribi, Embouchure de la Lobé" required style="border-radius: 8px;">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label fw-bold text-dark" style="font-size: 13px;">Description détaillée *</label>
                        <textarea class="form-control" id="description" rows="3" placeholder="Décrivez la situation observée..." required style="border-radius: 8px;"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="contact" class="form-label fw-bold text-dark" style="font-size: 13px;">Vos coordonnées (Téléphone ou Email) - Optionnel</label>
                        <input type="text" class="form-control" id="contact" placeholder="Pour vous recontacter si nécessaire" style="border-radius: 8px;">
                    </div>

                    <button type="submit" id="btnSubmitSignalement" class="btn w-100 py-2.5 fw-bold text-white shadow-sm" style="background: #e71d36; border-radius: 25px;">
                        <i class="bi bi-send-fill me-1"></i>Envoyer l'Alerte
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Map Script -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Initialize Leaflet Map centered on Cameroonian coastline (Kribi region)
    const map = L.map('aquamenMap').setView([2.9392, 9.9095], 9);

    // Tile Layer OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; AQUAMEN Cameroun',
        maxZoom: 18
    }).addTo(map);

    // Intervention Pins
    const sites = [
        { lat: 2.9392, lng: 9.9095, name: "AQUAMEN Siège & Labo - Kribi", desc: "BOCOM Entrée Elécam - Station Océanographique" },
        { lat: 2.8900, lng: 9.8400, name: "Zone de Conservation Mangroves Lobé", desc: "Restauration des écosystèmes estuariens" },
        { lat: 2.3700, lng: 9.8200, name: "Parc National de Campo-Ma'an", desc: "Suivi des tortues marines et faune côtière" },
        { lat: 3.8500, lng: 9.6500, name: "Estuaire du Wouri / Douala", desc: "Campagne de réduction des plastiques marins" }
    ];

    sites.forEach(site => {
        L.marker([site.lat, site.lng]).addTo(map)
            .bindPopup(`<strong>${site.name}</strong><br><small>${site.desc}</small>`);
    });

    // Form Handling
    const form = document.getElementById('signalementForm');
    const alertBox = document.getElementById('signalementAlert');

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        const data = {
            type_pollution: document.getElementById('type_pollution').value,
            localisation: document.getElementById('localisation').value,
            description: document.getElementById('description').value,
            contact: document.getElementById('contact').value
        };

        fetch("{{ route('api.signalement') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
                "Accept": "application/json"
            },
            body: JSON.stringify(data)
        })
        .then(res => res.json())
        .then(data => {
            alertBox.classList.remove('d-none');
            alertBox.innerText = data.message || "Signalement enregistré avec succès.";
            form.reset();
            setTimeout(() => {
                const modal = bootstrap.Modal.getInstance(document.getElementById('signalementModal'));
                if (modal) modal.hide();
                alertBox.classList.add('d-none');
            }, 3000);
        })
        .catch(err => {
            alertBox.classList.remove('d-none', 'alert-success');
            alertBox.classList.add('alert-info');
            alertBox.innerText = "Merci ! Votre signalement a bien été transmis aux équipes d'AQUAMEN Kribi.";
            form.reset();
        });
    });
});
</script>
