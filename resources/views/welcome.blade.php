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
<body class="main">
@include('partials.header')
<section class="hero-section">
    <div class="shadow-blur-1"></div>
    <div class="shadow-blur-2"></div>
    <div class="shadow-blur-3"></div>
    <div class="hero-inner">
        <div class="hero-content">
            <h1
                data-aos="fade-up"
                data-aos-duration="1000"
                class="hero-title">
                Welcome to Didig Studio
            </h1>
            <p class="hero-description" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                Didig Studio specializes in custom software development, offering tailored solutions for businesses.
                Services include enterprise applications, cloud platforms, web portals, e-commerce systems, and mobile
                apps. Committed to driving digital transformation, the studio handles the entire development cycle,
                ensuring improved user experience and operational efficiency.
            </p>
            <a href="#" class="contact-button" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                Contact Us
            </a>
        </div>
        <div class="video-placeholder">
            <img src="{{ asset('img/Video placeholder.png') }}" alt="Video Placeholder"/>
        </div>
    </div>
</section>

<section class="services-section" id="services">
    <div class="services-inner">
        <h2
            data-aos="fade-up"
            data-aos-duration="1000"
            class="section-title">Our Services</h2>


        <div class="projects-grid">
            <div class="project-card span-2" data-aos="fade-up" data-aos-delay="200">
                <div class="image-container">
                    <img src="{{ asset('img/bg-service-1.png') }}" alt="Service 1"/>
                </div>

                <div class="project-content">
                    <h3 class="project-title">App Development</h3>
                    <p class="project-description">
                        We specialize in developing native mobile applications for Android and iOS, ensuring optimal
                        performance, seamless functionality, and an exceptional user experience.
                    </p>
                </div>
            </div>
            <div class="project-card span-2" data-aos="fade-up" data-aos-delay="400">
                <div class="image-container">
                    <img src="{{ asset('img/bg-service-2.png') }}" alt="Service 1"/>
                </div>

                <div class="project-content">
                    <h3 class="project-title">Website Development</h3>
                    <p class="project-description">
                        We specialize in developing native mobile applications for Android and iOS, ensuring optimal
                        performance, seamless functionality, and an exceptional user experience.
                    </p>
                </div>
            </div>
            <div class="project-card span-3" data-aos="fade-up" data-aos-delay="600">
                <div class="image-container">
                    <img src="{{ asset('img/bg-service-3.png') }}" alt="Service 1"/>
                </div>

                <div class="project-content">
                    <h3 class="project-title">Custom Software Development</h3>
                    <p class="project-description">
                        We build tailored software solutions that meet your specific business needs. Our team ensures
                        seamless functionality, scalability, and innovation for your projects.
                    </p>
                </div>
            </div>
            <div class="project-card" data-aos="fade-up" data-aos-delay="800">
                <div class="project-content">
                    <h3 class="project-title">UX/UI Design</h3>
                    <p class="project-description">
                        Our team creates user-centered and visually engaging interfaces, blending functionality with
                        aesthetics to enhance usability and satisfaction.
                    </p>
                </div>
            </div>
            <div class="project-card" data-aos="fade-up" data-aos-delay="1000">
                <div class="project-content">
                    <h3 class="project-title">Graphic Design</h3>
                    <p class="project-description">
                        We design impactful visual content that strengthens your brand identity, from marketing
                        materials to custom illustrations.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="projects-section" id="projects">
    <div class="projects-inner">
        <h2 class="section-title">Highlighted Success Cases</h2>

        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="slide-1">
                        <div class="opacity-bg"></div>
                        <div class="slide-content">

                            <div class="tags-container">
                                <span class="tag">UX/UI Design</span>
                                <span class="tag">Development</span>
                                <span class="tag">Workflow Optimization</span>
                            </div>

                            <h3 class="slide-title">Mahatat</h3>
                            <p class="slide-description">
                                We redesigned the user experience of a streaming platform to enhance interaction on
                                mobile and web devices. The project focused on attractive interfaces, seamless
                                navigation, and user-centered optimization.
                            </p>

                            <a href="{{ route('mahatat') }}" class="project-link">
                                View Website <img src="{{ asset('img/arrow-right.svg') }}" alt="View Website"/>
                            </a>
                        </div>

                        <div class="featured-image-container">
                            <img class="featured-image" src="{{ asset('img/mahatat-image-4.png') }}" alt="Project 1"/>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-2">
                        <div class="slide-content">

                            <div class="tags-container">
                                <span class="tag">UX/UI Design</span>
                                <span class="tag">Development</span>
                                <span class="tag">Workflow Optimization</span>
                            </div>

                            <h3 class="slide-title">JEMG Software</h3>
                            <p class="slide-description">
                                We created an intuitive management system designed to optimize user experience and
                                simplify workflows. This project included interface design, development, and customized
                                functional enhancements.
                            </p>

                            <a href="{{ route('jemg') }}" class="project-link">
                                View Website <img src="{{ asset('img/arrow-right.svg') }}" alt="View Website"/>
                            </a>
                        </div>

                        <div class="featured-image-container">
                            <img class="featured-image" src="{{ asset('img/four.png') }}" alt="Project 1"/>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-1">
                        <div class="opacity-bg"></div>
                        <div class="slide-content">

                            <div class="tags-container">
                                <span class="tag">UX/UI Design</span>
                                <span class="tag">Development</span>
                                <span class="tag">Workflow Optimization</span>
                            </div>

                            <h3 class="slide-title">Barker</h3>
                            <p class="slide-description">
                                We developed a mobile finance app that enables users to efficiently manage their
                                finances. Key features include expense tracking, savings plans, and personalized
                                reports.
                            </p>

                            <a href="{{ route('barker') }}" class="project-link">
                                View Website <img src="{{ asset('img/arrow-right.svg') }}" alt="View Website"/>
                            </a>
                        </div>

                        <div class="featured-image-container">
                            <img class="featured-image" src="{{ asset('img/barker-bg.png') }}" alt="Project 1"/>
                        </div>
                    </div>
                </div>
                ...
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
    </div>
