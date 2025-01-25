<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task - Home</title>
    <!-- Favicons -->
    <link href="{{ asset('front/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('front/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('front/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('front/assets/css/main.css') }}" rel="stylesheet">

</head>
<body class="index-page">
@php
    $sections = isset($data[0])  ? $data[0] : null;
@endphp
{{-- Header Section --}}
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
    <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Task</h1>
    </a>

        <nav id="navmenu" class="navmenu">
            <ul>
            @foreach($sections->header['navigation'] as $link)
                    <li> <a href="{{ $link['link'] }}">{{ $link['label'] }}</a></li>
            @endforeach
            </ul>
        </nav>
    </div>
</header>
<main class="main">
{{-- Hero Section --}}
<section id="hero" class="hero section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
{{--        <h1>{{ $sections->hero['heading'] }}</h1>--}}
{{--        <p>{{ $sections->hero['subheading'] }}</p>--}}
{{--        <img src="{{$sections->hero['image'] }}" alt="Hero Image">--}}
{{--        <div class="highlights">--}}
{{--            @foreach($sections['hero']['highlights'] as $highlight)--}}
{{--                <span>{{ $array[$highlight] ?? 'Not available' }}</span>--}}
{{--            @endforeach--}}
{{--        </div>--}}
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
                    <div class="company-badge mb-4">
                        <i class="bi bi-gear-fill me-2"></i>
                        {{ $sections->hero['heading'] }}
                    </div>

                    <h1 class="mb-4">
                        {{ $sections->hero['subheading'] }}
                        <span class="accent-text">Vestibulum Ante</span>
                    </h1>

                    <p class="mb-4 mb-md-5">
                        Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.
                        Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
                    </p>

                    <div class="hero-buttons">
                        <a href="#about" class="btn btn-primary me-0 me-sm-2 mx-1">Get Started</a>
                        <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="btn btn-link mt-2 mt-sm-0 glightbox">
                            <i class="bi bi-play-circle me-1"></i>
                            Play Video
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
{{--                    <img src="{{$sections->hero['image'] }}" alt="Hero Image" class="img-fluid">--}}
                    <img src="{{ asset('front/assets/img/illustration-1.webp') }}" alt="Hero Image" class="img-fluid">
                    <div class="customers-badge">
                        <div class="customer-avatars">
                            <img src="{{ asset('front/assets/img/avatar-1.webp') }}" alt="Customer 1" class="avatar">
                            <img src="{{ asset('front/assets/img/avatar-2.webp') }}" alt="Customer 2" class="avatar">
                            <img src="{{ asset('front/assets/img/avatar-3.webp') }}" alt="Customer 3" class="avatar">
                            <img src="{{ asset('front/assets/img/avatar-4.webp') }}" alt="Customer 4" class="avatar">
                            <img src="{{ asset('front/assets/img/avatar-5.webp') }}" alt="Customer 5" class="avatar">
                            <span class="avatar more">12+</span>
                        </div>
                        <p class="mb-0 mt-2">12,000+ lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row stats-row gy-4 mt-5" data-aos="fade-up" data-aos-delay="500">
            @foreach($sections['hero']['highlights'] as $highlight)
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-trophy"></i>
                        </div>
                        <div class="stat-content">
                            <h4>{{ $array[$highlight] ?? 'Not available' }}</h4>
                            <p class="mb-0">Vestibulum ante ipsum</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

{{-- About Section --}}
<section id="about" class="about section">
    <div class="container">
        <h2>{{ $sections->about['heading'] }}</h2>
        <p>{{ $sections->about['description'] }}</p>
        <img src="{{ $sections->about['image'] }}" alt="About Image">
    </div>
</section>

{{-- Features Section --}}
<section id="features" class="features section">
    <div class="container">
        <h2>{{$sections->features[0]['title'] }}</h2>
        <div class="features-grid">
            @foreach($sections->features as $feature)
                <div class="feature-item">
                    <h3>{{ $feature['title'] }}</h3>
                    <p>{{ $feature['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Testimonials Section --}}
<section id="testimonials" class="testimonials section">
    <div class="container">
        <h2>Testimonials</h2>
        <div class="testimonials-grid">
            @foreach($sections->testimonials as $testimonial)
                <div class="testimonial-item">
                    <img src="{{ $testimonial['client_image'] }}" alt="{{ $testimonial['client_name'] }}">
                    <h3>{{ $testimonial['client_name'] }}</h3>
                    <p>"{{ $testimonial['review'] }}"</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Services Section --}}
<section id="services" class="services section">
    <div class="container">
        <h2>Services</h2>
        <div class="services-grid">
            @foreach($sections->services as $service)
                <div class="service-item">
                    <h3>{{ $service['service_title'] }}</h3>
                    <p>{{ $service['service_description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Pricing Section --}}
<section id="pricing" class="pricing section">
    <div class="container">
        <h2>Pricing</h2>
        <div class="pricing-grid">
            @foreach($sections->pricing_plans as $plan)
                <div class="pricing-item">
                    <h3>{{ $plan['plan_name'] }}</h3>
                    <p>{{ $plan['price'] }}</p>
                    <ul>
                        @if (!empty($plan['features']))
                            @foreach ($plan['features'] as $feature)
                                <li>{{ $feature }}</li>
                            @endforeach
                        @else
                            <li>No features available</li>
                        @endif
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- FAQ Section --}}
<section id="faq" class="faq section">
    <div class="container">
        <h2>FAQ</h2>
        <div class="faq-items">
            @foreach($sections->faq as $question)
                <div class="faq-item">
                    <h3>{{ $question['question'] }}</h3>
                    <p>{{ $question['answer'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Contact Section --}}
<section id="contact" class="contact section">
    <div class="container">
        <h2>Contact Us</h2>
        <div class="contact-info">
            <p>Email: {{ $sections->contact['email'] }}</p>
            <p>Phone: {{ $sections->contact['phone'] }}</p>
            <p>Address: {{ $sections->contact['address'] }}</p>
        </div>
        <form action="{{ url('contact.send') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>
</section>
</main>
{{-- Footer Section --}}
<footer id="footer" class="footer">
    <div class="container">
        <p>{{ $sections->footer['text'] }}</p>
        <nav>
{{--            @foreach($sections->footer['links'] as $link)--}}
{{--                <a href="{{ $link['url'] }}">{{ $link['label'] }}</a>--}}
{{--            @endforeach--}}
        </nav>
    </div>
</footer>

</body>
</html>
