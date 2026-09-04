@php
    try {
        $unreadSignalements = \App\Models\Signalement::where('is_read', false)->latest()->take(3)->get();
        $unreadSigCount = \App\Models\Signalement::where('is_read', false)->count();
    } catch (\Throwable $e) {
        $unreadSignalements = collect([]);
        $unreadSigCount = 0;
    }

    try {
        $unreadVolunteers = \App\Models\Volunteer::where('is_read', false)->latest()->take(3)->get();
        $unreadVolCount = \App\Models\Volunteer::where('is_read', false)->count();
    } catch (\Throwable $e) {
        $unreadVolunteers = collect([]);
        $unreadVolCount = 0;
    }

    try {
        $unreadSubscribers = \App\Models\Subscriber::where('is_read', false)->latest()->take(3)->get();
        $unreadSubCount = \App\Models\Subscriber::where('is_read', false)->count();
    } catch (\Throwable $e) {
        $unreadSubscribers = collect([]);
        $unreadSubCount = 0;
    }

    $totalUnreadCount = $unreadSigCount + $unreadVolCount + $unreadSubCount;
@endphp

<ul class="navbar-nav topbar-nav ms-md-auto align-items-center">

    <!-- Notification Bell Dropdown -->
    <li class="nav-item topbar-icon dropdown hidden-caret me-3">
        <a class="nav-link dropdown-toggle position-relative p-2" href="#" id="notifDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Notifications Panel Admin">
            <i class="fa fa-bell fs-4 text-warning"></i>
            @if($totalUnreadCount > 0)
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-danger p-1 fw-bold" style="font-size: 10px; min-width: 18px;">
                    {{ $totalUnreadCount }}
                </span>
            @endif
        </a>
        <ul class="dropdown-menu notif-box animated fadeIn dropdown-menu-end shadow-lg border-0" aria-labelledby="notifDropdown" style="width: 350px; border-radius: 12px; overflow: hidden;">
            <li>
                <div class="dropdown-title d-flex justify-content-between align-items-center p-3 text-white" style="background: #0b1a26; border-bottom: 3px solid #54b7e9;">
                    <span class="fw-bold"><i class="fa fa-bell text-warning me-1"></i>Notifications Panel</span>
                    <span class="badge bg-danger">{{ $totalUnreadCount }} nouvelle(s)</span>
                </div>
            </li>
            <li>
                <div class="notif-scroll scrollbar-outer" style="max-height: 320px; overflow-y: auto;">
                    <div class="notif-center p-2">
                        <!-- Unread Signalements -->
                        @foreach($unreadSignalements as $sig)
                            <a href="{{ route('admin.signalements') }}" class="d-flex align-items-start p-2 text-decoration-none border-bottom text-dark hover-bg-light" style="border-radius: 6px;">
                                <div class="notif-icon bg-danger text-white rounded-circle p-2 me-2 d-flex align-items-center justify-content-center" style="width: 34px; height: 34px; flex-shrink: 0;">
                                    <i class="fa fa-exclamation-triangle" style="font-size: 13px;"></i>
                                </div>
                                <div class="notif-content" style="font-size: 12px;">
                                    <span class="block fw-bold text-danger">Alerte: {{ $sig->type_pollution }}</span>
                                    <span class="time text-muted d-block">📍 {{ $sig->localisation }}</span>
                                    <span class="time text-secondary d-block" style="font-size: 10px;">{{ $sig->created_at ? $sig->created_at->diffForHumans() : '' }}</span>
                                </div>
                            </a>
                        @endforeach

                        <!-- Unread Volunteers -->
                        @foreach($unreadVolunteers as $vol)
                            <a href="{{ route('admin.volontaires') }}" class="d-flex align-items-start p-2 text-decoration-none border-bottom text-dark hover-bg-light" style="border-radius: 6px;">
                                <div class="notif-icon bg-info text-dark rounded-circle p-2 me-2 d-flex align-items-center justify-content-center" style="width: 34px; height: 34px; flex-shrink: 0;">
                                    <i class="fa fa-hands-helping" style="font-size: 13px;"></i>
                                </div>
                                <div class="notif-content" style="font-size: 12px;">
                                    <span class="block fw-bold text-info">Bénévolat: {{ $vol->name }}</span>
                                    <span class="time text-muted d-block">✉️ {{ $vol->email }}</span>
                                    <span class="time text-secondary d-block" style="font-size: 10px;">{{ $vol->created_at ? $vol->created_at->diffForHumans() : '' }}</span>
                                </div>
                            </a>
                        @endforeach

                        <!-- Unread Subscribers -->
                        @foreach($unreadSubscribers as $sub)
                            <a href="{{ route('admin.alerts') }}" class="d-flex align-items-start p-2 text-decoration-none border-bottom text-dark hover-bg-light" style="border-radius: 6px;">
                                <div class="notif-icon bg-warning text-dark rounded-circle p-2 me-2 d-flex align-items-center justify-content-center" style="width: 34px; height: 34px; flex-shrink: 0;">
                                    <i class="fa fa-envelope" style="font-size: 13px;"></i>
                                </div>
                                <div class="notif-content" style="font-size: 12px;">
                                    <span class="block fw-bold text-dark">Abonné Newsletter</span>
                                    <span class="time text-muted d-block">✉️ {{ $sub->email }}</span>
                                    <span class="time text-secondary d-block" style="font-size: 10px;">{{ $sub->created_at ? $sub->created_at->diffForHumans() : '' }}</span>
                                </div>
                            </a>
                        @endforeach

                        @if($totalUnreadCount == 0)
                            <div class="text-center text-muted p-3" style="font-size: 13px;">
                                <i class="fa fa-check-circle text-success me-1"></i> Aucune notification non-lue.
                            </div>
                        @endif
                    </div>
                </div>
            </li>
            <li>
                <div class="d-flex border-top text-center" style="font-size: 11px;">
                    <a class="w-33 p-2 text-primary fw-bold text-decoration-none border-end bg-light" href="{{ route('admin.signalements') }}">
                        Alertes ({{ $unreadSigCount }})
                    </a>
                    <a class="w-33 p-2 text-info fw-bold text-decoration-none border-end bg-light" href="{{ route('admin.volontaires') }}">
                        Bénévolat ({{ $unreadVolCount }})
                    </a>
                    <a class="w-34 p-2 text-danger fw-bold text-decoration-none bg-light" href="{{ route('admin.alerts') }}">
                        Abonnés ({{ $unreadSubCount }})
                    </a>
                </div>
            </li>
        </ul>
    </li>

    <!-- User Profile Dropdown -->
    <li class="nav-item topbar-user dropdown hidden-caret">
      <a
        class="dropdown-toggle profile-pic"
        data-bs-toggle="dropdown"
        href="#"
        aria-expanded="false"
      >
        <div class="avatar-sm">
            <span class="avatar-title rounded-circle bg-dark text-info fw-bold">
              {{ strtoupper(substr(Auth::user()->name, 0, 2)) }}
            </span>
        </div>
        <span class="profile-username">
          <span class="fw-bold">{{Auth::user()->name}}</span>
        </span>
      </a>
      <ul class="dropdown-menu dropdown-user animated fadeIn dropdown-menu-end shadow-lg">
        <div class="dropdown-user-scroll scrollbar-outer">
          <li>
            <div class="user-box p-3">
              <div class="avatar-lg me-2">
                <span class="avatar-title rounded-circle bg-dark text-info fw-bold fs-4">
                  {{ strtoupper(substr(Auth::user()->name, 0, 2)) }}
                </span>
              </div>
              <div class="u-text">
                <h4 class="mb-0 fw-bold">{{Auth::user()->name}}</h4>
                <p class="text-muted small mb-2">{{Auth::user()->email}}</p>
                <a href="{{route('profile.show')}}" class="btn btn-xs btn-secondary btn-sm"><i class="fa fa-user me-1"></i>Mon Profil</a>
              </div>
            </div>
          </li>
          <li>
            <div class="dropdown-divider"></div>
            <form action="{{route('logout')}}" method="post">
                @csrf
                <button type="submit" class="dropdown-item text-danger py-2"><i class="fa fa-power-off me-2"></i>Déconnexion</button>
            </form>
          </li>
        </div>
      </ul>
    </li>
</ul>
