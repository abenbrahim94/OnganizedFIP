
<?php include_once("functions/constant.php"); ?>
<?php include_once("functions/db_conn.php"); ?>
<?php include_once("api/contact.php"); ?>


<!DOCTYPE html>
<html>
<head>
<title>Portfolio</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="icon" href="img/logo.png" type="image/png" >
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/splide.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="scripts/navbar.js" type="javascript"></script>



</head>

<body style="background-color: #EAEAEA;" data-spy="scroll"  data-offset="50" >
<div class="page1 " id="page-1" active>
  <div class="position-relative ">
    <video src="img/main.mp4" class="w-100 " autoplay loop muted></video>
   <div class="img-responsive navbar-brand slideInUp " style="background-image: url(img/logo.svg);">
    <div class="wow fadeInUp animate__animated animate__slideInUp   logo image-fluid img-responsive">
    <div class="row text-center">
  <div class="col-md-12">
    <div class="text-center show-on-scroll" >
      <?php for($i=1;$i<23;$i++){ ?>
<br>

<?php
      } ?>
   <h4 class="text-center  down wow animate__animated animate__slideInDown fadeInUp" data-wow-delay="1.2s" style="color: #B78628; font-family:cinzel-decorative;margin-left:550px;">Scroll Down </h4>
<div>
  </div>
  </div>
    </div>
    
  </div>
 
  </div>
  <div class="navbar-icon animate__animated animate__slideInUp show-on-scroll inline-contact">
      <i class="fa fa-bars animate__animated animate__slideInUp"></i>
  </div>
</div>
<!-- ABOUT -->


<div id="page-2" class="page-2 parallax-section px-0 mx-0" style="height: 100vh;">
  <div class="row h-100 px-0 mx-0">
  
    <div class="col-sm-7 col-12 h-100 px-0 mx-0 bounce" style="background-color: #EAEAEA 
;">
    <div class="row m-4 bounce">
    <div class="col-2 bounce ">

    <div class="logo1 show-on-scroll inline-contact animate__animated animate__slideInUp bounce">

    </div>
    </div>
    <div class="text-center wow fadeInUp show-on-scroll inline-contact">
      <h1 class="text-center animate__animated animate__bounce   about-me d-inline-block show-on-scroll" data-wow-delay="0.8s">Who Am I</h1> 
    </div>
    </div>
    <div class="row m-4">
<div class="container">
  <div class="container wow fadeInUp show-on-scroll inline-contact" data-wow-delay="0.8s" style="font-family: cinzel-regular;font-size:20px;">
<div id="ab-content" class="text-black text-justified animate__animated animate__slideInRight">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero, sit, eligendi eum harum debitis rerum perspiciatis non tempora sapiente sunt sequi deserunt labore. Eaque accusantium, tempore odit expedita minima asperiores!
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero, sit, eligendi eum harum debitis rerum perspiciatis non tempora sapiente sunt sequi deserunt labore. Eaque accusantium, tempore odit expedita minima asperiores!

Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero, sit, eligendi eum harum debitis rerum perspiciatis non tempora sapiente sunt sequi deserunt labore. Eaque accusantium, tempore odit expedita minima asperiores!
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero, sit, eligendi eum harum debitis rerum perspiciatis non tempora sapiente sunt sequi deserunt labore. Eaque accusantium, tempore odit expedita minima asperiores!

</div>
</div>
</div>


    </div>
    </div>
   
   
    <div class="col-sm-5 col-12 wow fadeInUp" style="color: #EAEAEA;" data-wow-delay="1.2s">
    <div class="card bg-transparent" style="width: 100%; height:100%;border:none">
      <div class="card-body">
      <div class="flex-container " style="flex-grow: 1; height: 13%;background-color: #EAEAEA;">
        <div class="flex-unchild" style="order: 4;background-color: #EAEAEA;"></div>
        <div class="flex-unchild"  style="order: 2"></div>
        <div class="flex-child show-on-scroll inline-contact" style="order: 3;background-image:url(img/cinema-4d.svg);background-repeat: no-repeat;background-size: contain;">3</div> 
        <div class="flex-unchild"  style="order: 1"></div>
        <div class="flex-unchild"  style="order: 5"></div>
      </div>
      <div class="flex-container " style="flex-grow: 1; height:13%">
        <div class="flex-child show-on-scroll inline-contact" style="order: 4;background-image:url(img/ai.svg);background-repeat: no-repeat;background-size: cover;">4</div>
        <div class="flex-unchild"  style="order: 3"></div>
        <div class="flex-child show-on-scroll inline-contact" style="order: 2;background-image:url(img/aae.svg);background-repeat: no-repeat;background-size: cover;">2</div> 
        <div class="flex-unchild"  style="order: 1"></div>
        <div class="flex-unchild"  style="order: 5"></div>
      </div>
      <div class="flex-container " style="flex-grow: 1; height:13%">
        <div class="flex-unchild" style="order: 4"></div>
        <div class="flex-unchild"  style="order: 2"></div>
        <div class="flex-child show-on-scroll inline-contact" style="order: 3;background-image:url(img/ai.svg);background-repeat: no-repeat;background-size: cover;">3</div> 
        <div class="flex-child show-on-scroll inline-contact"  style="order: 1;background-image:url(img/ap.svg);background-repeat: no-repeat;background-size: cover;">1</div>
        <div class="flex-child show-on-scroll inline-contact"  style="order: 5;background-image:url(img/adesign.svg);background-repeat: no-repeat;background-size: cover;">5</div>
      </div>

      <div class="card bg-transparent show-on-scroll inline-contact" style="background-image:url(img/person.jpg);background-size: contain;
  background-position: center;
