<!-- Navigation -->
<header>
	<div class="navbar-fixed">
    <nav class="cyan">
        <div class="nav-wrapper container make-it-larger">
            <div class="hide-on-small-and-down"><a href="/" class="brand-logo"><img src="{!! asset('img/Sapi.png') !!}" alt="Sapi.png"style="width: 230px; height: 44px;margin-top: 10px"></a></div>
            <div class="hide-on-med-and-up"><a href="/" class="brand-logo right"><img src="{!! asset('img/Logo.png') !!}" alt="Logo.png"style="width: 67px; height: 45px;margin-top: 5px"></a></div>
            @include('partials.nav_web')
            @include('partials.nav_mobile')
        </div>
    </nav>
  </div>
</header>
<!-- end of Navigator -->