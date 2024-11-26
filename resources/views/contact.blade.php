<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gracieux Adventure hub || Contact Us</title>
    

   @include('includes.front_end_css')
</head>

<body>
    






    @include('includes.navbar')

        <div class="container-fluid position-relative p-0">
    
                <div id="header-carousel2" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a  onclick="openEditModal()">
                                <img class="w-100" src="{{asset('public/contact.png')}}" style="height:auto !important;" alt="Image">
                                </a>
                            </div>
                            
                        </div>
                        
                    </div>
   
        </div>

        <div class="container-xxl py-5">
        <div class="container">
            <div class="wow fadeInUp" data-wow-delay="0.1s" >
                <h3 class="text-center" style="font-family: Arial, Helvetica, sans-serif;">We're here</h3>
            </div>

            <div class="row mt-5">
                <div class="col-lg-6  col-md-12 col-sm-12">
                    <div class="card1 text-center">
                        <h1 style="font-size: 40px;"><i class="fa fa-phone" aria-hidden="true"></i></h1>
                        <p class="text-dark mb-4" style="font-weight:bold;font-size: 22px;">Talk to sales</p>
                        <p class="text-dark">Interested in Gracieux product? Just call us.</p>
                        <p ><a style="color:#3EC5FB;font-weight: bolder;font-size: 22px;" href="tel:7059509919" class="Blondie">+91 7059509919</a></p>
                    </div>
                </div>

                <div class="col-lg-6  col-md-12 col-sm-12">
                    <div class="card1 text-center">
                        <h1 style="font-size: 40px;"><i class="fa fa-comments" aria-hidden="true"></i></h1>
                        <p class="text-dark mb-4" style="font-weight:bold;font-size: 22px;">Contact customer support</p>
                        <p class="text-dark">Something you need to know about technical details about the product, don't worry.. we're here for you.</p>
                        <p ><a style="color:#3EC5FB;font-weight: bolder;font-size: 22px;" href="tel:9432326904" class="Blondie">+91 9432326904</a></p>
                    </div>
                </div>
        </div>
    </div>
</div>


<div class="container-xxl py-5">
        <div class="container">
            <div class="wow fadeInUp" data-wow-delay="0.1s" >
                <h3 class="text-center" style="font-family: Arial, Helvetica, sans-serif;">Office address</h3>
                <p class="text-dark text-center">Pearabagan, Muragacha, Kolkata 700 110, West Bengal, India</p>
            </div>
        </div>
    </div>

<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3680.952489435492!2d88.42535939999999!3d22.6928125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s7MJCMCVG%2B44H!5e0!3m2!1sen!2sin!4v1722437701916!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>











    <div class="modal fade" id="exampleModaEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="font-family: Arial, Helvetica, sans-serif !important ;">Contact Us</h5>
            
          </div>
          <div class="modal-body">
                <form method="post" action="{{route('contact.page.contact.post')}}">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" name="name" placeholder=" your name" class="form-control">
                    </div>

                    

                    <div class="form-group mb-3">
                        <input type="text" name="phone" placeholder=" your phone number" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" name="email" placeholder=" your e-mail" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <textarea type="text" name="message" placeholder=" your message" class="form-control" rows="4"></textarea>
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

        

    






    <!-- Footer Start -->
    @include('includes.footer_front')
    <!-- Footer End -->


    <!-- Back to Top -->
    {{-- <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a> --}}


    <!-- JavaScript Libraries -->
    @include('includes.front_end_script')
    <script type="text/javascript">
        function openEditModal() {
            $('#exampleModaEdit').modal('show')
            

        }
    </script>

</body>

</html>