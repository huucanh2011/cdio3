//To top
$(document).ready(function() {
    // Initialize Tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // Add smooth scrolling to all links in navbar + footer link
    $(".footer a[href='#myPage']").on("click", function(event) {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (1000) specifies the number of milliseconds it takes to scroll to the specified area
        $("html, body").animate(
            {
                scrollTop: $(hash).offset().top
            },
            1000,
            function() {
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            }
        );
    });

    $("div.alert")
        .delay(5000)
        .slideUp();
});
