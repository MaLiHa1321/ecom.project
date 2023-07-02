<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
     <link rel="stylesheet" href="css/main.css">
 
</head>

<body>

<div class="top-nav-bar">
    <div class="search-box">
    <i class="bi bi-grid-3x3-gap-fill" id="menu-btn" onclick="openmenu()"></i>
    <i class="bi bi-x" id="close-btn" onclick="closemenu()"></i>
        <img src="image/well.png" alt="logo" class="logo">
        <input type="text" class="form-control">
        <span class="input-group-text"><i class="bi bi-search"></i></span>
    </div>
    <div class="menu-bar">
    <ul>
    <li><a href="main.php"><i class="bi bi-house-door m-2"></i>Home</a></li>
    <li><a href="cart.php"><i class="bi bi-cart3 m-2"> <span class="cart-count">0</span></i>Cart</a></li>
    <li><a href="index.php"><i class="bi bi-person-circle m-2"></i>Log out</a></li>
   </ul>
    </div>
</div>

<!--side bar-->
<header>
    <div class="side-menu" id="side-menu">
        <ul class="text-center">
            <li>Shop<i class="bi bi-arrow-bar-right m-1"></i> <hr>
            <ul class="text-center">
                <li><a href="sweetpage.php" style="text-decoration: none; color: black;">Sweet</a> </li> <hr>
                <li>Doi</li> <hr>
                <li>Cookies</li> <hr>
                <li>Pound Cake</li> <hr>
                <li>Pastry</li> 
            </ul>
        </li>
            <li>New Arrival</li> <hr>
            <li>Outlet</li> <hr>
            <li>About Us</li> <hr>
            <li>Contact Us</li> 
        </ul>
        </div>

</header>
<main>
<div class="slider">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-interval="1000">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
        </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="image/cake.jfif" class="d-block w-100 img-fluid">
                        </div>
                        <div class="carousel-item">
                            <img src="image/veg.jfif" class="d-block w-100 img-fluid">
                        </div>
                        <div class="carousel-item">
                            <img src="image/accss.jfif" class="d-block w-100 img-fluid">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>

                </div>
            </div>

<div>
    <h2 class="text-center mt-1">Welcome to Well Food Chittagong</h2>
 </div>



 
<!--feature add-->
<div class="container">
        <div class="row">
            <h2 class="text-center my-5 text-danger font-weight-bold">Product & Categories</h2>
            <div class="col-lg-3 col-md-3 p-2">
            <div class="card shadow " style="width: 10rem; border-radius: 50%">
            <div class="center">
                <a href="cakepage.php">
                <img src="image/cake.jfif" class="card-img-top rounded-circle" alt="...">
                </a>
            </div>    
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 p-2">
                 <div class="card" style="width: 10rem; border-radius: 50%">
                 <div class="center">
                    <a href="sweetpage.php">
            <img src="image/sweet.jpg" class="card-img-top rounded-circle" alt="...">
            </a>
            </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 p-2">
            <div class="card" style="width: 10rem; border-radius: 50%">
            <div class="center">
            <img src="image/cookies.jfif" class="card-img-top rounded-circle" alt="...">
            </div>   
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 p-2">
            <div class="card" style="width: 10rem; border-radius: 50%">
            <div class="center">
            <img src="image/doi.jpg" class="card-img-top rounded-circle" alt="...">
            </div>    
              </div>
            </div>
            <div class="col-lg-3 col-md-3 p-3">
            <div class="card" style="width: 10rem; height: 10rem; border-radius: 50%" >
            <div class="center">
            <img src="image/pastry.jpg" class="card-img-top rounded-circle" alt="...">
            </div>    
              </div>
            </div>
            <div class="col-lg-3 col-md-3 p-3">
            <div class="card" style="width: 10rem; border-radius: 50%">
            <div class="center">
            <img src="image/cake.jfif" class="card-img-top rounded-circle" alt="...">
            </div>    
              </div>
            </div>
        </div>
    </div>



