//initialize swiper when document ready
var swiper1 = new Swiper('#sw1', {
    slidesPerView: 1,
    spaceBetween: 5,
    direction: getDirection(),
    navigation: {
        nextEl: '#nextbut1',
        prevEl: '#prevbut1',
    },
    on: {
        resize: function () {
            swiper1.changeDirection(getDirection());
        },
    },
    breakpoints: {
        480: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        1200: {
            slidesPerView: 4,
            spaceBetween: 30,
        }
    },
    loop: true,
    autoplay: {
        delay: 2000,
    },
    // Optional parameters   
})

var swiper2 = new Swiper('#sw2', {
    slidesPerView: 1,
    spaceBetween: 5,
    direction: getDirection(),
    navigation: {
        nextEl: '#nextbut2',
        prevEl: '#prevbut2',
    },
    on: {
        resize: function () {
            swiper2.changeDirection(getDirection());
        },
    },
    breakpoints: {
        380: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        480: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
        768: {
            slidesPerView: 5,
            spaceBetween: 30,
        },
        1200: {
            slidesPerView: 7,
            spaceBetween: 30,
        }
    },
    loop: true,
    autoplay: {
        delay: 2000,
    },
    // Optional parameters   
})


function getDirection() {
    var windowWidth = window.innerWidth;
    var direction = window.innerWidth <= 160 ? 'vertical' : 'horizontal';

    return direction;
}

$('#read').click(function () {
    //optionally remove the 500 (which is time in milliseconds) of the
    //scrolling animation to remove the animation and make it instant
    $('html, body, .section-call, .fourth, .container-fluid, .row .row-cols-3').animate({
        scrollTop: $("#este").offset().top
    }, 2000);
    return false;
});

$('#formbut').click(function () {
    //optionally remove the 500 (which is time in milliseconds) of the
    //scrolling animation to remove the animation and make it instant
    $('html, body').animate({
        scrollTop: $("#este2").offset().top
    }, 2000);
    return false;
});

//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

function fileValidation() {
    var fileInput =
        document.getElementById('formFile');

    var filePath = fileInput.value;

    // Allowing file type
    var allowedExtensions =
        /(\.doc|\.docx|\.odt|\.pdf|\.tex|\.txt|\.rtf|\.wps|\.wks|\.wpd)$/i;

    if (!allowedExtensions.exec(filePath)) {
        alert('Invalid file type');
        fileInput.value = '';
        return false;
    }
}