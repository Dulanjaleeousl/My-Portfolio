<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Omesha Dulanjalee</title>
  <link href="img/O-logo.png" rel="icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
    
    <style>
        #summary {
          background: url("img/main_pic.jpg");
          width: 100%;
          height: 100vh;
          background-size: cover;
        }
        @media (max-width: 900px) {
            #summary {
              width: 100%;
              height: 100vh;
              background: url("img/main_pic_mobile.jpg") top center;
              background-size: cover;
            }
        }
        @media (min-width: 1024px) {
            #summary {
              background-attachment: fixed;
            }

        }

        
/* ------------------Onscroll animations----------------- */
.reveal {
  position: relative;
  transform: translateY(150px);
  opacity: 0;
  transition: 1s all ease;
}

.reveal.active {
  transform: translateY(0);
  opacity: 1;
}


/* ----------------Mobile Navigation------------------- */
.mobile-nav-toggle {
  position: fixed;
  right: 93%;
  top: 15px;
  border: 0;
  transition: all 0.4s;
  outline: none;
  color: #ffffff;
  background-color: #000000;
  width: 40px;
  height: 40px;
  display: none;
  align-items: center;
  justify-content: center;
  line-height: 0;
  border-radius: 50px;
  cursor: pointer;
  z-index: 50;
  padding: 0% 1% 0% 1%;
}

.mobile-nav-active {
  overflow: hidden;
}

.mobile-nav-active #header {
  left: 0;
}

@media (max-width: 1199px) {
  .mobile-nav-toggle {
    display: inline-flex;
    padding: 0% 0.5% 0% 0.5%;
  }
}

@media (max-width: 768px) {
  .mobile-nav-toggle {
    right: 85%;
    padding: 0% 1% 0% 1%;
  }
}


/*------------------------Navigation Menu----------------------------*/
/* Desktop Navigation */
.nav-menu {
  padding: 30px 0 0 0;
}

.nav-menu * {
  margin: 0;
  padding: 0;
  list-style: none;
}

.nav-menu>ul>li {
  position: relative;
  white-space: nowrap;
}

.nav-menu a,
.nav-menu a:focus {
  display: flex;
  align-items: center;
  color: #a8a9b4;
  padding: 12px 15px;
  margin-bottom: 8px;
  transition: 0.3s;
  font-size: 17px;
  margin-left: 5px;
}
.nav-menu a svg {
  margin-right: 5%;
}

.nav-menu a:hover,
.nav-menu .active,
.nav-menu .active:focus,
.nav-menu li:hover>a {
  text-decoration: none;
  color: #fff;
}

.nav-menu a:hover svg,
.nav-menu .active svg,
.nav-menu .active:focus svg,
.nav-menu li:hover>a svg {
  color: #149ddd;
}

/* ----------------------header-------------------------- */
#header {
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  width: 300px;
  transition: all ease-in-out 0.5s;
  transition: all 0.5s;
  padding: 0 15px;
  background: #040b14;
  overflow: hidden;
  z-index: 50;
}

.close-icon {
  position: fixed;
  right: 80%;
  top: 15px;
  border: 0;
  transition: all 0.4s;
  outline: none;
  color: #fff;
  width: 40px;
  height: 40px;
  align-items: center;
  justify-content: center;
  line-height: 0;
  border-radius: 50px;
  cursor: pointer;
  display: none;
}

#header .profile img {
  margin: 15px auto;
  display: block;
  width: 130px;
  border: 8px solid #2c2f3f;
  border-radius: 100%;
}

#header .profile h1 {
  font-size: 24px;
  margin: 0;
  padding: 0;
  font-weight: 600;
  -moz-text-align-last: center;
  text-align-last: center;
  font-family: "Poppins", sans-serif;
}

#header .profile h1 a,
#header .profile h1 a:hover {
  color: #fff;
  text-decoration: none;
}

#header .profile .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #212431;
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}

#header .profile .social-links a:hover {
  background: #149ddd;
  color: #fff;
  text-decoration: none;
}

#main {
  margin-left: 300px;
}

@media (max-width: 1199px) {
  #header {
    left: -300px;
  }

  .close-icon {
    left: -300px;
  }

  #main {
    margin-left: 0;
  }

}

@media (max-width: 1180px) {
  .close-icon {
    left: -300px;
  }

}


/*--------------------Summary Section----------------------*/

#summary:before {
  background: rgba(5, 13, 24, 0.3);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1;
}

#summary .summary-container {
  position: relative;
  z-index: 2;
  min-width: 300px;
}

#summary h1 {
  margin: 0px 0px 10px 0px;
  font-size: 60px;
  font-weight: 700;
  line-height: 56px;
  color: #000000;
  margin-top: 10%;
  margin-left: 22%;

}

#summary h1 img {
  height: 10%;
  width: 10%;
}

#summary p {
  color: #000000;
  margin-bottom: 50px;
  font-size: 26px;
  font-family: "Poppins", sans-serif;
  margin-left: 27%;
}

#summary p span {
  color: #000000;
  padding-bottom: 4px;
  letter-spacing: 1px;
  border-bottom: 3px solid #149ddd;
}

typed::after {
  content: "|";
  animation: blink-caret 0.7s infinite;
}

@keyframes blink-caret {
  50% {
    opacity: 0;
  }
}

.cv-download {
  color: #000000;
  font-size: 26px;
  margin-left: 25%;
  width: 320px;
  text-align: center;
  text-decoration: none;
  padding: 1%;
  background-color: #37b3ed;
  border-radius: 20px;
}

