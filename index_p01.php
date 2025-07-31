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
        <nav class="navbar navbar-expand-lg fixed-top">
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
                <div class="col-md-2">
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
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./images/0001.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./images/0002.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./images/0003.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
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
                <h1>「花現生活，發現美一天。」</h1>
                <hr>
            </div>
        </div>
        <div class="row col-md-10 mx-auto mb-5 container">
            <div id="carouselExampleFade" class="carousel slide carousel-fade " data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./images/0004.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/0005.jpg" class="d-block w-100" alt="...">
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
        <div class="row">
            <div class="container-fluid brand">
                <div class="d-flex my-4 col-md-10 mx-auto container">
                    <div class="col-8">
                        <h4 class="px-3">品牌理念</h4>
                        <p class="fs-5 px-3">花現小錄致力於將創意與藝術融入日常生活，透過精心設計的印花圖紋，讓每一件商品都成為獨特的藝術品。每一款印花圖案都源自對自然、文化和個性化風格的探索，旨在為消費者帶來不僅是商品，更是一種表達自我的方式。無論是日常穿著還是居家裝飾，希望每一件商品都能傳遞出個人獨特的態度，並讓每個細節都閃耀出無限的創造力與生活品味。</p>
                    </div>
                    <div class="col-4"><img src="./images/brand.jpg" alt="" class="img-fluid ps-1"></div>
                </div>
            </div>
            <div class="row my-5 mx-auto products">
                <h3 class="text-center">產品展示</h3>
                <div class="d-flex justify-content-around">
                    <div class="product">
                        <img src="./product_img/p001-1.jpg" alt="" class="img-fluid">
                        <button type="button" class="btn-add-to-cart text-center ">加入購物車</button>
                    </div>

                    <div><img src="./product_img/p002-1.jpg" alt=""></div>
                    <div><img src="./product_img/p003-1.jpg" alt=""></div>
                    <div><img src="./product_img/p004-1.jpg" alt=""></div>
                </div>
            </div>
        </div>
    </section>
</body>
<footer>
    <div class="container-fluid">
        <div id="last-data" class="row text-center">
            <div class="col-sm-3 ">
                <h4>ABOUT US</h4>
                <p><a>品牌故事</a></p>
                <p><a>歷年成果</a></p>
            </div>
            <div class="col-sm-3">
                <h4>顧客服務</h4>
                <p><a>退換貨政策</a></p>
                <p><a>隱私政策</a></p>
                <p><a>運送方式</a></p>
            </div>
            <div class="col-sm-3">
                <h4>門市資訊</h4>
                <p><a><i class="far fa-phone-alt"></i> tel 04-25229835</a></p>
                <p><a><i class="fas fa-door-open"></i> 周一至周五 8:00-18:30</a></p>
                <p><a><i class="fas fa-map-marker-alt"></i>門市地址</a></p>
            </div>
            <div class="col-sm-3">
                <h4>訂閱電子報</h4>
                <p><input type="email" size="20" placeholder="example@email.com"></p>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>