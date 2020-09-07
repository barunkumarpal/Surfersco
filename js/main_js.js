// Home page Hero Product Tabs
$(document).ready(function(){
   
    $('.swiper-slide-active .desc-tab-links li .nav-link').on('click', function(){
        var target = $(this).data('target')
       

        $('.swiper-slide-active .desc-tab-links li .nav-link').removeClass('active')
        $(this).addClass('active')
        
        var tabData = "#"+target        
        $('.swiper-slide-active .tab-content div').removeClass('active').addClass('fade')
        $(tabData).addClass('active').removeClass('fade')       
    })

    // $('.swiper-pagination').css({"width": "50px", "left": "70vw", "top":"23vw", "background":"#000", "height":"25px","color":"#fff"})
    // $('.swiper-pagination span').css({"color":"#fff"})

    $('.toggle-bar i').on('click',()=>{
        $(".main_nav").slideToggle()
    })
  });