<div class="sidebar" data-background-color="dark">
  <div class="sidebar-logo">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="dark">
      <a href="{{route('admin')}}" class="logo d-flex align-items-center">
        <img
          src="{{asset('assets/img/aquamen.png')}}"
          alt="AQUAMEN Admin Logo"
          class="navbar-brand animate__animated animate__pulse animate__infinite"
          style="max-height: 48px; filter: drop-shadow(0 0 8px rgba(84,183,233,0.5));"
        />
        <span class="ms-2 fw-bold text-white fs-5" style="letter-spacing: 1px;">AQUAMEN</span>
      </a>
      <div class="nav-toggle ms-auto">
        <button class="btn btn-toggle toggle-sidebar">
          <i class="gg-menu-right"></i>
        </button>
        <button class="btn btn-toggle sidenav-toggler">
          <i class="gg-menu-left"></i>
        </button>
      </div>
      <button class="topbar-toggler more">
        <i class="gg-more-vertical-alt"></i>
      </button>
    </div>
    <!-- End Logo Header -->
  </div>

  <div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content p-3">
      <ul class="nav nav-secondary">
        
        <li class="nav-item {{ request()->routeIs('admin') || request()->routeIs('dashboard') ? 'active' : '' }} mb-2">
          <a href="{{route('admin')}}" class="d-flex align-items-center">
            <i class="fas fa-home me-2"></i>
            <p class="mb-0 fw-bold">Tableau de Bord</p>
          </a>
        </li>

        <li class="nav-section my-2">
          <span class="sidebar-mini-icon">
            <i class="fa fa-ellipsis-h"></i>
          </span>
          <h4 class="text-section text-uppercase text-muted" style="font-size: 11px; letter-spacing: 1px;">Gestion du Contenu</h4>
        </li>

        <!-- Projects -->
        <li class="nav-item {{ request()->routeIs('addactivite') ? 'active' : '' }} mb-1">
          <a href="{{route('addactivite')}}">
            <i class="fas fa-plus-circle text-info"></i>
            <p class="mb-0">Ajouter Projet</p>
          </a>
        </li>

        <li class="nav-item {{ request()->routeIs('editactivite') ? 'active' : '' }} mb-1">
          <a href="{{route('editactivite')}}">
            <i class="fas fa-tasks text-warning"></i>
            <p class="mb-0">Gérer les Projets</p>
          </a>
        </li>

        <!-- Members -->
        <li class="nav-item {{ request()->routeIs('addmembre') ? 'active' : '' }} mb-1">
          <a href="{{route('addmembre')}}">
            <i class="fas fa-user-plus text-success"></i>
            <p class="mb-0">Ajouter Membre</p>
          </a>
        </li>

        <li class="nav-item {{ request()->routeIs('membreedit') ? 'active' : '' }} mb-1">
          <a href="{{route('membreedit')}}">
            <i class="fas fa-users-cog text-primary"></i>
            <p class="mb-0">Gérer les Membres</p>
          </a>
        </li>

        <!-- Gallery & Media -->
        <li class="nav-item {{ request()->routeIs('galleryadd') ? 'active' : '' }} mb-1">
          <a href="{{route('galleryadd')}}">
            <i class="fas fa-photo-video text-danger"></i>
            <p class="mb-0">Galerie Photos & Vidéos</p>
          </a>
        </li>

        <!-- Documents & Reports -->
        <li class="nav-item {{ request()->routeIs('addraport') ? 'active' : '' }} mb-1">
          <a href="{{route('addraport')}}">
            <i class="fas fa-file-pdf text-warning"></i>
            <p class="mb-0">Ajouter Rapport</p>
          </a>
        </li>

        <!-- Articles -->
        <li class="nav-item {{ request()->routeIs('articles') ? 'active' : '' }} mb-1">
          <a href="{{route('articles')}}">
            <i class="fas fa-newspaper text-info"></i>
            <p class="mb-0">Publier un Article</p>
          </a>
        </li>

        <!-- Témoignages -->
        <li class="nav-item {{ request()->routeIs('admin.testimonials') ? 'active' : '' }} mb-1">
          <a href="{{route('admin.testimonials')}}">
            <i class="fas fa-quote-left text-info"></i>
            <p class="mb-0">Gérer Témoignages</p>
          </a>
        </li>

        <li class="nav-section my-2">
          <h4 class="text-section text-uppercase text-muted" style="font-size: 11px; letter-spacing: 1px;">Sécurité & Alertes</h4>
        </li>

        <!-- Signalements Citoyens -->
        <li class="nav-item {{ request()->routeIs('admin.signalements') ? 'active' : '' }} mb-1">
          <a href="{{route('admin.signalements')}}">
            <i class="fas fa-exclamation-triangle text-danger"></i>
            <p class="mb-0">Signalements Citoyens</p>
          </a>
        </li>

        <!-- Candidatures Bénévolat -->
        <li class="nav-item {{ request()->routeIs('admin.volontaires') ? 'active' : '' }} mb-1">
          <a href="{{route('admin.volontaires')}}">
            <i class="fas fa-hands-helping text-info"></i>
            <p class="mb-0">Candidatures Bénévolat</p>
          </a>
        </li>

        <li class="nav-item {{ request()->routeIs('admin.add_admin') ? 'active' : '' }} mb-1">
          <a href="{{route('admin.add_admin')}}">
            <i class="fas fa-user-shield text-danger"></i>
            <p class="mb-0">Ajouter un Admin</p>
          </a>
        </li>

        <li class="nav-item {{ request()->routeIs('admin.alerts') ? 'active' : '' }} mb-1">
          <a href="{{route('admin.alerts')}}">
            <i class="fas fa-bell text-warning"></i>
            <p class="mb-0">Diffuser une Alerte</p>
          </a>
        </li>

        <li class="nav-section my-2">
          <h4 class="text-section text-uppercase text-muted" style="font-size: 11px; letter-spacing: 1px;">Navigation Site</h4>
        </li>

        <li class="nav-item mb-1">
          <a href="{{route('user')}}" target="_blank">
            <i class="fas fa-external-link-alt text-light"></i>
            <p class="mb-0">Voir le Site Public</p>
          </a>
        </li>

      </ul>
    </div>
  </div>
</div>
