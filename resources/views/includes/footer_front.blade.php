    <div class="container-fluid  footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s" style="background:#F1F2F4">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6" style="font-family:font-family: Arial, Helvetica, sans-serif;">
                    <a class="text-dark mb-4">Collection</a>
                    <br><br>
                    <a class="btn btn-link text-dark" href="{{route('product.page')}}">Hangboards</a>
                    <a class="btn btn-link text-dark" href="{{route('product.page')}}">Books and Magazines</a>
                    <a class="btn btn-link text-dark" href="{{route('product.page')}}">Climbing Synopsis</a>
                    
                    <div class="row no-gutters">
                        <div class="col-md-2 mt-2"><a  class="btn btn-square rounded-circle nav-item nav-link  " href="https://www.facebook.com/profile.php?id=61563094552048&mibextid=rS40aB7S9Ucbxw6v" target="_blank" style="color: black;border: 2px solid black;"><i class="fab fa-facebook-f " style="font-weight: bolder;color: black;"></i></a></div>

                        <div class="col-md-2 mt-2"><a style="color: black;border: 2px solid black;" class="btn btn-square rounded-circle nav-item nav-link text-primary " href="https://www.instagram.com/gracieuxadventurehub?igsh=MTJwdGYwdXg4OGY1Yg==" target="_blank"><i class="fab fa-instagram " style="font-weight: bolder;color: black;"></i></a></div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" style="font-family:font-family: Arial, Helvetica, sans-serif;color: black;">
                    <a class="text-dark mb-4">Links</a>
                    <br><br>
                    <a class="btn btn-link text-dark" href="{{route('blog.page')}}">Blog</a>
                    <a class="btn btn-link text-dark replacement_policy" >Replacement Policy</a>
                    <a class="btn btn-link text-dark shipping_policy">Shipping Policy</a>
                    <a class="btn btn-link text-dark privacy_page">Privacy Policy</a>
                    <a class="btn btn-link text-dark term_condition">Terms & Conditions</a>
                    <a class="btn btn-link text-dark" href="{{route('contact.page')}}">Contact</a>
                </div>

                

                 <div class="col-lg-6 col-md-6" style="font-family:font-family: Arial, Helvetica, sans-serif;color: black;">
                    <h6 class="text-dark mb-4 text-center"  style="font-weight: bolder;text-align: center;font-family:Arial, Helvetica, sans-serif ;font-size: 18px;">Delivery Option(s)</h6>
                    
                    <div class="row no-gutters">
                        <div class="col-md-4 mt-2"><a href="https://www.indiapost.gov.in/_layouts/15/dop.portal.tracking/trackconsignment.aspx"><img src="{{asset('public/7.png')}}" style="width:100%"></a></div>
                        <div class="col-md-4 mt-2"><a href="https://www.delhivery.com/tracking"><img src="{{asset('public/8.png')}}" style="width:100%"></a></div>
                        <div class="col-md-4 mt-2"><a href="https://www.xpressbees.com/shipment/tracking"><img src="{{asset('public/9.png')}}" style="width:100%"></a></div>
                    </div>
                </div>
               
                {{-- <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Get In Touch</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>787 M B Road , Siddheswari Bazar , Kolkata - 700051</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+91 9674295008</p>
                    <p><i class="fa fa-envelope me-3"></i>kalpanainterior@gmail.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="{{route('home.page')}}">Home</a>
                    <a class="btn btn-link" href="{{route('about.us.page')}}">About</a>
                    <a class="btn btn-link" href="{{route('service.page')}}">Services</a>
                    <a class="btn btn-link" href="{{route('contact.page')}}">Contact</a>
                </div> --}}
                
            </div>
        </div>
        
    </div>

    <div class="container-fluid  footer  py-3 " style="background:#27221F">
        <div class="container py-3">
            <div class="row">
                <div class="col-lg-12 col-md-12 text-center">
                    <p class="text-center text-white" style="font-family:font-family: Arial, Helvetica, sans-serif;font-size: 15px;line-height: 4px">© Gracieux {{date('Y')}} All right reserved.</p>
                    {{-- <p class="text-center text-white" style="font-family:font-family: Arial, Helvetica, sans-serif;font-size: 15px;line-height: 4px">Pearabagan,Muragacha • Cookie settings</p> --}}
                </div>
            </div>
        </div>
    </div>


        <div class="modal fade" id="exampleModaEdit1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="font-family: Arial, Helvetica, sans-serif !important ;">Replacement Policy</h5>
            
          </div>
          <div class="modal-body" style="color:black">
                <p>We understand how much you value your every purchase. And we are committed to making your shopping experience with us as seamless & delightful as possible.We assure you that all products sold are brand new and 100% genuine. Our shipments go through rigorous quality check processes before they leave our warehouse. However in the rare case that your product is damaged at manufacturer end, you can request for a replacement.</p>

                <p>1. In case a Replacement is not available, we will refund the amount for the same.</p>

                <p>2. Free replacements can be requested if the following conditions apply:</p>

                <p>(a) Item received is manufacturering defect/does not work properly;</p>
                <p>(b) Item received is different from their description on the product detail page on Gracieux.in;</p>

                <p>3. A free replacement cannot be created for an item which was replaced once earlier.</p>

                <p>4. If the item has missing parts or accessories, you may try to contact the manufacturer for assistance. </p>

                <p>5. If your item is not eligible for free replacement due to any reason, you need to pay shipping charge.</p>

                <p>6. Replecement will not entertained, if the following conditions apply:</p>

                <p>(a) Item is used already;</p>
                <p>(b) Item damaged cause by you and/or during shipping;</p>
                <p>(c) Item purchased from other Websites or E-Commerce websites;  </p>

                <p>7. If the item is fulfill the replacement criteria then the Company shall arrange the replacement of the item.</p>



          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="location.reload()">Close</button>
            
          </div>
        </div>
      </div>
    </div>




        <div class="modal fade" id="exampleModaEdit2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="font-family: Arial, Helvetica, sans-serif !important ;">Shipping Policy</h5>
            
          </div>
          <div class="modal-body" style="color:black">
                

                <p>1. We ship only in India and for domestic (India) buyers, orders are shipped through registered domestic courier companies and /or speed post only.</p>

                <p>2. Orders are shipped within 02 working days or as per the delivery date agreed at the time of order confirmation and delivery of the shipment, subject to Courier Company/post office norms. 
                Registered Seller(s)/gracieux.in is not liable for any delay in delivery by the courier company.</p>

                <p>3. Delivery of all orders will be dispatched to the registered address of the buyer or address as provided by you at the time of placing an order. </p>

                <p>4. Registered Seller(s)/gracieux.in is in no way responsible for any damage to the order while in transit or at the time of delivery to the buyer.</p> 

                <p>5. Shipping costs have been classified according to the locations and products weight in Pan India for each product. </p>

                <p>6. If you order more than one quantity (Bulk or b2b order) of the same product then, the shipping cost reduces.</p>

                <p>7. COD (Cash on Delivery) is a non-existent option. In order to dispatch the order, the customer must have paid [Prepaid] in full.</p>

                <p>8. In case the customer does not pay the amount within 24hrs then their order will be rejected by the supplier.</p>



          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="location.reload()">Close</button>
            
          </div>
        </div>
      </div>
    </div>


    <div class="modal fade" id="exampleModaEdit3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="font-family: Arial, Helvetica, sans-serif !important ;">Privacy Policy</h5>
            
          </div>
          <div class="modal-body" style="color:black">
                

                <p>Registered Seller(s) & gracieux.in, the Company is committed to safeguarding your privacy. We keep the information of our customers in the strictest of confidence. The specific circumstances in which we can use and disclose the information of our customers is reserved by the Company.</p>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="location.reload()">Close</button>
            
          </div>
        </div>
      </div>
    </div>


        <div class="modal fade" id="exampleModaEdit4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="font-family: Arial, Helvetica, sans-serif !important ;">Terms & Conditions</h5>
            
          </div>
          <div class="modal-body" style="color:black">
                

                <p>1. These Terms and Conditions govern your use of Gracieux.in, which is owned and operated by Gracieux. By using the Website, you agree to be bound by these Terms.</p>

                <p>2. You must be at least 18 years old to use the Website. You may not use the Website for any illegal or unauthorized purpose. You must comply with all applicable laws and regulations, including copyright laws.</p>

                <p>3. The Company owns all intellectual property rights in the Website, including its content, products, and logos. You may not reproduce, modify, or distribute any content from the Website without the Company's prior written consent.</p>

                <p>4. When you make a purchase on the Website, you agree to pay the listed price [plus any applicable taxes]. Refunds and replacements are subject to the Company's replacemnt policy.</p>

                <p>5. The Company warrants that its products are free from defects in material and workmanship. The Company's liability is limited to the replacement or repair of defective products.</p>

               <p> 6. You agree to indemnify the Company against any claims, damages, or expenses arising from your use of the Website or any breach of these Terms.</p>

                <p>7. The Company may modify these Terms at any time without notice. Your continued use of the Website constitutes acceptance of any changes.</p>

                <p>8. Violate any applicable laws or regulations, the Company may terminate your access to the Website at any time for any reason. You may terminate your account at any time by contacting the Company in writing.</p>

                <p>9. These Terms constitute the entire agreement between you and the Company regarding your use of the Website.</p>

                <p>By using this Website, you acknowledge that you have read, understand, and agree to be bound by these Terms.</p>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="location.reload()">Close</button>
            
          </div>
        </div>
      </div>
    </div>
