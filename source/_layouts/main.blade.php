<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ $page->language ?? 'en' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Canonical Link -->
    <link rel="canonical" href="{{ $page->getUrl() }}">

    <!-- SEO Meta -->
    <title>@yield('title', $page->title ?? 'African Institute for Solutions and Development')</title>
    <meta name="description" content="@yield('description', $page->description ?? 'Empowering African communities through innovative, evidence-based health solutions and partnerships. AISD drives health equity and sustainable development across Africa.')">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="@yield('title', $page->title ?? 'African Institute for Solutions and Development')">
    <meta property="og:description" content="@yield('description', $page->description ?? 'Empowering African communities through innovative, evidence-based health solutions and partnerships. AISD drives health equity and sustainable development across Africa.')">
    <meta property="og:image" content="{{ $page->baseUrl }}/assets/images/logo.webp">
    <meta property="og:url" content="{{ $page->getUrl() }}">
    <meta property="og:type" content="website">

    <!-- Favicon -->
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">

    <!-- Font Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Font Styles -->
    <link rel="preload" as="style"
          href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Lexend:wght@800&family=Rubik:wght@700&family=Teachers:wght@700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Lexend:wght@800&family=Rubik:wght@700&family=Teachers:wght@700&display=swap" rel="stylesheet">

    <!-- CSS & JS -->
    <link rel="stylesheet" href="{{ vite('source/_assets/css/main.css') }}">
    <script defer type="module" src="{{ vite('source/_assets/js/main.js') }}"></script>

    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    @viteRefresh()
</head>
<body class="bg-[#F8F8F8]">
@yield('body')
</body>
</html>
