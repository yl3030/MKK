
<?php
    $pageName = "about";
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
            
            <img class="about_meat d-sm-block d-none" src="./public/img/about-meat.svg" alt="">
            <img class="about_meat d-sm-none" src="./public/img/about-meat-m.svg" alt="">
            
            <div class="about_character">
                <div class="container">
                    <div class="title">
                        <img src="./public/img/title-role.svg" alt="麵匡匡人物">
                        <h2>Character Introduction</h2>
                    </div>
                    <div class="swiper-container characterPic">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="about_character_pic">
                                    <img class="person" src="./public/img/character-1.svg" alt="">
                                    <img class="say" src="./public/img/say.svg" alt="">
                                </div>
                                <div class="about_character_text">
                                    <div class="inner">
                                        <img class="about_character_title" src="./public/img/character-slogan-v2.svg" alt="">
                                        <ul>
                                            <li>暱稱：爆子頭 阿良</li>
                                            <li>出身：台灣鄉下</li>
                                            <li>生日：9/6 處女座(目前26歲)</li>
                                            <li>興趣：美食和交朋友</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="about_character_pic">
                                    <img class="person" src="./public/img/character-2.svg" alt="">
                                    <img class="say" src="./public/img/say.svg" alt="">
                                </div>
                                <div class="about_character_text">
                                    <div class="inner">
                                        <img class="about_character_title" src="./public/img/character-slogan-v2.svg" alt="">
                                        <ul>
                                            <li>暱稱：爆子頭 阿良</li>
                                            <li>出身：台灣城市</li>
                                            <li>生日：10/6 天秤座(目前26歲)</li>
                                            <li>興趣：美食和交朋友</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="about_character_pic">
                                    <img class="person" src="./public/img/character-3.svg" alt="">
                                    <img class="say" src="./public/img/say.svg" alt="">
                                </div>
                                <div class="about_character_text">
                                    <div class="inner">
                                        <img class="about_character_title" src="./public/img/character-slogan-v2.svg" alt="">
                                        <ul>
                                            <li>暱稱：爆子頭 阿良</li>
                                            <li>出身：台灣漁村</li>
                                            <li>生日：11/6 天蠍座(目前26歲)</li>
                                            <li>興趣：美食和交朋友</li>
                                            <li>生日：11/6 天蠍座(目前26歲)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <!-- <div class="swiper-container characterText">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="about_character_text">
                                    <div class="inner">
                                        <img class="about_character_title" src="./public/img/character-slogan-v2.svg" alt="">
                                        <ul>
                                            <li>暱稱：爆子頭 阿良</li>
                                            <li>出身：台灣鄉下</li>
                                            <li>生日：9/6 處女座(目前26歲)</li>
                                            <li>興趣：美食和交朋友</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="about_character_text">
                                    <div class="inner">
                                        <img class="about_character_title" src="./public/img/character-slogan-v2.svg" alt="">
                                        <ul>
                                            <li>暱稱：爆子頭 阿良</li>
                                            <li>出身：台灣城市</li>
                                            <li>生日：10/6 天秤座(目前26歲)</li>
                                            <li>興趣：美食和交朋友</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="about_character_text">
                                    <div class="inner">
                                        <img class="about_character_title" src="./public/img/character-slogan-v2.svg" alt="">
                                        <ul>
                                            <li>暱稱：爆子頭 阿良</li>
                                            <li>出身：台灣漁村</li>
                                            <li>生日：11/6 天蠍座(目前26歲)</li>
                                            <li>興趣：美食和交朋友</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>     
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div> -->
                    <div class="swiper-button-next character_arrow" id="character_arrow_next"></div>
                    <div class="swiper-button-prev character_arrow" id="character_arrow_prev"></div> 
                </div>
            </div>
            
            <div class="about_btn">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6"> <a href="">更多MKK創業故事</a></div>
                        <div class="col-sm-6"> <a href="">更多MKK創業故事</a></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include("./include/footer.php") ?>
    <?php include("./include/script.php") ?>

    <script>
        var swiperPic = new Swiper(".characterPic", {
            slidesPerView: 1,
            spaceBetween: 20,
            centeredSlides: true,
            loop: true,
            // allowTouchMove: false,
            speed: 800,
            navigation: {
                nextEl: "#character_arrow_next",
                prevEl: "#character_arrow_prev",
            },
            breakpoints: {
                600: {
                    spaceBetween: 20,
                    slidesPerView: 3,
                },
                768: {
                    spaceBetween: 100,
                    slidesPerView: 3,
                },
            },
        });

        function characterIntro() {
            let introHeight_max = 0, introHeight_prev = 0;
            $(".about_character_text").each(function(){
                let introHeight = $(this).height();
                if(introHeight > introHeight_max) {
                    introHeight_max = introHeight;
                }else {
                    introHeight_prev = introHeight;
                }
            })
            introHeight_max = introHeight_max + 24;
            $(".characterPic").css("padding-bottom","calc(55px + " + introHeight_max + "px)");
            $(".character_arrow").each(function(){
                $(this).css("bottom","calc(" + introHeight_max + "px / 2)");
            })
        }
        characterIntro();
        $(window).on("resize scroll",function(){
            characterIntro();
        })
    </script>
    
</body>
