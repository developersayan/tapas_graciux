<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gracieux Adventure hub || HomePage</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Gracieux is not just a word, but a discipline of self-improvement. It offers you a good quality exercise board to enhance your climbing ability."/>
    <meta name="keywords" content="gracieux, adventure, hangboard, fingerboard, exercise, climbing, first aid, firstaid, take charge, save lives, chest gear, hammer holder, himabaha, rock climbing, tapas, tapas paul, alit portable hangboard, portable,hangboard" />
    <meta name="author" content="Gracieux Adventure hub" />
    <link rel="shortcut icon" type="image/png" href="{{ URL::to('public/logo.png')}}" />
    <meta property="og:locale" content="en-US" />
    <meta property="og:site_name" content="Gracieux Adventure hub" />
    <meta property="og:image" content="{{ URL::to('public/logo.png')}}" />


    <meta property="og:image:width" content="160" />
    <meta property="og:image:height" content="60" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Home - Gracieux Adventure hub" />
    <meta property="og:description" content="IGracieux is not just a word, but a discipline of self-improvement. It offers you a good quality exercise board to enhance your climbing ability." />
    <meta property="og:url" content="{{url()->current()}}" />




       <style type="text/css">
/* Style for the preloader */
#preloader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: black;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
    overflow: hidden; 
}

 #preloader img {
    width: 100px;
}

/* Style for the main content */
#content {
    display: none; 
}

.placeholder-with-asterisk::placeholder {
    color: #6c757d; /* Default placeholder color */
}

.placeholder-with-asterisk::after {
    content: '*';
    color: red;
    position: absolute;
    margin-left: -10px; /* Adjust as needed */
    padding-left: 5px;
}

   </style>

   @include('includes.front_end_css')
</head>

