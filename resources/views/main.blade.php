<!DOCTYPE html>
<html>
    @include('partials._head')
    <body>
        @include('partials._navigations')
            <!-- Web Content -->
        <main>
            <div class="container">
                @yield('content')
            </div>
        </main>
            <!-- end of Web Content -->
        @include('partials._footer')
        @include('partials._scripts')
    </body>
</html>

<!-- File template for several view -->