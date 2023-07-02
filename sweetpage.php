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
  <script src="script.js"></script>
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
    <li><a href="cart.php" data-bs-toggle="modal" data-bs-target="#cartModal"><i class="bi bi-cart3 m-2"></i>Cart</a></li>
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
                <li> <a href="sweetpage.php"></a> Sweet</li> <hr>
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

<!-- add to cart Modal -->
    
<div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="cartModalLabel" style="text-align: center;">Add to Cart</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Add your cart content here -->
                    <div class="row">
                        <div class="col-4">
                            <img src="image/cake.jfif" class="img-fluid" alt="Product Image">
                        </div>
                        <div class="col-8">
                            <h6>Product Name: XYZ</h6>
                            <p>Price: $19.99</p>
                            <p>Quantity: <input type="number" value="1" min="1"></p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="text-align: center;">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger">Buy Now</button>
                </div>
            </div>
        </div>
    </div>

    <section  class="on-sale">
    <div class="container my-5">
        <!--<div class="title-box">
        <h2>Sweet</h2>
        </div>-->
        <div class="row">
            <div class="col-md-4 py-3 p-3">
                <div class="product-top">
                <img src="image/sweet.jpg" alt="" style="width: 15rem; height: 15rem;">
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
                    <h5>Sweet</h5>
                    <h6>1000BDT</h6>
                </div>
               
            </div>
            <div class="col-md-4 py-3 p-3">
            <div class="product-top">
                <img src="image/kalo jam.jpg" alt=""style="width: 15rem; height: 15rem;">
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
                    <h5>Kalo Jam</h5>
                    <h6>1000.00BDT</h6>
                </div>
            </div>
            <div class="col-md-4 py-3 p-3">
            <div class="product-top">
                <img src="image/kachagolla.jpg" alt="" style="width: 15rem; height: 15rem;">
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
                    <h5>Kachagolla</h5>
                    <h6>1000.00BDT</h6>
                </div>
            </div>
            <div class="col-md-4 py-3 p-3">
            <div class="product-top">
                <img src="image/roshogolla.jpg" alt="" style="width: 15rem; height: 15rem;">
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
                    <h5>Roshogolla</h5>
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

</body>
</html>