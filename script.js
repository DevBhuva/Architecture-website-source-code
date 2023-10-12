let navbar = document.querySelector('.header .navbar');
let searchForm = document.querySelector('.header .search-form');
let loginForm = document.querySelector('.header .login-form');
let contactInfo = document.querySelector('.contact-info');

document.querySelector('#menu-btn').onclick = () =>{
   navbar.classList.toggle('active');
   searchForm.classList.remove('active');
   loginForm.classList.remove('active');
};

document.querySelector('#search-btn').onclick = () =>{
   searchForm.classList.toggle('active');
   navbar.classList.remove('active');
   loginForm.classList.remove('active');
};

document.querySelector('#login-btn').onclick = () =>{
   loginForm.classList.toggle('active');
   navbar.classList.remove('active');
   searchForm.classList.remove('active'); 
};

document.querySelector('#info-btn').onclick = () =>{
   contactInfo.classList.add('active');
}

document.querySelector('#close-contact-info').onclick = () =>{
   contactInfo.classList.remove('active');
}

window.onscroll = () =>{
   navbar.classList.remove('active');
   searchForm.classList.remove('active');
   loginForm.classList.remove('active');
   contactInfo.classList.remove('active');
}

var swiper = new Swiper(".home-slider", {
   loop:true,
   grabCursor:true,
   navigation: {
     nextEl: ".swiper-button-next",
     prevEl: ".swiper-button-prev",
   },
});

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor:true,
   spaceBetween: 20,
   breakpoints: {
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

var swiper = new Swiper(".blogs-slider", {
   loop:true,
   grabCursor:true,
   spaceBetween: 20,
   breakpoints: {
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

var swiper = new Swiper(".logo-slider", {
   loop:true,
   grabCursor:true,
   spaceBetween: 20,
   breakpoints: {
      450: {
         slidesPerView: 2,
       },
      640: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1000: {
        slidesPerView: 5,
      },
   },
});


document.querySelector("form").addEventListener("submit", function(e) {
   e.preventDefault();

   // Validate form inputs
   var nameInput = document.querySelector('input[name="name"]');
   var emailInput = document.querySelector('input[name="email"]');
   var phoneInput = document.querySelector('input[name="phone"]');
   var messageInput = document.querySelector('textarea[name="message"]');
   var isValid = true;

   if (nameInput.value.trim() === "") {
      isValid = false;
      nameInput.classList.add("error");
   } else {
      nameInput.classList.remove("error");
   }

   if (emailInput.value.trim() === "") {
      isValid = false;
      emailInput.classList.add("error");
   } else {
      emailInput.classList.remove("error");
   }

   if (phoneInput.value.trim() === "") {
      isValid = false;
      phoneInput.classList.add("error");
   } else {
      phoneInput.classList.remove("error");
   }

   if (messageInput.value.trim() === "") {
      isValid = false;
      messageInput.classList.add("error");
   } else {
      messageInput.classList.remove("error");
   }

   if (!isValid) {
      return;
   }

   // Prepare form data
   var formData = new FormData();
   formData.append("name", nameInput.value.trim());
   formData.append("email", emailInput.value.trim());
   formData.append("phone", phoneInput.value.trim());
   formData.append("message", messageInput.value.trim());

   // Send form data to server using fetch
   fetch("path/to/server-script.php", {
      method: "POST",
      body: formData
   })
      .then(function(response) {
         if (response.ok) {
            console.log("Email sent successfully.");
            // Clear form inputs
            nameInput.value = "";
            emailInput.value = "";
            phoneInput.value = "";
            messageInput.value = "";
         } else {
            console.log("Failed to send email.");
         }
      })
      .catch(function(error) {
         console.log("Error:", error);
      });
});

$(document).ready(function() {
   $('#contact-form').submit(function(e) {
     e.preventDefault(); // Prevent form submission
 
     var form = $(this);
     var url = form.attr('action');
 
     // Send form data to the server using AJAX
     $.ajax({
       type: 'POST',
       url: url,
       data: form.serialize(), // Serialize form data
       success: function(response) {
         // Handle successful submission
         console.log('Email sent successfully!');
         // You can display a success message to the user or redirect them to a thank you page
       },
       error: function(xhr, status, error) {
         // Handle error
         console.log('Error occurred while sending email:', error);
         // You can display an error message to the user
       }
     });
   });
 });
 
 