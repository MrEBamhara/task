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
<body>

{{-- Header Section --}}
<header>
    <div class="container">

        @php
            $sections = isset($data[0])  ? $data[0] : null;
        @endphp

        <img src="assets/img/logo.png" alt="">
        <nav>
            @foreach($sections->header['navigation'] as $link)
                <a href="{{ $link['link'] }}">{{ $link['label'] }}</a>
            @endforeach
        </nav>
    </div>
</header>

{{-- Hero Section --}}
<section id="hero" class="hero section">
    <div class="container">
        <h1>{{ $sections->hero['heading'] }}</h1>
        <p>{{ $sections->hero['subheading'] }}</p>
        <img src="{{$sections->hero['image'] }}" alt="Hero Image">
        <div class="highlights">
            @foreach($sections['hero']['highlights'] as $highlight)
                <span>{{ $array[$highlight] ?? 'Not available' }}</span>
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
