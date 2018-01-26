$(document).ready(function(){
            
        $('.more').click(function(e){
            
            e.preventDefault();
            var contentGeneral = $(this).attr("href")
        $(contentGeneral).fadeToggle(800);
        $(".toggle:visible").not(contentGeneral).hide();
    
        });        
    
});