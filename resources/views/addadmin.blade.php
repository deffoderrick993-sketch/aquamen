<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Ajouter un Administrateur - AQUAMEN Admin</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="{{asset('assets/img/aquamen.png')}}" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{asset('assets/js/plugin/webfont/webfont.min.js')}}"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
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
                <img src="{{asset('assets/img/aquamen.png')}}" alt="navbar brand" class="navbar-brand" height="30" />
              </a>
              <div class="nav-toggle ms-auto">
                <button class="btn btn-toggle toggle-sidebar"><i class="gg-menu-right"></i></button>
                <button class="btn btn-toggle sidenav-toggler"><i class="gg-menu-left"></i></button>
              </div>
            </div>
          </div>

          <!-- Navbar Header -->
          <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
            <div class="container-fluid">
              <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                <li class="nav-item dropdown hidden-caret">
                  <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#" aria-expanded="false">
                    <div class="avatar-sm">
                      <img src="{{asset('assets/img/aquamen.png')}}" alt="..." class="avatar-img rounded-circle" />
                    </div>
                    <span class="profile-username">
                      <span class="fw-bold">{{ Auth::user()->name }}</span>
                    </span>
                  </a>
                  <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <div class="dropdown-user-scroll scrollbar-outer">
                      <li>
                        <div class="user-box">
                          <div class="avatar-lg"><img src="{{asset('assets/img/aquamen.png')}}" alt="image profile" class="avatar-img rounded" /></div>
                          <div class="u-text">
                            <h4>{{ Auth::user()->name }}</h4>
                            <p class="text-muted">{{ Auth::user()->email }}</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="dropdown-divider"></div>
                        <form method="POST" action="{{ route('logout') }}">
                          @csrf
                          <button type="submit" class="dropdown-item text-danger"><i class="fas fa-power-off me-2"></i>Déconnexion</button>
                        </form>
                      </li>
                    </div>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
        </div>

        <div class="container">
          <div class="page-inner py-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
              <div>
                <h3 class="fw-bold mb-1"><i class="fas fa-user-shield text-danger me-2"></i>Gestion des Administrateurs</h3>
                <p class="text-muted mb-0">Ajoutez de nouveaux administrateurs et suivez le statut de leur première connexion.</p>
              </div>
              <a href="{{route('admin')}}" class="btn btn-outline-secondary btn-round"><i class="fas fa-arrow-left me-1"></i>Retour au Dashboard</a>
            </div>

            <!-- Messages Alert -->
            @if(session('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            @if(session('error'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fas fa-exclamation-triangle me-2"></i>{{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            @if ($errors->any())
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul class="mb-0">
                  @foreach ($errors->all() as $error)
                    <li><i class="fas fa-exclamation-circle me-1"></i>{{ $error }}</li>
                  @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            <div class="row">
              <!-- Form Column -->
              <div class="col-lg-5 mb-4">
                <div class="card card-round shadow-sm border-0">
                  <div class="card-header bg-dark text-white p-3">
                    <div class="card-title text-white fs-5 fw-bold mb-0">
                      <i class="fas fa-plus-circle me-2 text-info"></i>Nouveau Compte Administrateur
                    </div>
                  </div>
                  <div class="card-body p-4">
                    <form action="{{ route('admin.store_admin') }}" method="POST">
                      @csrf
                      <div class="mb-3">
                        <label class="form-label fw-bold">Nom Complet *</label>
                        <input type="text" name="name" class="form-control" placeholder="ex: Dr. Paul Tchamba" required value="{{ old('name') }}" />
                      </div>

                      <div class="mb-3">
                        <label class="form-label fw-bold">Adresse Email *</label>
                        <input type="email" name="email" class="form-control" placeholder="ex: admin.paul@aquamen.org" required value="{{ old('email') }}" />
                      </div>

                      <div class="mb-3">
                        <label class="form-label fw-bold">Mot de passe temporaire *</label>
                        <input type="password" name="password" class="form-control" placeholder="Minimum 8 caractères" required />
                        <small class="form-text text-muted">Transmettez ce mot de passe temporaire à l'utilisateur.</small>
                      </div>

                      <div class="alert alert-warning border-0 d-flex align-items-start mb-4" style="background: rgba(255, 193, 7, 0.15); border-left: 4px solid #ffc107 !important;">
                        <i class="fas fa-lock text-warning fs-4 me-2 mt-1"></i>
                        <div style="font-size: 13px; color: #856404;">
                          <strong>Changement obligatoire :</strong> Lors de sa première connexion avec cet identifiant, l'administrateur sera <u>automatiquement redirigé</u> vers une page sécurisée pour remplacer ce mot de passe.
                        </div>
                      </div>

                      <button type="submit" class="btn btn-primary w-100 fw-bold py-2">
                        <i class="fas fa-user-plus me-1"></i>Créer le Compte Admin
                      </button>
                    </form>
                  </div>
                </div>
              </div>

              <!-- List Column -->
              <div class="col-lg-7">
                <div class="card card-round shadow-sm border-0">
                  <div class="card-header bg-dark text-white p-3 d-flex justify-content-between align-items-center">
                    <div class="card-title text-white fs-5 fw-bold mb-0">
                      <i class="fas fa-users-cog me-2 text-warning"></i>Liste des Administrateurs ({{ count($admins) }})
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                          <tr>
                            <th>Nom / Email</th>
                            <th>Statut Mot de Passe</th>
                            <th class="text-end">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($admins as $adm)
                            <tr>
                              <td>
                                <div class="d-flex align-items-center">
                                  <div class="avatar-sm me-2">
                                    <span class="avatar-title rounded-circle bg-dark text-info fw-bold">
                                      {{ strtoupper(substr($adm->name, 0, 2)) }}
                                    </span>
                                  </div>
                                  <div>
                                    <h6 class="fw-bold mb-0 text-dark">{{ $adm->name }}</h6>
                                    <small class="text-muted">{{ $adm->email }}</small>
                                  </div>
                                </div>
                              </td>
                              <td>
                                @if($adm->must_change_password)
                                  <span class="badge bg-warning text-dark px-2 py-1">
                                    <i class="fas fa-exclamation-triangle me-1"></i>1ère connexion requise
                                  </span>
                                @else
                                  <span class="badge bg-success px-2 py-1">
                                    <i class="fas fa-check-circle me-1"></i>Actif
                                  </span>
                                @endif
                              </td>
                              <td class="text-end">
                                @if(Auth::id() != $adm->id)
                                  <form action="{{ route('admin.delete_admin', $adm->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet administrateur ?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-icon btn-link btn-danger btn-sm" title="Supprimer">
                                      <i class="fa fa-times fs-5"></i>
                                    </button>
                                  </form>
                                @else
                                  <span class="badge bg-secondary">Vous</span>
                                @endif
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <footer class="footer">
          <div class="container-fluid d-flex justify-content-between">
            <div class="copyright">AQUAMEN Association - Gestion de la Sécurité</div>
          </div>
        </footer>
      </div>
    </div>

    <!-- Core JS Files -->
    <script src="{{asset('assets/js/core/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/kaiadmin.min.js')}}"></script>
  </body>
</html>