position: relative;overflow: hidden;height:53.5%;width:100%;border:none;background-repeat:no-repeat">
      <div class="card-body " > 
      </div>            
      </div>
    </div>
  </div>
</div>

</div>
      </div>

<!-- PORTFOLIO DEMO REEL PAGE -->


<div class="page-3 px-0 mx-0 mt-4 " id="pg-3a" style="height: 100vh;">

  <div class="row px-0 mx-0 h-100">
  

  <div class="col-sm-6 col-12 px-0 mx-0 h-100 ">
    
  
<div class="wrapper" style="background-size: cover;
  background-position: center;
position: relative;overflow: hidden;height:100%;width:100%;border:none;background-repeat:no-repeat">

  <video src="img/nature4.mp4" class="videoInsert show-on-scroll inline-contact" id="myVideo" >
  
  
 </video>
 <button class="position-absolute   bg-transparent text-center bk4" id="btn5" style="background-image: url(img/btn.png);width:50%;height:50%;border:none;color:#B78628;background-size:contain;background-repeat:no-repeat;margin-top:30px;" onclick="openModal()" ></button>
 <div class="img-responsive navbar-brand">
   
    <div class="image-fluid img-responsive show-on-scroll inline-contact" > 
   <div class="logo1 logo2 image-fluid show-on-scroll inline-contact img-responsive"></div> 
    <div class=" col-sm-6">
      
<h1 class="ml-5 text-center about-me1 d-inline-block m-3 show-on-scroll inline-contact">Portfolio</h1>


</div>
<button class="bg-transparent text-center bk2 show-on-scroll" id="btn1" style="background-image: url(img/btn.png);width:120%;height:120%;border:none;color:#B78628;background-size:contain;background-repeat:no-repeat;" onclick="openModal()" ></button>

  </div>
    </div> 
</div>
  <!-- <video src="img/page3.mp4" class="w-100" style="height: 100%;" controls loop muted>
  </video>  -->
  </div>
 
    <div class="col-sm-6 col-12 px-0 mx-0 h-100" style="margin-bottom: -100px;">
      <div class="row h-100">
        <div class="col-6 px-0 h-100">
          <div class="h-50" style="overflow: hidden;" >
          <div class="wrapper show-on-scroll inline-contact" style="background-size: cover;
  background-position: center;position: relative;display:inline-block;margin:0
;overflow: hidden;height:100%;width:100%;border:none;background-repeat:no-repeat">
          <video src="img/nature.mp4" class="videoInsert show-on-scroll"  >
  
  
  </video>
  <div style="width:100%;height:100%">
  <div class="container">
  <button class="bg-transparent  text-center position-absolute bk show-on-scroll" id="btn2" style="background-image: url(img/btn.png);width:50%;height:50%;border:none;color:#B78628;background-size:contain;background-repeat:no-repeat;" onclick="openModal()" ></button>
  </div>
  </div>
</div>
          </div>

          <div class="h-50 bb image" >
          
          <div class="wrapper show-on-scroll inline-contact" class="image" style="background-image:url(img/nature3.jpg);background-size: cover;
  background-position: center;
position: relative;overflow: hidden;height:54%;width:100%;border:none;background-repeat:no-repeat">
         <div class="cont">
         <div class="middle ">
    <br><br>
         <div class="text text-center ">Click here to view description

    <button class="btn  text-center " id="btn3" style="color: #B78628;" onclick="openModal()">Read more</button>
  </div>
  </div>
         </div>
          </div>
          <!-- <div class="wrapper" style="background-size: cover;background-position: center;
position: relative;overflow: hidden;height:100%;width:100%;border:none;background-repeat:no-repeat">
        <img src="img/nature3.jpg" class="img-responsive" style="height: 71%;">
          </div> -->
          </div>
          
        </div>
        <div class="col-6 px-0 h100">
          <div class="h-50"  >
          <div class="wrapper show-on-scroll inline-contact" class="image" style="background-image: url(img/nature1.jpg);background-size: cover;
  background-position: center;
