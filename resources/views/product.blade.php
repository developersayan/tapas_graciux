<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gracieux Adventure hub || Product Page</title>

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
    <meta property="og:title" content="Product - Gracieux Adventure hub" />
    <meta property="og:description" content="IGracieux is not just a word, but a discipline of self-improvement. It offers you a good quality exercise board to enhance your climbing ability." />
    <meta property="og:url" content="{{url()->current()}}" />


    <style type="text/css">
      .bg {
    height: 100%;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    animation: changeBackground 15s infinite;
}

.vh-50 {
    height: 50vh !important;
}

.navbar-light .navbar-toggler-icon1{
    background-image: '{{asset('public/hamburger.png')}}' !important;
}



@keyframes changeBackground {
    0% { background-image: url({{asset('public/product1.jpg')}}); }
    33% { background-image: url({{asset('public/product2.jpg')}}); }
    64% { background-image: url({{asset('public/product3.jpg')}}); }
    84% { background-image: url({{asset('public/product4.jpg')}}); }
    100% { background-image: url({{asset('public/product5.jpg')}}); }
    
    
}

  .search-field {
  border-radius: 0 !important;
  border-color: transparent !important;
  -webkit-box-shadow: 0px 1px 1px 0px rgba(0,0,0,0.2) !important;
  -moz-box-shadow: 0px 1px 1px 0px rgba(0,0,0,0.2) !important;
  box-shadow: 0px 1px 1px 0px rgba(0,0,0,0.2) !important;
}

.search-btn {
  border-radius: 0 !important;
  border-top-right-radius: 3px !important;
  border-bottom-right-radius: 3px !important;
  width: 4.8em;
  background-color: #1E90FF;
  color: white;
}
    </style>

   @include('includes.front_end_css')
</head>

<body>
    






    @include('includes.navbar')

    <div class="container-fluid bg">
        <div class="row justify-content-center align-items-center vh-50">
            <div class="col-lg-3 col-md-3"></div>

        
        <div class="col-lg-7 col-md-7">
          <form action="{{route('product.page')}}" method="POST">
        @csrf   
          <div class="input-group">
            <input type="text" value="{{request('keyword')}}" name="keyword" class="form-control search-field" placeholder="My wish" style="background:#ffffffc4 !important">
            <span class="input-group-btn">
            <button class="btn search-btn"  type="submit" style="
             
              font-weight: bolder;"
             ><i class="fa fa-search" style=" color: #3FC4FC;font-size: 30px;font-weight: 600px;"></i></button>
            </span>
          </div><!-- /input-group -->
          </form>
        </div>
        
        <div class="col-lg-2 col-md-2"></div>
        </div>
    </div>














    <!-- Service Start -->
    <div class="container-xxl py-5">
        {{-- <div class="container"> --}}
            <div class="wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <h3 class="cat_text" style="font-family: Arial, Helvetica, sans-serif;">Hangboard Collection</h3>
            </div>
        {{-- </div> --}}

        <div class="gtco-testimonials">
          @if(@$category_one->isNotEmpty())
          <div class="owl-carousel owl-carousel2 owl-theme">
            
            
                @foreach(@$category_one as $val)
            
                <div>
                  <div class=""><img src="{{ URL::to('storage/app/public/blog')}}/{{@$val->product_image}}" style="height:auto" alt="">
                  </div>
                  <p style="font-weight:bold;color: black;margin-top: 5px;">{{@$val->title}}</p>
                  <p style="font-weight:bold;color: black;margin-top: 5px;">₹ {{@$val->price}}</p>
                  <a href="{{route('product.details.page',$val->id)}}" style="width:100%" class="text-dark btn explore-btn">EXPLORE NOW</a>
                </div>
           
                @endforeach
            
            
          </div>
          @else
              <div class="row">
                <div class="col-lg-4 col-md-12">
                <div class=""><img src="{{asset('public/no_product.jpg')}}" style="height:auto;width:100%" alt="">
                  </div>
               </div>
             </div>
            @endif
        </div>


    </div>

        <div class="container-xxl py-5">
        {{-- <div class="container"> --}}
            <div class="wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <h3 class="cat_text" style="font-family: Arial, Helvetica, sans-serif;">Books and Magazines</h3>
            </div>
        {{-- </div> --}}

        <div class="gtco-testimonials">
          @if(@$category_two->isNotEmpty())
          <div class="owl-carousel owl-carousel2 owl-theme">
            

            @foreach(@$category_two as $val)
            
            <div>
              <div class=""><img src="{{ URL::to('storage/app/public/blog')}}/{{@$val->product_image}}" style="height:auto" alt="">
              </div>
              <p style="font-weight:bold;color: black;margin-top: 5px;">{{@$val->title}}</p>
              <p style="font-weight:bold;color: black;margin-top: 5px;">₹ {{@$val->price}}</p>
              <a href="{{route('product.details.page',$val->id)}}" style="width:100%" class="text-dark btn explore-btn">EXPLORE NOW</a>
            </div>
       
            @endforeach
          </div>
          @else
              <div class="row">
                <div class="col-lg-4 col-md-12">
                <div class=""><img src="{{asset('public/no_product.jpg')}}" style="height:auto;width:100%" alt="">
                  </div>
               </div>
             </div>
            @endif
        </div>


    </div>


        <div class="container-xxl py-5">
        {{-- <div class="container"> --}}
            <div class="wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <h3 class="cat_text" style="font-family: Arial, Helvetica, sans-serif;">Climbing Synopsis</h3>
            </div>
        {{-- </div> --}}

        <div class="gtco-testimonials">
         @if(@$category_three->isNotEmpty())
          <div class="owl-carousel owl-carousel2 owl-theme">
            

            @foreach(@$category_three as $val)
            
            <div>
              <div class=""><img src="{{ URL::to('storage/app/public/blog')}}/{{@$val->product_image}}" style="height:auto" alt="">
              </div>
              <p style="font-weight:bold;color: black;margin-top: 5px;">{{@$val->title}}</p>
              <p style="font-weight:bold;color: black;margin-top: 5px;">₹ {{@$val->price}}</p>
              <a href="{{route('product.details.page',$val->id)}}" style="width:100%" class="text-dark btn explore-btn">EXPLORE NOW</a>
            </div>
       
            @endforeach
          </div>
          @else
              <div class="row">
                <div class="col-lg-4 col-md-12">
                <div class=""><img src="{{asset('public/no_product.jpg')}}" style="height:auto;width:100%" alt="">
                  </div>
               </div>
             </div>
            @endif
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
          items: 3,
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
      margin: 15,
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
          items: 4.5,
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
</body>

</html>