.cv-download:hover {
  color: #ffffff;
  background-color: #0d99da;
}

.download {
  margin-right: 5%;
}



@media (max-width: 1199px) {
  #summary h1 {
    margin: 0px 0px 10px 0px;
    font-size: 60px;
    font-weight: 700;
    line-height: 56px;
    color: #000000;
    margin-top: 10%;
    margin-left: 10%;

  }
}

@media (max-width: 900px) {
  #summary h1 {
    margin: 0px 0px 10px 0px;
    font-size: 40px;
    font-weight: 700;
    line-height: 56px;
    color: #000000;
    margin-top: 10%;
    margin-left: 0%;
  }

  .cv-download {
    font-size: 16px;
    margin-left: 18%;
    width: 35%;
  }
  #summary p {
    margin-bottom: 50px;
    font-size: 26px;
    font-family: "Poppins", sans-serif;
    margin-left: 10%;
    font-weight: 500;
    color: #000000;
  }
  .cv-download {
    font-size: 16px;
    margin-left: 5%;
    width: 35%;
  }
}

@media (max-width: 768px) {
  #summary h1 {
    margin: 0px 0px 10px 0px;
    font-size: 50px;
    font-weight: 700;
    line-height: 56px;
    color: #000000;
    margin-top: 3%;
    margin-left: 3%;
  }

  #summary h1 {
    font-size: 28px;
    line-height: 36px;
  }

  .summary-container h1 img {
    width: 20%;
    height: 20%;
  }

 

  #summary p {
    margin-bottom: 50px;
    font-size: 26px;
    font-family: "Poppins", sans-serif;
    margin-left: 15%;
    font-weight: 500;
    color: #000000;
  }

  #summary p span {
    color: #ffffff;
    font-weight: 500;
  }

  .cv-download {
    font-size: 16px;
    margin-left: 5%;
    width: 55%;
  }
}


/*------------Sections General------------------*/
section {
  padding: 60px 0;
  overflow: hidden;
}

.section-bg {
  background: #f5f8fd;
}

.section-title {
  padding-bottom: 30px;
}

.section-title h2 {
  font-size: 32px;
  font-weight: bold;
  margin-bottom: 20px;
  padding-bottom: 20px;
  position: relative;
  color: #173b6c;
}

.section-title h2::after {
  content: "";
  position: absolute;
  display: block;
  width: 50px;
  height: 3px;
  background: #149ddd;
  bottom: 0;
  left: 0;
}

.section-title p {
  margin-bottom: 0;
}

.details {
  margin-top: 5%;
}


/*----------------------About-----------------------*/
.about {
  padding: 4% 1%;
  margin-top: 5%;
}

.about .content h3 {
  font-weight: 700;
  font-size: 26px;
  color: #173b6c;
  text-align: center;
}

.about .content h5 {
  text-align: center;
  margin-top: 2%;
  margin-bottom: 5%;
}

.about .content ul {
  list-style: none;
  padding: 0;
}

.about .content ul li {
  margin-bottom: 20px;
  display: flex;
  align-items: center;
}

.about .content ul strong {
  margin-right: 10px;
}

.about .content ul svg {
  font-size: 16px;
  margin-right: 5px;
  color: #149ddd;
  line-height: 0;
}

.about .content p:last-child {
  margin-bottom: 0;
}

#second-pic {
  margin-top: 30px;
}

@media (max-width: 1199px) {
  .second-pic {
    margin-top: 12%;
  }
}
@media (max-width: 768px) {
  .details {
    margin-top : 0%;
  }
}


/*----------------------Skills---------------------*/
.skills {
  padding: 4% 2%;
  margin-top: 5%;
  background-color: #ebf2f5;
}

.skills-content {
  display: flex;
}

.skills .progress-box {
  height: 60px;
  display: block;
  background: none;
  border-radius: 0;
}

.skills .progress-box .skill {
  padding: 0;
  margin: 0 0 6px 0;
  text-transform: uppercase;
  display: block;
  font-weight: 600;
  font-family: "Poppins", sans-serif;
  color: #050d18;
  font-size: 80%;
}

.skills .progress-box .skill .value {
  float: right;
  font-style: normal;
  margin-right: 5%;
}

.progress-bar {
  width: 95%;
  height: 8px;
  margin-top: 10px;
  border: 1px solid #565656;
  border-radius: 5px;
}

.percentage1,
.percentage2,
.percentage3,
.percentage4,
.percentage5,
.percentage6,
.percentage7,
.percentage8,
.percentage9,
.percentage10,
.percentage11,
.percentage12 {
  display: block;
  height: 100%;
  background-color: #149ddd;
  border-radius: 5px;
  animation: progress 1500ms ease-in 1;
}

.percentage1 {
  width: 60%;
}

.percentage2 {
  width: 65%;
}

.percentage3 {
  width: 50%;
}

.percentage4 {
  width: 40%;
}

.percentage5 {
  width: 40%;
}

.percentage6 {
  width: 45%;
}

.percentage7 {
  width: 50%;
}

.percentage8 {
  width: 45%;
}

.percentage9 {
  width: 40%;
}

.percentage10 {
  width: 35%;
}

.percentage11 {
  width: 40%;
}

.percentage12 {
  width: 65%;
}

@media (max-width: 991px) {
  .skills-content {
    flex-direction: column;
  }
}


