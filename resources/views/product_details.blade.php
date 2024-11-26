<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gracieux Adventure hub</title>

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
    <meta property="og:title" content="{{@$data->title}} | Gracieux Adventure hub Product Details" />
    <meta property="og:description" content="IGracieux is not just a word, but a discipline of self-improvement. It offers you a good quality exercise board to enhance your climbing ability." />
    <meta property="og:url" content="{{url()->current()}}" />
    

   @include('includes.front_end_css')
   <style type="text/css">
    p{
        color: black !important;
    }
/* Style for the preloader */
/*#preloader {
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
}

#preloader img {
    width: 100px; /* Adjust the size of the GIF */
}*/

/* Style for the main content */
/*#content {
    display: none;  Initially hide the content 
}*/

   </style>
</head>

<body>
    






    @include('includes.navbar')

    {{-- <div id="preloader">
        <img src="{{asset('public/loader.gif')}}" alt="Loading...">
    </div> --}}



    <!-- Team Start -->
    <div id="content">
    <div class="container-fluid container-team py-5">
        <div class="container pb-5">
            
            <div class="row g-4">
                
                <div class="col-lg-12 col-md-12 wow fadeIn" data-wow-delay="0.1s">
                    <ul class="breadcrumb text-dark">
                          <li><a href="{{route('product.page')}}" style="color: black;">Product / </a></li>
                          <li><a href="{{route('product.page')}}" style="color: black;"> &nbsp; @if(@$data->category_id==1) Hangboard Collection @elseif(@$data->category_id==2) Books and Magazine @else Climbing Gear @endif /</a></li>
                          <li><a href="#" style="color: black;"> &nbsp; {{@$data->title}}</a></li>
                        </ul>
                    
                            <div class="gtco-testimonials">
        
                                  <div class="owl-carousel1 owl-carousel owl-theme">
                                    

                                    @foreach(@$images as $val)
                                    <a href="">
                                    <div>
                                      <div class=""><img src="{{ URL::to('storage/app/public/blog')}}/{{@$val->image}}" style="height:auto" alt="">
                                      </div>
                                     
                                    </div>
                                </a>
                                    @endforeach
                                  </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="text-dark text-center">{{@$data->title}}</h3>
                                        <p class="text-center" style="color:#3EC5FB !important;font-weight: 500;">@if(@$data->category_id==1) Hangboard Collection @elseif(@$data->category_id==2) Books and Magazine @else Climbing Gear @endif</p>
                                    </div>

                                    <div class="col-lg-6 col-md-12 mt-5">
                                        @include('includes.message')
                                        <h4 class="text-dark mb-3">Description</h4>
                                        <p class="text-dark">{!!@$data->description!!}</p>
                                        
                                        <div class="sharethis-inline-share-buttons" style="margin-bottom: 25px;"></div>
                                    </div>

                                    <div class="col-lg-2 col-md-12"></div>

                                    <div class="col-lg-4 col-md-12 mt-5 ">

                                        <table class="table">
                                            <tr style="width:50%">

                                                @php
                                                    
                                                        $discount = (@$data->mrp-@$data->price)/@$data->mrp*100;
                                                    
                                                @endphp
                                                <th class="text-dark" style="border:none;font-size: 19px;"><sapn style="border-top: 1px solid grey;
                                                 border-bottom: 1px solid grey;    font-size: 25px;
                                                ">₹ {{@$data->price}} </sapn> &nbsp; MRP. <del>₹ {{@$data->mrp}}</del> <span style="color:red;font-size: 12px;">(off {{floor(@$discount)}} %) </th>
                                            </tr>

                                            <tr>
                                                <th class="text-dark" style="border:none;font-size: 15px;">
                                                    SELLER DETAILS
                                                </th>
                                                <tr>
                                                <td class="text-dark" style="border:none;font-size: 13px;">
                                                    <span style="color:black;">Sold and Fulfilled By :</span> <span style="font-weight:bolder;font-size: 19px;">Gracieux</span>
                                                </td>
                                            </tr>
                                            </tr>


                                        </table>

                                        <div class="row mb-3">
                                                <div class="col-sm-12">
                                                    <img src="{{asset('public/delivery.png')}}" class="delivery_image" style="width: 90%;">
                                                </div>
                                        </div>

                                        <table class="table">
                                            @if(@$data->stock=="IS")
                                            <tr>
                                                <th class="text-dark" style="border:none;font-size: 19px;">

                                                    <div class="form-group row">
                                                        <label for="staticEmail" class="col-sm-3 col-form-label">Quantity:</label>
                                                        <div class="col-sm-9">
                                                    <select class="form-control custom-select" style="width: 51% !important;" id="quantity"> 
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>

                                                </select>
                                                        </div>
                                                      </div>
                                                
                                                </th>
                                            </tr>
                                            @endif
                                            <tr>
                                                <th  style="border:none;font-size: 16px;">@if(@$data->stock=="IS")<span style="color:green">In Stock </span> @else <span style="color:red"> Out Of Stock </span> @endif</th>
                                            </tr>

                                            <tr >
                                                <td style="border:none;width:70%"><button type="button" style="background:#3EC5FB;font-size: font-size: 19px;color:white;width: 100%;border: 2px solid #3EC5FB;" class="btn btn-primary" onclick="openEditModal()" id="enquiry" data-id="{{@$data->id}}">Enquiry Now</button></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                        
                    
                </div>
                

                

            </div>


        </div>
    </div>
    <!-- Team End -->

