
<div class="container-fluid mb-3">
	<div class="row">
		<div class="col-12">
			@if(session('success'))
			<x-lara-b4::alert>
				{!! session('success') !!}
			</x-lara-b4::alert>
			@endif

			@if(session('error'))
			<x-lara-b4::alert type="danger">
				{!! session('error') !!}
			</x-lara-b4::alert>
			@endif
		</div>
	</div>

</div>

{{ $slot }}