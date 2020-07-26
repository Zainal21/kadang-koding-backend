@include('Schema.site_header')


  {{-- <!-- ======= Hero Section ======= --> --}}
  <section id="hero">

    <div class="container">
      <div class="row d-flex align-items-center"">
      <div class=" col-lg-6 py-5 py-lg-0 order-2 order-lg-1" data-aos="fade-right">
        <h1>Create your dream page to life with our team behind</h1>
        <h2>Start to introduce your business to the world, what you need is to find the great team to develop your vision to life. And we are the team you are looking for</h2>
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
        <img src="{{asset('Frontend/assets/img/hero-img.png')}}" class="img-fluid" alt="">
      </div>
    </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{asset('Frontend/assets/img/clients/favicon.png')}}" class="img-fluid" alt="" data-aos="flip-right">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{asset('Frontend/assets/img/clients/Logo-Perludem-1-1024x876-1-300x257.png')}}" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="100">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{asset('Frontend/assets/img/clients/logo-uns-besar-biru.png')}}" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="200">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{asset('Frontend/assets/img/clients/logo_cw_2019_fix.png')}}" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="300">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{asset('Frontend/assets/img/clients/logoijo.jpg')}}" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="400">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{asset('Frontend/assets/img/clients/LOGOPDAM.png')}}" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="500">
            </div>
          </div>

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
          <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-right">
            <div class="card">
              <div class="card-img">
                <img src="{{asset('Frontend/assets/img/Service/marketing.png')}}" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">
                  Marketing Strategy</a></h5>
                <p class="card-text">Level up your business & scale up your network by our consultation service. Meet the professional and get the advice.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-left">
            <div class="card">
              <div class="card-img">
                <img src="{{asset('Frontend/assets/img/Service/mobile20app.png')}}" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Mobile Application</a></h5>
                <p class="card-text">When your system should go mobile, be able to send notifications, need advance gestures & utilize mobile device features, even it can work offline. Obviously go get your mobile application on hand.</p>
              </div>
            </div>

          </div>
          <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-right">
            <div class="card">
              <div class="card-img">
                <img src="{{asset('Frontend/assets/img/Service/web20dev.png')}}" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">System Development & Maintenance</a></h5>
                <p class="card-text">Need a system to scale up your business? Own a system which handle your business process automatically. For easiness, decrease cost, and increase your profit.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-left">
            <div class="card">
              <div class="card-img">
                <img src="{{asset('Frontend/assets/img/Service/web20redesign.png')}}" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Website Redesign</a></h5>
                <p class="card-text">Not satisfied with your old school site design? Make your website look stand out, trendy, and absolutely responsive ready.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-left">
            <div class="card">
              <div class="card-img">
                <img src="{{asset('Frontend/assets/img/Service/branding.png')}}" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">
                  Branding Kit</a></h5>
                <p class="card-text">Take your first step to create an awesome memorable brand. Own stationary design, business card, & other needs you want based on your brand identity. Engage your customer with your beautiful branding kit</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-left">
            <div class="card">
              <div class="card-img">
                <img src="{{asset('Frontend/assets/img/Service/companyprofile.png')}}" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">
                  Company Profile</a></h5>
                <p class="card-text">Want to gains your business profit and brand awareness? Have a professional introduction of your business to inform the prospective customer & stakeholders about the product and services you have.</p>
              </div>
            </div>
          </div>
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

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('Frontend/assets/img/portfolio/IMG_6898.PNG')}}" class="img-fluid" alt="">
             
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{asset('Frontend/assets/img/portfolio/IMG_6910.PNG')}}" class="img-fluid" alt="">
             
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('Frontend/assets/img/portfolio/IMG_6912.PNG')}}" class="img-fluid" alt="">
             
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
            <img src="{{asset('Frontend/assets/img/portfolio/IMG_6913.PNG')}}" class="img-fluid" alt="">
          
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{asset('Frontend/assets/img/portfolio/IMG_6914.PNG')}}" class="img-fluid" alt="">
          
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('Frontend/assets/img/portfolio/IMG_6915.PNG')}}" class="img-fluid" alt="">
           
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{asset('Frontend/assets/img/portfolio/IMG_6916.PNG')}}" class="img-fluid" alt="">
           
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{asset('Frontend/assets/img/portfolio/IMG_6918.PNG')}}" class="img-fluid" alt="">
              
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{asset('Frontend/assets/img/portfolio/IMG_6925.PNG')}}" class="img-fluid" alt="">
              <div class="portfolio-links">
            
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->   

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Let's have a talk!</h2>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box" data-aos="fade-up">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>Kuyudan Rt 2 Rw 5, Makamhaji, Kartasura, Sukoharjo, Jawa Tengah</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@kadangkoding.com<br></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+62 85641419474<br></p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-up">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  

    @include('Schema.site_footer')