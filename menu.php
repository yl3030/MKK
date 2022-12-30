
<?php
    $pageName = "menu";
?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <?php include("./include/meta.php") ?>
</head>
<body>
    <?php include("./include/header.php") ?>
    <main>
        <div class="banner-page"><img src="./public/img/join-banner.png" alt=""></div>

        <div class="innerPage">
            
            <div class="menu_intro">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="./public/img/menu-step.svg" alt="">
                        </div>
                        <div class="col-sm-6">
                            <img src="./public/img/menu-graphic.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <img class="menu_title" src="./public/img/menu-title.svg" alt="阿良真誠推薦">

            <div class="menu_slider">
                <img class="menu_slider_title" src="./public/img/menu-series-1.svg" alt="拉麵系列">
                <div class="container">
                    <div class="swiper-container menu-swiper" id="noodle-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="">
                                    <div class="menu-swiper_pic"><img src="./public/img/product-1.png" alt=""></div>
                                    <div class="menu-swiper_text">
                                        <h3>招牌豚骨拉麵</h3>
                                        <p>
                                        豬大骨湯底， 透著淡淡的牡蠣白， 營養不油膩；<br>
                                        搭配武火炙燒的叉燒肉，<br>
                                        香氣撲鼻， 美味無雙， 初訪必點。
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="">
                                    <div class="menu-swiper_pic"><img src="./public/img/product-2.png" alt=""></div>
                                    <div class="menu-swiper_text">
                                        <h3>招牌豚骨拉麵</h3>
                                        <p>
                                        豬大骨湯底， 透著淡淡的牡蠣白， 營養不油膩；<br>
                                        搭配武火炙燒的叉燒肉，<br>
                                        香氣撲鼻， 美味無雙， 初訪必點。
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="">
                                    <div class="menu-swiper_pic"><img src="./public/img/product-2.png" alt=""></div>
                                    <div class="menu-swiper_text">
                                        <h3>招牌豚骨拉麵</h3>
                                        <p>
                                        豬大骨湯底， 透著淡淡的牡蠣白， 營養不油膩；<br>
                                        搭配武火炙燒的叉燒肉，<br>
                                        香氣撲鼻， 美味無雙， 初訪必點。
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>      
                    </div>
                    <div class="menu-swiper_arrow next" id="noodle-next"><img src="./public/img/menu-slider-arrow-next.svg" alt=""></div>
                    <div class="menu-swiper_arrow prev" id="noodle-prev"><img src="./public/img/menu-slider-arrow-prev.svg" alt=""></div> 
                </div>
            </div>

            <div class="menu_slider sideDish">
                <img class="menu_slider_title" src="./public/img/menu-series-2.svg" alt="紫味小菜">
                <div class="container">
                    <div class="swiper-container menu-swiper" id="side-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="">
                                    <div class="menu-swiper_pic"><img src="./public/img/product-4.png" alt=""></div>
                                    <div class="menu-swiper_text">
                                        <h3>招牌唐揚炸鷄</h3>
                                        <p>
                                        酥脆多汁 鹹香好滋味<br>
                                        讓人吃過一次就難以忘懷
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="">
                                    <div class="menu-swiper_pic"><img src="./public/img/product-5.png" alt=""></div>
                                    <div class="menu-swiper_text">
                                        <h3>招牌唐揚炸鷄</h3>
                                        <p>
                                        酥脆多汁 鹹香好滋味<br>
                                        讓人吃過一次就難以忘懷
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="">
                                    <div class="menu-swiper_pic"><img src="./public/img/product-1.png" alt=""></div>
                                    <div class="menu-swiper_text">
                                        <h3>招牌唐揚炸鷄</h3>
                                        <p>
                                        酥脆多汁 鹹香好滋味<br>
                                        讓人吃過一次就難以忘懷
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>      
                    </div>
                    <div class="menu-swiper_arrow next" id="side-next"><img src="./public/img/menu-slider-arrow-next.svg" alt=""></div>
                    <div class="menu-swiper_arrow prev" id="side-prev"><img src="./public/img/menu-slider-arrow-prev.svg" alt=""></div> 
                </div>
            </div>

            <div class="menu_slider drink">
                <img class="menu_slider_title" src="./public/img/menu-series-3.svg" alt="清爽飲品">
                <div class="container">
                    <div class="swiper-container menu-swiper" id="drink-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="">
                                    <div class="menu-swiper_pic"><img src="./public/img/drink-1.png" alt=""></div>
                                    <div class="menu-swiper_text">
                                        <h3>陳阿滿桂花紅茶</h3>
                                        <p>
                                            帶著桂花香的甜蜜蜜滋味
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="">
                                    <div class="menu-swiper_pic"><img src="./public/img/drink-2.png" alt=""></div>
                                    <div class="menu-swiper_text">
                                        <h3>陳阿滿桂花紅茶</h3>
                                        <p>
                                            帶著桂花香的甜蜜蜜滋味
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="">
                                    <div class="menu-swiper_pic"><img src="./public/img/drink-3.png" alt=""></div>
                                    <div class="menu-swiper_text">
                                        <h3>陳阿滿桂花紅茶</h3>
                                        <p>
                                            帶著桂花香的甜蜜蜜滋味
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>      
                    </div>
                    <div class="menu-swiper_arrow next" id="drink-next"><img src="./public/img/menu-slider-arrow-next.svg" alt=""></div>
                    <div class="menu-swiper_arrow prev" id="drink-prev"><img src="./public/img/menu-slider-arrow-prev.svg" alt=""></div> 
                </div>
            </div>


            <div class="join_want store_want">
                <img src="./public/img/want-to-eat.svg" alt="">
            </div>
        </div>
    </main>
    <?php include("./include/footer.php") ?>
    <?php include("./include/script.php") ?>

    <script>
        var swiper = new Swiper("#noodle-swiper", {
            slidesPerView: 1,
            spaceBetween: 0,
            centeredSlides: true,
            loop: true,
            navigation: {
                nextEl: "#noodle-next",
                prevEl: "#noodle-prev",
            },
            breakpoints: {
                700: {
                    slidesPerView: 3,
                }
            }
        });
        var swiper = new Swiper("#side-swiper", {
            slidesPerView: 1,
            spaceBetween: 0,
            centeredSlides: true,
            loop: true,
            navigation: {
                nextEl: "#side-next",
                prevEl: "#side-prev",
            },
            breakpoints: {
                700: {
                    slidesPerView: 3,
                }
            }
        });
        var swiper = new Swiper("#drink-swiper", {
            slidesPerView: 1,
            spaceBetween: 0,
            centeredSlides: true,
            loop: true,
            navigation: {
                nextEl: "#drink-next",
                prevEl: "#drink-prev",
            },
            breakpoints: {
                700: {
                    slidesPerView: 3,
                }
            }
        });
    </script>

    
</body>
