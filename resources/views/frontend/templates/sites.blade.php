<html>
<head>
    @include('frontend.templates.layouts.head')
</head>

<body>
    <!--section navbar-->
            @include('frontend.templates.layouts.navigation')
    <!-- end navbar -->

    <!-- section about -->
           @include('frontend.templates.layouts.sidebar')
    <!-- end about me -->

    <!-- section skill framework -->
    {{-- @include('frontend.templates.layouts.skill') --}}
    <!-- end skill framework -->

    <!-- section my recent work -->
    {{-- @include('frontend.templates.layouts.react') --}}
    <!-- end my recent work -->

    <!-- section contact -->
    {{-- @include('frontend.templates.layouts.contact') --}}
    </section>
    <!-- end section contact me -->

    <!-- section footer -->
          @include('frontend.templates.layouts.footer')
    <!-- end footer -->
</body>

</html>
