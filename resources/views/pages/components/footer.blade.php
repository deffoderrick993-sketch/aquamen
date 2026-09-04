<footer id="footer" class="footer dark-background pt-5 pb-4">
  <div class="container footer-top">

    <!-- Section principale -->
    <div class="row gy-5 justify-content-between">

      <!-- Logo AQUAMEN -->
      <div class="col-lg-4 col-md-6 footer-about d-flex flex-column align-items-center align-items-md-start">
        <a href="{{route('admin')}}" class="logo d-flex align-items-center mb-3">
          <img src="{{asset('assets/img/aquamen.png')}}" alt="Aquamen Logo" class="img-fluid" style="max-height: 80px;">
          <span style="color: var(--accent-color); font-size: 24px; font-weight: 700;" class="ms-2">AQUAMEN</span>
        </a>
        <p class="text-white" style="font-size: 14px; color: #ffffff !important;">Association pour la Gestion Environnementale Aquatique. Dédiée à la conservation et à la gestion durable des ressources aquatiques de la côte camerounaise.</p>
        <div class="social-links d-flex mt-3">
          <a href="https://www.facebook.com/profile.php?id=61556443599371" target="_blank"><i class="bi bi-facebook"></i></a>
          <a href="https://www.linkedin.com/company/aquatic-environmental-management-association-aquamen/" target="_blank"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <!-- Liens utiles -->
      <div class="col-lg-4 col-md-6 footer-links">
        <h4 style="color: var(--accent-color);">Useful Links</h4>
        <ul>
          <li><i class="bi bi-chevron-right me-1" style="color: var(--accent-color);"></i> <a href="{{route('user')}}">Home</a></li>
          <li><i class="bi bi-chevron-right me-1" style="color: var(--accent-color);"></i> <a href="{{route('aboutus')}}">About Us</a></li>
          <li><i class="bi bi-chevron-right me-1" style="color: var(--accent-color);"></i> <a href="{{route('activite')}}">Projects</a></li>
          <li><i class="bi bi-chevron-right me-1" style="color: var(--accent-color);"></i> <a href="{{route('volontariat')}}">Volunteering</a></li>
          <li><i class="bi bi-chevron-right me-1" style="color: var(--accent-color);"></i> <a href="{{route('Aquarticle')}}">Articles</a></li>
          <li><i class="bi bi-chevron-right me-1" style="color: var(--accent-color);"></i> <a href="{{route('rapport')}}">Documents</a></li>
          <li><i class="bi bi-chevron-right me-1" style="color: var(--accent-color);"></i> <a href="{{route('gallerys')}}">Gallery</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="col-lg-4 col-md-6 footer-contact">
        <h4 style="color: var(--accent-color);">Contact Us</h4>
        <p class="mt-3"><i class="bi bi-geo-alt me-2" style="color: var(--accent-color);"></i> BOCOM, Entrée Elécam, Kribi-Cameroun</p>
        <p class="mt-2"><i class="bi bi-telephone me-2" style="color: var(--accent-color);"></i> <a href="tel:+237697497892" style="color: var(--default-color);">+237 697 49 78 92</a></p>
        <p class="mt-2"><i class="bi bi-envelope me-2" style="color: var(--accent-color);"></i> <a href="mailto:contact@aquamen.org" style="color: var(--default-color);">contact@aquamen.org</a></p>
      </div>

    </div>

    <!-- Images décoratives : tortue, poisson, corail -->
    <div class="d-flex justify-content-center align-items-center gap-5 mt-5 flex-wrap py-3" style="border-top: 1px solid rgba(205, 164, 94, 0.2); border-bottom: 1px solid rgba(205, 164, 94, 0.2);">
      <img src="{{asset('img/tor.png')}}" alt="Turtle Icon" style="max-height: 100px; filter: drop-shadow(0 0 8px rgba(205, 164, 94, 0.3));" class="img-fluid">
      <img src="{{asset('img/poi.png')}}" alt="Fish Icon" style="max-height: 100px; filter: drop-shadow(0 0 8px rgba(205, 164, 94, 0.3));" class="img-fluid">
      <img src="{{asset('img/etoile.png')}}" alt="Starfish Icon" style="max-height: 100px; filter: drop-shadow(0 0 8px rgba(205, 164, 94, 0.3));" class="img-fluid">
    </div>

    <!-- Logos partenaires -->
    <div class="text-center mt-5">
      <h4 style="color: var(--accent-color); font-family: var(--heading-font);" class="mb-4">OUR PARTNERS</h4>
      <div class="d-flex flex-wrap justify-content-center align-items-center gap-4 p-3" style="background: rgba(255,255,255,0.02); border-radius: 8px;">
        <a href="https://tubeawu.org/" target="_blank">
          <img src="{{asset('img/6.png')}}" alt="Partner Tubeawu" style="max-height: 60px;" class="img-fluid">
        </a>
        <a href="https://ammco.org/" target="_blank">
          <img src="{{asset('img/7.png')}}" alt="Partner AMMCO" style="max-height: 120px;" class="img-fluid">
        </a>
        <a href="https://cameroonwcs.org/" target="_blank">
          <img src="{{asset('img/8.jpg')}}" alt="Partner WCS" style="max-height: 60px;" class="img-fluid">
        </a>
        <a href="https://wa.me/+237696078233?text=hello%20CED" target="_blank">
          <img src="{{asset('img/9.png')}}" alt="Partner CED" style="max-height: 60px;" class="img-fluid">
        </a>
        <a href="https://www.thegef.org/what-we-do/topics/gef-small-grants-programme" target="_blank">
          <img src="{{asset('img/GEF.jpeg')}}" alt="Partner GEF" style="max-height: 60px;" class="img-fluid">
        </a>
        <a href="https://www.francophonie.org/" target="_blank">
          <img src="{{asset('img/Franco.jpeg')}}" alt="Partner OIF" style="max-height: 60px;" class="img-fluid">
        </a>
        <a href="https://www.francophonie.org/" target="_blank">
          <img src="{{asset('img/log1.png')}}" alt="Partner Log1" style="max-height: 60px;" class="img-fluid">
        </a>
        <a href="https://www.francophonie.org/" target="_blank">
          <img src="{{asset('img/log2.png')}}" alt="Partner Log2" style="max-height: 60px;" class="img-fluid">
        </a>
      </div>
    </div>

    <!-- Bas de page -->
    <div class="copyright text-center mt-4 pt-3">
      <p>© 2025 <strong style="color: var(--accent-color);">AQUAMEN</strong>. All rights reserved.</p>
    </div>

  </div>