/*---------------------------Education--------------------*/
.education {
  padding: 4% 2%;
  margin-top: 5%;
}

.education .education-title {
  font-size: 26px;
  font-weight: 700;
  margin-top: 20px;
  margin-bottom: 20px;
  color: #050d18;
}

.education .education-item {
  padding: 0 0 20px 20px;
  margin-top: -2px;
  border-left: 2px solid #1f5297;
  position: relative;
}

.education .education-item h4 {
  line-height: 18px;
  font-size: 18px;
  font-weight: 600;
  text-transform: uppercase;
  font-family: "Poppins", sans-serif;
  color: #050d18;
  margin-bottom: 10px;
}

.education .education-item h5 {
  font-size: 16px;
  background: #e4edf9;
  padding: 5px 15px;
  display: inline-block;
  font-weight: 600;
  margin-bottom: 10px;
}

.education .education-item ul {
  padding-left: 20px;
}

.education .education-item ul li {
  padding-bottom: 10px;
}

.education .education-item:last-child {
  padding-bottom: 0;
}

.education .education-item::before {
  position: absolute;
  width: 16px;
  height: 16px;
  border-radius: 50px;
  left: -9px;
  top: 0;
  background: #fff;
  border: 2px solid #1f5297;
}



/*---------------------Achievements-------------------*/
.achievements {
  padding: 4% 2%;
  margin-top: 5%;
  background-color: #ebf2f5;
}

.achievements .achievements-title {
  font-size: 26px;
  font-weight: 700;
  margin-top: 20px;
  margin-bottom: 20px;
  color: #050d18;
}

.achievements .achievements-item {
  padding: 0 0 20px 20px;
  margin-top: -2px;
  border-left: 2px solid #1f5297;
  position: relative;
}

.achievements .achievements-item h4 {
  line-height: 18px;
  font-size: 18px;
  font-weight: 600;
  text-transform: uppercase;
  font-family: "Poppins", sans-serif;
  color: #050d18;
  margin-bottom: 10px;
}

.achievements .achievements-item h5 {
  font-size: 16px;
  background: #e4edf9;
  padding: 5px 15px;
  display: inline-block;
  font-weight: 600;
  margin-bottom: 10px;
}

.achievements .achievements-item ul {
  padding-left: 20px;
}

.achievements .achievements-item ul li {
  padding-bottom: 10px;
}

.achievements .achievements-item:last-child {
  padding-bottom: 0;
}

.achievements .achievements-item::before {
  position: absolute;
  width: 16px;
  height: 16px;
  border-radius: 50px;
  left: -9px;
  top: 0;
  background: #fff;
  border: 2px solid #1f5297;
}




/*--------------------- Projects----------------------------*/
.projects {
  padding: 4% 2%;
  margin-top: 5%;
}

.projects .icon-box {
  margin-top: 5%;
}

.projects .title {
  margin-left: 80px;
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 18px;
}

h4 svg {
  float: left;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 44px;
  height: 44px;
  background: #149ddd;
  border-radius: 50%;
  transition: 0.5s;
  border: 1px solid #149ddd;
  color: #ffffff;
  padding: 7px;
  margin-right: 3%;
}

h4 svg:hover {
  background: #fff;
  color: #149ddd;
}

.projects .title a {
  color: #343a40;
  text-decoration: none;
}

.projects .title a:hover {
  color: #149ddd;
}

.projects .description {
  margin-left: 150px;
  line-height: 24px;
  font-size: 14px;
}

@media (max-width: 991px) {
  .projects .description {
    margin-left: 0px;
  }
}

@media (max-width: 991px) {
  .projects .description {
    margin-left: 0px;
  }

  .projects .title {
    margin-left: 10px;
    font-size: 15px;
  }
}

 /* -------------------Contact---------------------- */

.contact {
  padding: 4% 2% 10% 4%;
  margin-top: 5%;
  background-color: #ebf2f5;
}

.contact .info {
  padding: 30px;
  background: #fff;
  width: 100%;
  box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);
}

.contact .info svg {
  font-size: 20px;
  color: #149ddd;
  float: left;
  width: 40px;
  height: 40px;
  background: #dff3fc;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50px;
  transition: all 0.3s ease-in-out;
  padding: 10px;
}

.contact .info h4 {
  padding: 0 0 0 60px;
  font-size: 22px;
  font-weight: 600;
  margin-bottom: 5px;
  color: #050d18;
}

.contact .info p {
  padding: 0 0 10px 60px;
  margin-bottom: 20px;
  font-size: 14px;
  color: #173b6c;
}

.contact .info .email p {
  padding-top: 5px;
}

.contact .info .social-links {
  padding-left: 60px;
}

.contact .info .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #333;
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
  margin-right: 10px;
}

.contact .info .social-links a:hover {
  background: #149ddd;
  color: #fff;
}

.contact .info .email:hover svg,
.contact .info .address:hover svg,
.contact .info .phone:hover svg {
  background: #149ddd;
  color: #fff;
}

.contact .email-form {
  width: 100%;
  padding: 30px;
  background: #fff;
  box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);
}

.contact .email-form .form-group {
  padding-bottom: 8px;
}

.contact .email-form .validate {
  display: none;
  color: red;
  margin: 0 0 15px 0;
  font-weight: 400;
  font-size: 13px;
}

.contact .email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}

.contact .email-form .error-message br+br {
  margin-top: 25px;
}

.contact .email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

.contact .email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  animation: animate-loading 1s linear infinite;
}

