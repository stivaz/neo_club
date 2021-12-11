/*Global variables*/
function menuBtn() {
    let menu = jQuery('.header-bottom');
    let btn = jQuery('.menu-toggle');

    btn.click(function (e) {
        e.preventDefault();
        menu.toggleClass('on');
        jQuery(this).toggleClass('on')
    });
}

function blockReadmore() {
    let elem = jQuery('.block-readmore');
    let textmore = elem.attr('data-textmore');
    let texthide = elem.attr('data-texthide');
    elem.readmore({
        speed: 100,
        collapsedHeight: 415,
        moreLink: '<div class="readmore-link"><a href="#" class="btn btn-matrix-bordered btn-big">' + textmore + ' <i class="fas fa-angle-down"></i></a></div>',
        lessLink: '<div class="readmore-link"><a href="#" class="btn btn-matrix-bordered btn-big">' + texthide + ' <i class="fas fa-angle-up"></i></a></div>'
    });
}

function stickyDiv() {
    //let sticky = new Sticky('.anchor-menu, .widget-casino, .widget-slots');
}

function returnToTop() {
    let btn = jQuery('.btn-top');
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() >= 50) {
            btn.fadeIn(200);
        } else {
            btn.fadeOut(200);
        }
    });
    btn.click(function () {
        jQuery('body,html').animate({
            scrollTop: 0
        }, 500);
    });
}

function slotScreensSlider() {
    let screenSwiper = new Swiper('.screens-carousel', {
        slidesPerView: 1,
        spaceBetween: 20,
        autoplay: true,
        pagination: {
            el: '.screens-pagination',
            clickable: true,
        },
        breakpoints: {
            575: {
                slidesPerView: 2,
            },
            767: {
                slidesPerView: 3,
            }
        },
    });
}

function topSlider() {
    let topSwiper = new Swiper('.top-slots-slider .swiper-container', {
        slidesPerView: 1,
        spaceBetween: 30,
        navigation: {
            nextEl: '.top-slots-next',
            prevEl: '.top-slots-prev',
        },
        breakpoints: {
            576: {
                slidesPerView: 2,
            },
            767: {
                slidesPerView: 3,
            }
        },
    });
}

function openPopup() {
    jQuery('.open-popup').magnificPopup({
        type: 'inline',

        fixedContentPos: true,
        fixedBgPos: true,

        overflowY: 'hidden',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in',
        focus: 'input[type=tel]'
    });
}

function maximize() {
    let $frame = jQuery('.main-game-frame');
    let $btn = jQuery('.btn-maximize');
    $btn.on('click', function () {
        $frame.toggleClass('fullscreen');
    })
}

function initEvents() {

    /*Actions on 'DOM ready' event*/
    jQuery(function () {
        menuBtn();
        blockReadmore();
        stickyDiv();
        returnToTop();
        slotScreensSlider();
        topSlider();
        openPopup();
        maximize();
    });

    jQuery(window).resize(function () {

    });

}

/*Start all functions and actions*/
initEvents();
