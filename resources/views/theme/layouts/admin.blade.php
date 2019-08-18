{{-- Yils Creados by Natoz
    - title
    - head
    - content
    - footer
    - foot
    - Titulo de la pagina
    - Migajas
--}}

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <title>@yield('title')</title>
    @include('theme.layouts.includes.head')
  </head>
  <body class="horizontal-layout horizontal-menu 2-columns   menu-expanded" data-open="hover" data-menu="horizontal-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">
      @include('theme.layouts.includes.header')
      @include('theme.layouts.includes.top-sidebar')

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">@yield('titulopagina')</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
                @yield('migajas')
            </div>
          </div>
        </div>
        <div class="content-body">
			    @yield('content')
        </div>
      </div>
    </div>
    @include('theme.layouts.includes.footer')
    @include('theme.layouts.includes.foot')
  </body>
</html>