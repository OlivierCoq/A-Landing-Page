$(document).ready(function(){

    
        /*Link + Info */
    
            /*Block + Img 1*/
        $('#link-info-1').hide(); /*<--All the information that's hidden*/
        $('#midLink-1').on('click', function(){/*<-- Button clicked to reveal linx-info*/
            $('#link-info-1').fadeToggle();
        });
            /*Block + Img 2*/
        $('#link-info-2').hide();
        $('#midLink-2').on('click', function() {
           $('#link-info-2').fadeToggle(); 
        });
            /*Block + Img 3*/
        $('#link-info-3').hide();
        $('#midLink-3').on('click', function(){
            $('#link-info-3').fadeToggle();
        });
            /*Block + Img 4*/
        $('#link-info-4').hide();
        $('#midLink-4').on('click', function(){
           $('#link-info-4').fadeToggle(); 
        });
            /*Block + Img 5*/
        $('#link-info-5').hide();
        $('#midLink-5').on('click', function(){
            $('#link-info-5').fadeToggle();
        });
    
        $('#link-info-general').hide();
        $('#midLink-1').on('click', function(){
            $('#link-info-general').text() ==
        });
        
        $('.toggle').hide();
            
        $('.more').click(function(){
            var contentGeneral = $(this).attr("href")
        $(contentGeneral).fadeToggle("fast");
        $(".toggle:visible").not(contentGeneral).hide();
    
        });        
    
});