
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                loop: true,           // Infinite loop
                margin: 10,           // Space between items
                nav: false,           // Hide navigation arrows
                dots: true,           // Show indicators (dots)
                autoplay: true,       // Enable auto-slide
                autoplayTimeout: 2500, // Auto-slide every 2.5 seconds
                autoplayHoverPause: true, // Pause on hover
                responsive: {
                    0: { items: 1 },   // 1 item on small screens
                    600: { items: 2 }, // 2 items on medium screens
                    1000: { items: 3 } // 3 items on large screens
                }
            });
        });
