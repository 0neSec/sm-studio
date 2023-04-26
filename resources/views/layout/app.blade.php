<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    {{-- Title --}}
    <title>@yield('title')</title>

    <!-- Style -->
    @stack('prepend-style')
    @include('component.style')
    @stack('addon-style')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  </head>

  <body>
    <main>
    {{-- Site Header --}}
    @include('component.site-header')

    <!-- Navbar -->
    @include('component.navbar')

    <!-- Page Content -->

    @yield('content-1')
    @yield('content-2')
    @yield('content-3')
    @yield('content-4')
    @yield('content-5')
    @yield('content-6')
    @yield('content-7')
    @yield('content-8')
    </main>




    <!-- Footer -->
    @include('component.footer')

    <!-- Script -->
    @stack('prepend-script')
    @include('component.script')
    @stack('addon-script')

  </body>
</html>
