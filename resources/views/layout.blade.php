<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mobile shop</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body class="color-website-primary">
     <!-- Loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

  <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 40px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('home')}}#testimonials">Testimonials</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}#contact-us">Contact us</a></li>
            </ul>
        </div>
    </div>
</nav>

  @yield('content')
  <!-- Footer -->

  <footer class="footer mt-5" id="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-md-6 contact-info">
                <h4>Contact Information</h4>
                <p><strong>Address:</strong> Via Giambellino, 41A, Milano, MI, Italia</p>
                <p><strong>Phone:</strong><a href="tel:+393453338894" class="text-white">+393453338894</a></p>
                <p><strong>Email:</strong><a href="mailto:Hanyelmasry71@gmail.com" class="text-white">Hanyelmasry71@gmail.com</a></p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11195.868417782296!2d9.148079!3d45.450319!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c3c4ef2152bf%3A0xbc43931f95897959!2zVmlhIEdpYW1iZWxsaW5vLCA0MUEsIDIwMTQ2IE1pbGFubyBNSSwg2KXZiti32KfZhNmK2Kc!5e0!3m2!1sar!2sus!4v1717161613042!5m2!1sar!2sus" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-6 contact-form">
                <h4>Contact Us</h4>
                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Your Message"></textarea>
                    </div>
                    <button type="submit" class="btn  form-button">Send</button>
                </form>
            </div>
        </div>
    </div>
</footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
