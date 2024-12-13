<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Didig Studio</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

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


</head>
<body class="project-body">
@include('partials.header')
<section class="project-hero-bg">
    <img src="{{ asset('img/mahatat-image.png') }}" alt="Mahatat Image" data-aos="fade-up" data-aos-duration="1000"/>
</section>

<section class="project-hero-text-container">
    <h1 data-aos="fade-up" data-aos-duration="1000">Mahatat</h1>
    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
        An innovative streaming platform focused on cultural and educational content, designed to showcase local
        productions and provide a personalized user experience.
    </p>

    <div class="features-container">
        <div class="feature-card" data-aos="fade-up" data-aos-duration="1000">
            <h2>Challenge</h2>
            <p>
                Mahatat aimed to stand out in a highly competitive market dominated by global platforms. The goal was to
                develop a product that offered:
            </p>

            <ul>
                <li>A user-friendly interface.</li>
                <li>Personalized features such as recommendations based on cultural interests.</li>
                <li>High-quality streaming with a seamless experience.</li>
                <li>A unique design that reflected the cultural identity of its creators.</li>
            </ul>
        </div>
        <div class="feature-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <h2>Our Solution</h2>
            <p>
                At Didig Studio, we focused on creating a user-centered platform by:
            </p>

            <ul>
                <li>Mapping user journeys and prototyping core features like registration, browsing, and
                    subscriptions.
                </li>
                <li>Designing an intuitive and culturally inspired interface.</li>
                <li>Developing personalized recommendations, advanced search, and a seamless streaming experience.</li>
                <li>Testing extensively to ensure high-quality performance and usability.</li>
            </ul>
        </div>
    </div>

    <div class="project-images-container">
        <img src="{{ asset('img/mahatat-image-2.png') }}" alt="Mahatat Image 1" data-aos="fade-up"
             data-aos-duration="1000" data-aos-delay="400"/>

        <div class="results-container" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <h2>Results</h2>
            <ul>
                <li>Increased engagement: 75% of users spend more than 2 hours on the platform weekly.</li>
                <li>Improved retention: A 30% increase in recurring subscriptions within the first 3 months.</li>
                <li>Positive feedback: Users praised the platform’s ease of use and intuitive design.</li>
            </ul>
        </div>

        <img src="{{ asset('img/mahatat-image-3.png') }}" alt="Mahatat Image 1" data-aos="fade-up"
             data-aos-duration="1000" data-aos-delay="400" class="last-image"/>

        <div class="results-container" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <h2>Final Thoughts</h2>
            <p>
                Mahatat’s success demonstrates how a combination of user-centered design and innovative technologies can
                make a difference in a saturated market. At Didig Studio, we are proud to have been part of this project
                that is redefining the way cultural content is consumed.
            </p>
        </div>
    </div>
</section>

@include('partials.footer')

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init();
</script>

</body>
</html>
