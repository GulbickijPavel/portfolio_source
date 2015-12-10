$(document).ready(function(){
    
    /*************** cookies **************/
    function cookieLawNotification(){
       days=30;
       myDate = new Date();
       myDate.setTime(myDate.getTime()+(days*24*60*60*1000));
       document.cookie = 'cookieLawNotification=Accepted; expires=' + myDate.toGMTString();
    }
    var cookie = document.cookie.split(';')
        .map(function(x){ return x.trim().split('='); })
        .filter(function(x){ return x[0]==='cookieLawNotification'; })
        .pop();
    if(cookie && cookie[1]==='Accepted') {
        $(".cooke-notification").remove();
    }
    else{
        $(".cooke-notification").show();
    }
    $("#cooke-btn").on("click", function(){
        cookieLawNotification();                   
        $(".cooke-notification").remove();      
        return false;
    }); 
    
    init = {
            skillclickControl : function(){
                 $('.skill-image').click(function(){
                    var id = $(this).attr('id');
                    $('.skill-description.open').removeClass("open");
                    $('.skill-image.active').removeClass("active");
                    $('article#'+id+'-desc'+'.skill-description').toggleClass('open');
                    $('img#'+id+'.skill-image').toggleClass('active');
                });
            },
            navigationControl : function(){
                $(".menu_item").on("click", function(e) {
                    e.preventDefault();
                    var scrollTarget = $(this).attr('href');
                    $(scrollTarget).velocity("scroll", {
                        duration: 900
                    });
                     $(document).unbind( 'touchmove', touchScroll );
                    $(".navbar-toggle").attr("aria-expanded", "false");
                    $("#navbar-main").attr("aria-expanded", "false")
                });
                $('.navbar-toggle').on("click", function(e){
                    $(document).bind( 'touchmove', touchScroll );
                    if($('.navbar-toggle').attr('aria-expanded') == "true"){
                        $(document).unbind( 'touchmove', touchScroll );
                    }
                    else if($('.navbar-toggle').attr('aria-expanded') == "false"){
                        $(document).bind( 'touchmove', touchScroll );
                    }
                });
                $("[href=#about]").parent().addClass("menu-active");
                var topMenu = $(".navbar"),
                    topMenuHeight = topMenu.outerHeight()+50,
                    menuItems = topMenu.find(".menu_item"),
                    scrollItems = menuItems.map(function(){
                      var item = $($(this).attr("href"));
                      if (item.length) { return item; }
                    });
                $(window).scroll(function(){
                    var fromTop = $(this).scrollTop()+topMenuHeight;
                    var cur = scrollItems.map(function(){
                    if ($(this).offset().top < fromTop)
                       return this;
                    });
                    cur = cur[cur.length-1];
                    var id = cur && cur.length ? cur[0].id : "";
                    menuItems
                     .parent().removeClass("menu-active")
                     .end().filter("[href=#"+id+"]").parent().addClass("menu-active");
                });
                 var touchScroll = function( event ) {
                    event.preventDefault();
                };
            }, 
            validationControl : function(){
                 $.validate({
                    form : '#contact-form',
                    modules : 'security'/*,
                    validateOnBlur : false*/
                });
                $("#contact-form").submit(function() {
                   // console.log($("#contact-form").serialize());
                    var url = "php/contact.php"; // the script where you handle the form input.
                    $.ajax({
                           type: "POST",
                           url: url,
                           data: $("#contact-form").serialize(), // serializes the form's elements.
                           success: function(data)
                           {
                                $( ".form-submit-mesage" ).remove();
                                $( ".confirmation" ).append(data);
                           }
                         });
                    return false; // avoid to execute the actual submit of the form.
                });
            },
            contactFormControl : function(){
                var popupOpen = false;
                function contact() {
                    if ($("#contactForm-container").is(":hidden")){
                        $("#contactForm-container").fadeIn("slow");
                        $("#backgroundPopup").css({"opacity": "0.7"});
                        $("#backgroundPopup").css({"height": "100%"});
                        $("#contactForm-container").css("overflow-y", "scroll");
                        $("#backgroundPopup").fadeIn("slow");
                        $("body").css("overflow", "hidden");
                        $("#contactForm-container").velocity("scroll", {
                          duration: 800,
                          delay: 0
                        });
                        $("#contactForm-container").css({"padding-top": "25px"});
                        popupOpen = true;
                        return popupOpen;
                    }
                    else{
                        $("#contactForm-container").fadeOut("slow");
                        $("#backgroundPopup").fadeOut("slow");  
                        popupOpen = false;
                        return popupOpen;
                    }
                }
                $("[href=#contacts]").on("click", function(){
                    contact();
                });
                $('.contact').on('click', function(){
                    $('.contact').hide();
                    $('.contact-hide').show();
                    $("#contact-form").fadeIn("slow");
                });
                $('.contact-hide').on('click', function(){
                    $('.contact-hide').hide();
                    $('.contact').show();
                    $("#contact-form").fadeOut("fast");
                });
                $('#cform-cancel').on("click", function(e){
                    $("#contactForm-container").fadeOut("slow");
                    $("#backgroundPopup").fadeOut("slow");
                    $("body").css("overflow-y", "scroll");
                });
                $(document).click(function(e){
                    if( $(e.target).closest(".menu_item").length > 0 ) {
                    }
                    else{
                        if(!popupOpen){
                            if( $(e.target).closest("#contactForm").length > 0 ) {

                            }
                            else{

                            } 
                        }
                        else{
                            if( $(e.target).closest("#contactForm").length > 0 || $(e.target).closest("cke_about_container").length > 0) {

                            }
                            else{
                                $("#contactForm-container").fadeOut("slow");
                                $("#backgroundPopup").fadeOut("slow");
                                $("body").css("overflow-y", "scroll");
                            } 
                        }
                    }
                });
            },
            sliderControl : function(){
                $('article#slide0-desc.project-description').toggleClass('open');
                 var expSlider = $('#experience .bxslider').bxSlider({
                    infiniteLoop: false,
                    hideControlOnEnd: true,
                    adaptiveHeight: false,
                    preloadImages: 'visible',
                    onSliderLoad: function(){
                        $("#experience .bxslider").css("visibility", "visible");
                        $("#experience .bxslider").css("max-height", "auto");
                    }
                });
                var projSlider = $('#projects .bxslider').bxSlider({
                    infiniteLoop: false,
                    hideControlOnEnd: true,
                    adaptiveHeight: false,
                    touchEnabled: true,
                    preloadImages: 'visible',
                    onSliderLoad: function(){
                        $("#projects .bxslider").css("visibility", "visible");
                        $("#projects .bxslider").css("max-height", "auto");
                    }
                });
            },
            preventScrollMobile : function(){
                var mediaQuery = window.matchMedia("(max-width: 768px)");
                if (mediaQuery.matches){
                    $(document).click(function(e){
                        if( $(e.target).closest("navbar-main").length > 0 ) {
                            return false;
                        }
                        $("#navbar-main").removeClass("in");
                    });
                }
                var mediaQuery = window.matchMedia("(max-width: 768px)");
                if (mediaQuery.matches){
                    $(document).click(function(e){
                        if( $(e.target).closest(".navbar-default").length > 0 ) {
                            //  return false;
                            //  $(document).unbind( 'touchmove', touchScroll );
                            // console.log('punkt 1');
                        }
                        else{
                            $("#navbar-main").removeClass("in");
                            $(document).unbind( 'touchmove', touchScroll );
                        } 
                    });
                    $('.image-box a').removeAttr('rel');
                    $('.image-box a').removeAttr('href');
                    $('img').removeClass('center-image');
                }
            }
        }
    
    init.skillclickControl();
    init.navigationControl();
    init.validationControl();
    init.contactFormControl();
    init.sliderControl();
    init.preventScrollMobile();
});
