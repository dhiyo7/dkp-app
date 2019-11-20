
<!doctype html>
<html lang="en">

@include('layouts.partial._head')

<body>

	<div id="wrapper">

		@include('layouts.partial._navbar')

		@include('layouts.partial._sidebar')

		<div class="main">

            @yield('content')

		</div>

		<div class="clearfix"></div>
		@include('layouts.partial._footer')
	</div>

	@include('layouts.partial._script')
	@include('layouts.partial.add')
</body>

</html>
