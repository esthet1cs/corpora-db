@include('_components.header')

<div class="margin-large"></div>

<div class="row">
  <div class="column">
    <h1>@yield('title')</h1>
  </div>
</div>

@yield('content')

@include('_components.footer')
