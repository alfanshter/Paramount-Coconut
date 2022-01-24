<script>
    export default{
        methods : {
            scrollTop (){
                document.body.scrollTop = 0; //Safari Browser
                document.documentElement.scrollTop = 0; // Chrome Browser
                $('.mobile-nav-toggle').click();
            },
            recompileSlider(){
                new Swiper(".testimonials-slider", {
                    speed: 600,
                    loop: true,
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false,
                    },
                    slidesPerView: "auto",
                    pagination: {
                        el: ".swiper-pagination",
                        type: "bullets",
                        clickable: true,
                    },
                    breakpoints: {
                        320: {
                            slidesPerView: 1,
                            spaceBetween: 20,
                        },

                        1200: {
                            slidesPerView: 3,
                            spaceBetween: 20,
                        },
                    },
                });
            }
        }
    }
</script>
<template>
    <div class="body-color">
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
            <div
                class="container d-flex align-items-center justify-content-between"
            >
                <h1 class="logo">
                    <img src="img/logo.png" alt="" />
                </h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

                <nav id="navbar" class="navbar">
                    <ul>
                        <li @click="scrollTop()">
                            <router-link
                                :to="{ name: 'home' }"
                                class="nav-link"
                            >
                                Home
                            </router-link>
                        </li>
                        <li @click="scrollTop()">
                            <router-link
                                :to="{ name: 'about' }"
                                class="nav-link"
                            >
                                About Us
                            </router-link>
                        </li>
                        <li @click="scrollTop()">
                            <router-link
                                :to="{ name: 'cocofiber'}"
                                class="nav-link"
                            >
                                Coco Fiber
                            </router-link>
                        </li>
                        <li @click="scrollTop()">
                            <router-link
                                :to="{ name: 'cocopeat'}"
                                class="nav-link"
                            >
                                Coco Peat
                            </router-link>
                        </li>
                        <li @click="scrollTop(),recompileSlider()">
                            <router-link
                                :to="{ name: 'charcoal'}"
                                class="nav-link"
                            >
                                Charcoal
                            </router-link>

                        </li>
                        <li >
                            <a class="nav-link scrollto" href="#contact"
                                >Contact Us</a
                            >
                        </li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
                <!-- .navbar -->
            </div>
        </header>
        <!-- End Header -->

        <router-view></router-view>
        <!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="container d-md-flex py-4">
                <div class="me-md-auto text-center text-md-start">
                    <div class="copyright">
                        &copy; Copyright
                        <strong><span>Paramount Coconuts</span></strong
                        >. All Rights Reserved
                    </div>
                    <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/ -->
                        Designed by
                        <a href="http://pws-solution.com/">pws-solution</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <a
            style="margin: 4%"
            href="https://wa.me/+6282258294190?text"
            class="back-to-top d-flex align-items-center justify-content-center"
            ><img src="img/whatsapp.png" height="80px" width="80px"
        /></a>
    </div>
</template>
