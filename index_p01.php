<!-- 這是將資料庫,連線程式載人 -->
<?php require_once('Connections/conn_db.php'); ?>
<!-- 如果SESSION沒啟動,則啟動SESSION功能,這是跨網頁變數存取 -->
<?php (!isset($_SESSION)) ? session_start() : ""; ?>
<!-- 載入共用PHP函數庫 -->
<?php require_once("php_lib.php"); ?>

<!doctype html>
<html lang="zh-TW">

<head>
    <!-- 引入網頁標頭 -->
    <?php require_once('headfile.php'); ?>
</head>

<body>
    <header>
        <!-- 引入導覽列 -->
        <?php require_once('navbar.php'); ?>
        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-md-2 sidebar">
                    <!-- 引入sidebar分類導覽列 -->
                    <?php require_once('sidebar.php'); ?>
                </div>
                <div class="col-md-10">
                    <!-- 廣告輪播 -->
                    <?php require_once('carousel_1.php'); ?>
                </div>
            </div>
        </div>
    </header>
    <section class="container-fluid">
        <div class="row text-center my-5">
            <div class="col-md-8 mx-auto">
                <hr>
                <p id="slogan">「花現生活，發現美一天。」</p>
                <hr>
            </div>
        </div>
        <div class="row col-md-10 mx-auto mb-5 container">
            <div id="carouselExampleFade" class="carousel slide carousel-fade " data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./images/0004.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/0005.jpg" class="d-block w-100">
                    </div>
                    <div class="row"></div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="container-fluid brand ">
            <div class="row col-md-10 mx-auto ">
                <div class="col-8 my-5">
                    <h4 class="fs-2 px-3 to-animate opacity-0" data-animation="animate__fadeInUp">品牌理念</h4>
                    <p class="fs-4 px-3 to-animate opacity-0" data-animation="animate__fadeInUp" data-delay="animate__delay-1s">花現小錄致力於將創意與藝術融入日常生活，透過精心設計的印花圖紋，讓每一件商品都成為獨特的藝術品。每一款印花圖案都源自對自然、文化和個性化風格的探索，旨在為消費者帶來不僅是商品，更是一種表達自我的方式。無論是日常穿著還是居家裝飾，希望每一件商品都能傳遞出個人獨特的態度，並讓每個細節都閃耀出無限的創造力與生活品味。</p>
                </div>
                <div class="col-4 to-animate opacity-0 my-5" data-animation="animate__zoomIn" data-delay="animate__delay-2s">
                    <img src="./images/brand.jpg" alt="" class="img-fluid ps-1">
                </div>
            </div>
        </div>
        <div class="container-fluid products ">
            <h4 class="text-center my-3">產品展示</h4>
            <hr class="my-4">
            <div class="row justify-content-around">
                <div class="product col-md-2">
                    <div class="p-body">
                        <img src="./product_img/p001-1.jpg" alt="" class="img-fluid">
                        <button type="button" class="btn-add-to-cart text-center ">加入購物車</button>
                    </div>
                    <h5 class="card-title my-3">春日派對印花抱枕</h5>
                </div>
                <div class="product col-md-2">
                    <div class="p-body">
                        <img src="./product_img/p002-1.jpg" alt="" class="img-fluid">
                        <button type="button" class="btn-add-to-cart text-center ">加入購物車</button>
                    </div>
                    <h5 class="card-title my-3">【客製】璇木童趣藍天包</h5>
                </div>
                <div class="product col-md-2">
                    <div class="p-body">
                        <img src="./product_img/p003-1.jpg" alt="" class="img-fluid">
                        <button type="button" class="btn-add-to-cart text-center ">加入購物車</button>
                    </div>
                    <h5 class="card-title my-3">帆布包訂做</h5>
                </div>
                <div class="product col-md-2">
                    <div class="p-body">
                        <img src="./product_img/p004-1.jpg" alt="" class="img-fluid">
                        <button type="button" class="btn-add-to-cart text-center ">加入購物車</button>
                    </div>
                    <h5 class="card-title my-3">度假連身裙</h5>
                </div>

            </div>

        </div>
    </section>
    <footer>
        <div class="container-fluid">
            <div id="last-data" class="row text-center">
                <div class="col-sm-3 ">
                    <h4>ABOUT US</h4>
                    <a href="#">
                        <p>品牌故事</p>
                    </a>
                    <a href="#">
                        <p>歷年成果</p>
                    </a>
                </div>
                <div class="col-sm-3">
                    <h4>顧客服務</h4>
                    <a href="#">
                        <p>退換貨政策</p>
                    </a>
                    <a href="#">
                        <p>隱私政策</p>
                    </a>
                    <a href="#">
                        <p>運送方式</p>
                    </a>
                </div>
                <div class="col-sm-3">
                    <h4>門市資訊</h4>
                    <a href="#">
                        <p><i class="fas fa-phone"></i> tel 04-25229835</p>
                    </a>
                    <a href="#">
                        <p><i class="fas fa-door-open"></i> 周一至周五 8:00-18:30</p>
                    </a>
                    <a href="#">
                        <p><i class="fas fa-map-marker-alt"></i>門市地址</p>
                    </a>
                    <div class="icon d-flex justify-content-evenly">
                        <a href="#">
                            <p><i class="fab fa-facebook-square"></i></p>
                        </a>
                        <a href="#">
                            <p><i class="fab fa-instagram"></i></p>
                        </a>
                        <a href="#">
                            <p><i class="fab fa-line"></i></p>
                        </a>
                        <a href="#">
                            <p><i class="fab fa-youtube"></i></p>
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <h4>訂閱電子報</h4>
                    <p><input type="email" size="20" placeholder="example@email.com"></p>
                    <button type="submit" class="btn btn-success">送出</button>
                </div>
            </div>
        </div>
    </footer>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const brand = document.querySelector(".brand");
            if (!brand) return;

            const inner = brand.querySelectorAll(".to-animate");

            const observer = new IntersectionObserver(([entry]) => {
                if (entry.isIntersecting && entry.intersectionRatio >= 1) {
                    inner.forEach(el => {
                        // 清掉之前可能殘留的 animate__* class
                        el.classList.forEach(c => {
                            if (c.startsWith("animate__")) el.classList.remove(c);
                        });

                        // 強制重排讓移除生效
                        void el.offsetWidth;

                        // 加回指定的動畫 + delay + base
                        const anim = el.dataset.animation;
                        const delay = el.dataset.delay;
                        if (anim) el.classList.add(anim);
                        if (delay) el.classList.add(delay);
                        el.classList.add("animate__animated");

                        // 顯示
                        el.classList.remove("opacity-0");
                        // 拿掉 .to-animate 的 opacity 覆蓋
                        // 或用el.style.opacity = ""; 
                    });
                    observer.unobserve(brand);
                }
            }, {
                threshold: [1.0]
            });

            observer.observe(brand);
        });
    </script>

    <script src="./css/script.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>