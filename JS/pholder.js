$(document).ready(function(){
    $('#insPH').on('click', function(){

        if ($(this).is(':checked')) { 
            $('#policy-holder-div').fadeOut(800);
        }
        else {
            $('#policy-holder-div').fadeIn(800);
        };
    });    
});


                
             