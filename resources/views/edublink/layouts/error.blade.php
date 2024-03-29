<!DOCTYPE html>
<html lang="en">

@include('edublink.partials.head')

<body class="sticky-header">
    <div id="main-wrapper" class="main-wrapper">
        @include('edublink.partials.header')

        <!--=====================================-->
        <!--=        404 Area Start            =-->
        <!--=====================================-->
        <section class="section-gap-equal error-page-area">
            <div class="container">
                <div class="edu-error">
                    <div class="thumbnail">
                        <img src="{{ asset('assets/images/others/404.png') }}" alt="404 Error">
                        <ul class="shape-group">
                            <li class="shape-1 scene">
                                <img data-depth="2" src="{{ asset('assets/images/about/shape-25.png') }}" alt="Shape">

                            </li>
                            <li class="shape-2 scene">
                                <img data-depth="-2" src="{{ asset('assets/images/about/shape-15.png') }}" alt="Shape">
                            </li>
                            <li class="shape-3 scene">
                                <img data-depth="2" src="{{ asset('assets/images/about/shape-13.png') }}" alt="Shape">
                            </li>
                            <li class="shape-4 scene">
                                <img data-depth="-2" src="{{ asset('assets/images/counterup/shape-02.png') }}"
                                    alt="Shape">
                            </li>
                        </ul>
                    </div>
                    <div class="content">
                        <h2 class="title">@yield('code') - @yield('message')</h2>
                        {{-- <h4 class="subtitle">The page you are looking for does not exist.</h4> --}}
                        <a href="{{ route('home.index') }}" class="edu-btn"><i class="icon-west"></i>Back to
                            Homepage</a>
                    </div>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-1">
                    <img src="{{ asset('assets/images/others/map-shape-2.png') }}" alt="Shape">
                </li>
            </ul>
        </section>

        @include('edublink.partials.footer')
    </div>

    @include('edublink.partials.scripts')
</body>

</html>