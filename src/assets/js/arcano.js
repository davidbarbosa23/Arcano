$(document).ready(function(){
    /**
     * Class "scroll-next" for scroll to botton to 590px at 800ms
     */
    $('.scroll-next').click(function(){
        $("html, body").animate({ scrollTop: 590 }, 800);
    });

    /**
     * Slider Libros - Novedades
     */
    $('.slider.news').bxSlider({
        auto: true,
        slideWidth: 220,
        minSlides: 1,
        maxSlides: 10,
        moveSlides: 1,
        adaptiveHeight: true,
        pager: false,
        nextText: '<a class="icon-display slider scroll-left"></a>',
        prevText: '<a class="icon-display slider scroll-right"></a>',
    });

    /**
     * Slider Libros - Más Vendidos
     */
    $('.slider.best-seller').bxSlider({
        auto: true,
        slideWidth: 275,
        minSlides: 1,
        maxSlides: 10,
        moveSlides: 1,
        adaptiveHeight: true,
        pager: false,
        nextText: '<a class="icon-display slider scroll-left"></a>',
        prevText: '<a class="icon-display slider scroll-right"></a>',
        randomStart: true
    });

    /**
     * Slider Libros - Recomendados
     */
    $('.slider.recomended').bxSlider({
        auto: true,
        slideWidth: 200,
        minSlides: 1,
        maxSlides: 10,
        moveSlides: 1,
        adaptiveHeight: true,
        pager: false,
        nextText: '<a class="icon-display slider scroll-left"></a>',
        prevText: '<a class="icon-display slider scroll-right"></a>',
        randomStart: true
    });

    /**
     * Slider Libros - Frases
     */
    $('.slider.quotes-content').bxSlider({
        auto: true,
        speed: 1500,
        pause: 6000,
        slideWidth: 460,
        minSlides: 1,
        maxSlides: 10,
        moveSlides: 1,
        adaptiveHeight: true,
        randomStart: true
    });

    /**
     * Hover inicio
     */
    $('.nav-item.dropdown.inicioMenu').hover(function () {
        $( this ).addClass('show');
        $( this ).children('.dropdown-toggle').attr('aria-expanded', 'true');
        $( this ).children('.dropdown-menu').addClass('show');
    }, function() {
        $( this ).removeClass('show');
        $( this ).children('.dropdown-toggle').attr('aria-expanded', 'false');
        $( this ).children('.dropdown-menu').removeClass('show');
    });

    /**
     * Hover user button on navbar
     */
    $('.iconsArcanoNav .nav-item.dropdown').hover(function () {
        $( this ).addClass('show');
        $( this ).children('.dropdown-toggle').attr('aria-expanded', 'true');
        $( this ).children('.dropdown-menu').addClass('show');
    }, function() {
        $( this ).removeClass('show');
        $( this ).children('.dropdown-toggle').attr('aria-expanded', 'false');
        $( this ).children('.dropdown-menu').removeClass('show');
    });

    /**
     * Buttons to show "Overlay Forms" to full window
     */
    $('.showLoginForm').click(function(){
        $('.overlay.sessionForm').addClass('active');
        $('.overlay.registerForm').removeClass('active');
    });
     $('.showRegisterForm').click(function(){
        $('.overlay.sessionForm').removeClass('active');
        $('.overlay.registerForm').addClass('active');
    });
     $('.closeForms').click(function(){
        $('.overlay').removeClass('active');
    });

});

window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
}, false);
