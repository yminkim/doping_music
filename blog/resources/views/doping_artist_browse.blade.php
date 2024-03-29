<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aritst | Doping Music</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css"/>
    <link rel="shortcut icon" href="./img/pss_ico.ico.png">

    <style>
        
        @font-face {
            font-family: "apple-neo";
            src: url("./fonts/AppleSDGothicNeoB.ttf");
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'apple-neo';
        }

        img {
            display: block;
        }

        html {
            font-size: 10px;
            background-color: rgb(26, 26, 26);
        }

         

        /* 상단바(상) */
        .logo-bar-area {
            display: flex;
            width: 100%;
            height: 50px;
            background-color: black;
        }

        .logo-img-box {
            margin-left: auto;
            height: 100%;
            margin-right: 1%;
        }

        .logo-img-box img {
            height: 100%;
        }
        /* 상단바(하) */
        .link-menu-area ul {
            font-size: 1.6rem;
        }

        .menu-area {
            display: flex;
            justify-content: space-around;
            z-index: 999;
        }

        .fixed-bar {
            position: fixed;
            top: 0px;
        }

        .link-menu-area ul {
            display: flex;
            justify-content: end;
            height: 100%;
        }

        .checked-menu {
            background-color: rgb(26, 26, 26);
        }

        .link-menu-area ul li, .link-menu-area ul a {
            list-style: none;
            display: flex;
            align-items: center;
            cursor: pointer;
            
            padding: 0 20px;
            border-top: 2px solid rgba(255, 255, 255, 0);
            border-bottom: 2px solid rgba(255, 255, 255, 0);

            transition-property: all;
            transition-duration: 0.5s;
        }

        .link-menu-area ul a {
            text-decoration: none;
            color: black;
        }

        .link-menu-area ul li:hover, .link-menu-area ul a:hover {
            border-bottom: 2px solid black;
            transition-timing-function: linear;
        }
        
        .logo-area img {
            width: 220px;
        }

        .side-box {
            width: 220px;
        }
        
        .link-menu-area {
            width: 70%;
        }

        .menu-area {
            display: flex;
            width: 100%;
            height: 60px;
            background-color: #fff;
        }

        .logo-area {
            display: flex;
            align-items: center;
        }

        /* 메인 */

        .content-container {
            width: 90%;
            margin: 0 auto;

            margin-top: 3%;
        }

        .content-area {
            display: flex;
            justify-content: space-between;
        }

        .post-container {
            width: 77%;

            display: flex;
            flex-direction: column;
        }
        
        .option-area {
            height: 85.5%;
            overflow: scroll;
            overflow-x: hidden;
        }
        
        .option-area::-webkit-scrollbar {
            display: none;
        }
        

        .list-title-area {
            margin: 0 1%;
            font-size: 4rem;
            color: #fff;
        }

        .item-count-area {
            margin: 2% 1%;
            font-size: 1.6rem;
            color: #b5b5b5;
        }

        .post-list-area {
            display: flex;
            flex-wrap: wrap;
        }

        .post-item {
            width: 18%;
            margin: 1%;
            
        }

        .post-item a {
            display: flex;
            align-items: center;
            flex-direction: column;
            text-decoration: none;
            position: relative;
            overflow: hidden;
        }

        .post-img-area img {
            width: 100%;
            -webkit-filter: grayscale(100%);
            filter: gray;
            
        }

        .scale_none {
            filter: none !important;
        }

        .post-title {
            font-size: 1.6rem;
            color: #ffffff;
        }

        .post-artist {
            font-size: 1.5rem;
            color: #a9a9a9;
        }

        .post-info-area {
            width: 100%;
            padding: 4% 7%;
            position: absolute;
            bottom: -6.4rem;
            background-color: #000000ab;
            transition: all 0.3s;
        }

        .post-info-up {
            bottom: 0rem !important;
        }

        footer {
            width: 100%;
            height: 300px;
            background-color: rgb(58, 58, 58);
        }

        /* 페이지네이션 */
        .pagenation-area {
            display: flex;
            justify-content: center;
            margin: 10rem 0;
        }

        .number-page {
            display: flex;
        }

        .page-box {
            cursor: pointer;
            width: 3.5rem;
            height: 3.5rem;
            margin: 0 5px;
            border-radius: 3.5rem;
            font-size: 1.7rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgb(216, 216, 216);
        }

        /* .page-box:hover {
            color: black;
        } */

        .checked-page {
            font-weight: bold;
            color: black;
            background-color: #d3d3d3;
        }

        /* 옵션 영역 */
        .option-container {
            width: 20%;
            height: 950px;
            display: flex;
            flex-direction: column;
            justify-content: end;
            
        }

        .option-title {
            display: flex;
            width: 100%;
            height: 6rem;
            padding: 0.5%;
            border: 2px solid rgba(0, 0, 0, 0);
            border-radius: 1.3rem;
        }

        .option-title:hover {
            border: 2px solid rgb(209, 209, 209);
        }

        .inbox {
            background-color: #565656;
            color: black;
            border-radius: 1rem;
            width: 100%;
            padding: 5%;
            display: flex;
            align-items: center;
            font-size: 2.2rem;
            justify-content: space-between;
            cursor: pointer;
        }

        .open-option-box {
            transform: rotate(180deg);
        }

        .sort-item-area, .list-box {
            display: flex;
            align-items: center;
            padding: 5%;
            font-size: 1.6rem;
            width: 97%;
            height: 4.5rem;
            border-radius: 5px;
            border: 1px solid black;
            margin: 0.5% 0;
            justify-content: space-between;
            cursor: pointer;
            color: rgb(215 215 215);
            background-color: rgb(44 44 44);
        }

        .search-op-box {
            display: flex;
            align-items: center;
            padding: 5%;
            font-size: 1.6rem;
            width: 97%;
            height: 5.5rem;
            border-radius: 5px;
            border: 1px solid black;
            margin: 0.5% 0;
            justify-content: space-between;
            background-color: #c9c9c9;
        }

        .search-op-box .fas {
            cursor: pointer;
        }

        .sort-list-area {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .sort-check {
            width: 3rem;
            height: 3rem;
            border-radius: 3rem;
            border: 1px solid rgb(255, 255, 255);

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .sort-checked {
            width: 2rem;
            height: 2rem;
            border-radius: 2rem;
            background-color: rgb(218, 218, 218);
        }

        .hide-op {
            display: none;
        }

        /* .search-artist-btn {
            width: 4rem;
            height: 4rem;
            background-color: rgb(207, 207, 207);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        } */

        .artist-search-op {
            margin: 2% 0;
            display: flex;
            justify-content: space-between;
            color: rgb(0, 0, 0);
        }

        .artist-search-op input {
            width: 80%;
            height: 2.5rem;
            position: relative;
            bottom: 0.3rem;
        }

        .artist-search-op input:focus {
            outline: none;
        }

        .search-box {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            width: 80%;
        }

        .overlap-op {
            background-color: #c9c9c9;
            color: rgb(0, 0, 0);
        }
        
        .option-refresh {
            font-size: 1.6rem;
            margin: 0 0.5rem 0.5rem auto;
            border: 1px solid rgba(0, 0, 0, 0);
            cursor: pointer;
            color: #b5b5b5;
        }

        .option-refresh:hover {
            border-bottom: 1px solid #b5b5b5;
            
        }

    </style>
</head>
<body>
    <!-- 상단 메뉴 -->
    <div class="menu-container">
        <div class="logo-bar-area">
            <div class="logo-img-box">
                <img src="img/logo.png" alt="">
            </div>
        </div>

        <div class="menu-area">
            <div class="logo-area side-box">
                <img src="img/logo2.png" alt="">
            </div>
            <div class="link-menu-area">
                <ul>
                    <!-- <li>추천 앨범</li>
                    <li>주인장 추천</li>
                    <li>추천 아티스트</li>
                    <li>장르별 앨범</li> -->
                    <a href="">Doping Music</a>
                    <a href="" >Aritst</a>
                    <a href="#">Album</a>
                </ul>
            </div>
            <!-- <div class="menu-empty-box side-box"></div> -->
        </div>
    </div>

    <main>
        <div class="content-container">
            <div class="content-area">
                <div class="post-container">
                    <div class="list-title-area">아티스트</div>
                    <div class="item-count-area">231 artists</div>
                    <div class="post-list-area">
                        <!-- 포스트 -->
                        <div class="post-item">
                            <a href="">
                                <div class="post-img-area">
                                    <img src="img/지디.png" alt="">
                                </div>
                                <div class="post-info-area">
                                    <div class="post-title">G-DRAGON</div>
                                    <div class="post-artist">K-POP</div>
                                </div>
                            </a>
                        </div>

                        <!-- 포스트 -->
                        <div class="post-item">
                            <a href="">
                                <div class="post-img-area">
                                    <img src="img/swings.png" alt="">
                                </div>
                                <div class="post-info-area">
                                    <div class="post-title">SWINGS</div>
                                    <div class="post-artist">HIPHOP</div>
                                </div>
                            </a>
                        </div>

                        <!-- 포스트 -->
                        <div class="post-item">
                            <a href="">
                                <div class="post-img-area">
                                    <img src="img/김심야.png" alt="">
                                </div>
                                <div class="post-info-area">
                                    <div class="post-title">Kim Ximya</div>
                                    <div class="post-artist">HIPHOP</div>
                                </div>
                            </a>
                        </div>

                        <!-- 포스트 -->
                        <div class="post-item">
                            <a href="">
                                <div class="post-img-area">
                                    <img src="img/레드벨벳.png" alt="">
                                </div>
                                <div class="post-info-area">
                                    <div class="post-title">레드벨벳</div>
                                    <div class="post-artist">K-POP</div>
                                </div>
                            </a>
                        </div>

                        <!-- 포스트 -->
                        <div class="post-item">
                            <a href="">
                                <div class="post-img-area">
                                    <img src="img/이선희.png" alt="">
                                </div>
                                <div class="post-info-area">
                                    <div class="post-title">이선희</div>
                                    <div class="post-artist">발라드</div>
                                </div>
                            </a>
                        </div>
                        <!-- 포스트 -->
                        <div class="post-item">
                            <a href="">
                                <div class="post-img-area">
                                    <img src="img/헤이즈.png" alt="">
                                </div>
                                <div class="post-info-area">
                                    <div class="post-title">헤이즈</div>
                                    <div class="post-artist">K-POP</div>
                                </div>
                            </a>
                        </div>
                        <!-- 포스트 -->
                        <div class="post-item">
                            <a href="">
                                <div class="post-img-area">
                                    <img src="img/지디.png" alt="">
                                </div>
                                <div class="post-info-area">
                                    <div class="post-title">G-DRAGON</div>
                                    <div class="post-artist">K-POP</div>
                                </div>
                            </a>
                        </div>

                        <!-- 포스트 -->
                        <div class="post-item">
                            <a href="">
                                <div class="post-img-area">
                                    <img src="img/swings.png" alt="">
                                </div>
                                <div class="post-info-area">
                                    <div class="post-title">SWINGS</div>
                                    <div class="post-artist">HIPHOP</div>
                                </div>
                            </a>
                        </div>

                        <!-- 포스트 -->
                        <div class="post-item">
                            <a href="">
                                <div class="post-img-area">
                                    <img src="img/김심야.png" alt="">
                                </div>
                                <div class="post-info-area">
                                    <div class="post-title">Kim Ximya</div>
                                    <div class="post-artist">HIPHOP</div>
                                </div>
                            </a>
                        </div>

                        <!-- 포스트 -->
                        <div class="post-item">
                            <a href="">
                                <div class="post-img-area">
                                    <img src="img/레드벨벳.png" alt="">
                                </div>
                                <div class="post-info-area">
                                    <div class="post-title">레드벨벳</div>
                                    <div class="post-artist">K-POP</div>
                                </div>
                            </a>
                        </div>

                        <!-- 포스트 -->
                        <div class="post-item">
                            <a href="">
                                <div class="post-img-area">
                                    <img src="img/이선희.png" alt="">
                                </div>
                                <div class="post-info-area">
                                    <div class="post-title">이선희</div>
                                    <div class="post-artist">발라드</div>
                                </div>
                            </a>
                        </div>
                        <!-- 포스트 -->
                        <div class="post-item">
                            <a href="">
                                <div class="post-img-area">
                                    <img src="img/헤이즈.png" alt="">
                                </div>
                                <div class="post-info-area">
                                    <div class="post-title">헤이즈</div>
                                    <div class="post-artist">K-POP</div>
                                </div>
                            </a>
                        </div>

                        


                    </div>
                    <div class="pagenation-area">
                        <div class="first-page page-box fas fa-angle-double-left"></div>
                        <div class="number-page">
                            <div class="page-box checked-page">1</div>
                            <div class="page-box">2</div>
                            <div class="page-box">3</div>
                            <div class="page-box">4</div>
                        </div>
                        <div class="end-page page-box fas fa-angle-double-right"></div>
                    </div>
                </div>
                <!-- 옵션 영역 -->
                <div class="option-container">
                    <div class="option-refresh">필터 지우기</div>
                    <div class="option-area">

                        <!-- 정렬 옵션 -->
                        <div class="sort-area option-box-container">
                            <div class="option-title">
                                <div class="inbox" data-value="0">
                                    <div class="option-name">정렬</div>
                                    <div class="fas fa-chevron-down"></div>
                                </div>
                            </div>
                            <div class="sort-list-area hide-op">
                                <!-- 정렬 아이템 -->
                                <div class="sort-item-area" data-value="1">
                                    <div class="sort-item">이름(내림차순)</div>
                                    <div class="sort-check"><div class="in-box sort-checked"></div></div>
                                </div>

                                <!-- 정렬 아이템 -->
                                <div class="sort-item-area" data-value="0">
                                    <div class="sort-item">이름(오름차순)</div>
                                    <div class="sort-check"><div class="in-box"></div></div>
                                </div>

                                <!-- 정렬 아이템 -->
                                <div class="sort-item-area" data-value="0">
                                    <div class="sort-item">발매일(내림차순)</div>
                                    <div class="sort-check"><div class="in-box"></div></div>
                                </div>

                                <!-- 정렬 아이템 -->
                                <div class="sort-item-area" data-value="0">
                                    <div class="sort-item">발매일(내림차순)</div>
                                    <div class="sort-check"><div class="in-box"></div></div>
                                </div>


                            </div>
                        </div>

                        <!-- 아티스트 검색 -->
                        <div class="search-artist-area option-box-container">
                            <div class="option-title">
                                <div class="inbox" data-value="0">
                                    <div class="option-name">아티스트 검색</div>
                                    <div class="fas fa-chevron-down"></div>
                                </div>
                            </div>
                            <div class="sort-list-area hide-op">
                                <!-- 아티스트 검색 아이템 -->
                                <div class="search-op-box">
                                    <div class="search-box">
                                        <div class="artist-search-op">이름<input type="text"></div>
                                    </div>
                                    <div class="fas fa-search"></div>
                                </div>



                            </div>
                        </div>
                        <!-- 장르 옵션 -->
                        <div class="genre-op-area option-box-container">
                            <div class="option-title">
                                <div class="inbox" data-value="0">
                                    <div class="option-name">장르</div>
                                    <div class="fas fa-chevron-down"></div>
                                </div>
                            </div>
                            <div class="sort-list-area genre-boxx hide-op">
                                <!-- 장르 아이템 -->
                                <div class="list-box" data-genre="0">랩 / HIPHOP</div>
                                <div class="list-box" data-genre="0">팝송 / POP</div>
                                <div class="list-box" data-genre="0">한국 / K-POP</div>
                                <div class="list-box" data-genre="0">일본 / J-POP</div>
                                <div class="list-box" data-genre="0">ROCK</div>
                                <div class="list-box" data-genre="0">EDM</div>
                                <div class="list-box" data-genre="0">애니메이션 / 애니송</div>
                                <div class="list-box" data-genre="0">클래식</div>
                                <div class="list-box" data-genre="0">JAZZ</div>
                                <div class="list-box" data-genre="0">트로트</div>
                                <div class="list-box" data-genre="0">발라드</div>
                            </div>
                        </div>
                        <!-- -- -->
                        <!-- 국가 옵션 -->
                        <div class="genre-op-area option-box-container">
                            <div class="option-title">
                                <div class="inbox" data-value="0">
                                    <div class="option-name">국가</div>
                                    <div class="fas fa-chevron-down"></div>
                                </div>
                            </div>
                            <div class="sort-list-area country-boxx hide-op">
                                <!-- 국가 아이템 -->
                                <div class="list-box" data-value="0">대한민국</div>
                                <div class="list-box" data-value="0">미국</div>
                                <div class="list-box" data-value="0">일본</div>
                                <div class="list-box" data-value="0">영국</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    
    
    <footer>footer</footer>


    <!-- javascript -->
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <script>


        // 스크롤 시 상단 헤더 메뉴 fiexd
        $(document).scroll(function(){
            let wheel = $(document).scrollTop();
            if(wheel > 50) {
                $('.menu-area').addClass('fixed-bar');
            } else {
                $('.menu-area').removeClass('fixed-bar');
            }
        });

        // 스크롤 이동 메뉴
        $('.link-menu-area ul li').click(function(){
            let offset;
            if($(this).text() == "추천 앨범") {
                offset = $('.logo-bar-area').offset();
            } else if($(this).text() == "주인장 추천") {
                offset = $('.page1').offset();
            } else if($(this).text() == "추천 아티스트") {
                offset = $('.page2').offset();
            } else if($(this).text() == "장르별 앨범") {
                offset = $('.page3').offset();
            }

            $("html, body").animate({scrollTop : offset.top},400);
        });

        // 옵션 박스 오픈
        $('.inbox').click(function(){
            console.log($(this).attr('data-value'));
            if($(this).attr('data-value') == 0) {
                $(this).attr('data-value', 1);
                $(this).children('.fas').addClass('open-option-box');
                $(this).parent('.option-title').parent('.option-box-container').children('.sort-list-area').removeClass('hide-op');
            } else {
                $(this).attr('data-value', 0);
                $(this).children('.fas').removeClass('open-option-box');
                $(this).parent('.option-title').parent('.option-box-container').children('.sort-list-area').addClass('hide-op');
            }
            
        });

        // 정렬 옵션 아이템 선택 
        $('.sort-item-area').click(function(){
            $('.sort-item-area .sort-check .in-box').removeClass('sort-checked');
            $('.sort-item-area').attr('data-value', 0);
            $(this).children('.sort-check').children('.in-box').addClass('sort-checked');
            $(this).attr('data-value', 1);
        });

        // 장르 선택 
        $('.genre-boxx .list-box').click(function(){
            if($(this).attr('data-genre') == 0) {
                $(this).attr('data-genre', '1');
                $(this).addClass('overlap-op');
            } else {
                $(this).attr('data-genre', '0');
                $(this).removeClass('overlap-op');
            }
        });

        // 국가 선택
        $('.country-boxx .list-box').click(function(){
            if($(this).attr('data-value') == 0) {
                $(this).attr('data-value', '1');
                $(this).addClass('overlap-op');
            } else {
                $(this).attr('data-value', '0');
                $(this).removeClass('overlap-op');
            }
        });

        // 필터 초기화
        // ※ 어차피 초기 상태로 돌리는 것이라면 페이지 새로고침도 방법일듯
        $('.option-refresh').click(function(){
            // 검색 옵션 초기화
            $('.artist-search-op input').val('');
            // 장르 초기화
            $('.genre-boxx .list-box').attr('data-genre', 0);
            $('.genre-boxx .list-box').removeClass('overlap-op');
            // 국가 초기화
            $('.country-boxx .list-box').attr('data-value', 0);
            $('.country-boxx .list-box').removeClass('overlap-op');

            $('.sort-list-area').addClass('hide-op');
            $('.inbox').attr('data-value', 0);
            $('.fa-chevron-down').removeClass('open-option-box');
        });


        // 포스트 hover 시 아티스트 정보 올리기
        $('.post-item').hover(function(){
            $(this).children('a').children('.post-info-area').addClass('post-info-up');
            $(this).children('a').children('.post-img-area').children('img').addClass('scale_none');

        }, function(){
            $(this).children('a').children('.post-info-area').removeClass('post-info-up');
            $(this).children('a').children('.post-img-area').children('img').removeClass('scale_none');
        });


    </script>

</body>
</html>