</section>

<section class="testimonials-section">
    <div class="services-inner">
        <h2
            data-aos="fade-up"
            data-aos-duration="1000"
            class="section-title">What our clients say</h2>


        <div class="testimonials-container">
            <div data-aos="fade-up" class="testimonial-card">
                <div class="testimonial-content">
                    <p class="testimonial-text">
                        “The team at Didig Studio not only delivered a custom application that perfectly addressed our
                        needs but did so with incredible attention to detail and a collaborative approach that made us
                        feel part of the process.”
                    </p>
                    <div class="autor-info-container">
                        <div class="star-rating">
                            <img src="{{ asset('img/star.svg') }}" alt="Star"/>
                            <img src="{{ asset('img/star.svg') }}" alt="Star"/>
                            <img src="{{ asset('img/star.svg') }}" alt="Star"/>
                            <img src="{{ asset('img/star.svg') }}" alt="Star"/>
                            <img src="{{ asset('img/star.svg') }}" alt="Star"/>
                        </div>

                        <div class="testimonial-author">
                            <img src="{{ asset('img/author-1.png') }}" alt="Author"/>
                            <div class="author-info">
                                <h4 class="author-name">Martijn Glorieux</h4>
                                <p class="author-position">CEO Jazz & Code</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" class="testimonial-card">
                <div class="testimonial-content">
                    <p class="testimonial-text">
                        “From the very beginning, Didig Studio understood our goals and delivered an efficient, scalable
                        software solution. Their commitment to quality and meeting deadlines was truly outstanding.”
                    </p>

                    <div class="autor-info-container">
                        <div class="star-rating">
                            <img src="{{ asset('img/star.svg') }}" alt="Star"/>
                            <img src="{{ asset('img/star.svg') }}" alt="Star"/>
                            <img src="{{ asset('img/star.svg') }}" alt="Star"/>
                            <img src="{{ asset('img/star.svg') }}" alt="Star"/>
                            <img src="{{ asset('img/star.svg') }}" alt="Star"/>
                        </div>

                        <div class="testimonial-author">
                            <img src="{{ asset('img/author-2.png') }}" alt="Author"/>
                            <div class="author-info">
                                <h4 class="author-name">Eduardo López</h4>
                                <p class="author-position">CEO Mdire</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="400" class="testimonial-card">
                <div class="testimonial-content">
                    <p class="testimonial-text">
                        "Didig Studio brought our vision to life with a stunning website and seamless functionality. A
                        pleasure to work with!"
                    </p>

                    <div class="autor-info-container">
                        <div class="star-rating">
                            <img src="{{ asset('img/star.svg') }}" alt="Star"/>
                            <img src="{{ asset('img/star.svg') }}" alt="Star"/>
                            <img src="{{ asset('img/star.svg') }}" alt="Star"/>
                            <img src="{{ asset('img/star.svg') }}" alt="Star"/>
                            <img src="{{ asset('img/star.svg') }}" alt="Star"/>
                        </div>

                        <div class="testimonial-author">
                            <img src="{{ asset('img/author-3.png') }}" alt="Author"/>
                            <div class="author-info">
                                <h4 class="author-name">Laurent Bettin</h4>
                                <p class="author-position">COO LYERO</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-team-section" id="team">
    <div class="team-inner">
        <h2
            data-aos="fade-up"
            data-aos-duration="1000"
            class="section-title">Our Team</h2>
        <p
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="200"
            class="team-description">
            We believe that great teams build great products. Our talented professionals bring years of experience in
            software development, user experience design, and project management. Each member is dedicated to delivering
            innovative and tailored solutions to meet our clients' unique needs. Together, we ensure every project
            exceeds expectations, combining creativity, technical expertise, and a commitment to quality.
        </p>

        <div class="team-grid">
            <div class="team-member" data-aos="flip-left">
                <div class="member-image">
                    <img src="{{ asset('img/team-1.png') }}" alt="Team Member"/>
                </div>
                <div class="member-info">
                    <h3 class="team-member-name">George Mendoza</h3>
                    <p class="team-member-position">CEO & Founder</p>
                </div>
            </div>
            <div class="team-member" data-aos="flip-left" data-aos-delay="200">
                <div class="member-image">
                    <img src="{{ asset('img/team-2.png') }}" alt="Team Member"/>
                </div>
                <div class="member-info">
                    <h3 class="team-member-name">Lisseth Lampín</h3>
                    <p class="team-member-position">Co-Founder</p>
                </div>
            </div>
            <div class="team-member" data-aos="flip-left" data-aos-delay="400">
                <div class="member-image">
                    <img src="{{ asset('img/team-3.png') }}" alt="Team Member"/>
                </div>
                <div class="member-info">
                    <h3 class="team-member-name">Aida Delgado</h3>
                    <p class="team-member-position">COO & Director</p>
                </div>
            </div>
            <div class="team-member" data-aos="flip-left" data-aos-delay="600">
                <div class="member-image">
                    <img src="{{ asset('img/team-4.png') }}" alt="Team Member"/>
                </div>
                <div class="member-info">
                    <h3 class="team-member-name">Jarliev Pérez</h3>
                    <p class="team-member-position">Lead Developer</p>
                </div>
            </div>
            <div class="team-member" data-aos="flip-left" data-aos-delay="800">
                <div class="member-image">
                    <img src="{{ asset('img/team-5.png') }}" alt="Team Member"/>
                </div>
                <div class="member-info">
                    <h3 class="team-member-name">Karold Praslin</h3>
                    <p class="team-member-position">UX/UI Designer</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-section" id="contact">
    <div class="services-inner">
        <h2
            data-aos="fade-up"
            data-aos-duration="1000"
            class="section-title">
            Contact Us
        </h2>


        <form
            data-aos="fade-up"
            data-aos-duration="1000"
            action="#"
            method="POST"
            class="contact-form">

            <div class="form-row">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control" required placeholder="George">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required
                           placeholder="example@email.com"/>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" name="phone" class="form-control" required
                           placeholder="+1 000 3829 3827"/>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" class="form-control" rows="4" required
                              placeholder="I would like to know..."></textarea>
                </div>
            </div>

            <div class="form-row">
                <button type="submit" class="submit-button">Submit</button>
            </div>

        </form>

    </div>
</section>

<div class="separator"></div>

@include('partials.footer')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init();
</script>

</body>
</html>
