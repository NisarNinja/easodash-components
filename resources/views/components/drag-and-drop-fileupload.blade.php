@props([
'name' => '',
'defaultFile' => '',
])

<input type="file" name="{{ $name }}" {{ $attributes->merge(['class' => 'dropify']) }} @if($defaultFile) data-default-file="{{ $defaultFile }}" :value="$defaultFile" @endif>