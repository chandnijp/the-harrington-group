//FOR JSONPLACEHOLDER API
// var url = "https://jsonplaceholder.typicode.com/photos";

// $.getJSON(url, function(data) {
//       for (let i = 0; i<data.length; i++) {
//           if (i == 0) {
//             $('.carousel-inner').append($('<div class="carousel-item item active"><img class="d-block w-50 img-fluid" src='  + data[i].thumbnailUrl + '><div class="carousel-caption d-none d-md-block"><h5>' + data[i].title + '</h5></div></div>'));
//           } else if (i>0 && i<5) {
//             $('.carousel-inner').append($('<div class="carousel-item item"><img class="d-block w-50 img-fluid" src='  + data[i].thumbnailUrl + '><div class="carousel-caption d-none d-md-block"><h5>' + data[i].title + '</h5></div></div>'));
//           }
//       }
// })



// 2ND PAGE - 3 CARD CAROUSEL FOR MOBILE
jQuery(document).ready(function($) {
    "use strict";
    $('#locations-mobile').owlCarousel( {
      loop: true,
      center: true,
      items: 1,
      margin: 30,
      autoplay: false,
      dots:true,
      nav:true,
      autoplayTimeout: 8500,
      smartSpeed: 450,
      navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
    });
  });



// 2ND PAGE - 3 CARD CAROUSEL FOR DESKTOP
jQuery(document).ready(function($) {
    "use strict";
    $('#locations').owlCarousel( {
      loop: true,
      center: true,
      items: 1,
      margin: 30,
      autoplay: false,
      dots:true,
      nav:true,
      autoplayTimeout: 8500,
      smartSpeed: 450,
      navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
    });
  });


  
// SKILLS - SHOW INFO
var factClosed = document.querySelectorAll('.location__item');

for(var i = 0; i < factClosed.length; i++) {
  factClosed[i].addEventListener('click', function() {

    var factOpen = this.nextElementSibling;
    factOpen.style.display = 'flex';
    this.style.display = 'none';
  });
}



// SKILLS - CLOSE INFO
var factOpen = document.querySelectorAll(".location__item-open");

for(var i = 0; i < factOpen.length; i++) {
  factOpen[i].addEventListener("click", function() {

    var factClosed = this.previousElementSibling;
    factClosed.style.display= 'flex';
    this.style.display= 'none';
  });
}



// SIGN UP FORM JQUERY VALIDATION
  $(document).ready(function () { 
     
   // Validate Username
       $('#usercheck').hide();    
       let usernameError = true;
       $('#usernames').keyup(function () {
           validateUsername();
       });
         
       function validateUsername() {
         let usernameValue = $('#usernames').val();
         if (usernameValue.length == '') {
         $('#usercheck').show();
             usernameError = false;
             return false;
         } 
         else if((usernameValue.length < 3)|| 
                 (usernameValue.length > 10)) {
             $('#usercheck').show();
             $('#usercheck').html
   ("**length of username must be between 3 and 10");
             usernameError = false;
             return false;
         } 
         else {
             $('#usercheck').hide();
         }
       }
     
      // Validate Email
       const email = 
           document.getElementById('email');
       email.addEventListener('blur', ()=>{
          let regex =
   /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
          let s = email.value;
          if(regex.test(s)){
             email.classList.remove(
                   'is-invalid');
             emailError = true;
           }
           else{
               email.classList.add(
                     'is-invalid');
               emailError = false;
           }
       })
         
      // Validate Password
       $('#passcheck').hide();
       let passwordError = true;
       $('#password').keyup(function () {
           validatePassword();
       });
       function validatePassword() {
           let passwrdValue = 
               $('#password').val();
           if (passwrdValue.length == '') {
               $('#passcheck').show();
               passwordError = false;
               return false;
           } 
           if ((passwrdValue.length < 3)|| 
               (passwrdValue.length > 10)) {
               $('#passcheck').show();
               $('#passcheck').html
   ("**length of your password must be between 3 and 10");
               $('#passcheck').css("color", "red");
               passwordError = false;
               return false;
           } else {
               $('#passcheck').hide();
           }
       }
             
   // Validate Confirm Password
       $('#conpasscheck').hide();
       let confirmPasswordError = true;
       $('#conpassword').keyup(function () {
           validateConfirmPasswrd();
       });
       function validateConfirmPasswrd() {
           let confirmPasswordValue = 
               $('#conpassword').val();
           let passwrdValue = 
               $('#password').val();
           if (passwrdValue != confirmPasswordValue) {
               $('#conpasscheck').show();
               $('#conpasscheck').html(
                   "**Password didn't Match");
               $('#conpasscheck').css(
                   "color", "red");
               confirmPasswordError = false;
               return false;
           } else {
               $('#conpasscheck').hide();
           }
       }
         
   // Submitt button
       $('#submitbtn').click(function () {
           validateUsername();
           validatePassword();
           validateConfirmPasswrd();
           validateEmail();
           if ((usernameError == true) && 
               (passwordError == true) && 
               (confirmPasswordError == true) && 
               (emailError == true)) {
               return true;
           } else {
               return false;
           }
       });
   });