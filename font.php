<?php
session_start();
$db = new mysqli("localhost", "root", "", "sign_up");

if ($db->connect_errno) {
  echo "Failed to connect to MySQL: " . $db->connect_error;
  exit;
}

if (isset($_POST['well_submit'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $c_password = $_POST['c_password'];

  $query = "INSERT INTO informatin(username, email, password, c_password) VALUES ('$username', '$email', '$password', '$c_password')";
  $run = mysqli_query($db, $query);

  if ($run) {
    echo "<script type='text/javascript'>alert('Registration successful! Now log in to the page.');</script>";
  } else {
    echo "Error: " . mysqli_error($db);
  }
}

if (isset($_POST['well_login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $result = $db->query("SELECT * FROM informatin WHERE username = '$username' AND password = '$password' ");
  $row_count = $result->num_rows;

  if ($row_count == 1) {
    $_SESSION['login'] = true;
    header("Location: index.php");
    exit;
  } else {
    echo "<script type='text/javascript'>alert('Login unsuccessful. Please check your credentials.');</script>";
  }
}
?>















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppershop</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <!--owl carrousel MIN.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
   integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous"
   referrerpolicy="no-referrer" />
   <!--owl carrousel theme.css-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


<style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
   *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
 }
  body{
    background-color: aliceblue;
}

input[type="text"],
input[type="password"]{
    width: 400px;
    height: 50px;
    outline: none;
    border: 0.5px solid black;
    border-radius: 5px;
    margin-bottom: 10px;
    font-size: 16px;
    margin-left: 10px 0px;
   
}

.btn:hover{
    box-shadow: 5px solid black;
}
.modal-title{
    margin-left: 140px;
    font-size: 45px;
    letter-spacing: 2px;
}
.modal-body{
    margin-left: 5px;

}
.new-acc{
    text-decoration: none;
    position: relative;
    font-size: 16px;
    color: gray;
    top: 20px;
}
.new-acc:hover{
    color: red;
}


*{
    font-family: 'Poppins', sans-serif;
}
.item img {
    height: 280px;
}
    </style>
</head>
<body>
    <section>
        <div class="container-fliud my-5">
            <h1 class="text-center" >Do <span class="text-danger">You</span>  Want To <span class="text-danger">Go Shopping!!</span></h1>
            <h4 class="text-center text-success">Purchase Anything You Require From Our Marketplace.</h4>
            <div class="row mt-5">
            <div class="owl-carousel owl-theme">
           <div class="item mb-4">
            <div class="card border-0 shadow">
            <img src="image/accss.jfif" alt="image" class="card-img-top">
            <div class="card-body">
                <h4 class="text-center">Accessories</h4>
            </div>
        </div>
    </div>
    <!--item end--><div class="item mb-4">
            <div class="card border-0 shadow">
            <img src="image/Cake.jfif" alt="image" class="card-img-top">
            <div class="card-body">
                <h4 class="text-center">Cake</h4>
            </div>
        </div>
    </div>
     <!--item end--><div class="item mb-4">
     <div class="card border-0 shadow">
            <img src="image/dress.jfif" alt="image" class="card-img-top">
            <div class="card-body">
                <h4 class="text-center">Beautiful Dress</h4>
            </div>
        </div>
    </div>
      <!--item end--><div class="item mb-4">
      <div class="card border-0 shadow">
            <img src="image/shooes.jfif" alt="image" class="card-img-top">
            <div class="card-body">
                <h4 class="text-center">Shooes</h4>
            </div>
        </div>
    </div>
      <!--item end--><div class="item mb-4">
      <div class="card border-0 shadow">
            <img src="image/veg.jfif" alt="image" class="card-img-top">
            <div class="card-body">
                <h4 class="text-center">vegatable</h4>
            </div>
        </div>
    </div>



  
   </div>
 

 </div>

</div>

    </section>


<section>
<div class="col-md-12 text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <button type="button" class="btn btn-danger rounded-pill text-center" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="width: 200px; margin: 0 auto;">
          Go For Shopping
        </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdroppLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5"><b>Log In First</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="font.php" method="POST" class="well_login">
                      <label for="well_username">
                        <i class="bi bi-person-circle"></i>
                        Username
                      </label>
                      <div>
                        <input type="text" id="well_username" name="username" placeholder="Username" required>
                      </div>
                      <label for="well_password">
                        <i class="bi bi-key-fill"></i>
                        Password
                      </label>
                      <div>
                        <input type="password" id="well_password" name="password" placeholder="Password" required>
                      </div>
                      <div>
                        <button class="btn btn-danger py-2" name="well_login">
                          <i class="bi bi-box-arrow-in-right"></i>
                          Login
                        </button>
                      </div>
                      <div class="foot py-4">
                        <a href="#" id="signupLink" class="new-acc" data-bs-toggle="modal" data-bs-target="#signupModal">I Don't Have An Account!</a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
  
            <!-- Signup Modal -->
            <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="signupModalLabel">Sign Up</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form id="signupForm" action="font.php" method="POST" class="well_signup">
                      <!-- Signup form fields -->
                      <div class="mb-3">
                        <label for="signupusername" class="form-label"><i class="bi bi-person-circle"></i> Username</label>
                        <input type="text" class="form-control" name="username" id="signupusername" placeholder="Username" required>
                      </div>
                      <div class="mb-3">
                        <label for="signupemail" class="form-label"><i class="bi bi-envelope-fill"></i> Email</label>
                        <input type="text" class="form-control" name="email" id="signupemail" placeholder="Email" required>
                      </div>
                      <div class="mb-3">
                        <label for="signuppassword" class="form-label"><i class="bi bi-key-fill"></i> Password</label>
                        <input type="password" class="form-control" name="password" id="signuppassword" placeholder="Password" required>
                      </div>
                      <div class="mb-3">
                        <label for="signupc_password" class="form-label"><i class="bi bi-key-fill"></i> Confirm Password</label>
                        <input type="password" class="form-control" name="c_password" id="signupc_password" placeholder="Confirm Password" required>
                      </div>
                      <!-- Additional signup form fields -->
                      <button name="well_submit" class="btn btn-danger py-2">
                        <i class="bi bi-box-arrow-in-right"></i> Create
                      </button>
                      <div class="foot py-4">
                        <a href="#" id="loginLink" class="new-acc" data-bs-toggle="modal" data-bs-target="#loginModal">Already Have An Account!</a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
</section>


















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


<!--owl cdn-->


<!--jquey cdn-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" 
integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" 
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--1.owl carrousel min.js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
 integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"></script>


  <!--initiate owl carrousel-->
  <script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
})
  </script>


</body>
</html>