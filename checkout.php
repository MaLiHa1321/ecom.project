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


<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-11 mx-auto">
            <div class="row mt-5 gx-3">
             <div class="col-md-12 col-lg-8 col-11 mx-auto main_cart mb-lg-0 mb-5">
                <h2 class="text-center">Checkout Procedure</h2>
                <div class="mb-3">
               <label for="exampleFormControlInput1"  class="form-label">Name</label>
               <input type="text" class="form-control" id="name" placeholder="Full Name">
             </div>
             <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                 <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
               <label for="exampleFormControlInput1"  class="form-label">Phone Number</label>
               <input type="text" class="form-control" id="number" placeholder="12334566">
             </div>


             <div class="mb-3">
               <label for="exampleFormControlInput1"  class="form-label">Address</label>
               <input type="text" class="form-control" id="address" placeholder="adress">
             </div>

             <div class="mb-3 align-items-center">
                <button type="submit" class="btn btn-primary mb-5">Submit</button>
            </div>
             </div>
            </div>

        </div>
    </div>
</div>































<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>








</script>
</body>
</html>