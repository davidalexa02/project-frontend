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

/*Validating form*/

// function validateForm() {
//     let fname = document.forms["formcontact"]["firstName"].value;
//     let lname = document.forms["formcontact"]["lastName"].value;
//     let email = document.forms["formcontact"]["email"].value;
//     let phone = document.forms["formcontact"]["phone"].value;
//     let message = document.forms["formcontact"]["message"].value;
//     // let newsletter = document.forms["formcontact"]["newsletter"].value;
//     // let contacts = document.forms["formcontact"]["contact"].value;
//     // var file = document.forms["formcontact"]["formFile"].value;
//     if (fname == "") {
//         alert("First name must be filled out");
//         return false;
//     }
//     if (lname == "") {
//         alert("Last name must be filled out");
//         return false;
//     }
//     if (email == "") {
//         alert("Email must be filled out");
//         return false;
//     }
//     if (phone == "") {
//         alert("Phone must be filled out");
//         return false;
//     }
//     if (message == "") {
//         alert("Message must be filled out");
//         return false;
//     }
//     /*if (newsletter == "") {
//         alert("Name must be filled out");
//         return false;
//     }*/
//     /*if (contacts == "") {
//         alert("Name must be filled out");
//         return false;
//     }*/
//     /*if (file == "") {
//         alert("File must be selected");
//         return false;
//     }*/
// }

/*Example from smtp.com:

function sendEmail() {
    Email.send({
        Host: "smtp.gmail.com",
        Username: "adndavid8@gmail.com",
        Password: "Barcaul99",
        To: document.getElementById("email").value,
        From: "adndavid8@gmail.com",
        Subject: "This is the subject",
        Body: "And this is the body",
        Attachments: [
            {
                name: "smtpjs.png",
                path: "https://networkprogramming.files.wordpress.com/2017/11/smtpjs.png"
            }]
    }).then(
        message => alert(message)
    );
}*/

//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

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