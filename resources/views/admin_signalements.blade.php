<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Signalements Écologiques - AQUAMEN Admin</title>
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
          sessionStoragefonts = true;
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
              @include('pages.components.infoadmin')
            </div>
          </nav>
        </div>

        <div class="container">
          <div class="page-inner py-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
              <div>
                <h3 class="fw-bold mb-1"><i class="fas fa-exclamation-triangle text-danger me-2"></i>Signalements Écologiques Citoyens</h3>
                <p class="text-muted mb-0">Consultez et traitez les alertes environnementales émises par les visiteurs et riverains du littoral.</p>
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

            <div class="card card-round shadow-sm border-0">
              <div class="card-header bg-dark text-white p-3 d-flex justify-content-between align-items-center" style="border-bottom: 3px solid #e71d36;">
                <div class="card-title text-white fs-5 fw-bold mb-0">
                  <i class="fas fa-list me-2 text-danger"></i>Liste des Alertes Récentes ({{ count($signalements) }})
                </div>
              </div>
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                      <tr>
                        <th>Statut</th>
                        <th>Type d'Incident</th>
                        <th>Localisation</th>
                        <th>Description</th>
                        <th>Contact Émetteur</th>
                        <th>Date & Heure</th>
                        <th class="text-end">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse($signalements as $sig)
                        <tr class="{{ !$sig->is_read ? 'table-warning fw-semibold' : '' }}">
                          <td>
                            @if(!$sig->is_read)
                              <span class="badge bg-danger px-2 py-1"><i class="fas fa-bell me-1"></i>Nouveau</span>
                            @else
                              <span class="badge bg-secondary px-2 py-1"><i class="fas fa-check me-1"></i>Traité</span>
                            @endif
                          </td>
                          <td class="fw-bold text-dark">{{ $sig->type_pollution }}</td>
                          <td><i class="fas fa-map-marker-alt text-danger me-1"></i>{{ $sig->localisation }}</td>
                          <td style="max-width: 280px; font-size: 13px;">{{ $sig->description }}</td>
                          <td><span class="badge bg-light text-dark border">{{ $sig->contact ?? 'Anonyme' }}</span></td>
                          <td style="font-size: 12px;" class="text-muted">{{ $sig->created_at ? $sig->created_at->format('d/m/Y H:i') : '-' }}</td>
                          <td class="text-end">
                            @if(!$sig->is_read)
                              <form action="{{ route('admin.signalements.read', $sig->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-sm btn-success me-1" title="Marquer comme lu/traité">
                                  <i class="fas fa-check"></i> Lu
                                </button>
                              </form>
                            @endif
                            <form action="{{ route('admin.signalements.delete', $sig->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce signalement ?');">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-icon btn-link btn-danger btn-sm" title="Supprimer">
                                <i class="fa fa-times fs-5"></i>
                              </button>
                            </form>
                          </td>
                        </tr>
                      @empty
                        <tr>
                          <td colspan="7" class="text-center text-muted py-4">
                            <i class="fas fa-check-circle text-success fs-2 d-block mb-2"></i>
                            Aucun signalement écologique enregistré pour le moment.
                          </td>
                        </tr>
                      @endforelse
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        <footer class="footer">
          <div class="container-fluid d-flex justify-content-between">
            <div class="copyright">AQUAMEN Association - Signalements Citoyens</div>
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
