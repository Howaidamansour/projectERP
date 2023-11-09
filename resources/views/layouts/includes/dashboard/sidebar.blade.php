<aside class="navbar navbar-vertical navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <h1 class="navbar-brand navbar-brand-autodark">
            <a href="/dashboard">
                <img src="{{ asset('assets/img/logo/logo-white.svg') }}" width="110" height="32" alt="Tabler" class="navbar-brand-image">
            </a>
        </h1>

        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="navbar-nav pt-lg-3">
                <li class="nav-item ">
                    <a class="nav-link" href="#">
                        <span class="nav-link-icon d-md-none d-lg-inline-block"> <i class="fa-solid fa-house"></i> </span>
                        <span class="nav-link-title"> Home </span>
                    </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="#">
                        <span class="nav-link-icon d-md-none d-lg-inline-block"> <i class="fa-solid fa-users"></i> </span>
                        <span class="nav-link-title"> @lang('user.employees') </span>
                    </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="#">
                        <span class="nav-link-icon d-md-none d-lg-inline-block"> <i class="fa-solid fa-box"></i> </span>
                        <span class="nav-link-title"> @lang('menu.units') </span>
                    </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="#">
                        <span class="nav-link-icon d-md-none d-lg-inline-block"> <i class="fa-solid fa-list"></i> </span>
                        <span class="nav-link-title"> @lang('menu.categories') </span>
                    </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="#">
                        <span class="nav-link-icon d-md-none d-lg-inline-block"> <i class="fa-solid fa-user-check"></i> </span>
                        <span class="nav-link-title"> @lang('menu.clients') </span>
                    </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="#">
                        <span class="nav-link-icon d-md-none d-lg-inline-block"> <i class="fa-solid fa-store"></i> </span>
                        <span class="nav-link-title"> @lang('menu.stores') </span>
                    </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="#">
                        <span class="nav-link-icon d-md-none d-lg-inline-block"> <i class="fa-solid fa-store"></i> </span>
                        <span class="nav-link-title"> @lang('menu.items') </span>
                    </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="#">
                        <span class="nav-link-icon d-md-none d-lg-inline-block"> <i class="fa-solid fa-print"></i> </span>
                        <span class="nav-link-title"> @lang('menu.print_settings') </span>
                    </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="#">
                        <span class="nav-link-icon d-md-none d-lg-inline-block"> <i class="fa-solid fa-print"></i> </span>
                        <span class="nav-link-title"> @lang('menu.invoices') </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>
