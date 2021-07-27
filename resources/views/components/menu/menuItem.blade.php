@props([
    'text' => '',
    'active' => false,
    'url' => "",
    'icon' => "",
])
<li class="active" {{ $attributes->merge(['class' => ($active ? 'active' :'')]) }}>
    <a href="{{ $url }}">
        <i class="icon-{{ $icon }}"></i>
        <span>{{ $text }}</span>
    </a>
</li>