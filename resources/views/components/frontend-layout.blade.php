<!DOCTYPE html>
<html lang="en">
@props(['title', 'description', 'keywords', 'image'])

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? $company->name }}</title>

    <meta name="description" content="{{ $description ?? $company->meta_description }}">
    <meta name="keywords" content="{{ $keywords ?? $company->meta_keywords }}">

    <meta property="og:title" content="{{ $title ?? $company->name }}" />
    <meta property="og:site_name" content="{{ $company->name }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{ asset($image ?? $company->logo) }}" />
    <meta property="og:description" content="{{ $description ?? $company->meta_description }}" />


    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <script type="text/javascript"
        src="https://platform-api.sharethis.com/js/sharethis.js#property=68751be515eaf50013fb7e68&product=inline-share-buttons&source=platform"
        async="async"></script>
</head>

<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v23.0">
    </script>

    <x-frontend-header />
    <main>
        {{ $slot }}
    </main>

</body>

</html>