<!--catagories -->
<section  class="on-sale">
    <div class="container my-5">
        <div class="title-box">
        <h2>Pound Cake</h2>
        </div>
        <div class="row">
            <div class="col-md-3 py-5 p-3">
                <div class="product-top">
                <img src="image/cake.jfif" alt="" style="width: 15rem; height: 15rem;" class="product-img">
                <div class="overlay-right">
                    <button type="button" class=" btn btn-secondary" title="quick shop">
                    <a href="product.php"> <i class="bi bi-eye-fill"></i></a> 
                    </button>
                    <button type="button" class=" btn btn-secondary" title="add to wishlist">
                  <i class="bi bi-suit-heart-fill"></i>
                    </button>
                    <a href="cart.php"> <button type="button" class=" btn btn-secondary p-2" title="add to cart">
                    <i class="bi bi-cart3 add-cart"></i></a>
                    </button>
                </div>
                </div>
                <div class="product-bottom text-center py-4">
                    <h5 class="product-title">Pound Cake</h5>
                    <h6 class="price">1000.00BDT</h6>
                </div>
               
            </div>
            <div class="col-md-3 py-5 p-3">
            <div class="product-top">
                <img src="image/cake1.jfif" alt=""style="width: 15rem; height: 15rem;" class="product-img">
                <div class="overlay-right">
                    <button type="button" class=" btn btn-secondary" title="quick shop">
                    <i class="bi bi-eye-fill"></i>
                    </button>
                    <button type="button" class=" btn btn-secondary" title="add to wishlist">
                    <i class="bi bi-suit-heart-fill"></i>
                    </button>
                    <button type="button" class=" btn btn-secondary p-2" title="add to wishlist">
                    <i class="bi bi-cart3 add-cart"></i>
                    </button>
                </div>
                </div>
                <div class="product-bottom text-center py-4">
                    <h5 class="product-title">Birthday Cake</h5>
                    <h6 class="price">1000.00BDT</h6>
                </div>
            </div>
            <div class="col-md-3 py-5 p-3">
            <div class="product-top">
                <img src="image/cake2.jpg" alt="" style="width: 15rem; height: 15rem;" class="product-img">
                <div class="overlay-right">
                    <button type="button" class=" btn btn-secondary" title="quick shop">
                    <i class="bi bi-eye-fill"></i>
                    </button>
                    <button type="button" class=" btn btn-secondary" title="add to wishlist">
                    <i class="bi bi-suit-heart-fill"></i>
                    </button>
                    <button type="button" class=" btn btn-secondary p-2" title="add to wishlist">
                    <i class="bi bi-cart3 add-cart"></i>
                    </button>
                </div>
                </div>
                <div class="product-bottom text-center py-4">
                    <h5  class="product-title">Wedding Cake</h5>
                    <h6 class="price">1000.00BDT</h6>
                </div>
            </div>
            <div class="col-md-3 py-5 p-3">
            <div class="product-top">
                <img src="image/cake4.jpg" alt="" style="width: 15rem; height: 15rem;" class="product-img">
                <div class="overlay-right">
                    <button type="button" class=" btn btn-secondary" title="quick shop">
                    <i class="bi bi-eye-fill"></i>
                    </button>
                    <button type="button" class=" btn btn-secondary" title="add to wishlist">
                    <i class="bi bi-suit-heart-fill"></i>
                    </button>
                    <button type="button" class=" btn btn-secondary p-2" title="add to wishlist">
                    <i class="bi bi-cart3 add-cart"></i>
                    </button>
                </div>
                </div>
                <div class="product-bottom text-center py-4">
                    <h5 class="product-title">Rainbow Cake</h5>
                    <h6 class="price">1000.00BDT</h6>
                </div>
            </div>
         
       

        </div>
    </div>

</section>

