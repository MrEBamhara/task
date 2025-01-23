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
        <img src="{{ json_decode($sections->header)->logo }}" alt="Logo" />
        <nav>
            @foreach(json_decode($sections->header)->navigation as $link)
                <a href="{{ $link->link }}">{{ $link->label }}</a>
            @endforeach
        </nav>
    </div>
</header>

{{-- Hero Section --}}
<section id="hero" class="hero section">
    <div class="container">
        <h1>{{ json_decode($sections->hero)->heading }}</h1>
        <p>{{ json_decode($sections->hero)->subheading }}</p>
        <img src="{{ json_decode($sections->hero)->image }}" alt="Hero Image">
        <div class="highlights">
            @foreach(json_decode($sections->hero)->highlights as $highlight)
                <span>{{ $highlight }}</span>
            @endforeach
        </div>
    </div>
</section>

{{-- About Section --}}
<section id="about" class="about section">
    <div class="container">
        <h2>{{ json_decode($sections->about)->title }}</h2>
        <p>{{ json_decode($sections->about)->description }}</p>
        <img src="{{ json_decode($sections->about)->image }}" alt="About Image">
    </div>
</section>

{{-- Features Section --}}
<section id="features" class="features section">
    <div class="container">
        <h2>{{ json_decode($sections->features)->title }}</h2>
        <div class="features-grid">
            @foreach(json_decode($sections->features)->items as $feature)
                <div class="feature-item">
                    <h3>{{ $feature->title }}</h3>
                    <p>{{ $feature->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Testimonials Section --}}
<section id="testimonials" class="testimonials section">
    <div class="container">
        <h2>{{ json_decode($sections->testimonials)->title }}</h2>
        <div class="testimonials-grid">
            @foreach(json_decode($sections->testimonials)->items as $testimonial)
                <div class="testimonial-item">
                    <img src="{{ $testimonial->avatar }}" alt="{{ $testimonial->name }}">
                    <h3>{{ $testimonial->name }}</h3>
                    <p>"{{ $testimonial->quote }}"</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Services Section --}}
<section id="services" class="services section">
    <div class="container">
        <h2>{{ json_decode($sections->services)->title }}</h2>
        <div class="services-grid">
            @foreach(json_decode($sections->services)->items as $service)
                <div class="service-item">
                    <h3>{{ $service->name }}</h3>
                    <p>{{ $service->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Pricing Section --}}
<section id="pricing" class="pricing section">
    <div class="container">
        <h2>{{ json_decode($sections->pricing_plans)->title }}</h2>
        <div class="pricing-grid">
            @foreach(json_decode($sections->pricing_plans)->plans as $plan)
                <div class="pricing-item">
                    <h3>{{ $plan->name }}</h3>
                    <p>{{ $plan->price }}</p>
                    <ul>
                        @foreach($plan->features as $feature)
                            <li>{{ $feature }}</li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- FAQ Section --}}
<section id="faq" class="faq section">
    <div class="container">
        <h2>{{ json_decode($sections->faq)->title }}</h2>
        <div class="faq-items">
            @foreach(json_decode($sections->faq)->questions as $question)
                <div class="faq-item">
                    <h3>{{ $question->question }}</h3>
                    <p>{{ $question->answer }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Contact Section --}}
<section id="contact" class="contact section">
    <div class="container">
        <h2>{{ json_decode($sections->contact)->title }}</h2>
        <div class="contact-info">
            <p>Email: {{ json_decode($sections->contact)->email }}</p>
            <p>Phone: {{ json_decode($sections->contact)->phone }}</p>
            <p>Address: {{ json_decode($sections->contact)->address }}</p>
        </div>
        <form action="{{ route('contact.send') }}" method="POST">
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
        <p>{{ json_decode($sections->footer)->text }}</p>
        <nav>
            @foreach(json_decode($sections->footer)->links as $link)
                <a href="{{ $link->url }}">{{ $link->label }}</a>
            @endforeach
        </nav>
    </div>
</footer>

</body>
</html>
