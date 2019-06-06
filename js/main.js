$(document).on('scroll', function() {
    if($(this).scrollTop()>=$('#content').position().top){
        if(good!==1){
            var good=1;
            $('#appeler').css('right', '0px');
        }else{
            
        }
    }
});
$(document).on('scroll', function() {
    if($(this).scrollTop()<=$('#content').position().top){
        if(good!==0){
            var good=0;
            $('#appeler').css('right', '-60px');
        }else{
            
        }
    }
});
$(document).ready(function (){
    var urlSplit = document.URL.split("#");
    if (urlSplit[1]) {
        $('html, body').animate({
            scrollTop: $('#' + urlSplit[1]).offset().top
        }, 200);
    }
});