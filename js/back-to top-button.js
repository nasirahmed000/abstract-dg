
document.addEventListener('DOMContentLoaded', function () {
    var scrollToTopButton = document.getElementById('back-to-top-btn');

    window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) { 
            scrollToTopButton.style.display = 'block';
        } else {
            scrollToTopButton.style.display = 'none';
        }
    });

    scrollToTopButton.addEventListener('click', function () {
        scrollToTop(1000); 
    });

    function scrollToTop(scrollDuration) {
        var scrollStep = -window.scrollY / (scrollDuration / 15),
            scrollInterval = setInterval(function () {
                if (window.scrollY !== 0) {
                    window.scrollBy(0, scrollStep);
                } else {
                    clearInterval(scrollInterval);
                }
            }, 15);
    }
});