<nav class="nav-bar">
	<div class="nav-bar-mobile">
		<div class="button"></div>
	</div>
	<a href="{{ url('/') }}" class="home-btn">
		<img src="{{ url('/img/itens/logo.jpg') }}" alt="{{trans('messages.nav-alt')}}">
	</a>
	<div class="nav-langs {{ App::getLocale() }}">
			<a href="{{ URL::to('/pt') . str_replace('//', '/', '/' . str_replace('{locale}', '', Route::current()->getPath())) }}" class="p">pt</a>
			<a href="{{ URL::to('/fr') . str_replace('//', '/', '/' . str_replace('{locale}', '', Route::current()->getPath())) }}" class="f">fr</a>
			<a href="{{ URL::to('/en') . str_replace('//', '/', '/' . str_replace('{locale}', '', Route::current()->getPath())) }}" class="e">en</a>
		</div>
	<ul>
		<li><a href="{{ url(App::getLocale() . '/works') }}" class="@yield('works-active')">{{trans('messages.obras')}}</a></li>
		<li><a href="{{ url(App::getLocale() . '/orders') }}" class="@yield('orders-active')">{{trans('messages.plantas')}}</a></li>
		<li><a href="{{ url(App::getLocale() . '/budget') }}" class="@yield('budget-active')">{{trans('messages.orcamento')}}</a></li>
		<li><a href="{{ url(App::getLocale() . '/contact') }}" class="@yield('contact-active')">{{trans('messages.sobre')}}</a></li>
	</ul>
	<div class="clearfix"></div>
</nav>