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
                            <li data-index="0" data-intro="#intro2" class="recc_slider_item last">
                                <a href="">
                                    <img class="recc_slider_img" src="" alt="">
                                </a>
                            </li>
                            <li data-index="1" data-intro="#intro1" class="recc_slider_item">
                                <a href="http://www.obiz.com.tw/">
                                    <img class="recc_slider_img" src="./public/img/product-2.png" alt="">
                                </a>
                            </li>
                            <li data-index="2" data-intro="#intro2" class="recc_slider_item">
                                <a href="">
                                    <img class="recc_slider_img" src="./public/img/product-3.png" alt="">
                                </a>
                            </li>
                            <li data-index="3" data-intro="#intro3" class="recc_slider_item active">
                                <a href="">
                                    <img class="recc_slider_img" src="./public/img/product-5.png" alt="">
                                </a>
                            </li>
                            <li data-index="4" data-intro="#intro4" class="recc_slider_item">
                                <a href="">
                                    <img class="recc_slider_img" src="./public/img/product-4.png" alt="">
                                </a>
                            </li>
                            <li data-index="5" data-intro="#intro5" class="recc_slider_item">
                                <a href="">
                                    <img class="recc_slider_img" src="./public/img/product-1.png" alt="">
                                </a>
                            </li>
                            <li data-index="6" data-intro="#intro6" class="recc_slider_item last">
                                <a href="">
                                    <img class="recc_slider_img" src="./public/img/noodle.svg" alt="">
                                </a>
                            </li>
                            <li data-index="7" data-intro="#intro1" class="recc_slider_item last">
                                <a href="">
                                    <img class="recc_slider_img" src="" alt="">
                                </a>
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
    <script>
        // 滾動
        var skrollr_obj = skrollr.init();
        // 預設
        let range = 80;
        let rotateUnit = range / 6;
        let rotateOffset = 90 - (range / 2);
        const activeIndex = 3;
        let deg, reverse;
        let Firstimg, FirstLink, FirstMark;
        function reccSliderItem(){
            if($(window).width()>991){
                range = 80;
            }else if($(window).width()>575) {
                range = 130;
            }else {
                range = 320;
            }
            rotateUnit = range / 6;
            rotateOffset = 90 - (range / 2);
            $(".recc_slider_item").each(function(){
                let index = $(this).attr("data-index");
                deg = rotateUnit * index + rotateOffset;
                reverse = rotateUnit * index * (-1) - rotateOffset;
                $(this).css("transform","rotateZ(" + deg + "deg)");
                $(this).find(".recc_slider_img").css("transform","rotateZ(" + reverse + "deg)");
                if(index == 1){
                    Firstimg = $(this).find(".recc_slider_img").attr("src");
                    FirstLink = $(this).find("a").attr("href");
                    FirstMark = $(this).find(".mark").text();
                }
            })
            $(".recc_slider_item[data-index='7']").find(".recc_slider_img").attr("src",Firstimg);
            $(".recc_slider_item[data-index='7']").find("a").attr("href",FirstLink);
            if($(window).width()>991) {
                $(".recc_slider_item").removeClass("last");
                $(".recc_slider_item[data-index='0'],.recc_slider_item[data-index='6'],.recc_slider_item[data-index='7']").addClass("last");
            }else if($(window).width()>575) {
                $(".recc_slider_item").removeClass("last");
                $(".recc_slider_item[data-index='0'],.recc_slider_item[data-index='1'],.recc_slider_item[data-index='5'],.recc_slider_item[data-index='6'],.recc_slider_item[data-index='7']").addClass("last");
            }else {
                $(".recc_slider_item").addClass("last");
                $(".recc_slider_item[data-index='" + activeIndex + "']").removeClass("last");
            }
            $(".recc_slider_item[data-index='" + activeIndex + "']").addClass("active");
        };
        reccSliderItem();
        // Range();
        $(window).on("resize scroll",function(){
            // Range();
            reccSliderItem();
        })

        // 點選箭頭
        $(".slider-arrow").click(function(){
            let length = $(".recc_slider_item").length - 1;
            let newIndex, thisIndex;
            if($(this).hasClass("slider-arrow-next")){
                let Secondimg = $(".recc_slider_item[data-index='2']").find(".recc_slider_img").attr("src");
                let SecondLink = $(".recc_slider_item[data-index='2']").find("a").attr("href");  
                let SecondIntro = $(".recc_slider_item[data-index='2']").attr("data-intro");
                $(".recc_slider_item[data-index='0']").find(".recc_slider_img").attr("src",Secondimg);
                $(".recc_slider_item[data-index='0']").find("a").attr("href",SecondLink);  
                $(".recc_slider_item[data-index='0']").attr("data-intro",SecondIntro);
                $(".recc_slider_item").each(function(){
                    thisIndex = parseInt($(this).attr("data-index"));
                    if(thisIndex == 0){
                        newIndex = length;
                    }else {
                        newIndex = thisIndex - 1;
                    }

                    if($(window).width()>991){
                        if(thisIndex == 1) {
                            $(this).addClass("last");
                        }else if(thisIndex == 6) {
                            $(this).removeClass("last");
                        }
                    }else if($(window).width()>575){
                        if(thisIndex == 2) {
                            $(this).addClass("last");
                        }else if(thisIndex == 5) {
                            $(this).removeClass("last");
                        }
                    }else {
                        if(thisIndex == 3) {
                            $(this).addClass("last");
                        }else if(thisIndex == 4) {
                            $(this).removeClass("last");
                        }
                    }

                    if($(this).hasClass("active")){
                        $(this).removeClass("active");
                    }

                    $(this).attr("data-index",newIndex);
                    deg = rotateUnit * newIndex + rotateOffset;
                    reverse = rotateUnit * newIndex * (-1) - rotateOffset;
                    $(this).css("transform","rotateZ(" + deg + "deg)");
                    $(this).find(".recc_slider_img").css("transform","rotateZ(" + reverse + "deg)");
                })  
            }else if($(this).hasClass("slider-arrow-prev")){
                let Sixthimg = $(".recc_slider_item[data-index='6']").find(".recc_slider_img").attr("src");
                let SixthLink = $(".recc_slider_item[data-index='6']").find("a").attr("href");  
                let SixthIntro = $(".recc_slider_item[data-index='6']").attr("data-intro");
                $(".recc_slider_item[data-index='0']").find(".recc_slider_img").attr("src",Sixthimg);
                $(".recc_slider_item[data-index='0']").find("a").attr("href",SixthLink);  
                $(".recc_slider_item[data-index='0']").attr("data-intro",SixthIntro);
                $(".recc_slider_item").each(function(){
                    thisIndex = parseInt($(this).attr("data-index"));

                    if(thisIndex == length){
                        newIndex = 0;
                    }else {
                        newIndex = thisIndex + 1;
                    }

                    if(thisIndex == 0) {
                        $(this).removeClass("last");
                    }else if(thisIndex == 5) {
                        $(this).addClass("last");
                    }

                    if($(window).width()>991){
                        if(thisIndex == 0) {
                            $(this).removeClass("last");
                        }else if(thisIndex == 5) {
                            $(this).addClass("last");
                        }
                    }else if($(window).width()>575){
                        if(thisIndex == 1) {
                            $(this).removeClass("last");
                        }else if(thisIndex == 4) {
                            $(this).addClass("last");
                        }
                    }else {
                        if(thisIndex == 2) {
                            $(this).removeClass("last");
                        }else {
                            $(this).addClass("last");
                        }
                    }

                    if($(this).hasClass("active")){
                        $(this).removeClass("active");
                    }

                    $(this).attr("data-index",newIndex);
                    deg = rotateUnit * newIndex + rotateOffset;
                    reverse = rotateUnit * newIndex * (-1) - rotateOffset;
                    $(this).css("transform","rotateZ(" + deg + "deg)");
                    $(this).find(".recc_slider_img").css("transform","rotateZ(" + reverse + "deg)");
                });
            }
            $(".recc_slider_item[data-index='" + activeIndex + "']").addClass("active");
            let activeIntro = $(".recc_slider_item[data-index='" + activeIndex + "']").attr("data-intro");
            $(activeIntro).addClass("active").siblings(".recc_intro_item").removeClass("active");
        })

        // 滑鼠拖移
        // const ReccInner = $(".recc_inner");
        // let isPressDown = false;
        // let cursorXSpace;
        // ReccInner.addEventListener("mouseDown",(e) => {
        //     isPressDown = true;
        // })
        var wheel = Draggable.create("#wheel", {
            type: "rotation",
            throwProps: true,
            snap: function (endValue) {
                return Math.round(0);
            },
            onDrag: function () {},
            onThrowComplete: function () {
              dragActive2();
            },
        });

        function dragActive2() {
            let length = $(".recc_slider_item").length - 1;
            let newIndex, thisIndex;
            let Secondimg = $(".recc_slider_item[data-index='2']").find(".recc_slider_img").attr("src");
            let SecondLink = $(".recc_slider_item[data-index='2']").find("a").attr("href");  
            let SecondMark = $(".recc_slider_item[data-index='2']").find(".mark").text();  
            $(".recc_slider_item[data-index='0']").find(".recc_slider_img").attr("src",Secondimg);
            $(".recc_slider_item[data-index='0']").find("a").attr("href",SecondLink);  
            $(".recc_slider_item[data-index='0']").find(".mark").text(SecondMark);
            $(".recc_slider_item").each(function(){
                thisIndex = parseInt($(this).attr("data-index"));
                if(thisIndex == 0){
                    newIndex = length;
                }else {
                    newIndex = thisIndex - 1;
                }

                if(thisIndex == 1) {
                    $(this).addClass("last");
                }else if(thisIndex == 6) {
                    $(this).removeClass("last");
                }

                if($(this).hasClass("active")){
                    $(this).removeClass("active");
                }

                $(this).attr("data-index",newIndex);
                deg = rotateUnit * newIndex + rotateOffset;
                reverse = rotateUnit * newIndex * (-1) - rotateOffset;
                $(this).css("transform","rotateZ(" + deg + "deg)");
                $(this).find(".recc_slider_img").css("transform","rotateZ(" + reverse + "deg)");
            })  
            $(".recc_slider_item[data-index='" + activeIndex + "']").addClass("active");
        }

        // function dragActive() {
        //     var rot = wheel[0].rotation / 360;
        //     console.log("wheel[0]=" + wheel[0] + ",rot=" + rot);
        //     var decimal = rot % 1;
        //     var sliderLength = $("#wheel li").length;
        //     var tempIndex = Math.round(sliderLength * decimal);
        //     var index;

        //     if (rot < 0) {
        //         index = Math.abs(tempIndex);
        //     } else {
        //         index = sliderLength - tempIndex;
        //     }

        //     if (decimal === 0) {
        //         index = 0;
        //     }

        //     TweenMax.staggerTo(
        //         "#wheel li.active .details > *",
        //         0.6,
        //         {
        //             opacity: 0,
        //             y: -10,
        //         },
        //         0.1
        //     );

        //     $("#wheel li.active").removeClass("active");
        //     $($("#wheel li")[index]).addClass("active");

        //     TweenMax.staggerTo(
        //         "#wheel li.active .details > *",
        //         0.6,
        //         {
        //             opacity: 1,
        //             y: 0,
        //         },
        //         0.1
        //     );
        // }


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
    </script>
