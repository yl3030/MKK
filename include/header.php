<div class="btn-top">
    <div class="btn-top_pic">
        <img src="./public/img/arrow-top.svg" alt="">
    </div>
</div>

<?php
    if($pageName == "join"){
        echo "
            <div class='fixed-btn-join'>
                <a href='' class='btn-reserve'><img src='./public/img/btn-reserve.png'></a>
                <a href='' class='btn-consult'><img src='./public/img/btn-consult.png'></a>
            </div>
        ";
    } else {
        echo "
            <div class='fixed-btn'>
                <a href='' class='btn-order'><img src='./public/img/here.svg'><span>線上<br class='d-sm-none'>訂餐</span></a>
                <a href=''><span>完整<br class='d-sm-none'>菜單</span></a>
            </div>
        ";
    }
?>


<header class="header">
    <div class="container position-relative d-lg-block d-flex align-items-center justify-content-between">
        <div class="header_mask"></div>
        <nav class="header_nav">
            <ul class="d-flex align-items-center justify-content-center">
                <li><a href="">關於我們</a></li>
                <li><a href="./news.php" <?php if($pageName == "news") echo "class='active'" ?>>門市資訊</a></li>
                <li class="header_nav_space"><a href=""></a></li>
                <li><a href="./recruit.php" <?php if($pageName == "recruit") echo "class='active'" ?>>人才招募</a></li>
                <li><a href="./join.php" <?php if($pageName == "join") echo "class='active'" ?>>我要加盟</a></li>
            </ul>
        </nav>
        <div class="header_logo">
            <div class="header_logo_box"></div>
            <div class="header_logo_mask d-lg-block d-none"></div>
            <a href="./index.php"><img class="header_logo_pic" src="./public/img/logo.svg" alt=""></a>
            
        </div>
        <div class="header_menu d-lg-none"><img src="./public/img/icon_menu.png" alt=""></div>
    </div>
</header>