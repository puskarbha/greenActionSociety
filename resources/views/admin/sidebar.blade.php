<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="{{route('adminPage')}}"><img  src="{{asset('images/logo.jpg')}}" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="{{route('adminPage')}}"><img src="{{asset('images/logo.jpg')}}" alt="logo" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="/images/members/{{{Auth::user()->image}}}" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">{{{Auth::user()->name}}}</h5>
                        <span>Gold Member</span>
                    </div>
                </div>
                <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-primary"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-onepassword  text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-calendar-today text-success"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small" >Logout</p>
                        </div>
                    </a>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('adminPage')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#projects" aria-expanded="false" aria-controls="projects">
        <span class="menu-icon">
            <i class="mdi mdi-laptop"></i>
        </span>
                <span class="menu-title">Projects</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="projects">
                <ul class="nav flex-column sub-menu visible--item">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('manageProject')}}">Our Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('addProject')}}">Add Project</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#reviews" aria-expanded="false" aria-controls="reviews">
        <span class="menu-icon">
            <i class="mdi mdi-playlist-play"></i>
        </span>
                <span class="menu-title">Reviews</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="reviews">
                <ul class="nav flex-column sub-menu visible--item">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('manageReview')}}">All Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('addReview')}}">Add Review</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#members" aria-expanded="false" aria-controls="members">
        <span class="menu-icon">
            <i class="mdi mdi-contacts"></i>
        </span>
                <span class="menu-title">Members</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="members">
                <ul class="nav flex-column sub-menu visible--item">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Our Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('pendingMember')}}">Membership Request</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="#">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
                <span class="menu-title">Documentation</span>
            </a>
        </li>
    </ul>
</nav>
