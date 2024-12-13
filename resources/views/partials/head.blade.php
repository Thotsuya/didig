<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


<!-- Styles / Scripts -->
@if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
@else

@endif
