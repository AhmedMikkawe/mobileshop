$(document).ready(function () {
    const sliderContainer = document.querySelector('.slider-container');
    const sliderHandle = document.querySelector('.slider-handle');
    const afterImage = document.querySelector('.slider-image.after');

    let isDragging = false;

    sliderHandle.addEventListener('mousedown', () => {
        isDragging = true;
        sliderContainer.classList.add('dragging');
    });

    document.addEventListener('mouseup', () => {
        isDragging = false;
        sliderContainer.classList.remove('dragging');
    });

    document.addEventListener('mousemove', (e) => {
        if (!isDragging) return;

        const rect = sliderContainer.getBoundingClientRect();
        let offsetX = e.clientX - rect.left;
        if (offsetX < 0) offsetX = 0;
        if (offsetX > rect.width) offsetX = rect.width;

        sliderHandle.style.left = `${offsetX}px`;
        afterImage.style.clip = `rect(0, ${offsetX}px, 700px, 0)`;
    });
    $(".owl-carousel").owlCarousel({
        loop: false,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
    $(window).on('load', function() {
        $('body').addClass('loaded');
    });
});
