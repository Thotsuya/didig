<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Barker | Didig Studio</title>

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
<section class="barker-hero-bg">
    <div class="hero-container">
        <h1 data-aos="fade-up" data-aos-duration="1000">About the App</h1>
        <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            The Finance App is a comprehensive financial management tool, designed to help users take control of their
            personal finances. It offers budgeting, expense tracking, and savings goal-setting features, all presented
            in a user-friendly and visually appealing interface. 
            <br/><br/>As a product of Didig Studio, this app exemplifies our commitment to delivering software solutions
            that prioritize user experience and functionality.
        </p>
    </div>
</section>

<section class="project-hero-text-container">
    <div class="features-container">
        <div class="feature-card" data-aos="fade-up" data-aos-duration="1000">
            <h2>Challenge</h2>
            <p>
                The client approached Didig Studio with the need for an intuitive finance application to help users
                overcome the following pain points:
            </p>

            <ul>
                <li>Difficulty in understanding complex financial data.</li>
                <li>Lack of motivation to achieve savings goals.</li>
                <li>Poor engagement with existing financial tools due to cluttered interfaces.</li>
            </ul>

            <p>
                The challenge was to design an app that simplifies financial management and keeps users engaged while
                providing actionable insights.
            </p>
        </div>
        <div class="feature-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <h2>Our Solution</h2>
            <p>
                At Didig Studio, we take a user-centric approach to solving design and development challenges. Here's
                how we addressed the client's needs:
            </p>

            <ul>
                <li>
                    Deep User Research and Competitive Analysis
                </li>
                <li>
                    Clear and Intuitive User Interface
                </li>
                <li>
                    Goal-Oriented Features
                </li>
                <li>
                    Upgrade Plans for Enhanced Functionality
                </li>
                <li>
                    Interactive Data Visualization
                </li>
            </ul>
        </div>
    </div>

    <div class="project-images-container">
        <img src="{{ asset('img/barker-img-1.png') }}" alt="Mahatat Image 1" data-aos="fade-up"
             data-aos-duration="1000" data-aos-delay="400"/>
    </div>

    <div class="features-container">
        <div class="feature-card-alt" data-aos="fade-up" data-aos-duration="1000">
            <h2>Results</h2>

            <ul>
                <li>
                    80% of users improved their financial awareness within the first month.
                </li>
                <li>
                    70% engage with the app at least three times per week.
                </li>
                <li>
                    65% achieved their savings goals within three months.
                </li>
                <li>
                    Positive feedback on the intuitive interface boosted user satisfaction.
                </li>
                <li>
                    25% increase in premium subscriptions in the first quarter.
                </li>
            </ul>

        </div>
        <div class="feature-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <h2>Final Thoughts</h2>
            <p>
                This project highlights Didig Studio’s expertise in designing and developing user-focused software solutions. By combining intuitive design, advanced functionality, and data-driven insights, we delivered a product that not only meets the client’s objectives but also enhances users’ financial well-being.
                At Didig Studio, we’re proud to create software that makes a difference, empowering users to achieve their goals through innovative technology.
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
