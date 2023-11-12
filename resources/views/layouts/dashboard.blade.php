<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta12
* @link https://tabler.io
* Copyright 2018-2022 The Tabler Authors
* Copyright 2018-2022 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en" dir="{{ app()->isLocale('ar') ? 'rtl' : 'ltr' }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
{{-- START HEAD SECTION --}}
@include('layouts.includes.dashboard.head')
{{-- END HEAD SECTION --}}

<body class="layout-fluid">
    {{-- START SIDEBAR SECTION --}}
    @include('layouts.includes.dashboard.loading-page')
    {{-- END SIDEBAR SECTION --}}

    <div class="page">
        {{-- START SIDEBAR SECTION --}}
        @include('layouts.includes.dashboard.sidebar')
        {{-- END SIDEBAR SECTION --}}

        <div class="page-wrapper">
            {{-- START HEADER SECTION --}}
            @include('layouts.includes.dashboard.header')
            {{-- END HEADER SECTION --}}

            <!-- Page body -->
            <div class="page-body">
                <div class="container-xl">
                    <div class="row row-deck row-cards">
                        {{-- START ALERT SECTION --}}
                        @include('layouts.includes.dashboard.alerts')
                        {{-- END ALERT SECTION --}}

                        @yield('content')
                    </div>
                </div>
            </div>

            {{-- START FOOTER SECTION --}}
            @include('layouts.includes.dashboard.footer')
            {{-- END FOOTER SECTION --}}
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    {{-- START JAVASCRIPTS SECTION --}}
    @include('layouts.includes.dashboard.scripts')
    {{-- END JAVASCRIPTS SECTION --}}


    {{-- START MODALS SECTION --}}
    @include('layouts.includes.dashboard.modals')
    {{-- END MODALS SECTION --}}
</body>

</html>
