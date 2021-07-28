@props([
    'text' => '',
    'active' => false,
    'url' => "",
    'icon' => "",
])
<li {{ $attributes->merge(['class' => ($active ? 'active' :'')]) }}>
    <a href="{{ $url }}">
        @if($icon)<i class="icon-{{ $icon }}"></i>@endif
        <span>{{ $text }}</span>
    </a>
</li>