<section  class="on-sale">
    <div class="container my-5">
        <div class="title-box">
        <h2>Sweet</h2>
        </div>
        <div class="row">
            <div class="col-md-3 py-5 p-3">
                <div class="product-top">
                <img src="image/sweet.jpg" alt="" style="width: 15rem; height: 15rem;" class="product-img">
                <div class="overlay-right">
                    <button type="button" class=" btn btn-secondary" title="quick shop">
                    <i class="bi bi-eye-fill"></i>
                    </button>
                    <button type="button" class=" btn btn-secondary" title="add to wishlist">
                    <i class="bi bi-suit-heart-fill"></i>
                    </button>
                    <button type="button" class=" btn btn-secondary p-2" title="add to wishlist">
                    <i class="bi bi-cart3 add-cart"></i>
                    </button>
                </div>
                </div>
                <div class="product-bottom text-center py-4">
                    <h5 class=product-title>Sweet</h5>
                    <h6 class="price">1000BDT</h6>
                </div>
               
            </div>
            <div class="col-md-3 py-5 p-3">
            <div class="product-top">
                <img src="image/kalo jam.jpg" alt=""style="width: 15rem; height: 15rem;" class="product-img">
                <div class="overlay-right">
                    <button type="button" class=" btn btn-secondary" title="quick shop">
                    <i class="bi bi-eye-fill"></i>
                    </button>
                    <button type="button" class=" btn btn-secondary" title="add to wishlist">
                    <i class="bi bi-suit-heart-fill"></i>
                    </button>
                    <button type="button" class=" btn btn-secondary p-2" title="add to wishlist">
                    <i class="bi bi-cart3 add-cart"></i>
                    </button>
                </div>
                </div>
                <div class="product-bottom text-center py-4">
                    <h5 class=product-title>Kalo Jam</h5>
                    <h6 class="price">1000.00BDT</h6>
                </div>
            </div>
            <div class="col-md-3 py-5 p-3">
            <div class="product-top">
                <img src="image/kachagolla.jpg" alt="" style="width: 15rem; height: 15rem;" class="product-img">
                <div class="overlay-right">
                    <button type="button" class=" btn btn-secondary" title="quick shop">
                    <i class="bi bi-eye-fill"></i>
                    </button>
                    <button type="button" class=" btn btn-secondary" title="add to wishlist">
                    <i class="bi bi-suit-heart-fill"></i>
                    </button>
                    <button type="button" class=" btn btn-secondary p-2" title="add to wishlist">
                    <i class="bi bi-cart3 add-cart"></i>
                    </button>
                </div>
                </div>
                <div class="product-bottom text-center py-4">
                    <h5 class=product-title>Kachagolla</h5>
                    <h6 class="price">1000.00BDT</h6>
                </div>
            </div>
            <div class="col-md-3 py-5 p-3">
            <div class="product-top">
                <img src="image/roshogolla.jpg" alt="" style="width: 15rem; height: 15rem;" class="product-img">
                <div class="overlay-right">
                    <button type="button" class=" btn btn-secondary" title="quick shop">
                    <i class="bi bi-eye-fill"></i>
                    </button>
                    <button type="button" class=" btn btn-secondary" title="add to wishlist">
                    <i class="bi bi-suit-heart-fill"></i>
                    </button>
                    <button type="button" class=" btn btn-secondary p-2" title="add to wishlist">
                    <i class="bi bi-cart3 add-cart"></i>
                    </button>
                </div>
                </div>
                <div class="product-bottom text-center py-4">
                    <h5 class=product-title>Roshogolla</h5>
                    <h6 class="price">1000.00BDT</h6>
                </div>
            </div>
         
       

        </div>
    </div>

