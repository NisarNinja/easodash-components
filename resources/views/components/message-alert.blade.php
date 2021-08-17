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