<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        @viteRefresh()
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
        <!-- Preload and load Google Fonts (deduplicated) -->
        <link rel="preload" as="style"
              href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Lexend:wght@800&family=Rubik:wght@700&family=Teachers:wght@700&display=swap">
        <link
                href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Lexend:wght@800&family=Rubik:wght@700&family=Teachers:wght@700&display=swap"
                rel="stylesheet">
        <link rel="stylesheet" href="{{ vite('source/_assets/css/main.css') }}">
        <script defer type="module" src="{{ vite('source/_assets/js/main.js') }}"></script>
    </head>
    <body class="bg-[#F8F8F8]">
        @yield('body')
    </body>
</html>
