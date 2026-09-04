<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Gestion des Témoignages - AQUAMEN Admin</title>
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
                <h3 class="fw-bold mb-1"><i class="fas fa-quote-left text-info me-2"></i>Gestion des Témoignages</h3>
                <p class="text-muted mb-0">Ajoutez et gérez les avis et photos des pêcheurs, chercheurs et partenaires affichés sur le carrousel.</p>
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
              <!-- Form Column: Create Testimonial -->
              <div class="col-lg-5 mb-4">
                <div class="card card-round shadow-sm border-0">
                  <div class="card-header bg-dark text-white p-3" style="border-bottom: 3px solid #54b7e9;">
                    <div class="card-title text-white fs-5 fw-bold mb-0">
                      <i class="fas fa-plus-circle me-2 text-info"></i>Nouveau Témoignage
                    </div>
                  </div>
                  <div class="card-body p-4">
                    <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="mb-3">
                        <label class="form-label fw-bold">Nom Complet *</label>
                        <input type="text" name="name" class="form-control" placeholder="ex: Jean-Pierre Nkoa" required value="{{ old('name') }}" />
                      </div>

                      <div class="mb-3">
                        <label class="form-label fw-bold">Rôle / Qualité *</label>
                        <input type="text" name="role_title" class="form-control" placeholder="ex: Représentant des Pêcheurs de Kribi" required value="{{ old('role_title') }}" />
                      </div>

                      <div class="mb-3">
                        <label class="form-label fw-bold">Photo d'illustration (Optionnel)</label>
                        <input type="file" name="image" class="form-control" accept="image/*" />
                        <small class="text-muted" style="font-size: 11px;">Formats acceptés : JPG, PNG, WEBP (Max: 4MB)</small>
                      </div>

                      <div class="mb-3">
                        <label class="form-label fw-bold">Nombre d'Étoiles *</label>
                        <select name="stars" class="form-select">
                          <option value="5">⭐⭐⭐⭐⭐ (5 étoiles)</option>
                          <option value="4">⭐⭐⭐⭐ (4 étoiles)</option>
                          <option value="3">⭐⭐⭐ (3 étoiles)</option>
                        </select>
                      </div>

                      <div class="mb-4">
                        <label class="form-label fw-bold">Citation / Témoignage *</label>
                        <textarea name="quote" class="form-control" rows="4" placeholder="Saisissez ici le texte du témoignage..." required>{{ old('quote') }}</textarea>
                      </div>

                      <button type="submit" class="btn btn-info text-dark w-100 fw-bold py-2.5 shadow-sm">
                        <i class="fas fa-save me-1"></i>Publier le Témoignage
                      </button>
                    </form>
                  </div>
                </div>
              </div>

              <!-- List Column: Testimonials List -->
              <div class="col-lg-7">
                <div class="card card-round shadow-sm border-0">
                  <div class="card-header bg-dark text-white p-3 d-flex justify-content-between align-items-center">
                    <div class="card-title text-white fs-5 fw-bold mb-0">
                      <i class="fas fa-list me-2 text-warning"></i>Témoignages en Ligne ({{ count($testimonials) }})
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                          <tr>
                            <th>Auteur</th>
                            <th>Note</th>
                            <th>Citation</th>
                            <th class="text-end">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse($testimonials as $testi)
                            <tr>
                              <td>
                                <div class="d-flex align-items-center">
                                  <div class="avatar-sm me-2">
                                    @if($testi->image)
                                      <img src="{{ asset($testi->image) }}" alt="{{ $testi->name }}" class="avatar-img rounded-circle object-fit-cover" style="width: 38px; height: 38px;" />
                                    @else
                                      <span class="avatar-title rounded-circle bg-dark text-info fw-bold">
                                        {{ $testi->initials ?? strtoupper(substr($testi->name, 0, 2)) }}
                                      </span>
                                    @endif
                                  </div>
                                  <div>
                                    <h6 class="fw-bold mb-0 text-dark">{{ $testi->name }}</h6>
                                    <small class="text-muted" style="font-size: 11px;">{{ $testi->role_title }}</small>
                                  </div>
                                </div>
                              </td>
                              <td class="text-warning">
                                @for($i = 0; $i < $testi->stars; $i++) ★ @endfor
                              </td>
                              <td style="max-width: 220px; font-size: 12px;" class="fst-italic text-secondary">
                                "{{ Str::limit($testi->quote, 80) }}"
                              </td>
                              <td class="text-end">
                                <form action="{{ route('admin.testimonials.delete', $testi->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce témoignage ?');">
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
                              <td colspan="4" class="text-center text-muted py-4">
                                <i class="fas fa-info-circle text-info fs-3 d-block mb-2"></i>
                                Aucun témoignage personnalisé pour le moment.
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
          </div>
        </div>

        <footer class="footer">
          <div class="container-fluid d-flex justify-content-between">
            <div class="copyright">AQUAMEN Association - Gestion des Témoignages</div>
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
