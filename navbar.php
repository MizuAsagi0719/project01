<?php 
$SQLstring = "SELECT * FROM cart WHERE orderid is NULL AND ip='".$_SERVER['REMOTE_ADDR']."'";
$cart_rs = $link->query($SQLstring);
?>

<nav class="navbar navbar-expand-lg fixed-top" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand col-2" href="./index_p01.php"><img src="./images/logo2.png" alt="" class="img-fluid"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li> -->
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <a class="btn mt-1" type="submit"><i class="fa-solid fa-magnifying-glass fa-2x"></i></a>
                <a class="btn"><i class="fa-solid fa-user fa-2x mt-1"></i></a>
                <a href="./cart.php" class="btn position-relative mt-1"><i class="fa-solid fa-cart-shopping fa-2x"></i><span class="badge text-bg-info position-absolute top-50 start-100 translate-middle"><?= ($cart_rs) ? $cart_rs->rowCount():'';?></span></a>
            </form>
        </div>
    </div>
</nav>
