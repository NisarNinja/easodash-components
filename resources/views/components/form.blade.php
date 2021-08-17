@props([
 'action' => '',
 'method' => 'post',
 'messagePosition' => 'bottom',
 'multipart' => false,
])
<form {{ $attributes }} class="lara-b4-form" action="{{ $action }}" method="{{ $method }}" @if($multipart) enctype="multipart/form-data" @endif>

	@if($messagePosition == 'top')
	 <x-easodash::message-alert />
	@endif

	@if($method == 'post')
	@csrf
	@endif
	{{ $slot }}

	@if($messagePosition == 'bottom')
	 <x-easodash::message-alert />
	@endif

	{{ $footer }}
</form>