</footer>

<!-- Floating Donation Action Button (FAB with Heart Icon above scroll-top) -->
<button type="button" class="floating-donation-btn shadow-lg" data-bs-toggle="modal" data-bs-target="#donationModal" aria-label="Make a Donation">
  <i class="bi bi-heart-fill"></i>
  <span>Faire un Don</span>
</button>

<!-- Floating Chatbot Action Button & Widget Component -->
@include('pages.components.chatbot')


<!-- Donation Modal -->
<div class="modal fade" id="donationModal" tabindex="-1" aria-labelledby="donationModalLabel" aria-hidden="true" style="z-index: 100000;">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="border-radius: 16px; border: none; overflow: hidden; box-shadow: 0 20px 50px rgba(0,0,0,0.3);">
      <div class="modal-header text-white" style="background: #0b1a26; border-bottom: 2px solid #54b7e9;">
        <h5 class="modal-title fw-bold d-flex align-items-center" id="donationModalLabel">
          <i class="bi bi-heart-fill text-danger me-2 fs-4"></i> Soutenir nos Actions - AQUAMEN
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4 text-dark" style="background: #ffffff;">
        <p class="mb-3 text-secondary" style="font-size: 15px;">
          Votre contribution permet de financer nos projets de recherche scientifique et la protection des écosystèmes marins et côtiers au Cameroun.
        </p>

        <!-- PayPal Donation Option -->
        <div class="p-3 mb-3 text-center" style="background: #fff8e7; border-left: 4px solid #ffc439; border-radius: 8px;">
          <h6 class="fw-bold mb-2" style="color: #003087;"><i class="bi bi-paypal me-2" style="color: #003087;"></i>Payer par PayPal ou Carte Bancaire</h6>
          <p class="mb-2 text-dark" style="font-size: 13px;">Faites un don rapide et sécurisé en ligne via votre compte PayPal ou carte bancaire.</p>
          <a href="https://www.paypal.me/Dadjeu/10" target="_blank" class="btn p-2 px-4 shadow-sm text-dark d-inline-flex flex-column align-items-center justify-content-center" style="background: #ffc439; border-radius: 30px; border: 1px solid #e0a800; font-size: 14px; text-decoration: none;">
            <img src="{{asset('img/paypal.jpg')}}" alt="PayPal Donation" width="110" class="img-fluid rounded mb-1">
            <span class="fw-bold" style="color: #003087;"><i class="bi bi-heart-fill text-danger me-1"></i>Faire un Don via PayPal</span>
          </a>
        </div>

        <div class="p-3 mb-3" style="background: #f4f8fb; border-left: 4px solid #54b7e9; border-radius: 6px;">
          <h6 class="fw-bold mb-2" style="color: #0b1a26;"><i class="bi bi-phone-fill me-2" style="color: #54b7e9;"></i>Mobile Money (Orange & MTN)</h6>
          <p class="mb-1 text-dark" style="font-size: 14px;"><strong>Téléphone :</strong> +237 697 49 78 92</p>
          <p class="mb-0 text-muted" style="font-size: 13px;">Nom du compte : AQUAMEN Association</p>
        </div>

        <div class="p-3 mb-3" style="background: #f4f8fb; border-left: 4px solid #e71d36; border-radius: 6px;">
          <h6 class="fw-bold mb-2" style="color: #0b1a26;"><i class="bi bi-bank me-2" style="color: #e71d36;"></i>Virement Bancaire & Contacts</h6>
          <p class="mb-1 text-dark" style="font-size: 14px;"><strong>Email :</strong> contact@aquamen.org</p>
          <p class="mb-0 text-muted" style="font-size: 13px;">Adresse : BOCOM, Entrée Elécam, Kribi-Cameroun</p>
        </div>
      </div>
      <div class="modal-footer justify-content-between" style="background: #f4f8fb; border-top: 1px solid #e9ecef;">
        <span class="text-muted" style="font-size: 13px;"><i class="bi bi-shield-check me-1 text-success"></i>Don Sécurisé & Direct</span>
        <button type="button" class="btn btn-secondary px-4 fw-bold" data-bs-dismiss="modal" style="border-radius: 20px;">Fermer</button>
      </div>
    </div>
  </div>
</div>