position: relative;overflow: hidden;height:100%;width:95%;border:none;background-repeat:no-repeat">
        <div class="cont">
         <div class="middle ">
    <br><br>
         <div class="text text-center ">Click here to view description

    <button class="btn  text-center " id="btn3" style="color: #B78628;" onclick="openModal()">Read more</button>
  </div>
  </div>
         </div>
          </div>
          </div>
          <div class="h-50" >
          <div class="wrapper show-on-scroll  inline-contact" style="background-size: cover;
  background-position: center;
position: relative;overflow: hidden;height:100%;width:95%;border:none;background-repeat:no-repeat">
          <video src="img/nature2.mp4" class="videoInsert" >
  
  
  </video>
  <button class="position-absolute  bg-transparent text-center bk" id="btn5" style="background-image: url(img/btn.png);width:50%;height:50%;border:none;color:#B78628;background-size:contain;background-repeat:no-repeat;margin-top:30px;" onclick="openModal()" ></button>

          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- <div class="page-3-sec  pt-4" style="height: 100vh;display:none;" id="pg-3b" >
  <div class="row h-75">
    <div class="col-sm-9 col-12 px-0 mx-0 h-100 bg-primary">
      <div class="bg-priamry h-100" id="front"></div>
    </div>
    <div class="col-sm-3 col-12 px-0 mx-0 h-100 bg-primary">
      <div class="bg-secondary h-100" id="description"></div>
    </div>
    
  </div>
  <div class="row  h-25 bg-white">
    
    <div class="col-sm-3 col-12 h-100 bg-danger" id="slider1">
      slider
    </div>
    <div class="col-sm-3 col-12 h-100 bg-warning" id="slider2">
      slider
    </div>
    <div class="col-sm-3 col-12 h-100 bg-secondary" id="slider3">
     slider
    </div>
    <div class="col-sm-3 col-12 h-100 bg-dark" id="slider4">
      slider
    </div>
    
  </div>
</div> -->

<div class="row1" hidden>
  <div class="column">
    <img src="img_nature.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img_snow.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img_mountains.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img_lights.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
</div>

<div id="myModal" class="modal" style="overflow: auto;background-color:#EAEAEA;">
  <span class="close cursor" onclick="closeModal()">&times;</span>

  <div class="modal-content show-on-scroll" style="background-color: #EAEAEA;border:none;">
  <div class="row">
  <div class="col-md-8">
  
    <div class="mySlides">
      <div class="numbertext">1 / 5</div>
      <video src="img/nature4.mp4" controls style="width:100%"></video>
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 5</div>
      <img src="img/nature.jpg" style="width:100%;height:430px !important;">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 5</div>
      <img src="img/nature1.jpg" style="width:100%;height:430px !important;">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 5</div>
      <img src="img/nature3.jpg" style="width:100%;height:430px !important;">
    </div>
   
    <div class="mySlides">
      <div class="numbertext">5 / 5</div>
      <video src="img/nature2.mp4" controls style="width:100%;height:430px !important;"></video>
    </div>
 
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <div class="col-md-4">
    <h3 class="text-center">Lorem Ipsum</h3>
    <div class="caption-container" style="background-color: #EAEAEA;width:100%;height:100%;color:#010000;">
      <p id="caption" class="text-black"></p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, ut? Porro quos facere odit ut quisquam necessitatibus id molestiae distinctio recusandae, vitae consequuntur cumque et explicabo dolorem illum tempore aperiam!
  </div>
  </div>  
</div>

  
<div class="row mt-3">
    <div class="column">
      <video class="demo cursor" src="img/nature4.mp4" style="width:100%" onclick="currentSlide(1)" ></video>
    </div>
    <div class="column">
      <img class="demo cursor" src="img/nature.jpg" style="width:100%" onclick="currentSlide(2)">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/nature1.jpg" style="width:100%" onclick="currentSlide(3)" >
    </div>
    <div class="column">
      <img class="demo cursor hgt" src="img/nature3.jpg" style="width:100%" onclick="currentSlide(4)">
    </div>
    <div class="column">
      <video class="demo cursor" src="img/nature2.mp4" style="width:100%;display: contents;" onclick="currentSlide(5)" ></video>
    </div>
  </div>
</div>
</div>




<!-- CONTACT PAGE -->
 <div class="page-4 mt-3" id="page-4" style=" background-color:black;" >
 
    
    <div class="row">
    

    <div class="logo1 mt-5 mt-5 ml-5 pl-5 show-on-scroll inline-contact " data-wow-delay="1.2s">
<img class="img-responsive">
    </div>




        
      <!--askdljasld  -->
