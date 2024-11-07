<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
   
    
    <!-- Uneswa Icon -->
    <link href="images/uneswa_icon.png" rel="icon">
    <title>Department of Computer Science </title>
</head>
<body>
    <div class="container">
        <div class="logo">
            <!--setting margin for logo-->
            <a href="https://www.uneswa.ac.sz/"><input name=""  type="image" src="images/uneswa_logo.jpg"></a>
           </div>
             <!--Navigation bar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                       <li class="nav-item">
                           <a class="nav-link" aria-current="page" href="index.html">Home</a>
                       </li>
                       <li class="nav-item">
         				 <a class="nav-link" href="#">Staff</a>
       						 </li>
                              <li class="nav-item">
         				 <a class="nav-link" href="#">Cisco Academy</a>
       						 </li>
                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                              Programmes
                           </a>
                           <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                               <li><a class="dropdown-item" href="BScIT.html">BSc in Information Technology</a></li>
                                <li><hr class="dropdown-divider"></li>
                               <li><a class="dropdown-item" href="#">BSc in Computer Science Education</a></li>
                                <li><hr class="dropdown-divider"></li>
                               <li><a class="dropdown-item "href="#"> BSc in Library & Information Science</a></li>
                                <li><hr class="dropdown-divider"></li>
                               <li><a class="dropdown-item" href="#">BSc</a></li>
                           </ul>
                       </li>
                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                               Students
                           </a>
                           <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                               <li><a class="dropdown-item" href="#">Current Students</a></li>
                               <li><hr class="dropdown-divider"></li>
                               <li><a class="dropdown-item" href="#">Prospective Students</a></li>
                               <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#"> Uneswa Computer Society</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#"> Admissions</a></li>
                           </ul>
                       </li>
                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                               Events
                           </a>
                           <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                               <li><a class="dropdown-item" href="#">ICT Fair 2021</a></li>
                               <li><hr class="dropdown-divider"></li>
                               <li><a class="dropdown-item" href="#">Cisco Graduation</a></li>
                               <li><hr class="dropdown-divider"></li>
                               <li><a class="dropdown-item" href="#"> Stakeholders Consultation</a></li>
                           </ul>
                       </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                               About Us
                           </a>
                           <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                               <li><a class="dropdown-item" href="contact.php">Contact Us</a></li>
                               <li><hr class="dropdown-divider"></li>
                               <li><a class="dropdown-item" href="#"> Background & History</a></li>
                               <li><hr class="dropdown-divider"></li>
                                 <li><a class="dropdown-item" href="#">Mission & Values</a></li>
                                 <li><hr class="dropdown-divider"></li>
                               <li><a class="dropdown-item" href="#"> Stakeholders Consultation</a></li>
                           </ul>
                       </li>
                   </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn  btn-danger" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        </div>          <!--End of container Section-->
          
<br>
<!--Contact details-->
<div class="container">
<div class="row" >
  <form action="insertfrm.php" method="post">
              <div class="form-row">
               <div class="row g-3">
  <div class="col">
    <input type="text"name="first_name" id="first_name" class="form-control" placeholder="Enter your First name" aria-label="First name">
  </div>
  <div class="col">
    <input type="email" name="emailAddress" id="emailAddress" class="form-control" placeholder="Enter your email " aria-label="Enter your email">
  </div>
</div>
              </div><br>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
               </div><br>
              <div class="form-group">
                <textarea class="form-control" name="message" id="message "rows="3" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div><br>
             
              <div class="text-center"><button class="btn  btn-danger" type="submit">Send Message</button></div>
            </form>
 
</div>
<br>

</div>
<!--End of contact section-->

         <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Contact Details</h3>
              <p>
               Department of Computer Science <br><br>
               Private Bag 4, Kwaluseni,  Matsapha <br><br>
              <strong>Email:</strong> cs@uniswa.sz
               <br><br>
               <strong>Tel:</strong> (+268)&nbsp;21570344 &nbsp; / &nbsp;21570389   <br>
                             </p>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Quick Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li> <a href="#">Admissions</a></li>
              <li><a href="#">Academics</a></li>
              <li><a href="#">Sexual Harassment Policy</a></li>
              <li><a href="#">University Calendar 2020/2021</a></li>
                          </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Student Services</h4>
            <ul>
              <li> <a href="#">Moodle</a></li>
              <li> <a href="#">Undergraduate Programmes</a></li>
              <li> <a href="#">Campus Life</a></li>
              <li><a href="#">Fees and Funding</a></li>
              <li><a href="#">Prospective Student</a></li>
              <li><a href="#">Computer Society</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6">
            <h4>Faculty  Newsletter & updates</h4>
            <p>Enter your email address to recieve Faculty of Science and Engineering newsletters and updates </p>
           <form class="d-flex">
                        <input class="form-control me-2" type="Email" placeholder="Enter your email" aria-label="Email">
                        <button class="btn  btn-danger" type="submit">Subscribe</button>
                    </form>
          </div>

        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
         &copy; Copyright <span>2021</span>.&nbsp; All Rights Reserved<span> &nbsp;&nbsp;&nbsp;Department of Computer Science</span>
      </div>
          </div>
  </footer><!-- End Footer -->
   
   
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
     
 
</body>
</html>