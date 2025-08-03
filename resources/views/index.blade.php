<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $arr['left']['your_short_name'] }} - {{ $arr['center']['title_slide_1'] }} | {{ $arr['left']['self_description'] }}</title>

    <!-- Third Party Plugins -->
    <link rel="stylesheet" type="text/css" href="css/vendor.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Roboto:wght@400;700;900&family=Six+Caps&display=swap" rel="stylesheet">
    <!-- custom style -->
    <link rel="stylesheet" href="style.css">

  </head>
  <body data-bs-theme="dark">
    <div class="container-fluid p-0">
      <div class="row g-0">
        <!-- Sidebar -->
        <div class="col-lg-3 position-fixed z-1 h-100" data-aos="slide-right" data-aos-delay="200">
          <div class="sidebar p-4 p-lg-5 vh-100 d-flex flex-column position-relative">
            <a href="index.html" class="logo mb-0 text-decoration-none">{{ $arr['left']['your_short_name'] }}</a>
            <p class="bio mt-4 d-none d-lg-block" style="max-width: 200px;">
              {{ $arr['left']['self_description'] }}
            </p>
            <!-- <p style="max-width: 200px;">Free HTML Template by <a href="https://templatesjungle.com/" target="_blank" class="text-decoration-none">TemplatesJungle</a></p> -->
            
            <div class="social-icons mt-auto mb-4 d-none d-lg-flex flex-column">
               <a href="{{ $arr['left']['link_fb'] }}" target="_blank" class="social-icon" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{ $arr['left']['link_ig'] }}" target="_blank" class="social-icon" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="{{ $arr['left']['link_linkedin'] }}" target="_blank" class="social-icon" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            </div>
            
            <div class="personal-info d-none d-lg-flex">
              <p class="job-title mb-2">{{ $arr['left']['your_job'] }}</p>
              <p class="location">{{ $arr['left']['where_are_you_from'] }}</p>

            </div>
          </div>
        </div>

        <div class="col-lg-9 offset-lg-3">
          <div class="row">
            
            <!-- Main Content / data-aos="fade-up" --> 
            <div id="intro" class="col-lg-8 position-relative d-flex flex-column align-items-center"> 
              <div class="pt-4 pt-lg-5 px-4 px-lg-5 w-100 mt-5">
                
                <!--  slide-clip slide-in -->
                <div class="swiper banner-slider slide-in mt-5 mt-lg-0 ">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="banner-content d-flex flex-column">
                        <span class="introduction mb-3 d-block">{{ $arr['center']['greeting_slide_1'] }}</span>
                        <h2 class="name mb-4 txt-fx slide-up">{{ $arr['center']['headline_slide_1'] }}</h2>
                        <p class="description mb-4">
                          {{ $arr['center']['sub_headline_slide_1'] }}
                        </p>
                       <a href="{{ $arr['center']['cta_link_slide_1'] }}" target="_blank" class="cta-link d-inline-block mb-5">{{ $arr['center']['cta_title_slide_1'] }}</a>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="banner-content d-flex flex-column">
                        <span class="introduction mb-3 d-block">{{ $arr['center']['greeting_slide_2'] }}</span>
                        <h2 class="name mb-4 txt-fx slide-up">{{ $arr['center']['headline_slide_2'] }}</h2>
                        <p class="description mb-4">
                          {{ $arr['center']['sub_headline_slide_2'] }}
                        </p>
                        <a href="{{ $arr['center']['cta_link_slide_2'] }}" target="_blank" class="cta-link d-inline-block mb-5">{{ $arr['center']['cta_title_slide_2'] }}</a>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="banner-content d-flex flex-column">
                        <span class="introduction mb-3 d-block">{{ $arr['center']['greeting_slide_3'] }}</span>
                        <h2 class="name mb-4 txt-fx slide-up">{{ $arr['center']['headline_slide_3'] }}</h2>
                        <p class="description mb-4">
                          {{ $arr['center']['sub_headline_slide_3'] }}
                        </p>
                        <a href="{{ $arr['center']['cta_link_slide_3'] }}" target="_blank" class="cta-link d-inline-block mb-5">{{ $arr['center']['cta_title_slide_3'] }}</a>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="banner-content d-flex flex-column">
                        <span class="introduction mb-3 d-block">{{ $arr['center']['greeting_slide_4'] }}</span>
                        <h2 class="name mb-4 txt-fx slide-up">{{ $arr['center']['headline_slide_4'] }}</h2>
                        <p class="description mb-4">
                          {{ $arr['center']['sub_headline_slide_4'] }}
                        </p>
                        <a href="{{ $arr['center']['cta_link_slide_4'] }}" target="_blank" class="cta-link d-inline-block mb-5">{{ $arr['center']['cta_title_slide_4'] }}</a>
                      </div>
                    </div>
                    
                  </div>
                </div>
                
              </div>
              
              <nav class="section-nav swiper banner-nav-slider pt-3 pt-lg-4 px-4 px-lg-5 w-100" style="opacity: 1">
                <ul class="swiper-wrapper">
                  <li class="swiper-slide"><span>01</span> {{ $arr['center']['title_slide_1'] }}</li>
                  <li class="swiper-slide"><span>02</span> {{ $arr['center']['title_slide_2'] }}</li>
                  <li class="swiper-slide"><span>03</span> {{ $arr['center']['title_slide_3'] }}</li>
                  <li class="swiper-slide"><span>04</span> {{ $arr['center']['title_slide_4'] }}</li>
                </ul>
              </nav>
              <div class="swiper image-slider" data-aos="fade-up" data-aos-delay="1000" >
                <div class="swiper-wrapper">

                  <div class="swiper-slide">
                    <img
                        class="hero-image position-absolute top-0 end-0 img-fluid mb-5 opacity-25 vh-100"
                        src="{{ $arr['center']['image_url_slide_1'] }}"
                        alt="Kitchen interior"
                      >
                  </div>
                  <div class="swiper-slide">
                    <img
                        class="hero-image position-absolute top-0 end-0 img-fluid mb-5 opacity-25 vh-100"
                        src="{{ $arr['center']['image_url_slide_2'] }}"
                        alt="Kitchen interior"
                      >
                  </div>
                  <div class="swiper-slide">
                    <img
                        class="hero-image position-absolute top-0 end-0 img-fluid mb-5 opacity-25 vh-100"
                        src="{{ $arr['center']['image_url_slide_3'] }}"
                        alt="Kitchen interior"
                      >
                  </div>
                  <div class="swiper-slide">
                    <img
                        class="hero-image position-absolute top-0 end-0 img-fluid mb-5 opacity-25 vh-100"
                        src="{{ $arr['center']['image_url_slide_4'] }}"
                        alt="Kitchen interior"
                      >
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Skills Section -->
            <div class="col-lg-4">
              <div class="p-4 p-lg-5 vh-100">
                <div class="skill" >
                  <span class="skill-number d-block">01</span>
                  <h3>{{ $arr['right']['job_title_1'] }}</h3>
                  <p>{{ $arr['right']['job_description_1'] }}</p>
                </div>
                
                <div class="skill" >
                  <span class="skill-number d-block">02</span>
                  <h3>{{ $arr['right']['job_title_2'] }}</h3>
                  <p>{{ $arr['right']['job_description_2'] }}</p>
                </div>
                
                <div class="skill" >
                  <span class="skill-number d-block">03</span>
                  <h3>{{ $arr['right']['job_title_3'] }}</h3>
                  <p>{{ $arr['right']['job_description_3'] }}</p>
                </div>
                
                <!-- Mobile-only content -->
                <div class="d-lg-none mt-5">
                  <hr class="sidebar-divider">
                  <p class="job-title mb-2">{{ $arr['left']['your_job'] }}</p>
                  <p class="location mb-4">{{ $arr['left']['where_are_you_from'] }}</p>
                  <!-- <a href="#" class="cta-button d-block text-center">VIEW ALL WORKS</a> -->
                  <div 
                    style="display: flex;
                          flex-direction: row;
                          gap: 20px;
                          justify-content: center;">
                    <a href="{{ $arr['left']['link_fb'] }}" target="_blank" class="social-icon" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{ $arr['left']['link_ig'] }}" target="_blank" class="social-icon" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="{{ $arr['left']['link_linkedin'] }}" target="_blank" class="social-icon" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- CTA Button (Desktop) -->
            <div class="col-lg-3  position-fixed bottom-0 end-0 p-0" style="z-index: 8;">
              <!-- <a href="#" class="cta-button d-block">VIEW ALL WORKS</a> -->
              <button class="btn-special w-100" onclick="window.location.href = '{{ $arr['right']['contact_url'] }}'" data-aos="fade-up" data-aos-delay="800" data-aos-anchor-placement="top-bottom">
                  <span class="text-container">
                      <span class="original-text">{{ $arr['right']['contact_text'] }}</span>
                      <span class="hover-text">{{ $arr['right']['contact_text'] }}</span>
                  </span>
              </button>
            </div>

        
          
          </div>
        </div>

      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/script.js"></script>

  </body>
</html>