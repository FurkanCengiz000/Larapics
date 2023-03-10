@props([
    'action',
    'method' => 'POST',
    'style' => null,
    'enctype' => null
])
<form action="{{ $action }}"
method="{{ strtolower($method) === 'get' ? 'GET' : 'POST' }}"
@unless($style == null) style="{{ $style }}" @endunless
@unless($enctype == null) enctype="{{ $enctype }}" @endunless>
    @csrf
    @unless (in_array($method, ['GET', 'POST']))
        @method($method)
    @endunless
    {{ $slot }}
</form>