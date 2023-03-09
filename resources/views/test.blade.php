<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>

    @php
        $icon = "logo.svg";
    @endphp
    
    <x-icon :src="$icon" />
    <x-ui.button />
    <x-alert type="danger" id="my-alert" role="flash" class="mt-4" />
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>