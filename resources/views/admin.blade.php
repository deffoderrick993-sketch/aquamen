<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>AQUAMEN - Tableau de Bord Administration</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="{{asset('assets/img/aquamen.png')}}" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{asset('assets/js/plugin/webfont/webfont.min.js')}}"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700", "Poppins:400,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["{{asset('assets/css/fonts.min.css')}}"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/plugins.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/kaiadmin.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/admin-magic.css')}}" />
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      @include('pages.components.admin.sidebar')
      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <div class="logo-header" data-background-color="dark">
              <a href="{{route('admin')}}" class="logo">
                <img src="{{asset('assets/img/aquamen.png')}}" alt="navbar brand" class="navbar-brand" height="35" />
              </a>
              <div class="nav-toggle">
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
          </div>

          <!-- Navbar Header -->
          <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
            <div class="container-fluid">
              <div class="d-flex align-items-center">
                <span class="badge px-3 py-2 rounded-pill text-uppercase" style="background: rgba(84, 183, 233, 0.15); color: #54b7e9; border: 1px solid #54b7e9; font-size: 12px; letter-spacing: 1px;">
                  <i class="fas fa-shield-alt me-1"></i> Panneau d'Administration
                </span>
              </div>
              @include('pages.components.infoadmin')
            </div>
          </nav>
          <!-- End Navbar -->
        </div>

        <div class="container">
          <div class="page-inner py-4">
            
            <!-- Magic Welcome Banner -->
            <div class="welcome-banner-magic mb-4 animate__animated animate__fadeInDown">
              <div class="row align-items-center">
                <div class="col-lg-8">
                  <h2 class="display-6 fw-bold mb-2 shimmer-text">
                    Bienvenue sur AQUAMEN Admin
                  </h2>
                  <p class="lead mb-0 text-light opacity-90" style="font-size: 16px;">
                    Gérez facilement les projets scientifiques, les membres de l'équipe, les publications et la galerie multimédia de l'association.
                  </p>
                </div>
                <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                  <a href="{{route('user')}}" target="_blank" class="btn btn-magic animate__animated animate__pulse animate__infinite">
                    <i class="fas fa-globe me-2"></i> Voir le Site Web
                  </a>
                </div>
              </div>
            </div>

            <!-- Magic Statistics Cards Row -->
            <div class="row gy-4 mb-4">

              <!-- Visiteurs Site Stat Card -->
              <div class="col-sm-6 col-md-4 col-lg-3 animate__animated animate__fadeInUp" style="animation-delay: 0.05s;">
                <div class="card card-magic p-3" style="border-bottom: 3px solid #54b7e9;">
                  <div class="d-flex align-items-center">
                    <div class="icon-magic me-3" style="background: #54b7e9;">
                      <i class="fas fa-chart-line"></i>
                    </div>
                    <div>
                      <p class="text-uppercase text-muted mb-0 fw-semibold" style="font-size: 11px; letter-spacing: 0.5px;">Visiteurs du Site</p>
                      <h3 class="fw-bold mb-0 text-dark" style="font-size: 24px;">{{ number_format($totalVisits ?? 0) }}</h3>
                      <small class="text-success fw-bold" style="font-size: 11px;"><i class="fas fa-arrow-up me-1"></i>{{ $todayVisits ?? 0 }} aujourd'hui</small>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Projets Stat Card -->
              <div class="col-sm-6 col-md-4 col-lg-3 animate__animated animate__fadeInUp" style="animation-delay: 0.1s;">
                <div class="card card-magic p-3">
                  <div class="d-flex align-items-center">
                    <div class="icon-magic me-3">
                      <i class="fas fa-project-diagram"></i>
                    </div>
                    <div>
                      <p class="text-uppercase text-muted mb-0 fw-semibold" style="font-size: 11px;">Projets Récents</p>
                      <h3 class="fw-bold mb-0 text-dark" style="font-size: 24px;">{{ $activite ?? 0 }}</h3>
                      <small class="text-muted" style="font-size: 11px;">Activités & terrain</small>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Membres Stat Card -->
              <div class="col-sm-6 col-md-4 col-lg-3 animate__animated animate__fadeInUp" style="animation-delay: 0.2s;">
                <div class="card card-magic p-3">
                  <div class="d-flex align-items-center">
                    <div class="icon-magic me-3" style="background: #2ec4b6;">
                      <i class="fas fa-users"></i>
                    </div>
                    <div>
                      <p class="text-uppercase text-muted mb-0 fw-semibold" style="font-size: 11px;">Membres Équipe</p>
                      <h3 class="fw-bold mb-0 text-dark" style="font-size: 24px;">{{ $membres ?? 0 }}</h3>
                      <small class="text-muted" style="font-size: 11px;">Membres enregistrés</small>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Rapports Stat Card -->
              <div class="col-sm-6 col-md-4 col-lg-3 animate__animated animate__fadeInUp" style="animation-delay: 0.3s;">
                <div class="card card-magic p-3">
                  <div class="d-flex align-items-center">
                    <div class="icon-magic me-3" style="background: #ff9f1c;">
                      <i class="fas fa-file-pdf"></i>
                    </div>
                    <div>
                      <p class="text-uppercase text-muted mb-0 fw-semibold" style="font-size: 11px;">Rapports PDF</p>
                      <h3 class="fw-bold mb-0 text-dark" style="font-size: 24px;">{{ $reports ?? 0 }}</h3>
                      <small class="text-muted" style="font-size: 11px;">Publications téléchargeables</small>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Abonnés Newsletter & Alertes Stat Card -->
              <div class="col-sm-6 col-md-4 col-lg-3 animate__animated animate__fadeInUp" style="animation-delay: 0.35s;">
                <div class="card card-magic p-3" style="border-bottom: 3px solid #e71d36;">
                  <div class="d-flex align-items-center">
                    <div class="icon-magic me-3" style="background: #e71d36;">
                      <i class="fas fa-bell"></i>
                    </div>
                    <div>
                      <p class="text-uppercase text-muted mb-0 fw-semibold" style="font-size: 11px;">Abonnés Alertes</p>
                      <h3 class="fw-bold mb-0 text-dark" style="font-size: 24px;">{{ $subscribersCount ?? 0 }}</h3>
                      <a href="{{ route('admin.alerts') }}" class="text-danger fw-bold" style="font-size: 11px; text-decoration: none;">Envoyer une alerte &rarr;</a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Candidatures Bénévolat Stat Card -->
              <div class="col-sm-6 col-md-4 col-lg-3 animate__animated animate__fadeInUp" style="animation-delay: 0.4s;">
                <div class="card card-magic p-3" style="border-bottom: 3px solid #54b7e9;">
                  <div class="d-flex align-items-center">
                    <div class="icon-magic me-3" style="background: #54b7e9;">
                      <i class="fas fa-hands-helping"></i>
                    </div>
                    <div>
                      <p class="text-uppercase text-muted mb-0 fw-semibold" style="font-size: 11px;">Bénévoles</p>
                      <h3 class="fw-bold mb-0 text-dark" style="font-size: 24px;">{{ $volunteersCount ?? 0 }}</h3>
                      <a href="{{ route('admin.volontaires') }}" class="text-info fw-bold" style="font-size: 11px; text-decoration: none;">Voir demandes &rarr;</a>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <!-- Magic Quick Actions Bar -->
            <div class="card card-magic p-4 mb-4 animate__animated animate__fadeInUp" style="animation-delay: 0.5s;">
              <h5 class="fw-bold mb-3 text-dark d-flex align-items-center">
                <i class="fas fa-bolt text-warning me-2"></i> Actions Rapides d'Administration
              </h5>
              <div class="d-flex flex-wrap gap-2">
                <a href="{{route('addactivite')}}" class="btn btn-outline-primary rounded-pill px-3 py-2 fw-semibold">
                  <i class="fas fa-plus-circle me-1"></i> Nouveau Projet
                </a>
                <a href="{{route('addmembre')}}" class="btn btn-outline-success rounded-pill px-3 py-2 fw-semibold">
                  <i class="fas fa-user-plus me-1"></i> Nouveau Membre
                </a>
                <a href="{{route('galleryadd')}}" class="btn btn-outline-danger rounded-pill px-3 py-2 fw-semibold">
                  <i class="fas fa-photo-video me-1"></i> Ajouter Médias (Photos/Vidéos)
                </a>
                <a href="{{route('addraport')}}" class="btn btn-outline-warning rounded-pill px-3 py-2 fw-semibold">
                  <i class="fas fa-file-upload me-1"></i> Téléverser Rapport
                </a>
                <a href="{{route('articles')}}" class="btn btn-outline-info rounded-pill px-3 py-2 fw-semibold">
                  <i class="fas fa-newspaper me-1"></i> Publier Article
                </a>
              </div>
            </div>

            <!-- Recent Projects Table / Overview -->
            <div class="row">
              <div class="col-md-12 animate__animated animate__fadeInUp" style="animation-delay: 0.6s;">
                <div class="card card-magic">
                  <div class="card-header bg-transparent d-flex align-items-center justify-content-between py-3">
                    <h5 class="fw-bold mb-0 text-dark">
                      <i class="fas fa-list-alt text-info me-2"></i> Derniers Projets Enregistrés
                    </h5>
                    <a href="{{route('editactivite')}}" class="btn btn-sm btn-label-info rounded-pill">
                      Gérer tous les projets <i class="fas fa-arrow-right ms-1"></i>
                    </a>
                  </div>
                  <div class="card-body">
                    @if(isset($recentActivites) && count($recentActivites) > 0)
                      <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                          <thead class="table-light">
                            <tr>
                              <th>Aperçu</th>
                              <th>Titre du Projet</th>
                              <th>Date de création</th>
                              <th class="text-end">Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($recentActivites as $act)
                            <tr>
                              <td style="width: 70px;">
                                <img src="{{asset('/images/'.$act->image)}}" alt="{{$act->name}}" class="rounded shadow-sm" style="width: 55px; height: 45px; object-fit: cover;">
                              </td>
                              <td class="fw-semibold text-dark">{{ $act->name }}</td>
                              <td class="text-muted small">{{ $act->created_at ? $act->created_at->format('d/m/Y') : 'N/A' }}</td>
                              <td class="text-end">
                                <a href="{{route('editoneactivite', $act->id)}}" class="btn btn-sm btn-outline-primary me-1">
                                  <i class="fas fa-edit"></i> Éditer
                                </a>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    @else
                      <div class="text-center py-4 text-muted">
                        <i class="fas fa-folder-open fa-3x mb-2 text-info opacity-50"></i>
                        <p class="mb-0">Aucun projet enregistré pour le moment.</p>
                        <a href="{{route('addactivite')}}" class="btn btn-sm btn-magic mt-2">Créer le premier projet</a>
                      </div>
                    @endif
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- Core JS Files -->
    <script src="{{asset('assets/js/core/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/kaiadmin.min.js')}}"></script>
  </body>
</html>
