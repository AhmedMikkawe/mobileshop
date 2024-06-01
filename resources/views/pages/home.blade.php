@extends('layout')
@section('content')
  <!-- Carousel -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="false" data-aos="fade-up">
    <ol class="carousel-indicators">
      @foreach ($promotions as $index => $promotion)
        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $index }}" class="active"></li>
      @endforeach
    </ol>
    <div class="carousel-inner">
      @foreach ($promotions as $index => $promotion)
        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
          <img src="{{ asset('storage/' . $promotion->image) }}" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h5 class="carousel-heading">{{ $promotion->title }}</h5>
            <p class="d-none d-md-block carousel-paragraph">{{ $promotion->description }}</p>
            <a class="badge badge-pill p-3 carousel-btn" href="{{ $promotion->link }}">Learn more</a>
          </div>
        </div>
      @endforeach
    </div>
  </div>

  <section class="container mt-5" data-aos="fade-up">
    <div class="row">
      <div class="col-md-9">
        <h2>Riparazione e Assistenza iPhone, Mac, PC e Tablet nella città di Milano.</h2>
        <p class="font-weight-bold">Per noi la felicità dei nostri clienti è la massima priorità. Il nostro impegno per la riparazione e l'assistenza di iPhone e Mac si basa sulla soddisfazione garantita, assicurando che ogni dispositivo riparato ritorni alle sue prestazioni ottimali. La soddisfazione dei nostri clienti è al centro del nostro servizio di riparazione.</p>
        <a href="#contact-us" class="badge badge-pill p-3 primary-btn">Contattaci</a>
      </div>
      <div class="col-md-3">
        <img src="{{ asset('images/brokenphone.png') }}" class="img-fluid" alt="Our Vision">
      </div>
    </div>
  </section>

  @if (count($services) > 0)
    <!-- Services Section -->
    <section class="container-fluid mt-5 p-3" id="services" data-aos="fade-up">
      <h2 class="text-center section-title">I nostri servizi</h2>
      <div class="container">
        <div class="row mt-4">
          @foreach ($services as $service)
            <div class="col-md-4 mt-3" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{ $service->title }}</h5>
                  <p class="card-text">{{ $service->description }}</p>
                  <a href="{{ route('pages.service', $service->id) }}" class="badge badge-pill p-3 primary-btn">Saperne di più</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>
  @endif

  <!-- Section with Title, Paragraph, and Image -->
  <section class="container mt-5" data-aos="fade-up">
    <div class="row">
      <div class="col-md-8">
        <h2>NEGOZIO DI RIPARAZIONE DISPOSITIVI CELLULARI E TABLET CONVENIENTE</h2>
        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites. During the meeting you will receive plenty of information concerning the most effective solutions for personal and property protection.</p>
      </div>
      <div class="col-md-4">
        <div class="slider-container">
          <div class="slider-image before" style="background-image: url('{{ asset('images/phone-before-fix.png') }}');"></div>
          <div class="slider-image after" style="background-image: url('{{ asset('images/phone-after-fix.png') }}');"></div>
          <div class="slider-handle"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- What They Say About Us Section -->
  @if (count($testimonials) != 0)
    <section class="container mt-5" id="testimonials" data-aos="fade-up">
      <h2 class="text-center section-title">Cosa dicono di noi</h2>
      <div class="owl-carousel owl-theme mt-4">
        @foreach ($testimonials as $testimonial)
          <div class="item">
            <div class="testimonial p-3 rounded-lg position-relative">
              <p>{{ $testimonial->content }}</p>
              <div class="testimonial-name font-weight-bold position-absolute">{{ $testimonial->name }}</div>
            </div>
          </div>
        @endforeach
      </div>
    </section>
  @endif

  <div class="container section-container mt-5" data-aos="fade-up">
    <div class="row">
      <div class="col-md-6 image-container">
        <img src="{{ asset('images/the_girl.png') }}" class="w-100" alt="Placeholder Image">
      </div>
      <div class="col-md-6 p-3">
        <h2>I nostri servizi di supporto tecnico premium</h2>
        <p>Offriamo un servizio di riparazione premium nella città di Milano. Con la nostra attenzione ai dettagli e l'utilizzo di componenti di alta qualità, garantiamo che ogni riparazione di Smartphone, MAC, PC e Apple Watch venga eseguita alla perfezione. Scegli il meglio per i tuoi dispositivi.</p>
        <ul class="image_list flex-wrap d-flex">
          <li class="hint-point mb-3">Orologio intelligente</li>
          <li class="hint-point mb-3">Porta di ricarica</li>
          <li class="hint-point mb-3">Batteria</li>
          <li class="hint-point mb-3">Telecamera</li>
          <li class="hint-point mb-3">Pulsante di accensione</li>
          <li class="hint-point mb-3">Schermo</li>
          <li class="hint-point mb-3">Sensori</li>
          <li class="hint-point mb-3">Non si accende?</li>
        </ul>
      </div>
    </div>
  </div>
@endsection
