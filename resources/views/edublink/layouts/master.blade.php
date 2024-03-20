<!DOCTYPE html>
<html lang="en">

@include('edublink.partials.head')

<body class="sticky-header">
    <div id="main-wrapper" class="main-wrapper">
        @include('edublink.partials.header')

        @section('content')

        @show

        @include('edublink.partials.footer')
    </div>

    @include('edublink.partials.scripts')
</body>

</html>