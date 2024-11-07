<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="{{ route('backend.dashboard') }}">
                        <img src="{{ asset('mazer') }}/assets/images/logo/logo.svg" alt="Logo" srcset="">
                    </a>
                </div>
                <div class="theme-toggle d-flex gap-2 align-items-center mt-2">
                    <div class="form-check form-switch fs-6"></div>
                </div>
                <div class="sidebar-toggler">
                    <a href="#" class="sidebar-hide d-none d-xl-block"><i class="bi bi-list bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>
                <li class="sidebar-item">
                    <a href="{{ route('backend.dashboard') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                @include('layouts.backend.data.feature-sidebar')
                <li class="sidebar-item">
                    <a href="{{ route('backend.config.index') }}" class='sidebar-link'>
                        <i class="bi bi-gear"></i>
                        <span>Config</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
