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


<!--cart-->
<div class="caontainer-fluid">
    <div class="row">
        <div class="col-md-10 col-11 mx-auto">
            <div class="row mt-5 gx-3">
                <!--left side-->
                <div class="col-md-12 col-lg-8 col-11 mx-auto main_cart mb-lg-0 mb-5">
                  <div class="card p-4">
                    <h2 class="py-5 font-weight-bold">Cart</h2>
                    <div class="row">
                        <!--cart image-->
                        <div class="col-md-5 col-11 mx-auto bg-light d-flex justify-content-center align-items-center shadow product_img">
                            <img src="image/cake2.jpg" class="img-fluid" alt="">
                        </div>

                        <!--cart product details-->
                        <div class="col-md-7 col-11 mx-auto px-4 mt-1">
                            <div class="row">
                                <!--product name-->
                                <div class="col-6 card-title">
                                    <h1 class="mb-4 product_name">cake</h1>
                                    <p class="text-muted">pound</p>
                                    <p class="text-muted">color</p>
                                    <p class="text-muted">size</p>
                                </div>

                                <!---qunatity-->
                                <div class="col-6">
                                   
                                    <ul class="pagination justify-content-end set_quantity">
                                         <li class="page-item"><button class="page-link" onclick="decreaseNumber('textbox','itemval')"><i class="bi bi-dash-circle"></i></button></li>
                                         <li class="page-item"><input type="text" name="" class="page-link" value="0" id="textbox" style="width: 3rem"></li>
                                         <li class="page-item"><button class="page-link" onclick="increaseNumber('textbox','itemval')"><i class="bi bi-plus-circle"></i></button></li>
                                    
                                     </ul>

                                    
                                </div>
                            </div>

                            <!--remove item and price-->
                            <div class="row">
                                <div class="col-8 d-flex justify-content-between remove_wish">
                                    <p><i class="bi bi-trash"></i>Remove Item</p>
                                </div>
                                <div class="col-4 justify-content-end d-flex price-money">
                                    <h3><span id="itemval">0.00tk</span></h3>
                                </div>
                            </div>
                        </div>
                        



</div>
                    
                  </div>
                </div>



             
                

            <!--right side-->
            <div class="col-md-12 col-lg-4 col-11 mx-auto mt-lg-0 mt-md-5">
                <div class="right-side p-3 shadow bg-white">
                    <h2 class="product_name mb-5">The total amount of</h2>
                    <div class="price_indiv d-flex justify-content-between">
                        <p>Product amount</p>
                        <p><span id="product_total_amt">0.00tk</span></p>
                    </div>
                    <div class="price_indiv d-flex justify-content-between">
                        <p>discount</p>
                        <p><span id="discount_charge">0.00tk</span></p>
                    </div>

                     <hr>
                    <div class="total-amt d-flex justify-content-between font-weight-bold">
                        <p>the total amount is</p>
                        <p><span id="total_cart_amt">0.00tk</span></p>
                    </div>
                 <a href="checkout.php"> <button class="btn btn-primary text-uppercase">Checkout</button></a> 
                </div>
                <div class="discount_code mt-3 shadow">
                    <div class="card">
                        <div class="card-body">
                        <a class="d-flex justify-content-between" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Condition <i class="bi bi-arrow-down-short pt-1" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> </i>
                     </a>
                           
                            <div class="collapse" id="collapseExample">
                                <div class="mt-3">
                                    <input type="text" name="" id="discount_code1" class="form-control font-weight-bold" style="width: 19rem">
                                    <button class="btn btn-primary btn-sm mt-3" onclick="discount_code()">submit</button>
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































<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>



<!--js link-->
<script src="js/script.js"></script>
<script src="js/addtocart.js"></script>


<!--add to cart -->

<script>
  
    //decrease number 
    const decreaseNumber = (incdec,itemprice) => {
        var itemval = document.getElementById(incdec);
     
        if(itemval.value <= 0){
            itemval.value = 0; 
        }else{
            itemval.value = parseInt(itemval.value) - 1;
   
          
        }
    }
    //increase number
    const increaseNumber = (incdec,itemprice) => {
        var itemval = document.getElementById(incdec);
      
        if(itemval.value >= 10){
            itemval.value = 1; 
          
        }else{
            itemval.value = parseInt(itemval.value) + 1;
         
        }
    }



</script>


</script>
</body>
</html>