<div class="container mt-1" >

  <div class="row">
        <div class="col-md-6 mt-5">
        <div class="row m-4">
    <div class="col-2 ">

    
    </div>
    <div class="text-center wow fadeInUp show-on-scroll" data-wow-delay="0.2s">
      <h1  class="wow fadeInUp text-center display-3 ml-5 show-on-scroll about-me inline-contact " data-wow-delay="0.2s">Contact</h1>
    </div>
    </div>
           
        <div class="card  mb-4 pb-4 text-white bg-transparent card-transparent" style="height:560px; border:none;">
      
           
        

        
 
 
         <div class="card-body show-on-scroll inline-photo1" style="color: #B78628 ;">
  
    <form method="POST" class="wow fadeInUp" data-wow-delay="1.2s">
        <div class="form-group ">

    <div class="wrap-input100 validate-input col-sm-12 wow fadeInUp" data-wow-delay="1s" data-validate="Name is required">
        <span  class="label-input100" style="font-family: cinzel-decorative; font-weight:bold;">Full Name:</span>    
        <input class="form-control" class="bg-transparent" name="name" id="fname" type="text" placeholder="Enter your name">
    </div>
        </div>
        <div class="wrap-input100 validate-input form-group col-sm-12 wow fadeInUp" data-wow-delay="1.2s" data-validate="Email is required">
        <span class="label-input100" style="font-family: cinzel-decorative;font-weight:bold;">Email:</span>    
        <input class="form-control" class="bg-transparent" id="email" type="text" name="email" placeholder="Enter your email">
        </div>
        <div class="wrap-input100 validate-input form-group col-sm-12 wow fadeInUp" data-wow-delay="1.4s" data-validate="Phone is required">
        <span class="label-input100" style="font-family: cinzel-decorative;font-weight:bold;">Phone No:</span>    
        <input class="form-control" class="bg-transparent" id="phone" type="text" name="phone" placeholder="Enter Phone no">
        </div>
        <div class="wrap-input100 validate-input form-group col-sm-12 wow fadeInUp" data-wow-delay="1.6s" data-validate="Message is required">
        <span class="label-input100" style="font-family: cinzel-decorative;font-weight:bold;">Message:</span>    
        <textarea class="form-control" class="bg-transparent" id="msg" class="input100" name="message" placeholder="Your Comment..." style="height:110px;font-family: cinzel-decorative;"></textarea>
        </div>
        <div class="wrap-input100 validate-input form-control col-sm-12 bg-transparent wow fadeInUp" data-wow-delay="1.6s" style="font-family: cinzel-decorative;font-weight:bold;border:none" data-validate="Name is required">
        <button class="btn submit" name="btnsubmit" onclick="submit()">
              Submit
            </button>    
        
      </div>
      <div id="msg">
<?php echo $msg ?>
</div>


   
    
    


    </form>
    
  </div>
        </div>
       
        </div>

        <div class="col-md-6 col-12 wow fadeInUp "  data-wow-delay="1.8s">
<img src="img/Asset1.svg" class="inline-photo show-on-scroll" style="width:120%;height:100%; background-size:cover;overflow:hidden;" >
</div>

        </div>


</div>
       
<!--askdljasld  -->

    </div>
    



 </div>
 <footer id="footer">
        <div class="container-fluid" style="background-color: #B78628;">
            <div class="row">

                <div class="col-md-12 col-sm-12 ">
                    <div class="wow fadeInUp footer-copyright" data-wow-delay="1.8s">
                        <p class="text-black ft m-3 ">Copyright &copy; 2020 My Portfolio</p>
                    </div>
                    <ul class="wow fadeInUp social-icon" data-wow-delay="2s">
                        <li>
                            <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-twitter"></a>
                        </li>


                        <li>
                            <a href="https://www.linkedin.com/" class="fa fa-linkedin"></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>
<ul id="pagination">
<i class="fa fa-angle-double-up pgnt1" aria-hidden="true"><a class="apg" href="#page-1"></a>  </i>
  <li class="pgnt"><a class="apg" href="#page-1"><span class="dot"></span></a></li>
  <li class="pgnt" ><a class="apg" href="#page-2"><span class="dot"></span></a></li>
  <li class="pgnt" ><a class="apg" href="#pg-3a"><span class="dot"></span></a></li>
  <li class="pgnt"><a class="apg" href="#page-4"><span class="dot"></span></a></li>
  <i class="fa fa-angle-double-down pgnt1" aria-hidden="true"><a class="apg" href="#footer"></a></i>
  
</ul>


<script src="scripts/person.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="scripts/bootstrap.js"></script>
<script src="scripts/bootstrap.min.js"></script>
<script src="scripts/script.js"></script>
<script src="scripts/animate.js"></script>
<script src="scripts/contact.js"></script>
<scrip src="scripts/splide.min.js"></scrip>
<script src="scripts/wow.min.js"></script>
<script src="scripts/smoothscroll.js"></script>
</body>




</html>