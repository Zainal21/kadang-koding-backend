@include('Schema.site_header')


  {{-- <!-- ======= Hero Section ======= --> --}}
  <section id="hero">

    <div class="container">
      <div class="row d-flex align-items-center"">
      <div class=" col-lg-6 py-5 py-lg-0 order-2 order-lg-1" data-aos="fade-right">
       <h1>{{$setting->tagline}}</h1>
        <h2>{{$setting->deskripsi}}</h2>
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
      <img src="{{\Storage::url($setting->Hero_cover)}}" class="img-fluid" alt="">
      </div>
    </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">
        @foreach ($client as $item)
          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
            <img src="{{\Storage::url($item->logo)}}" class="img-fluid" alt="" data-aos="flip-right">
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section><!-- End Clients Section -->

   

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Services</h2>
        </div>

        <div class="row">
          @foreach ($service as $item)
          <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-right">
            <div class="card">
              <div class="card-img">
              <img src="{{\Storage::url($item->icon)}}" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">
                {{$item->nama_service}}</a></h5>
                <p class="card-text">{{$item->deskripsi}}</p>
              </div>
            </div>
          </div>

          @endforeach
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Portfolio</h2>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Compay Profile</li>
              <li data-filter=".filter-card">E-Commerce</li>
              <li data-filter=".filter-web">Mobile App</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">
        @foreach ($portfolio as $item)
        <div class="col-lg-4 col-md-6 portfolio-item {{$item->kategori}}">
            <div class="portfolio-wrap">
            <img src="{{\Storage::url($item->gambar)}}" class="img-fluid" alt="">
             
              <div class="portfolio-info">
                <h4>{{$item->nama_project}}</h4>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </section><!-- End Portfolio Section -->   

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Let's have a talk!</h2>
        </div>

        <div class="row">

          <div class="col-lg-12">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box" data-aos="fade-up">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                <p>{{$setting->alamat}}</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>{{$setting->email}}<br></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>{{$setting->phone}}<br></p>
                </div>
              </div>
            </div>

          </div>

          

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  

    @include('Schema.site_footer')