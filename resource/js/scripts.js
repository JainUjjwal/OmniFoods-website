$(document).ready(function () {
    $(window).scroll(function () {
        var val=$('.section-features').offset().top;
        if($(window).scrollTop()>val-15){
            $('nav:first-child').addClass('sticky');
        }
        else{
            $('nav:first-child').removeClass('sticky');
        }
        
         var valf=($("#features").offset().top)-50;
        if($(window).scrollTop()>valf){
            $("#featuresdiv").addClass("animated fadeIn");
        }
        
        var valw=($("#work").offset().top);
        if($(window).scrollTop()>valw){
            $("#workdiv").addClass("animated fadeInUp");
        }
        
        var valc=($("#city").offset().top)-120;
        if($(window).scrollTop()>valc){
            $(".citydiv").addClass("animated fadeIn");
        }
    });

    $('.hero-text-box .btn-full').click(function () {
        var val2=$('.section-plans').offset().top;
        $('html body').animate({scrollTop:val2},1500);
        return false;
    });

    $('.hero-text-box .btn-ghost').click(function () {
        var val3=$('.section-meal').offset().top;
        $('html body').animate({scrollTop:val3-50},800);
        return false;
    });
    
   

    $(function() {
        $('a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1)+']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    
    $(".navicon").click(function(){
        var nav=$('.main-nav');
        nav.slideToggle(200);
        if($("#iicon").hasClass('ion-navicon-round')){
            $("#iicon").removeClass('ion-navicon-round');
            $("#iicon").addClass('ion-close-round');
        }
        else{
            $("#iicon").removeClass('ion-close-round');
            $("#iicon").addClass('ion-navicon-round');
        }
    });


});