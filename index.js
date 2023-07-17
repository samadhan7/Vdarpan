


window.addEventListener('scroll',
moveScrollIndicator);

const scrollIndicatorElt =
document.getElementById('scrollIndicator');

const maxHeight =
window.document.body.scrollHeight
- window.innerHeight;

function moveScrollIndicator(e) {
const percentage = 
((window.scrollY) / maxHeight) * 100;

scrollIndicatorElt.style.width
= percentage + '%';
}



// otp generation

function sendOTP() {
    const email = document.getElementById('email').value;
    const otp = Math.floor(100000 + Math.random() * 900000).toString();
  
    const xhr = new XMLHttpRequest();
    xhr.open('POST', '/send-otp', true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.onreadystatechange = function() {
      if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
        console.log(`OTP sent to ${email}`);
      }
    };
    xhr.send(JSON.stringify({ email: email, otp: otp }));
  }

  

  function verifyOTP() {
    const userEnteredOTP = document.getElementById('otp').value;
    const storedOTP = localStorage.getItem('otp');
  
    if (userEnteredOTP === storedOTP) {
      console.log('OTP is valid, proceed with email verification');
      // code to proceed with email verification
    } else {
      console.log('OTP is invalid');
      // code to show an error message
    }
  }

  



//   const express = require('express');
// const bodyParser = require('body-parser');
// const sgMail = require('@sendgrid/mail');

// const app = express();
// const port = 3000;

// // Set up the middleware
// app.use(bodyParser.urlencoded({ extended: false }));
// app.use(bodyParser.json());

// // Set up the SendGrid API key
// sgMail.setApiKey(process.env.SENDGRID_API_KEY);

// // Generate and send an OTP to the user's email
// app.post('/send-otp', (req, res) => {
//   const email = req.body.email;
//   const otp = req.body.otp;

//   const msg = {
//     to: email,
//     from: 'rushibangar98@gmail.com',
//     subject: 'OTP for email verification',
//     text: `Your OTP is ${otp}`,
//     html: `Your OTP is <strong>${otp}</strong>`,
//   };

//   sgMail
//     .send(msg)
//     .then(() => {
//       console.log(`OTP sent to ${email}`);
//       localStorage.setItem('otp', otp);
//       res.status(200).send('OTP sent');
//     })
//     .catch((err) => {
//       console.error(err);
//       res.status(500).send('Error sending OTP');
//     });
// });

// app.listen(port, () => console.log(`App listening on port ${port}`));






// slider 






const slides = document.querySelectorAll(".slider .slides img");
const buttons = document.querySelectorAll(".slider .navigation button");
let currentSlide = 0;

// Reset all slides
function reset() {
  slides.forEach((slide) => {
    slide.style.display = "none";
  });
  buttons.forEach((button) => {
    button.classList.remove("active");
  });
}

// Initialize slider
function startSlider() {
  reset();
  slides[0].style.display = "block";
  buttons[0].classList.add("active");
}

// Show next slide
function slideNext() {
  reset();
  slides[currentSlide + 1].style.display = "block";
  buttons[currentSlide + 1].classList.add("active");
  currentSlide++;
}

// Show previous slide


// Event listeners for navigation buttons
buttons.forEach((button, index) => {
  button.addEventListener("click", () => {
    reset();
    slides[index].style.display = "block";
    buttons[index].classList.add("active");
    currentSlide = index;
  });
});

// Autoplay slider
setInterval(() => {
  if (currentSlide === slides.length - 1) {
    currentSlide = -1;
  }
  slideNext();
}, 2500);



    function slideNext() {
        reset();
        if (currentSlide === slides.length - 1) {
            currentSlide = 0;
        } else {
            currentSlide++;
        }
        slides[currentSlide].style.display = "block";
        buttons[currentSlide].classList.add("active");
    }
    


startSlider();

