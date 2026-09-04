<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Candidatures de Bénévolat - AQUAMEN Admin</title>
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
              @include('pages.components.infoadmin')
            </div>
          </nav>
        </div>

        <div class="container">
          <div class="page-inner py-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
              <div>
                <h3 class="fw-bold mb-1"><i class="fas fa-hands-helping text-info me-2"></i>Candidatures de Bénévolat</h3>
                <p class="text-muted mb-0">Consultez et répondez aux citoyens qui souhaitent s'engager bénévolement avec AQUAMEN.</p>
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
              <div class="card-header bg-dark text-white p-3 d-flex justify-content-between align-items-center" style="border-bottom: 3px solid #54b7e9;">
                <div class="card-title text-white fs-5 fw-bold mb-0">
                  <i class="fas fa-users me-2 text-info"></i>Liste des Demandes de Volontariat ({{ count($volunteers) }})
                </div>
              </div>
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                      <tr>
                        <th>Statut</th>
                        <th>Nom du Bénévole</th>
                        <th>E-mail</th>
                        <th>Téléphone</th>
                        <th>Motivation / Message</th>
                        <th>Date</th>
                        <th class="text-end">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse($volunteers as $vol)
                        <tr class="{{ !$vol->is_read ? 'table-info fw-semibold' : '' }}">
                          <td>
                            @if(!$vol->is_read)
                              <span class="badge bg-info text-dark px-2 py-1"><i class="fas fa-clock me-1"></i>Nouveau</span>
                            @else
                              <span class="badge bg-secondary px-2 py-1"><i class="fas fa-check me-1"></i>Traité</span>
                            @endif
                          </td>
                          <td class="fw-bold text-dark">
                            <div class="d-flex align-items-center">
                              <div class="avatar-sm me-2">
                                <span class="avatar-title rounded-circle bg-dark text-info fw-bold">
                                  {{ strtoupper(substr($vol->name, 0, 2)) }}
                                </span>
                              </div>
                              {{ $vol->name }}
                            </div>
                          </td>
                          <td><a href="mailto:{{ $vol->email }}" class="text-decoration-none fw-bold text-primary">{{ $vol->email }}</a></td>
                          <td><span class="badge bg-light text-dark border">{{ $vol->phone ?? 'Non fourni' }}</span></td>
                          <td style="max-width: 300px; font-size: 13px;">{{ $vol->message }}</td>
                          <td style="font-size: 12px;" class="text-muted">{{ $vol->created_at ? $vol->created_at->format('d/m/Y H:i') : '-' }}</td>
                          <td class="text-end">
                            @if(!$vol->is_read)
                              <form action="{{ route('admin.volontaires.read', $vol->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-sm btn-success me-1" title="Marquer comme lu">
                                  <i class="fas fa-check"></i> Lu
                                </button>
                              </form>
                            @endif
                            <a href="mailto:{{ $vol->email }}?subject=Suite%20%C3%A0%20votre%20candidature%20de%20b%C3%A9n%C3%A9volat%20-%20AQUAMEN" class="btn btn-sm btn-info text-dark me-1" title="Répondre par Mail">
                              <i class="fas fa-envelope"></i> Répondre
                            </a>
                            <form action="{{ route('admin.volontaires.delete', $vol->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette candidature ?');">
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
                            <i class="fas fa-hands-helping text-info fs-2 d-block mb-2"></i>
                            Aucune candidature de bénévolat enregistrée pour le moment.
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
            <div class="copyright">AQUAMEN Association - Candidatures Bénévolat</div>
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
