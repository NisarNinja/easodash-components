@props([
    'text' => 'Please wait...',
    'session' => true,
    'sessionKey' => '',
])

@php

if($session && session($sessionKey)){
    $text = session($sessionKey);
}

@endphp
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><i class="fa fa-cube font-25"></i></div>
        <p>{{ $text }}</p>        
    </div>
</div>