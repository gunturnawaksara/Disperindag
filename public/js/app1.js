setInterval(function(){

    //time to scroll to bottom
    $("html, body").animate({ scrollTop: $(document).height() }, 10000);

    //scroll to top
    setTimeout(function() {
       $('html, body').animate({scrollTop:0}, 10000);
    },5000);//call every 2000 miliseconds

},5000);//call every 2000 miliseconds