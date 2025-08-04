<!doctype html>
<html lang="zh-TW">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>花現小錄</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.1/css/all.css">
    <link
        rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="./css/website_p01.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand col-2" href="#"><img src="./images/logo2.png" alt="" class="img-fluid"></a>
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
                        <button class="btn" type="submit"><i class="fa-solid fa-magnifying-glass fa-2x"></i></button>
                        <button class="btn"><i class="fa-solid fa-user fa-2x"></i></button>
                        <button class="btn"><i class="fa-solid fa-cart-shopping fa-2x"></i></button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-md-2 sidebar">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fab fa-hotjar fa-lg fa-fw"></i>活動專區
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td><a href="#"><em class="fas fa-tags"></em>2件$699</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="fas fa-snowflake fa-lg fa-fw"></i>素材印花
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td><a href="#"><em class="fas fa-shapes"></em>抽象幾何</a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#"><em class="fas fa-seedling"></em>水彩花卉</a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#"><em class="fas fa-palette"></em>可愛插畫</a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#"><em class="fas fa-hat-cowboy-side"></em>復古風格</a></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="fas fa-cubes fa-lg fa-fw"></i>實體商品
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td><a href="#"><em class="fas fa-ribbon"></em>布料緞帶</a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#"><em class="fas fa-socks"></em>服飾包包</a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#"><em class="fas fa-pencil"></em>文具小物</a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#"><em class="fas fa-house"></em>居家生活</a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#"><em class="fas fa-edit"></em>少量客製</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div id="myCarousel" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active ">
                                <div class="infoTextR">
                                    <h2 class="animate__animated animate__backInDown">換季促銷</h2>
                                    <p class="animate__animated animate__bounceInRight">2件</p>
                                    <p class="animate__animated animate__bounceIn animate__delay-1s">699</p>
                                </div>
                                <svg width="0" height="0" aria-hidden="true">
                                    <defs>
                                        <mask id="clip1" maskUnits="userSpaceOnUse" x="0" y="0" width="1600" height="1080">
                                            <g fill="white">
                                                <circle class="anim-circle" cx="295.86" cy="353.87" r="220.55" />
                                                <circle class="anim-circle" cx="564.16" cy="540" r="301.11" />
                                                <circle class="anim-circle" cx="233.7" cy="746.42" r="217.78" />
                                                <circle class="anim-circle" cx="564.16" cy="841.11" r="231.43" />
                                                <circle class="anim-circle" cx="865.26" cy="735.36" r="195.36" />
                                                <circle class="anim-circle" cx="1297.09" cy="351.28" r="258.39" />
                                                <circle class="anim-circle" cx="1415.49" cy="766.56" r="128.62" />
                                                <circle class="anim-circle" cx="1116.84" cy="766.56" r="209.01" />
                                                <circle class="anim-circle" cx="894.02" cy="434.26" r="248.64" />
                                                <circle class="anim-circle" cx="669.9" cy="200.24" r="168.9" />
                                                <path class="anim-path" d="M326.32,0c-6.79,19.26-10.49,39.97-10.49,61.55c0,102.25,82.89,185.15,185.15,185.15s185.14-82.9,185.14-185.15
                    c0-21.58-3.7-42.29-10.49-61.55H326.32z" />
                                            </g>
                                        </mask>
                                    </defs>
                                </svg>
                                <div id="mask1"><img src="./images/0001_1.jpg" class="d-block w-100 "></div>
                            </div>
                            <div class="carousel-item ">
                                <div class="infoTextL">
                                    <img src="./images/miyard_logo.png" alt="" class="animate__animated animate__wobble">
                                    <h2 class="animate__animated animate__fadeInBottomLeft">聯名款<br>甜蜜出擊</h2>
                                    <p class="animate__animated animate__fadeInUp animate__delay-1s">2025．09<br>comming soon</p>
                                </div>
                                <svg width="0" height="0" aria-hidden="true">
                                    <defs>
                                        <mask id="clip2" maskUnits="userSpaceOnUse" x="0" y="0" width="1600" height="1080">
                                            <g fill="white">
                                                <circle class="anim-circle" cx="584.58" cy="602.12" r="187.54" />
                                                <circle class="anim-circle" cx="1208.94" cy="735.36" r="301.11" />
                                                <circle class="anim-circle" cx="263.05" cy="682.9" r="217.78" />
                                                <circle class="anim-circle" cx="413.95" cy="487.34" r="231.43" />
                                                <circle class="anim-circle" cx="865.26" cy="735.36" r="195.36" />
                                                <circle class="anim-circle" cx="1325.84" cy="289.71" r="258.39" />
                                                <circle class="anim-circle" cx="1440.76" cy="574.42" r="128.62" />
                                                <circle class="anim-circle" cx="838.83" cy="863" r="209.01" />
                                                <circle class="anim-circle" cx="984.79" cy="330.33" r="290.03" />
                                                <circle class="anim-circle" cx="631.07" cy="445.8" r="168.93" />
                                            </g>
                                        </mask>
                                    </defs>
                                </svg>
                                <div id="mask2"><img src="./images/0002_1.jpg" class="d-block w-100 "></div>
                            </div>
                            <div class="carousel-item ">
                                <div class="infoTextL2">
                                    <h2 class="animate__animated animate__fadeInLeft">客製化<br>印花設計</h2>
                                    <hr>
                                    <p id="artist" class="animate__animated animate__flipInX animate__delay-1s">小小藝術家</p>
                                </div>
                                <svg width="0" height="0" aria-hidden="true">
                                    <defs>
                                        <mask id="clip3" maskUnits="userSpaceOnUse" x="0" y="0" width="1600" height="1080">
                                            <g fill="white">
                                                <circle class="anim-circle" cx="946.48" cy="766.56" r="301.11" />
                                                <circle class="anim-circle" cx="253.41" cy="327.11" r="217.78" />
                                                <circle class="anim-circle" cx="564.16" cy="841.11" r="231.43" />
                                                <circle class="anim-circle" cx="137.69" cy="660.61" r="115.71" />
                                                <circle class="anim-circle" cx="474.5" cy="532.27" r="115.71" />
                                                <circle class="anim-circle" cx="669.9" cy="597.45" r="115.71" />
                                                <circle class="anim-circle" cx="795.58" cy="429.17" r="195.36" />
                                                <circle class="anim-circle" cx="1297.09" cy="351.28" r="258.39" />
                                                <circle class="anim-circle" cx="1415.49" cy="766.56" r="128.62" />
                                                <circle class="anim-circle" cx="1116.84" cy="766.56" r="209.01" />
                                                <circle class="anim-circle" cx="1038.7" cy="248.64" r="248.64" />
                                                <circle class="anim-circle" cx="669.9" cy="200.24" r="168.93" />
                                                <path class="anim-path" d="M1600,375.74c-40.39-51.17-102.96-84.01-173.21-84.01c-121.8,0-220.55,98.74-220.55,220.55s98.74,220.55,220.55,220.55 c70.25,0,132.82-32.85,173.21-84.01V375.74z" />
                                            </g>
                                        </mask>
                                    </defs>
                                </svg>
                                <div id="mask3"><img src="./images/0003_1.jpg" class="d-block w-100 "></div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
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