</section>
<section  class="on-sale">
    <div class="container my-5">
        <div class="title-box">
        <h2>Cookies</h2>
        </div>
        <div class="row">
            <div class="col-md-3 py-5 p-3">
                <div class="product-top">
                <img src="image/cookies.jfif" class="img-fliud"  alt="" style="width: 15rem; height: 15rem;" class="product-img">
                <div class="overlay-right">
                    <button type="button" class=" btn btn-secondary" title="quick shop">
                    <i class="bi bi-eye-fill"></i>
                    </button>
                    <button type="button" class=" btn btn-secondary" title="add to wishlist">
                    <i class="bi bi-suit-heart-fill"></i>
                    </button>
                    <button type="button" class=" btn btn-secondary p-2" title="add to wishlist">
                    <i class="bi bi-cart3 add-cart"></i>
                    </button>
                </div>
                </div>
                <div class="product-bottom text-center py-4">
                    <h5 class=product-title>Cookies</h5>
                    <h6 class="price">1000.00BDT</h6>
                </div>
               
            </div>
            <div class="col-md-3 py-5 p-3">
            <div class="product-top">
                <img src="image/eggless karachi biscuit.jpg" class="img-fliud"  alt=""style="width: 15rem; height: 15rem;" class="product-img">
                <div class="overlay-right">
                    <button type="button" class=" btn btn-secondary" title="quick shop">
                    <i class="bi bi-eye-fill"></i>
                    </button>
                    <button type="button" class=" btn btn-secondary" title="add to wishlist">
                    <i class="bi bi-suit-heart-fill"></i>
                    </button>
                    <button type="button" class=" btn btn-secondary p-2" title="add to wishlist">
                    <i class="bi bi-cart3 add-cart"></i>
                    </button>
                </div>
                </div>
                <div class="product-bottom text-center py-4">
                    <h5 class=product-title>eggless karachi biscuits</h5>
                    <h6 class="price">1000.00BDT</h6>
                </div>
            </div>
            <div class="col-md-3 py-5 p-3">
            <div class="product-top">
                <img src="image/bourbon.jfif" class="img-fliud"  alt="" style="width: 15rem; height: 15rem;" class="product-img">
                <div class="overlay-right">
                    <button type="button" class=" btn btn-secondary" title="quick shop">
                    <i class="bi bi-eye-fill"></i>
                    </button>
                    <button type="button" class=" btn btn-secondary" title="add to wishlist">
                    <i class="bi bi-suit-heart-fill"></i>
                    </button>
                    <button type="button" class=" btn btn-secondary p-2" title="add to wishlist">
                    <i class="bi bi-cart3 add-cart"></i>
                    </button>
                </div>
                </div>
                <div class="product-bottom text-center py-4">
                    <h5 class="product-title">Bourbon biscuits</h5>
                    <h6 class="price">1000.00BDT</h6>
                </div>
            </div>
            <div class="col-md-3 py-5 p-3">
            <div class="product-top">
                <img src="image/bourbon.jfif" class="img-fliud"  alt="" style="width: 15rem; height: 15rem;" class="product-img">
                <div class="overlay-right">
                    <button type="button" class=" btn btn-secondary" title="quick shop">
                    <i class="bi bi-eye-fill"></i>
                    </button>
                    <button type="button" class=" btn btn-secondary" title="add to wishlist">
                    <i class="bi bi-suit-heart-fill"></i>
                    </button>
                    <button type="button" class=" btn btn-secondary p-2" title="add to wishlist">
                    <i class="bi bi-cart3 add-cart"></i>
                    </button>
                </div>
                </div>
                <div class="product-bottom text-center py-4">
                    <h5 class="product-title">bourbon biscuits</h5>
                    <h6 class="price">1000.00BDT</h6>
                </div>
            </div>
         
       

        </div>
    </div>

</section>


