
        $(document).ready(function(){
            let slider = $('.slider');

            slider.show();
            slider.bxSlider({
                'mode' : 'fade',
                'touchEnabled' : false,
                'auto' : true,
                'pause' : 5000,
                'preloadImages' : 'all',
                'easing' : 'ease-in-out',
                'stopAutoOnClick' : true
            });
        });
    