</div>






<!-- Footer Start -->
    @include('includes.footer_front')
    <!-- Footer End -->


    <!-- Back to Top -->
    {{-- <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a> --}}

    <div class="modal fade" id="exampleModaEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="font-family: Arial, Helvetica, sans-serif !important ;">Enquiry For {{@$data->title}}</h5>
            
          </div>
          <div class="modal-body">
                <form method="post" action="{{route('contact.page.contact.post.package.enquiry')}}">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" name="name" placeholder=" your name" class="form-control">
                    </div>

                    <input type="hidden" name="package_id" value="{{@$data->id}}">
                    <input type="hidden" id="asking_quantity" name="quantity" value="1">

                    <div class="form-group mb-3">
                        <input type="text" name="phone" placeholder=" your phone number" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" name="email" placeholder=" your e-mail" class="form-control">
                    </div>
                    <div class="col-sm-12"><button type="submit" class="btn btn-primary" style="background:#3EC5FB;color:white;width: 100%;border: 2px solid #3EC5FB;">Send</button></div>
                </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="location.reload()">Close</button>
            
          </div>
        </div>
      </div>
    </div>


    <!-- JavaScript Libraries -->
    @include('includes.front_end_script')

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script type="text/javascript">
        (function () {
  "use strict";

  var carousels = function () {
    $(".owl-carousel1").owlCarousel({
      loop: true,
      center: true,
       margin: 10,
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
          items: 4,
          nav: true
        }
      }
    });
  };

  (function ($) {
    carousels();
  })(jQuery);
})();

// $(document).ready(function() {
//     // Set a timeout to simulate loading delay
//     setTimeout(function() {
//         // Hide the preloader
//         $('#preloader').fadeOut('slow', function() {
//             // Show the main content
//             $('#content').fadeIn('slow');
//         });
//     }, 5000); // Change this value to the desired delay in milliseconds (3000 ms = 3 seconds)
// });

function openEditModal() {
            $('#exampleModaEdit').modal('show')
            

        }

</script>
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=66af2176969157001920a5fd&product=inline-share-buttons' async='async'></script>
  
  <script type="text/javascript">
      $('#quantity').on('change',function(e){
        var quantity = $('#quantity').val();
        $('#asking_quantity').val(quantity);
      });
  </script>
 
</body>

</html>


