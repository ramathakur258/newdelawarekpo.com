// add loaded class to body
window.addEventListener('load', () => { document.body.classList.add('loaded'); })

/****************************************
testimonial section
****************************************/
const testimonial_box_swiper = new Swiper('.box-slider-container', {
    init: false,
    spaceBetween: 30,
    pagination: {
        el: '.box-slider-pagination',
        type: 'bullets',
        bulletActiveClass: 'box-slider-pagination-bullet-active bullet-active',
        bulletClass: 'box-slider-pagination-bullet bullet',
        clickable: true,
    },
    breakpoints: {
        0: {
            slidesPerView: 1
        },
        992: {
            slidesPerView: 3
        }
    }
});

/****************************************
icon box slider section
****************************************/
const icon_box_swiper = new Swiper('.icon-box-slider-container', {
    init: false,
    slidesPerView: 3,
    spaceBetween: 30,
    pagination: {
        el: '.icon-box-slider-pagination',
        type: 'bullets',
        bulletActiveClass: 'icon-box-slider-pagination-bullet-active bullet-active',
        bulletClass: 'icon-box-slider-pagination-bullet bullet',
        clickable: true,
    },
    breakpoints: {
        0: {
            slidesPerView: 1
        },
        992: {
            slidesPerView: 3
        }
    }
});

/****************************************
hero slider section
****************************************/


const hero_swiper = new Swiper('.hero-slider-container', {
    init: false,
    pagination: {
        el: '.hero-pagination .swiper-wrapper',
        type: 'bullets',
        bulletClass: 'hero-pagination-bullet',
        bulletActiveClass: 'hero-pagination-bullet-active',
        clickable: true,
        renderBullet: (index, className) => {
            let result = '';
            result += '<div class="' + className + ' swiper-slide">';
                result += '<div class="icon-box txt-center">'
                    result += '<div class="icon-circle icon-circle-lg mg-center">';
                        result += '<img src="' + hero_pagination[index]['icon'] + '" alt="icon">'
                    result += '</div>';
                    result += '<h4 class="f-w-500">' + hero_pagination[index]['name'] + '</h4>';
                    result += '<p class="c-grey">' + hero_pagination[index]['paragraph'] + '</p>';
                result += '</div>'
            result += '</div>';
            return result;
        }
    }
});

/****************************************
hero pagination
****************************************/

const hero_swiper_pagination = new Swiper('.hero-pagination', {
    init: true,
    slidesPerView: 4,
    spaceBetween: 14,
    breakpoints: {
        0: {
            slidesPerView: 1.2,
            centeredSlides: true,
            slideToClickedSlide: true,
            enabled: true
        },
        400: {
            slidesPerView: 1.5,
            centeredSlides: true,
            slideToClickedSlide: true,
            enabled: true
        },
        600: {
            slidesPerView: 1.8,
            centeredSlides: true,
            slideToClickedSlide: true,
            enabled: true
        },
        992: {
            slidesPerView: 4,
            centeredSlides: false,
            slideToClickedSlide: false,
            enabled: false
        }
    }
});

hero_swiper.on('afterInit', () => {
    hero_swiper_pagination.update();
});

hero_swiper.on('slideChange', (e) => {
    hero_swiper_pagination.slideTo(e.activeIndex);
});

hero_swiper_pagination.on('slideChange', (e) => {
    hero_swiper.slideTo(e.activeIndex);
});

/****************************************
hero slider 2
****************************************/

const hero_swiper_2 = new Swiper('.hero-2-slider', {
    init: false,
    speed: 1000,
    autoplay: true,
    pagination: {
        el: '.hero-2-pagination',
        type: 'bullets',
        bulletActiveClass: 'hero-2-pagination-bullet-active bullet-active',
        bulletClass: 'hero-2-pagination-bullet bullet',
        clickable: true,
    },
});

/****************************************
tab slider
****************************************/


/****************************************
lighbox
****************************************/


/****************************************
custom scrollbar
****************************************/
var scrollbar = OverlayScrollbars(document.querySelector('body'), {
    overflowBehavior : {
        x : "hidden",
        y : "scroll"
    },
    callbacks: {
        onInitialized: () => {
            testimonial_box_swiper.init();
            icon_box_swiper.init();
            hero_swiper.init();
            hero_swiper_2.init();
        },
        onScroll: () => {
            const scroll_position = scrollbar.scroll().position.y;
            const navigation = document.querySelector('.navigation');

            if (typeof(navigation) === 'undefined' || navigation === null) return;

            if (window.innerHeight > 991 && scroll_position > 53)  {
                navigation.classList.add('scrolled');
            } else if (window.innerHeight < 991 && scroll_position > 30)  {
                navigation.classList.add('scrolled');
            }
            else {
                navigation.classList.remove('scrolled');
            }
        }
    }
})

/****************************************
navigation
****************************************/

const navigation_responsive = () => {
    const width = window.innerWidth;
    const navigation = document.querySelector('.navigation');

    if (typeof(navigation) === 'undefined' || navigation === null) return;

    if (width < 992) {
        navigation.classList.add('responsive');
    } else {
        navigation.classList.remove('responsive');
    }
};

