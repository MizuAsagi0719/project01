<?php
//列出第一層資料
$SQLstring = "SELECT * FROM `pyclass` WHERE level=1 ORDER BY sort";
$pyclass01 = $link->query($SQLstring);
$i = 1; //控制編號順序用來排版
?>
<div class="accordion" id="accordionExample">
    <?php while ($pyclass01_Rows = $pyclass01->fetch()) { 
        $i=$pyclass01_Rows['classid'] ?>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne<?= $i; ?>">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne<?= $i; ?>" aria-expanded="true" aria-controls="collapseOne<?= $i; ?>">
                    <i class="<?= $pyclass01_Rows['fonticon']; ?>"></i><span class="d-inline d-sm-none d-xl-inline"><?= $pyclass01_Rows['cname']; ?></span>
                </button>
            </h2>
            <?php //使用第一層類別查詢
            if (isset($_GET['level']) && $_GET['level'] == 1) {
                $ladder = $_GET['classid'];
            } elseif (isset($_GET['classid'])) {
                $SQLstring = "SELECT uplink FROM pyclass where level= 2 and classid =" . $_GET['classid'];
                $classid_rs = $link->query($SQLstring);
                $data = $classid_rs->fetch();
                $ladder = $data['uplink'];
            } else {
                $ladder = 1;
            }
            // 列出產品類別對應的第二層資料
            $SQLstring = sprintf("SELECT * FROM `pyclass` WHERE level=2 AND uplink=%d ORDER BY sort", $pyclass01_Rows['classid']);
            $pyclass02 = $link->query($SQLstring);
            ?>
            <div id="collapseOne<?= $i; ?>" class="collapse <?= ($i == $ladder) ? 'show' : ''; ?>" aria-labelledby="headingOne<?= $i; ?>" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <table class="table">
                        <tbody>
                            <?php while ($pyclass02_Rows = $pyclass02->fetch()) { ?>
                                <tr>
                                    <td><a href="./allproducts_menu.php?classid= <?= $pyclass02_Rows['classid'];?>"><em class="<?= $pyclass02_Rows['fonticon']; ?>"></em><span class="d-inline d-sm-none d-xl-inline"><?= $pyclass02_Rows['cname']; ?></span></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php $i++;
    } ?>
</div>






<!-- <div class="accordion" id="accordionExample">
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
</div> -->