<body>
    






    @include('includes.navbar')

    <div id="preloader">
        <img src="{{asset('public/loader.gif')}}" alt="Loading...">
    </div>

    <!-- Carousel Start -->
    <div id="content" style="display: none;">
    <div class="container-fluid p-0 ">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                
                @foreach(@$banner as $key => $value)
                <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                    <img class="w-100"  src="{{ URL::to('storage/app/public/banner')}}/{{@$value->image}}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h3 class="display-5 text-uppercase text-white mb-4 animated slideInDown" >{{@$value->heading_banner}}</h3>
                                    {{-- <p class="fs-5 text-white mb-4 pb-2 mx-sm-5 animated slideInUp">{{@$value->heading_description}}</p> --}}
                                    <div class="carousel-caption d-flex justify-content-center flex-column" style="margin-top:-10px !important;">
                                        <a href="{{route('product.page')}}" type="button" class="btn custom-btn py-3 px-5 custom-padding animated slideInDown mt-auto">Explore the product</a>
                                    </div>
                                    {{-- <a href="" class="btn custom-btn py-3 px-5 animated slideInDown">Explore the product</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <div class="container-fluid container-service py-5" style="background: #27221F;">
        <div class="container ">
            <div class="row g-4">
                <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                    <div class="text-center">
                        <h2 class="default-color sagacity_text">GRACIEUX - SAGACITY</h2>
                        <p class="text-white sagacity_text_p">A discipline to strengthen yourself</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>


    <!-- About Start -->
    <div class="container-fluid container-service " style="background: #2A8DAC;">
        <div class="container ">
            
            <div class="row g-4 py-5">
                
                <div class="col-lg-6 col-md-6 wow zoomIn" data-wow-delay="0.5s">
                    <h3 class="text-white about_text" style="margin-bottom: 30px;">Dear visitor,</h3>
                    <p class="text-white about_text">Welcome to the GRACIEUX family, a discipline that helps you strengthen yourself. As climbing enthusiasts, we prefer to speak in person about our climbing merchandise.
                    When the pandemic hit us all hard, and we were no spared. We found ourselves spending more time at home than ever before. But we didn't let it dampen our spirits. Instead, we prioritized on training and staying active. <p class="text-white about_text">The idea for the hangboard started to take shape as we spent more time training. We do not spend endless hours on the natural rocks and/or in climbing gyms. Something that would look great in any climber’s home gym or apartment and the GRACIEUX was born. This platform not only offers a health solution, but also assists you in broadening your knowledge and understanding of the environment to the next level. 
                    Join us in our quest to conquer your dreams.</p></p>
                </div>

                <div class="col-lg-6 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    
                        <img src="{{ URL::to('public/owner.png')}}" class="mb-3" style="width: 100%;height: auto;">
                    
                </div>

               </div>
        </div>
    </div>
    <!-- Service End -->
<div class="gtco-testimonials py-5" style="background: #CFD2D7;">
<div class="container">
            <div class="row ">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-73">
                        <h3 class="heading_tag">Wall of love</h3>
                        <p class="heading_description_tag">What our customers say about our merchandise.</p>
                    </div>
                </div>
            </div>
        </div>
  <div class="owl-carousel owl-carousel1 owl-theme">
    

    @foreach(@$testimonial as $val)
    <div>
      <div class=""><img src="{{ URL::to('storage/app/public/testimonial')}}/{{@$val->image}}" style="height:auto" alt="">
      </div>
    </div>
    @endforeach
  </div>
</div>










    <!-- Service Start -->
    <div class="container-xxl py-5">
        {{-- <div class="container"> --}}
            <div class="wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <h3 class="cat_text" style="font-family: Arial, Helvetica, sans-serif;">Trending In Fitness Collection</h3>
            </div>
        {{-- </div> --}}

        <div class="gtco-testimonials">
        
          <div class="owl-carousel owl-carousel2 owl-theme">
            

            @foreach(@$category_one as $val)
            <a href="{{route('product.details.page',$val->id)}}">
            <div>
              <div class=""><img src="{{ URL::to('storage/app/public/blog')}}/{{@$val->image}}" style="height:auto" alt="">
              </div>
              <p style="font-weight:bold;color: black;margin-top: 5px;text-align: center;">{{@$val->title}}</p>
            </div>
        </a>
            @endforeach
          </div>
        </div>


    </div>


    <div class="container-fluid position-relative p-0">
    
                <div id="header-carousel1" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            

                             @foreach(@$banner_lower as $key=> $val)
                            <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                <a href="{{route('product.page')}}">
                                <img class="w-100" src="{{ URL::to('storage/app/public/banner')}}/{{@$val->image}}" style="height:auto !important;" alt="Image">
                            </a>
                                
                            </div>
                            @endforeach

                            
                            
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel1"
                data-bs-slide="prev" >
                <span class="carousel-control-prev-icon" aria-hidden="true"  style="background-color: black;"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel1"
                data-bs-slide="next" >
                <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: black;"></span>
                <span class="visually-hidden">Next</span>
            </button>
                        
                        
                    </div>
   
    </div>

    <!-- Service End -->

        <div class="container-xxl py-5">
        {{-- <div class="container"> --}}
            <div class="wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <h3 class="" style="font-family: Arial, Helvetica, sans-serif;">What's People Reading</h3>
            </div>
        {{-- </div> --}}

        <div class="gtco-testimonials">
        
          <div class="owl-carousel owl-carousel2 owl-theme">
            

            @foreach(@$category_two as $val)
            <a href="{{route('product.details.page',$val->id)}}">
            <div>
              <div class=""><img src="{{ URL::to('storage/app/public/blog')}}/{{@$val->image}}" style="height:auto" alt="">
              </div>
              <p style="font-weight:bold;color: black;margin-top: 5px;text-align: center;">{{@$val->title}}</p>
            </div>
        </a>
            @endforeach
          </div>
        </div>


    </div>

            <div class="container-xxl py-5">
        {{-- <div class="container"> --}}
            <div class="wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <h3 class="" style="font-family: Arial, Helvetica, sans-serif;">Trends Near You</h3>
            </div>
        {{-- </div> --}}

        <div class="gtco-testimonials">
        
          <div class="owl-carousel owl-carousel2 owl-theme">
            

            @foreach(@$category_three as $val)
            <a href="{{route('product.details.page',$val->id)}}">
            <div>
              <div class=""><img src="{{ URL::to('storage/app/public/blog')}}/{{@$val->image}}" style="height:auto" alt="">
              </div>
              <p style="font-weight:bold;color: black;margin-top: 5px;text-align: center;">{{@$val->title}}</p>
            </div>
        </a>
            @endforeach
          </div>
        </div>


    </div>




    <!-- Quote Start -->
    <div class="container-fluid wow fadeInUp py-5" data-wow-delay="0.1s" style="background: #2A8DAC;">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-73">
                        <h3 class="text-white contact_heading_tag">CONTACT</h3>
                        <p class="text-white contact_description_tag">If you have any questions or wishes, please do not hesitate to contact our office.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-5">

            <div class="row g-5">
                <div class="col-lg-7" style="color: white;">
                    <h6 class="mb-1 text-white contact_text_tag">ADDRESS / TELEPHONE NUMBER </h6>
                    <h6 class="mb-1 text-white contact_text_tag">Gracieux </h6>
                    <span class="mt-2 contact_text_tag">C/O Tapas Paul <br>Pearabagan, Muragacha<br> Kolkata 700110, West Bengal, India <br>
                        Tel : <a href="tel:7059509919" style="color:white" class="contact_text_tag" >+91 7059509919</a>
                    </span>
                    <br>
                    <br>
                    <p><span class="contact_text_tag">or Email : <br> <a href="mailto:info@gracieux.in" style="color:white" class="contact_text_tag" >info@gracieux.in</a> <br><a href="mailto:debabrataamazon@gmail.com" style="color:white" class="contact_text_tag" >debabrataamazon@gmail.com</a> </span></p>
                </div>
               
                <div class="col-lg-5">
                    @include('includes.message')
                    <div class="rounded h-100 d-flex align-items-center wow zoomIn" data-wow-delay="0.9s">

                        <form method="POST" action="{{route('contact.page.contact.post')}}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" class="form-control placeholder-with-asterisk bg-light border-0" placeholder="Your Are *" style="height: 55px;" name="name" required>
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control placeholder-with-asterisk bg-light border-0" placeholder="e-mail *" style="height: 55px;" required name="email">
                                </div>

                                <div class="col-12">
                                    <input type="number" class="form-control placeholder-with-asterisk bg-light border-0" placeholder="phone *" style="height: 55px;" name="phone" required>
                                </div>
                                
                                <div class="col-12">
                                    <textarea class="form-control bg-light placeholder-with-asterisk border-0" rows="5" name="message" placeholder="Your Message [50 words] *" required></textarea>
                                </div>
                                <div class="col-4" style="margin-left:auto;">
                                    <button class="btn text-white w-100 py-3" style="font-weight:bold" type="submit">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->
    <div class="container-fluid position-relative p-0">
    
                <div id="header-carousel2" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="w-100" src="{{asset('public/leave.png')}}" style="height:auto !important;" alt="Image">
                                
                            </div>
                            
                        </div>
                        
                    </div>
   
    </div>








    <!-- Testimonial Start -->

    <!-- Testimonial End -->
        <div class="container-xxl py-5">
        <div class="container">
            <div class="wow fadeInUp" data-wow-delay="0.1s" >
                <h3 class="text-center" style="font-family: Arial, Helvetica, sans-serif;">Available On</h3>
            </div>
        </div>

        <div class="gtco-testimonials">
        
          <div class="owl-carousel owl-carousel2 owl-theme">
            

            
            <a href="https://stepinadventure.com/">
            <div>
              <div class=""><img src="{{ URL::to('public/1.png')}}" style="height:auto" alt="">
              </div>
            </div>
            </a>

            <a href="https://www.instagram.com/cr11fortheloveofclimbing/">
            <div>
              <div class=""><img src="{{ URL::to('public/2.png')}}" style="height:auto" alt="">
              </div>
            </div>
            </a>


            <a href="https://www.instagram.com/explore.nation/">
            <div>
              <div class=""><img src="{{ URL::to('public/3.png')}}" style="height:auto" alt="">
              </div>
            </div>
            </a>


            <a href="https://www.amazon.in/Gracieux-Fingerboard-Climbing-hangboard-Hangboard-Fingerboard/dp/B08BTL7RYR">
            <div>
              <div class=""><img src="{{ URL::to('public/4.png')}}" style="height:auto" alt="">
              </div>
            </div>
            </a>


            <a href="https://www.flipkart.com/gracieux-adventure-fingerboard-x1x-climbing-hold/p/itmc5041ccfa8be5">
            <div>
              <div class=""><img src="{{ URL::to('public/5.png')}}" style="height:auto" alt="">
              </div>
            </div>
            </a>


            <a href="https://www.indiamart.com/proddetail/alit-portable-hangbord-2852372817930.html">
            <div>
              <div class=""><img src="{{ URL::to('public/6.png')}}" style="height:auto" alt="">
              </div>
            </div>
            </a>
            
          </div>
        </div>


        
    </div>

        

    
</div>





    <!-- Footer Start -->
    @include('includes.footer_front')
    <!-- Footer End -->


    <!-- Back to Top -->
    {{-- <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a> --}}


    <!-- JavaScript Libraries -->
    @include('includes.front_end_script')

        <script type="text/javascript">
        (function () {
  "use strict";

  var carousels = function () {
    $(".owl-carousel1").owlCarousel({
      loop: true,
      center: false,
      margin: 0,
      responsiveClass: true,
      nav: false,
      responsive: {
        0: {
          items: 1.5,
          nav: false
        },
        680: {
          items: 2,
          nav: false,
          loop: false
        },
        1000: {
          items: 2.5,
          nav: true
        }
      }
    });
  };

  (function ($) {
    carousels();
  })(jQuery);
})();

</script>

        <script type="text/javascript">
        (function () {
  "use strict";

  var carousels = function () {
    $(".owl-carousel2").owlCarousel({
      loop: true,
      center: false,
      margin: 10,
      responsiveClass: true,
      nav: false,
      responsive: {
        0: {
          items: 1.5,
          nav: false
        },
        680: {
          items: 4,
          nav: false,
          loop: false
        },
        1000: {
          items: 6,
          nav: true
        }
      }
    });
  };

  (function ($) {
    carousels();
  })(jQuery);
})();


$(document).ready(function() {
    // Ensure the page is at the top
    $('html, body').css({
        overflow: 'hidden',
        height: '100%'
    });

    // Set a timeout to simulate loading delay
    setTimeout(function() {
        // Hide the preloader
        $('#preloader').fadeOut(2000, function() { // Adjust the fadeOut duration for smoothness
            // Show the main content
            $('#content').fadeIn(2000); // Adjust the fadeIn duration for smoothness
            
            // Reset the scroll position and enable scrolling
            $('html, body').css({
                overflow: 'auto',
                height: 'auto'
            });
            $(window).scrollTop(0);
        });
    }, 3000); // Change this value to the desired delay in milliseconds (3000 ms = 3 seconds)
});


</script>
</body>

</html>