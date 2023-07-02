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
       <a href="main.php"> <img src="image/well.png" alt="logo" class="logo"></a>
        <input type="text" class="form-control">
        <span class="input-group-text"><i class="bi bi-search"></i></span>
    </div>
    <div class="menu-bar">
    <ul>
    <li><a href="main.php"><i class="bi bi-house-door m-2"></i>Home</a></li>
    <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i class="bi bi-cart3 m-2"></i>Cart</a></li>
    <li><a href="index.php"><i class="bi bi-person-circle m-2"></i>Log out</a></li>
   </ul>
    </div>
</div>

<!---single product-->
<section class="single-product">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div id="product-slider" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="image/cake.jfif" class="d-block w-100 img-fluid">
                        </div>
                        <div class="carousel-item">
                            <img src="image/cake1.jfif" class="d-block w-100 img-fluid">
                        </div>
                        <div class="carousel-item">
                            <img src="image/cake2.jpg" class="d-block w-100 img-fluid">
                        </div>
                        <div class="carousel-item">
                            <img src="image/cake4.jpg" class="d-block w-100 img-fluid">
                        </div>
                        <a class="carousel-control-prev" href="#product-slider" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                         </a>
                        <a class="carousel-control-next" href="#product-slider" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                         </a>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <p class="new-arrival text-center">NEW</p>
                <h2>CAKE</h2>
                <p>product code-asf2345</p>
                <p class="price">BDT 1000k</p>
                <p><b>availablity:</b> In Stock</p>
                <p><b>Condition:</b> New</p>
                <p><b>Brand:</b> XYZ company</p>
                <label>Quantity:</label>
                <input type="number" value="1">
               <a href="cart.php"> <button type="button" class="btn btn-danger p-2">Add to Cart</button></a>
            </div>
        </div>
    </div>
</section>

<!--product decription-->
<section class="product-description">
    <div class="container">
        <h6>Product description</h6>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis cumque perspiciatis debitis magnam ratione repellat sint vel dignissimos pariatur aliquid?</p>
    </div>
    <hr>
</section>

<!--similar product-->
<!--new product-->
<section  class="New Arrival">
    <div class="container my-5">
        <div class="title-box">
        <h2>Similar</h2>
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