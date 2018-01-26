        <!--JS Scripts-->
<!--jQuery-->		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
            <!--Bootstrap JS-->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>        
        <script src="/JS/LanderJS/hatc.js"></script>
        <script src="/JS/LanderJS/uxui.min.js"></script>
            <!--Lightbox-->
        <script type="text/javascript">
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
        </script>
<!--End of Tawk.to Script-->
        <!--Masked Input-->
        <script src="/JS/jquery.maskedinput.js"></script>
        <script>
            jQuery(function($){
                $("#phoneCB").mask("999-999-9999",{placeholder:" "});
                $("#adm-phone").mask("999-999-9999",{placeholder:" "});
                $("#cta-phone").mask("999-999-9999",{placeholder:" "});
                $("#btm-phone").mask("999-999-9999",{placeholder:" "});
                $("#fdtPhone").mask("999-999-9999",{placeholder:" "});
                $("#fdtPhoneM").mask("999-999-9999",{placeholder:" "});
                $("#zip").mask("99999",{placeholder:" "});
                $("#zipM").mask("99999",{placeholder:" "});
            });
   
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
            <!--Insurance Providers-->
        <script>
            $(".ins-carousel").owlCarousel({
                items:5,
                loop:true,
                margin:0,
                autoplay:true,
                autoplayTimeout:2500,
            });
            $('.carousel').carousel({
                interval: 3000
            })
        </script>     
		<script src="/JS/dp.min.js"></script>
		<script src="/JS/pholder.min.js"></script>
		<script src="/JS/nav-custom.min.js"></script>