<!--new product-->
<section  class="New Arrival">
    <div class="container my-5">
        <div class="title-box">
        <h2>New Arrival</h2>
        </div>
        <div class="row">
            <div class="col-md-3 py-5 p-3">
                <div class="product-top">
                <img src="image/pastry3.jpg" class="img-fliud"  alt="" style="width: 15rem; height: 15rem;">
                <div class="overlay-right">
                    <button type="button" class=" btn btn-secondary" title="quick shop">
                    <i class="bi bi-eye-fill"></i>
                    </button>
                    <button type="button" class=" btn btn-secondary" title="add to wishlist">
                    <i class="bi bi-suit-heart-fill"></i>
                    </button>
                    <button type="button" class=" btn btn-secondary p-2" title="add to wishlist">
                    <i class="bi bi-cart3"></i>
                    </button>
                </div>
                </div>
                <div class="product-bottom text-center py-4">
                    <h5>pastry</h5>
                    <h6>1000.00BDT</h6>
                </div>
               
            </div>
            <div class="col-md-3 py-5 p-3">
            <div class="product-top">
                <img src="image/mistridoi.jfif" class="img-fliud"  alt="" style="width: 15rem; height: 15rem;">
                <div class="overlay-right">
                    <button type="button" class=" btn btn-secondary" title="quick shop">
                    <i class="bi bi-eye-fill"></i>
                    </button>
                    <button type="button" class=" btn btn-secondary" title="add to wishlist">
                    <i class="bi bi-suit-heart-fill"></i>
                    </button>
                    <button type="button" class=" btn btn-secondary p-2" title="add to wishlist">
                    <i class="bi bi-cart3"></i>
                    </button>
                </div>
                </div>
                <div class="product-bottom text-center py-4">
                    <h5>Mistri Doi</h5>
                    <h6>1000.00BDT</h6>
                </div>
            </div>
            <div class="col-md-3 py-5 p-3">
            <div class="product-top">
                <img src="image/peanut.jpg" class="img-fliud"  alt="" style="width: 15rem; height: 15rem;">
                <div class="overlay-right">
                    <button type="button" class=" btn btn-secondary" title="quick shop">
                    <i class="bi bi-eye-fill"></i>
                    </button>
                    <button type="button" class=" btn btn-secondary" title="add to wishlist">
                    <i class="bi bi-suit-heart-fill"></i>
                    </button>
                    <button type="button" class=" btn btn-secondary p-2" title="add to wishlist">
                    <i class="bi bi-cart3"></i>
                    </button>
                </div>
                </div>
                <div class="product-bottom text-center py-4">
                    <h5>Peanut Biscuits</h5>
                    <h6>1000.00BDT</h6>
                </div>
            </div>
            <div class="col-md-3 py-5 p-3">
            <div class="product-top">
                <img src="image/sweet.jpg" class="img-fliud" alt="" style="width: 15rem; height: 15rem;">
                <div class="overlay-right">
                    <button type="button" class=" btn btn-secondary" title="quick shop">
                    <i class="bi bi-eye-fill"></i>
                    </button>
                    <button type="button" class=" btn btn-secondary" title="add to wishlist">
                    <i class="bi bi-suit-heart-fill"></i>
                    </button>
                    <button type="button" class=" btn btn-secondary p-2" title="add to wishlist">
                    <i class="bi bi-cart3"></i>
                    </button>
                </div>
                </div>
                <div class="product-bottom text-center py-4">
                    <h5>sweet</h5>
                    <h6>1000.00BDT</h6>
                </div>
            </div>
           

        </div>
    </div>

</section>


<!--website feature-->
<section class="website-feature">
    <div class="container">
        <div class="row">
            <div class="col-md-3 feature-box">
                <img src="image/quality.jpg" alt="" width="100" height="100">
                <div class="feature-text p-3">
                    <p> <b>100% Orginal items</b> are available at our company. </p>
                </div>
            </div>
            <div class="col-md-3 feature-box">
                <img src="image/arrow.jpg" alt="" width="100" height="100">
                <div class="feature-text p-3">
                    <p> <b>Return within 30days</b>of receiving your order. </p>
                </div>
            </div>
            <div class="col-md-3 feature-box">
            <img src="image/delivery.jpg" alt="" width="100" height="100">
                <div class="feature-text p-3">
                    <p> <b>Get free delivary for every</b> order on more then price </p>
                </div>
            </div>
            <div class="col-md-3 feature-box">
            <img src="image/online payment.jpg" alt="" width="100" height="100">
                <div class="feature-text p-3">
                    <p> <b>Pay Online throught multiple </b> payment options (card payment/ Net banking) </p>
                </div>
            </div>
        </div>
    </div>
</section>


<!--footer-->
<section class="footer my-5 bg-dark text-white">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-3 m-4 mt-5">
                <h4 class="text-info">Useful Link</h4> <hr>
                <p>Privacy policy</p>
                <p>Return policy</p>
                <p>Terms Of use</p>
                <p>Discount Coupons</p>
            </div>
            <div class="col-md-3 m-4 mt-5">
                <h4 class="text-info">Company</h4> <hr>
                <p>About Us</p>
                <p>Contact Us</p>
 
            </div>
            <div class="col-md-3 m-4 mt-5">
                <h4 class="text-info">Follow Us On</h4> <hr>
                <a href="https://example.com"><i class="bi bi-facebook text-white text-decoration-none m-2"> facebook</i></a> <br> <br>
                <a href="https://example.com"><i class="bi bi-twitter text-white text-decoration-none m-2">Twitter</i></a> <br> <br>
                <a href="https://example.com"><i class="bi bi-instagram text-white text-decoration-none m-2">instagram</i></a>
            </div>
        </div>
    </div>
</section>


    </main>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>



<!--js link-->
<script src="js/script.js"></script>
<script src="js/addtocart.js"></script>


<!--add to cart -->


</script>
</body>
</html>