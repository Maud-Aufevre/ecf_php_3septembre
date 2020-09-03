$(document).ready(function(){
    $('[type="search"]').focus(function(){
        $(this).attr('class','form-control col-12 text-center');
    });
    $('[type="search"]').blur(function(){
        $(this).attr('class','form-control col-4 text-center');
    });    
});