.contact .email-form .form-group {
  margin-bottom: 15px;
}

.contact .email-form label {
  padding-bottom: 8px;
}

.contact .email-form input,
.contact .email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
}

.contact .email-form input {
  height: 44px;
}

.contact .email-form textarea {
  padding: 10px 15px;
}

.contact .email-form button[type=submit] {
  background: #149ddd;
  border: 0;
  padding: 10px 24px;
  color: #fff;
  transition: 0.4s;
  border-radius: 4px;
}

.contact .email-form button[type=submit]:hover {
  background: #37b3ed;
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}
      @media (max-width: 768px) {
  .contact .info {
    padding: 20px;
    width: 100%;
  }
}
    </style>

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
</script>

  <script>
    $(document).ready(function () {
      $(".email-form")[0].reset();

      $(".email-form").submit(function (e) {
        e.preventDefault(); 

        var form = $(this);
        var url = form.attr("action");

 
        form.find(".loading").fadeIn();
        form.find(".sent-message").hide();
        form.find(".error-message").hide();

  
        $.ajax({
          type: "POST",
          url: url,
          data: form.serialize(),
          success: function (data) {
        
            form.find(".loading").fadeOut();
            form.find(".sent-message").fadeIn();

      
            setTimeout(function () {
              form.find(".sent-message").fadeOut();
            }, 5000);
         
            form[0].reset();
          },

          error: function (data) {
           
            form.find(".loading").fadeOut();
            form.find(".error-message").fadeIn();
          },
        });
      });
    });
  </script>

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <svg id="icon1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
    class="bi bi-list mobile-nav-toggle" viewBox="0 0 16 16">
    <path fill-rule="evenodd"
      d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
  </svg>

  <!-- ======= Header ======= -->
  <header id="header" class="hidden-header">
    <div>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x close-icon"
        viewBox="0 0 16 16">
        <path
          d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
      </svg>

      <div class="profile">
        <img src="{{ asset('img/pro_pic.jpg') }}" alt="profile-pic">
        <h1 class="" style="text-align: center;"><a href="portfolio.html"> Omesha Dulanjalee</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://twitter.com/Dulanjalee2000" class="twitter" target="_blank"><svg
              xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter"
              viewBox="0 0 16 16">
              <path
                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
            </svg></a>
          <a href="https://www.facebook.com/shavindi.karunarathne.7?mibextid=ZbWKwL" class="facebook"
            target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-facebook" viewBox="0 0 16 16">
              <path
                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
            </svg></a>
          <a href="https://instagram.com/dulanjaleeomesha?igshid=M2RkZGJiMzhjOQ==" class="instagram"
            target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-instagram" viewBox="0 0 16 16">
              <path
                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
            </svg></a>
          <a href="https://github.com/Dulanjaleeousl" class="github" target="_blank"><svg
              xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github"
              viewBox="0 0 16 16">
              <path
                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
            </svg></a>
          <a href="https://www.linkedin.com/in/omesha-dulanjalee-kariyawasam-9866b5213?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
            class="linkedin" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
              fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
              <path
                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
            </svg></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu ">
        <ul>
          <li><a href="#summary" id="summary-link" class="nav-link scrollto active"><svg
                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                class="bi bi-house-door-fill" viewBox="0 0 16 16">
                <path
                  d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z" />
              </svg><span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
              </svg><span>About</span></a></li>
          <li><a href="#skills" class="nav-link scrollto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                fill="currentColor" class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                <path
                  d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
              </svg><span>Skills</span></a></li>
          <li><a href="#education" class="nav-link scrollto"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                height="20" fill="currentColor" class="bi bi-mortarboard-fill" viewBox="0 0 16 16">
                <path
                  d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5Z" />
                <path
                  d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Z" />
              </svg><span>Education</span></a></li>
          <li><a href="#achievements" class="nav-link scrollto"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                height="20" fill="currentColor" class="bi bi-trophy-fill" viewBox="0 0 16 16">
                <path
                  d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935z" />
              </svg> <span>Achievements</span></a></li>
          <li><a href="#projects" class="nav-link scrollto"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                height="20" fill="currentColor" class="bi bi-file-earmark-fill" viewBox="0 0 16 16">
                <path
                  d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3z" />
              </svg><span>Projects</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                height="20" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                <path
                  d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
              </svg><span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Summary Section ======= -->
  <section id="summary" class="d-flex flex-column">
    <div class="summary-container">
      <h1><img src="{{ asset('img/O-logo.png') }}">mesha Dulanjalee</h1>
      <p id="typedText">I'm <span class="typed"></span></p>
    </div>
    <a class="cv-download" href="Omesha Dulanjalee Resume.pdf" download="Omesha Dulanjalee CV"><svg
        xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-download download"
        viewBox="0 0 16 16">
        <path
          d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
        <path
          d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
      </svg>Download My CV</a>
  </section><!-- End Summary -->


  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2 class="reveal">About</h2>
          <p class="reveal">&nbsp;&nbsp;&nbsp;&nbsp;Enthusiastic and dedicated undergraduate
            actively pursuing a Bachelor of Software Engineering degree. As a
            perpetual learner, I am committed to staying abreast of current
            technology trends. My track record demonstrates a knack for generating
            creative ideas and implementing innovative solutions. I thrive on
            independence and possess the confidence to work autonomously.
            Committed to delivering high-quality work, I am eager to make a
            meaningful contribution to the dynamic field of software engineering.
            My passion for technology is evident in my continuous efforts to
            expand my knowledge. Seeking opportunities to apply and enhance my
            skills, I am eager to contribute to cutting-edge projects and
            collaborate with industry professionals. My goal is to gain
            practical experience that will not only further develop my skills
            but also make a positive impact in the field. Ultimately, I aim to
            lay a solid foundation for a successful and fulfilling career in
            software engineering.
          </p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <img src="{{ asset('img/image-about.jpg') }}" id="second-pic" class="img-fluid second-pic reveal" alt="omesha">
          </div>
          <div class="col-lg-9 pt-4 pt-lg-0 content reveal">
            <h3>Undergraduate in Bachelor of Software Engineering Honors.</h3>
            <h5>Open University of Sri Lanka</h5>
            <div class="row">
              <div class="col-lg-5 details">
                <ul>
                  <li><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                      class="bi bi-chevron-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg><strong>Name:</strong> <span>Omesha Dulanjalee</span></li>
                  <li><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                      class="bi bi-chevron-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg><strong>Birthday:</strong> <span>17 March 2000</span></li>
                  <li><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                      class="bi bi-chevron-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg><strong>Phone:</strong> <span>+94 711 652 133</span></li>
                </ul>

              </div>
              <div class="col-lg-7 details">
                <ul>
                  <li><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                      class="bi bi-chevron-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg> <strong>Age:</strong> <span>23</span></li>
                  <li><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                      class="bi bi-chevron-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg><strong>City:</strong> <span>Anuradhapura, Sri Lanka</span></li>
                  <li><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                      class="bi bi-chevron-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg><strong>Email:</strong> <span>dulanjaleeomesha2000@gmail.com</span></li>
                </ul>

              </div>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2 class="reveal">Skills</h2>
          <p class="reveal">In addition to my academic pursuits, I have developed a versatile
            skill set that positions me as a capable and resourceful candidate in
            the field of software engineering. My proficiency extends across
            various domains, showcasing a combination of technical expertise,
            problem-solving acumen, and interpersonal abilities. The following is
            an overview of the skills I have cultivated to complement my academic
            foundation and contribute effectively to the dynamic landscape of
            software engineering.</p>
        </div>

        <div class="skills-content reveal">

          <div class="col-lg-6">

            <div class="progress-bar-container progress-box">
              <span class="skill">UI/UX Design <p class="value">60%</p></span>
              <div class="progress-bar">
                <span class="percentage1"></span>
              </div>
            </div>

            <div class="progress-bar-container progress-box">
              <span class="skill">Website Design<p class="value">65%</p></span>
              <div class="progress-bar">
                <span class="percentage2"></span>
              </div>
            </div>

            <div class="progress-bar-container progress-box">
              <span class="skill">Mobile App design<p class="value">50%</p></span>
              <div class="progress-bar">
                <span class="percentage3"></span>
              </div>
            </div>

            <div class="progress-bar-container progress-box">
              <span class="skill">Object Oriented Programming<p class="value">40%</p></span>
              <div class="progress-bar">
                <span class="percentage4"></span>
              </div>
            </div>

            <div class="progress-bar-container progress-box">
              <span class="skill">Database <p class="value">40%</p></span>
              <div class="progress-bar">
                <span class="percentage5"></span>
              </div>
            </div>

            <div class="progress-bar-container progress-box">
              <span class="skill">Front End design<p class="value">45%</p></span>
              <div class="progress-bar">
                <span class="percentage6"></span>
              </div>
            </div>


          </div>

          <div class="col-lg-6">

            <div class="progress-bar-container progress-box">
              <span class="skill">HTML <p class="value">50%</p></span>
              <div class="progress-bar">
                <span class="percentage7"></span>
              </div>
            </div>

            <div class="progress-bar-container progress-box">
              <span class="skill">CSS<p class="value">45%</p></span>
              <div class="progress-bar">
                <span class="percentage8"></span>
              </div>
            </div>

            <div class="progress-bar-container progress-box">
              <span class="skill">JavaScript <p class="value">40%</p></span>
              <div class="progress-bar">
                <span class="percentage9"></span>
              </div>
            </div>

            <div class="progress-bar-container progress-box">
              <span class="skill">PHP/Laravel<p class="value">35%</p></span>
              <div class="progress-bar">
                <span class="percentage10"></span>
              </div>
            </div>

            <div class="progress-bar-container progress-box">
              <span class="skill">Java <p class="value">40%</p></span>
              <div class="progress-bar">
                <span class="percentage11"></span>
              </div>
            </div>

            <div class="progress-bar-container progress-box">
              <span class="skill">Android Studio<p class="value">65%</p></span>
              <div class="progress-bar">
                <span class="percentage12"></span>
              </div>
            </div>



          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->


    <!-- ======= Education Section ======= -->
    <section id="education" class="education">
      <div class="container">

        <div class="section-title">
          <h2 class="reveal">Education</h2>
          <p class="reveal">&nbsp;&nbsp;&nbsp;&nbsp;My educational journey has been characterized by a commitment to
            academic excellence and a passion for technology. I have successfully
            navigated through key milestones, each contributing to my holistic
            understanding of the field.
            These educational experiences collectively reflect my
            dedication to continuous learning and the acquisition of a
            well-rounded skill set, positioning me as a driven candidate in the
            realm of software engineering.<br /><br />

            &nbsp;&nbsp;&nbsp;&nbsp;The following section outlines my academic endeavors, detailing the
            courses and experiences that have equipped me with a solid foundation
            for success in the field.</p>
        </div>

        <div class="row reveal">
          <div class="col-lg-6">

            <div class="education-item" style="margin-top: 3%;">
              <h4>Undergraduate in Bachelor of Software Engineering Honors.</h4>
              <h5>2021 - Present</h5>
              <p><em>Open University of Sri Lanka</em></p>
              <p>As a third year undergraduate, I've honed
                skills in various programming languages and technologies.
                Combining coursework and independent study, I'm geared up for
                ongoing growth in pursuit of academic and professional excellence.</p>
            </div>
            <div class="education-item">
              <h4>Diploma in Information Communication Technology</h4>
              <h5>2021 - 2022</h5>
              <p><em>IMBS Green Campus, Sri Lanka</em></p>
              <p>Diploma achieved in Information and Communication Technology
                (ICT), covering web design, computer hardware, and networking
                fundamentals. I now possess a well-rounded skill set, from
                web design intricacies to hardware management and networking
                principles, fostering a holistic perspective on information
                technology.</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="education-item" style="margin-top: 3%;">
              <h4>GCE Advanced Level</h4>
              <h5>2017 - 2020</h5>
              <p><em>Central College, Anuradhapura </em></p>
              <p>Achieved success in the GCE Advanced Level examination with a
                focus on the physical stream in English medium.</p>
            </div>
            <div class="education-item">
              <h4>GCE Ordinary Level</h4>
              <h5>2015 - 2016</h5>
              <p><em>Central College, Anuradhapura</em></p>
              <p>I successfully navigated and excelled in the GCE O-Level
                examinations, undertaking the challenges of the curriculum in the
                English medium. </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End education Section -->


    <!-- ======= Achievements Section ======= -->
    <section id="achievements" class="achievements">
      <div class="container">

        <div class="section-title">
          <h2 class="reveal">Achievements</h2>
          <p class="reveal">&nbsp;&nbsp;&nbsp;&nbsp;I am pleased to showcase the concrete
            results of my unwavering dedication, expertise, and passion.
            Throughout my journey, I have consistently pursued excellence,
            transforming challenges into opportunities and aspirations into
            reality. <br /><br />

            &nbsp;&nbsp;&nbsp;&nbsp;The following section outlines my achievements, detailing
            the skills that have been instrumental in shaping my success.</p>
        </div>

        <div class="row reveal">
          <div class="col-lg-6">


            <div class="achievements-item" style="margin-top: 3%;">
              <h4>Future Career Bridge Bootcamp 02:2022</h4>
              <h5>2022</h5>
              <p><em>Future Careers Bridge, SLASSCOM</em></p>
              <p>I've completed all 14 fundamental challenges in Future Careers
                Bridge and also completed 29 challenges in other career
                paths.I am thrilled to announce that I have successfully
                completed the Future Career Bridge Bootcamp 2022, further refining my English
                proficiency and honing essential soft skills. This experience
                has equipped me with a robust foundation, and I am eager to
                apply these skills in my future endeavors.</p>
              <img src="{{ asset('img/bootcamp-certificate.png') }}" width="100%" height="100%">
            </div>

          </div>
          <div class="col-lg-6">
            <div class="achievements-item" style="margin-top: 3%;">
              <h4>National Level First Place Award in Debating</h4>
              <h5>2016 - 2017</h5>
              <p><em>Central College, Anuradhapura </em></p>
              <p>Achieved first place in the national debate competition
                organized by the School Energy Clubs program, a collaborative
                initiative by the Science branch of the Ministry of Education
                and the Sri Lanka Sustainable Energy Authority under the
                Ministry of Power and Renewable Energy. This accomplishment
                underscores my exceptional communication skills and ability
                to work collaboratively in a competitive setting,
                demonstrating a commitment to effective dialogue and
                promoting sustainable energy awareness.</p>
            </div>
            <div class="achievements-item">
              <h4>Senior Prefect</h4>
              <h5>2017 - 2018</h5>
              <p><em>Central College, Anuradhapura</em></p>
              <p>I had the honor of serving as a senior prefect in my school, a
                role that significantly contributed to the development of my
                leadership qualities and teamwork skills. This experience
                provided me with invaluable opportunities to lead,
                collaborate, and inspire others, fostering a strong
                foundation for my personal and professional growth.</p>
            </div>


          </div>
        </div>

      </div>
    </section><!-- End achievements Section -->

    <!-- ======= Projects Section ======= -->
    <section id="projects" class="projects">
      <div class="container">

        <div class="section-title">
          <h2 class="reveal">Projects</h2>
          <p class="reveal">I have actively engaged in various projects that highlight my skills,
            expertise, and passion for innovation. Each project serves as a testament
            to my ability to conceptualize, design, and implement solutions across
            different domains. From collaborative team efforts to independent
            endeavors, these projects showcase my adaptability, technical prowess,
            and commitment to delivering impactful results. Explore the diverse range
            of projects I have undertaken, each contributing to my multifaceted skill
            set and demonstrating my dedication to pushing the boundaries of what is
            possible in the world of technology and design.</p>
        </div>

        <div class="col">
          <div class="col-lg-10 icon-box reveal">

            <div class="col-lg-10 icon-box reveal">
              <h4 class="title"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-file-person"
                  viewBox="0 0 16 16">
                  <path
                    d="M12 1a1 1 0 0 1 1 1v10.755S12 11 8 11s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z" />
                  <path d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                </svg>
                <a href="https://github.com/Dulanjaleeousl/My-Portfolio.git">Omesha Dulanjalee's Portfolio</a>
              </h4>
              <p class="description">Developed and designed a personal portfolio to
                showcase my skills and professional journey. Using HTML, CSS, JavaScript
                and Laravel, I created a visually appealing and responsive website that
                effectively communicates my achievements and projects. The portfolio
                serves as a dynamic representation of my capabilities, demonstrating my
                proficiency in web development and design.</p>
            </div>
            <div class="col-lg-10 icon-box reveal">
              <h4 class="title"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-globe"
                  viewBox="0 0 16 16">
                  <path
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z" />
                </svg>
                <a href="https://github.com/OUSL-EEY4189-Group-20-1/Project_AthaHitha.git">'Athahitha' Donating Web
                  Application</a>
              </h4>
              <p class="description">Collaborated with a team of four members to develop
                Athahitha, a web application simplifying the donation process across
                categories. Responsible for the frontend using HTML, CSS, Bootstrap, and
                JavaScript, while implementing the backend logic with PHP Laravel. The
                project, currently in development, demonstrates my teamwork, technical
                proficiency, and contribution to creating a user-friendly platform.</p>
            </div>
            <div class="col-lg-10 icon-box reveal">
              <h4 class="title"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-android2"
                  viewBox="0 0 16 16">
                  <path
                    d="m10.213 1.471.691-1.26c.046-.083.03-.147-.048-.192-.085-.038-.15-.019-.195.058l-.7 1.27A4.832 4.832 0 0 0 8.005.941c-.688 0-1.34.135-1.956.404l-.7-1.27C5.303 0 5.239-.018 5.154.02c-.078.046-.094.11-.049.193l.691 1.259a4.25 4.25 0 0 0-1.673 1.476A3.697 3.697 0 0 0 3.5 5.02h9c0-.75-.208-1.44-.623-2.072a4.266 4.266 0 0 0-1.664-1.476ZM6.22 3.303a.367.367 0 0 1-.267.11.35.35 0 0 1-.263-.11.366.366 0 0 1-.107-.264.37.37 0 0 1 .107-.265.351.351 0 0 1 .263-.11c.103 0 .193.037.267.11a.36.36 0 0 1 .112.265.36.36 0 0 1-.112.264Zm4.101 0a.351.351 0 0 1-.262.11.366.366 0 0 1-.268-.11.358.358 0 0 1-.112-.264c0-.103.037-.191.112-.265a.367.367 0 0 1 .268-.11c.104 0 .19.037.262.11a.367.367 0 0 1 .107.265c0 .102-.035.19-.107.264ZM3.5 11.77c0 .294.104.544.311.75.208.204.46.307.76.307h.758l.01 2.182c0 .276.097.51.292.703a.961.961 0 0 0 .7.288.973.973 0 0 0 .71-.288.95.95 0 0 0 .292-.703v-2.182h1.343v2.182c0 .276.097.51.292.703a.972.972 0 0 0 .71.288.973.973 0 0 0 .71-.288.95.95 0 0 0 .292-.703v-2.182h.76c.291 0 .54-.103.749-.308.207-.205.311-.455.311-.75V5.365h-9v6.404Zm10.495-6.587a.983.983 0 0 0-.702.278.91.91 0 0 0-.293.685v4.063c0 .271.098.501.293.69a.97.97 0 0 0 .702.284c.28 0 .517-.095.712-.284a.924.924 0 0 0 .293-.69V6.146a.91.91 0 0 0-.293-.685.995.995 0 0 0-.712-.278Zm-12.702.283a.985.985 0 0 1 .712-.283c.273 0 .507.094.702.283a.913.913 0 0 1 .293.68v4.063a.932.932 0 0 1-.288.69.97.97 0 0 1-.707.284.986.986 0 0 1-.712-.284.924.924 0 0 1-.293-.69V6.146c0-.264.098-.491.293-.68Z" />
                </svg>
                <a href="https://github.com/Dulanjaleeousl/AthahithaMobileApp.git" target="_blank">'Athahitha' Donating
                  Mobile Application</a>
              </h4>
              <p class=" description">Currently contributing to the development of
                Athahitha, a mobile application created as an individual project using
                Android Studio and Java. The initiative focuses on improving the donation
                process by establishing a direct connection between donors and recipients.
                My role involves actively participating in the design and ongoing
                development, showcasing proficiency in mobile app development and a
                commitment to impactful technological solutions as an individual
                contributor.</p>
            </div>
            <div class="col-lg-10 icon-box reveal">
              <h4 class="title"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-globe"
                  viewBox="0 0 16 16">
                  <path
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z" />
                </svg>
                <a href="https://github.com/Dulanjaleeousl/Pearl-of-Indian-Oceon.git">'Pearl Of Indian Oceon' Travel Web
                  Site</a>
              </h4>
              <p class="description">In my first-year university project, I developed a
                website highlighting travel destinations in Sri Lanka. I plan to expand
                its functionality in the future to offer an enriched user experience,
                showcasing my commitment to ongoing improvement and adaptability in
                project development.
              </p>
            </div>

          </div>

        </div>
    </section><!-- End Projects Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2 class="reveal">Contact</h2>
          <p class="reveal">&nbsp;&nbsp;&nbsp;&nbsp;Feel free to reach out! I welcome the opportunity to connect,
            collaborate, and discuss potential avenues for cooperation. Whether
            you have inquiries, opportunities, or simply wish to engage in a
            conversation, my contact information is provided below. I'm open to
            new opportunities and look forward to connecting with you to explore
            the possibilities ahead. Don't hesitate to get in touch!</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch reveal">
            <div class="info">
              <div class="address">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                  <path
                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                </svg>
                <h4>Location:</h4>
                <p>No 1, Railway Cross Road, Thissa Mawatha, Pullayara Junction, Anuradhapura</p>
              </div>

              <div class="email">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                  <path
                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                </svg>
                <h4>Email:</h4>
                <p>dulanjaleeomesha2000@gmail.com</p>
              </div>

              <div class="phone">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                  <path
                    d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                  <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                </svg>
                <h4>Call:</h4>
                <p>+94 711 652 133</p>
              </div>

              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3947.447493253166!2d80.4361541098876!3d8.357562491644671!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afcf4f99360e159%3A0x5f1b5620404a7912!2s9C5Q%2B2FH%2C%20Anuradhapura!5e0!3m2!1sen!2slk!4v1700339748575!5m2!1sen!2slk"
                frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch reveal">
            <form id="myForm" action="https://formsubmit.co/dulanjaleeomesha2000@gmail.com" method="post" role="form"
              class="email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="sub" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="mess" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message" style="text-align: center;"> Error! Did not message sent successfully</div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
              <input type="hidden" name="_captcha" value="false">

            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->


  </main><!-- End #main -->


  <script>
    document.addEventListener("DOMContentLoaded", function () {
      var typedElement = document.querySelector("#typedText .typed");
      var roles = ["Undergraduate", "Developer", "Designer"];
      var index = 0;

      function typeWriter(text, i, cb) {
        if (i < text.length) {
          typedElement.innerHTML += text.charAt(i);
          i++;
          setTimeout(function () {
            typeWriter(text, i, cb);
          }, 100);
        } else {
          setTimeout(cb, 1000); 
        }
      }

      function clearText() {
        typedElement.innerHTML = "";
        index = (index + 1) % roles.length;
        setTimeout(function () {
          typeWriter(roles[index], 0, clearText);
        }, 500); 
      }

      typeWriter(roles[index], 0, clearText);
    });
  </script>


  <script>
      
