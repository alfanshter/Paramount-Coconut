{{-- menghubungkan dengan template master --}}
@extends('master')

{{-- isi bagian konten --}}
@section('konten')
<main id="main">
   <!-- ======= Our Product Export Section ======= -->
  <section id="testimonials" class="testimonials" >
  <div class="container" data-aos="fade-left" >

    <div class="section-title" data-aos="fade-up" data-aos-duration="1000">
      <h2>Products</h2>
      <h3>Our Product For <span>Export</span></h3>
    </div>

    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-duration="2000">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <img
          src="{{asset('img/slider/silder1.png')}}"
            class="d-block w-100"
            alt="..."
            height="100%"
          />
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img
            src="{{asset('img/slider/slider2.png')}}"
            class="d-block w-100"
            alt="..."
            height="100%"
          />
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img
            src="{{asset('img/slider/slider3.png')}}"
            class="d-block w-100"
            alt="..."
            height="100%"
          />
          </div>
        </div><!-- End testimonial item -->

       
      </div>
      <div class="swiper-pagination"></div>
    </div>

   </div>
   </section>
  <!-- End Our Product Export Section -->


      <!-- ======= Spesifikasi Section ======= -->
      <section id="spesifikasi" class="padd-section text-center">

        <div class="container" data-aos="fade-up" >
          <div class="section-title text-center">
            <h2>Spec</h2>
            <h3>Product <span>Specification</span></h3>
          </div>
  
          <div class="row" style="background-color: black">
            {{-- class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" --}}
  
            <div class="col-md-6 col-md-4 col-lg-4" data-aos="zoom-in" data-aos-delay="100" >
              <div class="spesifikasi-block bottom" style="background-color: white">
               <div >
                <div class="icon-box">
                  <img   src="{{asset('img/icon/cocopeat.png')}}" width="50px" class="img-responsive" alt="img">
                  <h4 class="title">
                    <a href="" style="color:black">Coco Peat</a>
                  </h4>
                 
                </div>
               
               </div>
                <div class="spesifikasi-content">
                  <img   src="{{asset('img/spesifikasi/spek_cocopeat.png')}}" class="img-responsive gambar" alt="img">
        
                </div>
              </div>
            </div>
  
            <div class="col-md-6 col-md-4 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
              <div class="spesifikasi-block bottom" style="background-color: white">
               <div >
                <div class="icon-box">
                  <img   src="{{asset('img/icon/cocofiber.png')}}" width="50px" class="img-responsive" alt="img">
                  <h4 class="title">
                    <a href="" style="color:black">Coco Fiber</a>
                  </h4>
                 
                </div>
               
               </div>
                <div class="spesifikasi-content">
                  <img   src="{{asset('img/spesifikasi/spek_cocofiber.png')}}" class="img-responsive gambar" alt="img">
        
                </div>
              </div>
            </div>

            <div class="col-md-6 col-md-4 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
              <div class="spesifikasi-block bottom" style="background-color: white">
               <div >
                <div class="icon-box">
                  <img   src="{{asset('img/icon/charcoal.png')}}" width="50px" class="img-responsive" alt="img">
                  <h4 class="title">
                    <a href="" style="color:black">Charcoal</a>
                  </h4>
                 
                </div>
               
               </div>
                <div class="spesifikasi-content">
                  <img   src="{{asset('img/spesifikasi/spek_charcoal.png')}}" class="img-responsive gambar" alt="img">
        
                </div>
              </div>
            </div>
 
  
          </div>
        </div>
      </section><!-- END PRODUCT NEW Section -->
  
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="section-title">
          <h2>Services</h2>
          <h3>Why <span>Us ?</span></h3>
          <!-- <p>
            Ut possimus qui ut temporibus culpa velit eveniet modi omnis est
            adipisci expedita at voluptas atque vitae autem.
          </p> -->
        </div>

        <div class="row">
          <div
            class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="100"
          >
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title">
                <a href="">Commiting to Serve Only Best Quality</a>
              </h4>
              <p class="description">
                We are commiting to always deliver best quality products for
                your needs
              </p>
            </div>
          </div>

          <div
            class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="100"
          >
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">We Control Our Own Factory</a></h4>
              <p class="description">
                Do not worry because all the quality will be managed in the
                right hand and right SOP to create best quality products at
                all time
              </p>
            </div>
          </div>

          <div
            class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="100"
          >
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title">
                <a href="">Well Experienced Since 2015</a>
              </h4>
              <p class="description">
                We have been work in coconut based products since 2015 we
                start first at exporting coconut, charcoal,then we expand to
                coconut fiber and coconut pent
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    {{-- <section id="features" class="features">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-6 col-6">
            <div class="icon-box">
              <i class="ri-store-line" style="color: #ffbb2c"></i>
              <h3><a href="">Lorem Ipsum</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="icon-box">
              <i class="ri-bar-chart-box-line" style="color: #5578ff"></i>
              <h3><a href="">Dolor Sitema</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-calendar-todo-line" style="color: #e80368"></i>
              <h3><a href="">Sed perspiciatis</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="ri-paint-brush-line" style="color: #e361ff"></i>
              <h3><a href="">Magni Dolores</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-database-2-line" style="color: #47aeff"></i>
              <h3><a href="">Nemo Enim</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-gradienter-line" style="color: #ffa76e"></i>
              <h3><a href="">Eiusmod Tempor</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-file-list-3-line" style="color: #11dbcf"></i>
              <h3><a href="">Midela Teren</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-price-tag-2-line" style="color: #4233ff"></i>
              <h3><a href="">Pira Neve</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-anchor-line" style="color: #b2904f"></i>
              <h3><a href="">Dirada Pack</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-disc-line" style="color: #b20969"></i>
              <h3><a href="">Moton Ideal</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-base-station-line" style="color: #ff5828"></i>
              <h3><a href="">Verdo Park</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-fingerprint-line" style="color: #29cc61"></i>
              <h3><a href="">Flavor Nivelanda</a></h3>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
    <!-- End Features Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="flip-left" data-aos-delay="100">
        <div class="text-center">
          <h3>Call To Action</h3>
          <p>
            we're very approachable and would love to  speak to you. feel free to call. send us an email, tweet us or simply complete the enquiry form
          </p>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>
      </div>
    </section>
    <!-- End Cta Section -->

{{-- 
    <!-- ======= Lab Test Section ======= -->
    <section id="labtest" class="services">
      <div class="container">
        <div class="section-title">
          <h2>Lab Test</h2>
          <h3>Our <span>Lab Test ?</span></h3>
          <!-- <p>
            Ut possimus qui ut temporibus culpa velit eveniet modi omnis est
            adipisci expedita at voluptas atque vitae autem.
          </p> -->
        </div>

        <div class="row">
          <div
            class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0"
          >
          <div class="icon-box">
            <img   src="{{asset('img/labtest/test1.jpeg')}}" width="100%" alt="" he>
          </div>

        </div>

          <div
            class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0"
          >
            <div class="icon-box">
              <img   src="{{asset('img/labtest/test1.jpeg')}}" width="100%" alt="" he>
            </div>
          </div>

         
        </div>
      </div>
    </section>
    <!-- End Lab Test Section --> --}}

    <!-- ======= Shipment Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-right" >
        <div class="section-title">
          <h2>Shipment</h2>
          <h3>Check our <span>Shipment</span></h3>
        </div>

        <div class="row portfolio-container">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-aos="zoom-in" >
            <img
              src="{{asset('img/shipment/image1.png')}}"
              class="img-fluid"
              alt=""
            />
            <div class="portfolio-info">
              <p>To Lebanon</p>
              <a
              src="{{asset('img/shipment/image1.png')}}"
                data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link"
                title="App 1"
                >
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-aos="fade-right" >
            <img
              src="{{asset('img/shipment/image2.png')}}"
              class="img-fluid"
              alt=""
            />
            <div class="portfolio-info">
              <p>To Saudi Arabia</p>
              <a
              src="{{asset('img/shipment/image2.png')}}"
                data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link"
                title="App 1"
                >
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-aos="fade-right" >
            <img
            src="{{asset('img/shipment/image3.png')}}"
            class="img-fluid"
            alt=""/>
                        <div class="portfolio-info">
              <p>To Germany</p>
           </a>
              <a
                href="portfolio-details.html"
                class="details-link"
                title="More Details"
                ><i class="bx bx-link"></i
              ></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-aos="fade-right" >
            <img
            src="{{asset('img/shipment/image4.png')}}"
            class="img-fluid"
            alt=""/>
                        <div class="portfolio-info">
              <p>To Usa</p>
              <a
                href="portfolio-details.html"
                class="details-link"
                title="More Details"
                ><i class="bx bx-link"></i
              ></a>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- End Shipment Section -->

 <!-- ======= Our Product Pictures Section ======= -->
 <section id="testimonials" class="testimonials">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Products</h2>
      <h3>Our Product <span>Pictures</span></h3>
    </div>

    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <img
          src="{{asset('img/produk/image1.png')}}"
            class="d-block w-100"
            alt="..."
            height="100%"
          />
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img
          src="{{asset('img/produk/image2.png')}}"
            class="d-block w-100"
            alt="..."
            height="100%"
          />
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img
          src="{{asset('img/produk/image3.png')}}"
            class="d-block w-100"
            alt="..."
            height="100%"
          />
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="testimonial-item">
              <img
            src="{{asset('img/produk/image4.png')}}"
              class="d-block w-100"
              alt="..."
              height="100%"
            />
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="testimonial-item">
              <img
            src="{{asset('img/produk/image5.png')}}"
              class="d-block w-100"
              alt="..."
              height="100%"
            />
            </div>
          </div>
        </div><!-- End testimonial item -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section><!-- End Our Product Pictures Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team" style="background-color: black">
      <div class="container" fade-up >
        <div class="section-title">
          <h2>Team</h2>
          <h3>Our Hardworking <span>Team</span></h3>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-right">
            <div class="member">
              <div class="member-img">
                <img
                  src="{{asset('img/person/person-marketing.jpeg')}}"
                  class="img-fluid"
                  alt=""
                />
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Chief Executive Officer</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-left">
            <div class="member">
              <div class="member-img">
                <img
                src="{{asset('img/person/person-production.jpeg')}}"
                class="img-fluid"
                  alt=""
                />
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>head of charcoal production</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-right">
            <div class="member">
              <div class="member-img">
                <img
                src="{{asset('img/person/person-qualitycontrol.jpeg')}}"
                class="img-fluid"
                  alt=""
                />
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>CTO</h4>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- End Team Section -->

    <!-- ======= F.A.Q Section ======= -->
    {{-- <section id="faq" class="faq">
      <div class="container">
        <div class="section-title">
          <h2>F.A.Q</h2>
          <h3>Frequently Asked <span>Questions</span></h3>
        </div>

        <ul class="faq-list">
          <li>
            <div
              data-bs-toggle="collapse"
              class="collapsed question"
              href="#faq1"
            >
              Non consectetur a erat nam at lectus urna duis?
              <i class="bi bi-chevron-down icon-show"></i
              ><i class="bi bi-chevron-up icon-close"></i>
            </div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id
                volutpat lacus laoreet non curabitur gravida. Venenatis lectus
                magna fringilla urna porttitor rhoncus dolor purus non.
              </p>
            </div>
          </li>

          <li>
            <div
              data-bs-toggle="collapse"
              href="#faq2"
              class="collapsed question"
            >
              Feugiat scelerisque varius morbi enim nunc faucibus a
              pellentesque? <i class="bi bi-chevron-down icon-show"></i
              ><i class="bi bi-chevron-up icon-close"></i>
            </div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque
                habitant morbi. Id interdum velit laoreet id donec ultrices.
                Fringilla phasellus faucibus scelerisque eleifend donec
                pretium. Est pellentesque elit ullamcorper dignissim. Mauris
                ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <div
              data-bs-toggle="collapse"
              href="#faq3"
              class="collapsed question"
            >
              Dolor sit amet consectetur adipiscing elit pellentesque habitant
              morbi? <i class="bi bi-chevron-down icon-show"></i
              ><i class="bi bi-chevron-up icon-close"></i>
            </div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices
                sagittis orci. Faucibus pulvinar elementum integer enim. Sem
                nulla pharetra diam sit amet nisl suscipit. Rutrum tellus
                pellentesque eu tincidunt. Lectus urna duis convallis
                convallis tellus. Urna molestie at elementum eu facilisis sed
                odio morbi quis
              </p>
            </div>
          </li>

          <li>
            <div
              data-bs-toggle="collapse"
              href="#faq4"
              class="collapsed question"
            >
              Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
              <i class="bi bi-chevron-down icon-show"></i
              ><i class="bi bi-chevron-up icon-close"></i>
            </div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque
                habitant morbi. Id interdum velit laoreet id donec ultrices.
                Fringilla phasellus faucibus scelerisque eleifend donec
                pretium. Est pellentesque elit ullamcorper dignissim. Mauris
                ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <div
              data-bs-toggle="collapse"
              href="#faq5"
              class="collapsed question"
            >
              Tempus quam pellentesque nec nam aliquam sem et tortor
              consequat? <i class="bi bi-chevron-down icon-show"></i
              ><i class="bi bi-chevron-up icon-close"></i>
            </div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Molestie a iaculis at erat pellentesque adipiscing commodo.
                Dignissim suspendisse in est ante in. Nunc vel risus commodo
                viverra maecenas accumsan. Sit amet nisl suscipit adipiscing
                bibendum est. Purus gravida quis blandit turpis cursus in
              </p>
            </div>
          </li>

          <li>
            <div
              data-bs-toggle="collapse"
              href="#faq6"
              class="collapsed question"
            >
              Tortor vitae purus faucibus ornare. Varius vel pharetra vel
              turpis nunc eget lorem dolor?
              <i class="bi bi-chevron-down icon-show"></i
              ><i class="bi bi-chevron-up icon-close"></i>
            </div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris
                vitae ultricies leo integer malesuada nunc vel. Tincidunt eget
                nullam non nisi est sit amet. Turpis nunc eget lorem dolor
                sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                Pellentesque diam volutpat commodo sed egestas egestas
                fringilla phasellus faucibus. Nibh tellus molestie nunc non
                blandit massa enim nec.
              </p>
            </div>
          </li>
        </ul>
      </div>
    </section> --}}
    <!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title">
          <h2>Contact</h2>
          <h3>Contact <span>Us</span></h3>
        </div>

        <div>
          <iframe
            style="border: 0; width: 100%; height: 270px"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.5119200718186!2d108.1746641147744!3d-7.18227489481446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f4f497519ccb1%3A0x2b88345d4aae224b!2sCv%20Mandiri%20Persada!5e0!3m2!1sen!2sid!4v1640295084311!5m2!1sen!2sid"
            frameborder="0"
            allowfullscreen
          ></iframe>
        </div>

        <div class="row mt-5" >
          <div class="col-lg-4">
            <div class="info" style="background-color: black">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Jalan Raya Ciawi No. 179, Desa Tanjung Mekar, Neglasari, Jamanis, West Java, Indonesia</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>sales@charcoaloka.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+6282258294190</p>
              </div>
            </div>
          </div>

      
        </div>
      </div>
    </section>
    <!-- End Contact Section -->
  </main>

@endsection
{{-- end bagian konten --}}