window.addEventListener('resize', navigation_responsive);
window.addEventListener('load', navigation_responsive);

// display navigation on mobile
const navigation = document.querySelector('.navigation-bar');

if (typeof(navigation) !== 'undefined' && navigation !== null) {
    document.querySelector('.navigation-bar').addEventListener('click', (e) => {
        document.querySelector('.navigation').classList.add('shown');
    });
}

var getHeight = function(el) {
    var el_style      = window.getComputedStyle(el),
        el_display    = el_style.display,
        el_position   = el_style.position,
        el_visibility = el_style.visibility,
        el_max_height = el_style.maxHeight.replace('px', '').replace('%', ''),

        wanted_height = 0;


    // if its not hidden we just return normal height
    if(el_display !== 'none' && el_max_height !== '0') {
        return el.offsetHeight;
    }

    // the element is hidden so:
    // making the el block so we can meassure its height but still be hidden
    el.style.position   = 'absolute';
    el.style.visibility = 'hidden';
    el.style.display    = 'block';

    wanted_height     = el.offsetHeight;

    // reverting to the original values
    el.style.display    = el_display;
    el.style.position   = el_position;
    el.style.visibility = el_visibility;

    return wanted_height;
},


toggleSlide = function(el, display = 'block') {
    var el_max_height = 0;

    if(el.getAttribute('data-max-height')) {
        // we've already used this before, so everything is setup
        if(el.style.maxHeight.replace('px', '').replace('%', '') === '0') {
            el.style.maxHeight = el.getAttribute('data-max-height');
        } else {
            el.style.maxHeight = '0';
        }
    } else {
        el_max_height                  = getHeight(el) + 'px';
        el.style['transition']         = 'max-height 0.5s ease-in-out';
        el.style.overflowY             = 'hidden';
        el.style.maxHeight             = '0';
        el.setAttribute('data-max-height', el_max_height);
        el.style.display               = display;

        // we use setTimeout to modify maxHeight later than display (to we have the transition effect)
        setTimeout(function() {
            el.style.maxHeight = el_max_height;
        }, 10);
    }
};

Array.from(document.querySelectorAll('.has-child')).forEach((element, index) => {
    element.addEventListener('click', (e) => {

        if (window.innerWidth > 992) return;

        if (e.target.parentElement.parentElement.classList.contains('has-child') || e.target.parentElement.parentElement.classList.contains('parent')) {
            e.preventDefault();
        }

        console.log(e.target.parentElement.parentElement)

        if (e.currentTarget.classList.contains('dropped')) {
            toggleSlide(e.currentTarget.querySelector('.child'));
            e.currentTarget.classList.remove('dropped');
            return;
        }

        // hide dropdown for other list items
        Array.from(e.currentTarget.parentElement.querySelectorAll('.has-child.dropped')).forEach((e, i) => {
            e.classList.remove('dropped');
            toggleSlide(e.querySelector('.child'));

        });

        e.currentTarget.classList.add('dropped');

        toggleSlide(e.currentTarget.querySelector('.child'))
    
    });
});

// hide navigation on mobile
const close_button = document.querySelector('.close-button');

if (typeof(close_button) != 'undefined' && close_button != null) {
    close_button.addEventListener('click', (e) => {
        const dropped = document.querySelector('.dropped');
    
        if (typeof(dropped) == 'undefined' && dropped == null) {
            toggleSlide(dropped.querySelector('.child'));
            dropped.classList.remove('dropped');
        }
    
        document.querySelector('.navigation').classList.remove('shown');
    });
}

/****************************************
career accordion
****************************************/


/****************************************
comment thread
****************************************/


/****************************************
file input
****************************************/



/****************************************
section after hero slider
****************************************/

const get_bottom_cords = (el, child) => {
    let cords = [];

    Array.from(el.querySelectorAll(child)).forEach((element, index) => {
        cords.push(element.getBoundingClientRect().bottom);
    });

    return Math.max(...cords);
}


const hero_slider_sec_pad = () => {
    const section = document.querySelector('.sec-hero-slider');
    const slider = document.querySelector('.hero');
    const pagination = document.querySelector('.hero-pagination-wrapper');

    if (typeof(section) != 'undefined' && section != null &&
        typeof(slider) != 'undefined' && slider != null &&
        typeof(pagination) != 'undefined' && pagination != null
    ) {               

        let padding = get_bottom_cords(pagination, '.swiper-slide') -
            slider.getBoundingClientRect().bottom;

        if (window.innerWidth > 992) {
            padding += 10 * parseInt(window.getComputedStyle(document.documentElement).getPropertyValue('font-size'));
        } else {
            padding += 3.9 * parseInt(window.getComputedStyle(document.documentElement).getPropertyValue('font-size'));
        }

        section.querySelector('.sec-hero-slider-wrapper').style.paddingTop = padding + 'px';

    }
}

window.addEventListener('load', hero_slider_sec_pad);
window.addEventListener('resize', hero_slider_sec_pad);