//-------------animation when scrolling----------------
function reveal() {
    var reveals = document.querySelectorAll(".reveal");

    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("active");
        } else {
            reveals[i].classList.remove("active");
        }
    }
}

window.addEventListener("scroll", reveal);



//---------------mobile nav toggle-----------------------
document.addEventListener('DOMContentLoaded', function () {
    const header = document.getElementById('header');
    const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
    const closeicon = document.querySelector('.close-icon');

    // Toggle header display
    function toggleHeaderPosition() {
        const currentTransform = window.getComputedStyle(header).getPropertyValue('transform');
        const isHeaderShifted = currentTransform === 'matrix(1, 0, 0, 1, 300, 0)';
        
        header.style.transform = isHeaderShifted ? 'translateX(0)' : 'translateX(300px)';
        closeicon.style.display = 'inline-flex'
        closeicon.style.transform = isHeaderShifted ? 'translateX(0)' : 'translateX(320px)';
    }

    // Toggle header close
    function toggleHeaderClose() {
        const currentTransform = window.getComputedStyle(header).getPropertyValue('transform');
        const isHeaderShifted = currentTransform === 'matrix(1, 0, 0, 1, 300, 0)';

        header.style.transform = isHeaderShifted ? 'translateX(0)' : 'translateX(-300px)';
    }

    // mobile-nav-toggle click
    mobileNavToggle.addEventListener('click', toggleHeaderPosition);
    closeicon.addEventListener('click', toggleHeaderClose)


    // clicks outside of the navbar
    document.body.addEventListener('click', function (event) {
        const isClickInsideNavbar = document.querySelector('.navbar').contains(event.target) ||
        document.querySelector('.mobile-nav-toggle').contains(event.target) ||
        document.querySelector('.close-icon').contains(event.target);

        if (!isClickInsideNavbar) {
            // Replace the following lines with the appropriate code to close your navbar
            // For example, if your navbar has a class 'navbar-collapse', you can use the following:
            document.querySelector('.navbar-collapse').classList.remove('show');
        }
    });


    // Check the window width on resize
    window.addEventListener('resize', function () {
        if (window.innerWidth > 1198) {
            header.style.transform = 'translateX(0)';
            closeicon.style.display = 'none'; 
        } else {
            closeicon.style.display = 'inline-flex'; 
        }
    });
});


//----------menu item click active----------------
document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll(".nav-link");

    function handleLinkClick(event) {
        links.forEach(function (link) {
            link.classList.remove("active");
        });
        event.target.classList.add("active");
    }

    links.forEach(function (link) {
        link.addEventListener("click", handleLinkClick);
    });

    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top <= window.innerHeight / 2 &&
            rect.bottom >= window.innerHeight / 2
        );
    }

    function handleScroll() {
        let currentSectionId = "";

        document.querySelectorAll("section").forEach(function (section) {
            if (isElementInViewport(section)) {
                currentSectionId = section.id;
            }
        });

        links.forEach(function (link) {
            link.classList.remove("active");
        });

        const activeLink = document.querySelector(
            `.nav-link[href="#${currentSectionId}"]`
        );
        if (activeLink) {
            activeLink.classList.add("active");
        }
    }
    
    handleScroll();

    window.addEventListener("scroll", handleScroll);
});






  </script>

</body>

</html>
