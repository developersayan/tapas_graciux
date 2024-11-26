


<!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('public/frontend/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('public/frontend/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('public/frontend/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('public/frontend/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('public/frontend/lib/parallax/parallax.min.js')}}"></script>
    <!-- Template Javascript -->
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
    <script type="text/javascript" src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>

    <script type="text/javascript">
        $('.replacement_policy').on('click',function(e){
            $('#exampleModaEdit1').modal('show');
        });
    </script>

    <script type="text/javascript">
        $('.shipping_policy').on('click',function(e){
            $('#exampleModaEdit2').modal('show');
        });
    </script>

    <script type="text/javascript">
        $('.privacy_page').on('click',function(e){
            $('#exampleModaEdit3').modal('show');
        });
    </script>

    <script type="text/javascript">
        $('.term_condition').on('click',function(e){
            $('#exampleModaEdit4').modal('show');
        });
    </script>
   
{{--     <script type="text/javascript">
$(document).bind("contextmenu",function(e) {
 e.preventDefault();
});
</script> --}}

{{-- <script>
document.onkeydown = function(e) {
        if (e.ctrlKey && 
            (e.keyCode === 67 || 
             e.keyCode === 86 || 
             e.keyCode === 85 || 
             e.keyCode === 117)) {
            return false;
        } else {
            return true;
        }
};
$(document).keypress("u",function(e) {
  if(e.ctrlKey)
  {
return false;
}
else
{
return true;
}
});
</script> --}}