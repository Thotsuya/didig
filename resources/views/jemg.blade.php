<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JEMG | Didig Studio</title>

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
<section class="jemg-hero-bg">
    <div class="hero-container">
        <h1 data-aos="fade-up" data-aos-duration="1000">About the Software</h1>
        <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            Bhee is a risk management and financial analytics platform designed for corporate clients. It enables
            businesses to monitor their financial performance, analyze risk factors, and gain valuable insights for
            informed decision-making. The software features a comprehensive dashboard, detailed analytics modules, and
            customizable reports, ensuring a seamless and efficient user experience for financial professionals.
        </p>
    </div>
</section>

<section class="project-hero-text-container">
    <div class="features-container">
        <div class="feature-card" data-aos="fade-up" data-aos-duration="1000">
            <h2>Challenge</h2>
            <p>
                Before Bhee, the client faced significant challenges in tracking and managing financial risks. Their
                existing systems were outdated, lacked integration, and often required manual processes, leading to
                inefficiencies and increased operational costs. Moreover, the absence of real-time data visualization
                made it difficult for sta
                <br/>
                Key challenges included:
            </p>

            <ul>
                <li>Fragmented data systems</li>
                <li>Limited user-friendly interfaces</li>
                <li>No real-time analytics</li>
                <li>Complex reporting workflows</li>
            </ul>
        </div>
        <div class="feature-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <h2>Our Solution</h2>
            <p>
                Didig Studio developed Bhee to address these challenges, focusing on creating an intuitive, visually
                engaging, and powerful software solution.
                <br/>
                <br/>
                Key Features Implemented:
            </p>

            <ul>
                <li>
                    Interactive Dashboard
                </li>
                <li>
                    Real-Time Risk Analysis
                </li>
                <li>
                    Customizable Reports
                </li>
                <li>
                    User-Centric Design
                </li>
                <li>
                    Mobile Integration
                </li>
            </ul>
        </div>
    </div>

    <div class="project-images-container">
        <img src="{{ asset('img/jemg-1.png') }}" alt="Jemg Image 1" data-aos="fade-up"
             data-aos-duration="1000" data-aos-delay="400"/>
    </div>

    <div class="results-container no-gap" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
        <h2>Results</h2>
        <p><strong>The implementation of Bhee delivered significant improvements for the client:</strong></p>
        <ul>
            <li>
                Efficiency Boost: Reduced the time spent on data management and report generation by 35%.
            </li>
            <li>
                Improved Decision-Making: Real-time analytics empowered stakeholders to make informed decisions faster.
            </li>
            <li>
                Enhanced User Satisfaction: Positive feedback from users highlighted the software’s intuitive design and usability.
            </li>
            <li>
                Cost Savings: By automating manual processes, the client reported a 20% reduction in operational costs.
            </li>
        </ul>
    </div>

    <div class="project-images-container">
        <img src="{{ asset('img/jemg-2.png') }}" alt="Jemg Image 1" data-aos="fade-up"
             data-aos-duration="1000" data-aos-delay="400"/>
    </div>

    <div class="features-container">
        <div class="feature-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <h2>Final Thoughts</h2>
            <p>
                The development of Bhee by Didig Studio demonstrates our commitment to creating tailored software solutions that not only meet but exceed client expectations. This project highlights the importance of combining advanced technology with user-centered design to drive business success.
                If your company faces similar challenges, contact us to learn how we can help transform your business operations with innovative digital solutions.
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
