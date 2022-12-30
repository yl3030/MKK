<?php
    $pageName = "home";
?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <?php include("./include/meta.php") ?>
</head>
<body>
    <?php include("./include/header.php") ?>
    <main>
        <div class="banner">
            <div class="swiper-container banner_slider">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="" class="banner_link"><img src="./public/img/banner.png" alt=""></a>
                  </div>
                  <div class="swiper-slide">
                    <a href="" class="banner_link"><img src="./public/img/banner.png" alt=""></a>
                  </div>
                  <div class="swiper-slide">
                    <a href="" class="banner_link"><img src="./public/img/banner.png" alt=""></a>
                  </div>
                </div>     
                <div class="swiper-button-next slider-arrow"><img src="./public/img/slider-arrow-next.svg" alt=""></div>
                <div class="swiper-button-prev slider-arrow"><img src="./public/img/slider-arrow-prev.svg" alt=""></div>
            </div>
        </div>

        <div class="home-about">
            <div class="container">
                <div class="title">
                    <img src="./public/img/title-about.svg" alt="關於麵匡匡">
                    <h2>about MKK ramen</h2>
                </div>
                <p class="text-center">
                    麵匡匡是吾蜂美味集團的特色餐飲品牌， 主打鹹淡適中的跨界台式拉麵。<br>
                    拉麵，由麵、 湯和簡單配料組合而成的美食， 以其操作便利及美味，廣為世人熟知<br>
                    <br>
                    我們在精緻、 平價、 美味的基礎上， 堅持用好湯、 好麵，<br>
                    提供給消費者最有誠意的選擇
                </p>
                <img class="home-about_noodle" src="./public/img/noodle.svg" alt="">
            </div>
        </div>

        <div class="recc">
            <img src="./public/img/smoke-1.png" alt="" class="smoke smoke-1" data-1100="filter: blur(0px);transform: translateX(0px) translateY(0px); opacity: 1;" data-1400="filter: blur(5px);transform: translateX(104px) translateY(-52px); opacity: 0;">
            <img src="./public/img/smoke-5.png" alt="" class="smoke smoke-5" data-1100="filter: blur(0px);transform: translateX(0px) translateY(0px); opacity: 1;" data-1400="filter: blur(5px);transform: translateX(104px) translateY(-52px); opacity: 0;">
            <img src="./public/img/smoke-6.png" alt="" class="smoke smoke-6" data-1100="filter: blur(0px);transform: translateX(0px) translateY(0px); opacity: 1;" data-1400="filter: blur(5px);transform: translateX(104px) translateY(-52px); opacity: 0;">
            <img src="./public/img/smoke-2.png" alt="" class="smoke smoke-2" data-1100="filter: blur(0px);transform: translateX(0px) translateY(0px); opacity: 1;" data-1400="filter: blur(5px);transform: translateX(104px) translateY(-52px); opacity: 0;">
            <div class="title">
                <img src="./public/img/title-reccomend.svg" alt="人氣推薦">
                <h2>Top Recommendations</h2>
            </div>
            <div class="recc_inner">
                <div class="recc_slider-box">
                    <div class="recc_slider d-flex justify-content-center">
                        <ul id="wheel">
                            <li data-index="1" data-intro="#intro1" class="recc_slider_item">
                                <div>
                                    <img class="recc_slider_img" src="./public/img/product-mark1.png" alt="">
                                </div>
                            </li>
                            <li data-index="2" data-intro="#intro2" class="recc_slider_item">
                                <div>
                                    <img class="recc_slider_img" src="./public/img/product-mark2.png" alt="">
                                </div>
                            </li>
                            <li data-index="3" data-intro="#intro3" class="recc_slider_item active">
                                <div>
                                    <img class="recc_slider_img" src="./public/img/product-mark3.png" alt="">
                                </div>
                            </li>
                            <li data-index="4" data-intro="#intro4" class="recc_slider_item">
                                <div>
                                    <img class="recc_slider_img" src="./public/img/product-mark4.png" alt="">
                                </div>
                            </li>
                            <li data-index="5" data-intro="#intro5" class="recc_slider_item">
                                <div>
                                    <img class="recc_slider_img" src="./public/img/product-mark5.png" alt="">
                                </div>
                            </li>
                            <li data-index="6" data-intro="#intro6" class="recc_slider_item opa-0">
                                <div>
                                    <img class="recc_slider_img" src="./public/img/product-mark6.png" alt="">
                                </div>
                            </li>
                        </ul>
                    </div>
                    <ul class="recc_intro">
                        <li class="recc_intro_item" id="intro1">
                            <div class="recc_intro_title">
                                <h3>招牌豚骨拉麵</h3>
                            </div>
                            <p>
                                豬大骨湯底，透著淡淡的牡蠣白，營養不油膩；<br>
                                搭配武火炙燒的叉燒肉，<br>
                                香氣撲鼻，美味無雙，初訪必點。
                            </p>
                        </li>
                        <li class="recc_intro_item" id="intro2">
                            <div class="recc_intro_title">
                                <h3>招牌豚骨拉麵2</h3>
                            </div>
                            <p>
                                豬大骨湯底，透著淡淡的牡蠣白，營養不油膩；<br>
                                搭配武火炙燒的叉燒肉，<br>
                                香氣撲鼻，美味無雙，初訪必點。
                            </p>
                        </li>
                        <li class="recc_intro_item active" id="intro3">
                            <div class="recc_intro_title">
                                <h3>招牌豚骨拉麵3</h3>
                            </div>
                            <p>
                                豬大骨湯底，透著淡淡的牡蠣白，營養不油膩；<br>
                                搭配武火炙燒的叉燒肉，<br>
                                香氣撲鼻，美味無雙，初訪必點。
                            </p>
                        </li>
                        <li class="recc_intro_item" id="intro4">
                            <div class="recc_intro_title">
                                <h3>招牌豚骨拉麵4</h3>
                            </div>
                            <p>
                                豬大骨湯底，透著淡淡的牡蠣白，營養不油膩；<br>
                                搭配武火炙燒的叉燒肉，<br>
                                香氣撲鼻，美味無雙，初訪必點。
                            </p>
                        </li>
                        <li class="recc_intro_item" id="intro5">
                            <div class="recc_intro_title">
                                <h3>招牌豚骨拉麵5</h3>
                            </div>
                            <p>
                                豬大骨湯底，透著淡淡的牡蠣白，營養不油膩；<br>
                                搭配武火炙燒的叉燒肉，<br>
                                香氣撲鼻，美味無雙，初訪必點。
                            </p>
                        </li>
                        <li class="recc_intro_item" id="intro6">
                            <div class="recc_intro_title">
                                <h3>招牌豚骨拉麵6</h3>
                            </div>
                            <p>
                                豬大骨湯底，透著淡淡的牡蠣白，營養不油膩；<br>
                                搭配武火炙燒的叉燒肉，<br>
                                香氣撲鼻，美味無雙，初訪必點。
                            </p>
                        </li>
                    </ul>
                    <img class="flavor" src="./public/img/flavor.svg" alt="">
                </div>
            </div>
            <img src="./public/img/smoke-4.png" alt="" class="smoke smoke-4" data-1100="filter: blur(0px);transform: translateX(0px) translateY(0px); opacity: 1;" data-1400="filter: blur(5px);transform: translateX(-104px) translateY(-52px); opacity: 0;">
            <img src="./public/img/smoke-3.png" alt="" class="smoke smoke-3" data-1100="filter: blur(2px);transform: translateX(0px) translateY(0px); opacity: 0.7;" data-1400="filter: blur(7px);transform: translateX(0px) translateY(-52px); opacity: 0;">
            <img src="./public/img/smoke-7.png" alt="" class="smoke smoke-7" data-1100="filter: blur(2px);transform: translateX(0px) translateY(0px); opacity: 0.7;" data-1400="filter: blur(7px);transform: translateX(-104px) translateY(-52px); opacity: 0;">
            <div class="slider-arrow-next slider-arrow"><img src="./public/img/slider-arrow-next.svg" alt=""></div>
            <div class="slider-arrow-prev slider-arrow"><img src="./public/img/slider-arrow-prev.svg" alt=""></div>
        </div>

        <div class="news">
            <div class="container">
                <div class="title">
                    <img src="./public/img/title-news.svg" alt="最新消息">
                    <h2>Latest News</h2>
                </div>
                <div class="swiper-container news_slider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <a href="" class="news_item">
                            <div class="news_item_pic">
                                <img src="./public/img/news-pic-1.png" alt="">
                                <div class="news_item_title"><h3>麵匡匡內湖金湖店正式開幕</h3></div>
                            </div>
                            <p class="date">2022.8.1</p>
                        </a>
                      </div>
                      <div class="swiper-slide">
                        <a href="" class="news_item">
                            <div class="news_item_pic">
                                <img src="./public/img/news-pic-2.png" alt="">
                                <div class="news_item_title"><h3>麵匡匡台北莊敬店試營運</h3></div>
                            </div>
                            <p class="date">2022.11.26</p>
                        </a>
                      </div>
                      <div class="swiper-slide">
                        <a href="" class="news_item">
                            <div class="news_item_pic">
                                <img src="./public/img/news-pic-3.png" alt="">
                                <div class="news_item_title"><h3>辣麼香 川味培根牛 新上市!!</h3></div>
                            </div>
                            <p class="date">2022.10.15</p>
                        </a>
                      </div>
                      <div class="swiper-slide">
                        <a href="" class="news_item">
                            <div class="news_item_pic">
                                <img src="./public/img/news-pic-3.png" alt="">
                                <div class="news_item_title"><h3>辣麼香 川味培根牛 新上市!!</h3></div>
                            </div>
                            <p class="date">2022.10.15</p>
                        </a>
                      </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <a href="" class="more">全部展開</a>
            </div>
        </div>

    </main>
    <?php include("./include/footer.php") ?>
    <?php include("./include/script.php") ?>
    <script src="./public/js/round-slider.js"></script>
    <script>
        var swiperBanner = new Swiper(".banner_slider", {
            slidesPerView: 1,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            loop: true,
            speed: 800,
        });
        var swiperNews = new Swiper(".news_slider", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            speed: 800,     
            slidesPerGroup: 2,   
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    slidesPerGroup: 2,
                },
                1200: {
                    slidesPerView: 3,
                    slidesPerGroup: 3,  
                    spaceBetween: 60,
                }
            }
        });
        // 滾動
        // var skrollr_obj = skrollr.init();
        // 煙霧
        $(window).on("resize scroll",function(){
            let headerHeight;
            if($(window).width() <= 991){
                headerHeight = 100;
            }else {
                headerHeight = 300;
            }
            let reccTop = $(".recc").offset().top - headerHeight;
            if($(window).scrollTop() >= reccTop){
                $(".smoke").addClass("active");
            }else {
                $(".smoke").removeClass("active");
            }
        })
    </script>
</body>
