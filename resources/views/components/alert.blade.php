<div {{ $attributes->merge(['class' => "{$getClasses}", "role" => $attributes->prepends('alert')]) }}>
    @isset($title)
        <h4 class="alert-heading">{{ $title }}</h4>
    @endisset
    @isset($message)
        <p class="mb-0">{{ $message }}</p>
    @endisset
    {{ $slot }}
    @if ($dismissible)
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    @endif
</div>