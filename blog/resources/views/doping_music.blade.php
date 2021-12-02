<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Doping Music</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css"/>
    <link rel="shortcut icon" href="./img/pss_ico.ico.png">

    <style>
        
        @font-face {
            font-family: "apple-neo";
            src: url('fonts/AppleSDGothicNeoB.ttf');
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'apple-neo';
        }

        html {
            font-size: 10px;
        }

         

        /* 상단바(상) */
        .logo-bar-area {
            display: flex;
            width: 100%;
            height: 50px;
            background-color: black;
            box-shadow: 0px 80px 20px 10px #e7e7e7;
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
            background-color: #e7e7e7;
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

        /* 메인영역 */

        .genre-post-container {
            width: 85%;
            margin: 0 auto;

            display: flex;
            flex-wrap: wrap;

        }

        .genre-post-area, .genre-post-area2 {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
        }

        .genre-post-area2 {
            padding-left: 12.5%;
        }

        .genre-post-area2 .genre-post-item {
            width: 28.57%;
            height: 100%;
            display: flex;
        }

        .genre-post-item {
            width: 25%;
            height: 100%;
            display: flex;
        }

        .album-genre-jacket, .cd-icon {
            width: 50%;

            color: #fff;
            font-size: 3rem;
            
            display: flex;
            align-items: center;
            
        }

        .album-genre-jacket {
            background-color: brown;
        }

        .album-genre-jacket a {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            text-decoration: none;
        }

        .album-genre-jacket img {
            width: 100%;
        }

        .cd-icon img {
            width: 97%;
            height: 100%;
            position: relative;
            right: 100%;
            z-index: -555;
            transition: 0.5s;
        }

        .move-cd {
            right: 23% !important;
            
        }

        /* 추천 아티스트 */
        .artist-container-back {
            background-color: rgb(26, 26, 26);
        }
        .artist-container {
            width: 85%;
            margin: 0 auto;
        }

        .artist-area {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .artist-container-back .name-box-area {
            width: 100%;
            color: #fff;
            background-color: rgb(26, 26, 26);
        }
        

        .name-box-area {
            color: black;
        }

        .name-box-area .area-name-box {
            width: 90%;
            margin: 0 auto;
            padding-top: 80px;
            padding-bottom: 50px;
            font-size: 4rem;
            display: flex;
            justify-content: space-between;
        }

        .name-box-area .area-name-box i {
            display: flex;
            align-items: center;
            font-size: 2rem;
            margin-right: 5%;
            cursor: pointer;
        }

        .area-name-box i:active {
            color: rgb(117, 4, 4);
        }

        .artist-post-item {
            width: 19%;

            margin-bottom: 60px;
        }

        .artist-name {
            width: 100%;
            height: 30px;
            color: #fff;
            font-size: 1.6rem;
            font-weight: bold;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px 0;
        }

        .artist-img-box .artist-img {
            width: 100%;
            -webkit-filter: grayscale(100%);
            filter: gray;
            border: 3px solid rgba(255, 255, 255, 0);
        }

        .artist-img {
            display: block;
        }

        .artist-img-hover {
            -webkit-filter: grayscale(0%) !important;
            filter: none !important;
            border: 3px solid #fff !important;
        }

        .artist-img-box {
            position: relative;
        }

        .artist-detail-box {
            display: none;

            z-index: 22;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 30%;
            height: 30%;
            background-color: rgba(0, 0, 0, 0.555);
            
            flex-direction: column;
            color: #fff;
            align-items: center;
            justify-content: center;
        }

        .artist-detail-box .fas {
            font-size: 3rem;
        }

        .vd-text {
            font-size: 1.1rem;
            margin-top: 5%;
        }

        /*추천 앨범 */
         .recom-album-container {
            width: 70%;
            margin: 0 auto;
            margin-bottom: 100px;

            display: flex;
            flex-direction: column;
        }

        .focus-album-area {
            width: 60%;
            
            margin: 0 auto;
            margin-bottom: 5%;
            display: flex;
        }

        .focus-album-img, .focus-album-detail-area {
            width: 50%;
        }

        .focus-album-detail {
            font-size: 1.6rem;
            margin: 2% 0;
            margin-left: 5px;
            color: gray;
        }

        .focus-album-img img {
            width: 100%;
            display: block;
        }

        .recom-album-list {
            display: flex;
            width: 100%;
            justify-content: space-between;
        }

        .recom-album-item {
            width: 16%;
            cursor: pointer;
        }

        .recom-album-item img {
            width: 100%;
            display: block;
        }

        .focus-album-detail-area {
            display: flex;
            flex-direction: column;
            margin: auto 0;
            padding-left: 5%;
            }

        .focus-album-title {
            font-size: 5.5rem;
            font-weight: bold;
        }



        .my-description {
            display: flex;
            margin-top: 10%;
        }

        .album-point {
            border-radius: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 3rem;
            width: 80px;
            height: 80px;
            background-color: rgb(35, 224, 66);
        }

        .ap-area {
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-left: 4%;
        }

        .ap-title {
            font-weight: bold;
            font-size: 1.8rem;
            color: #545454;
        }

        .ap-description {
            font-size: 1.5rem;
            height: 38px;
            margin-top: 2%;
        } 

        footer {
            margin-top: 100px;
            width: 100%;
            height: 300px;
            background-color: rgb(58, 58, 58);
        }

        /* 추천앨범 */
        
        .recommend-album-title-area {
            font-size: 6rem;
            text-align: center;

            margin: 120px 0 70px 0;
        }

        .recommend-menu-area {
            width: 100%;
           
        }

        .recommend-menu-area ul {
            display: flex;
            justify-content: center;
            margin-bottom: 50px;
            

        }

        .recommend-menu-area ul li {
            list-style: none;
            font-size: 1.7rem;
            color: gray;
            cursor: pointer;
            border-top: 1px solid rgba(0, 0, 0, 0);
            border-bottom: 1px solid gray;
        }
        
        .recommend-menu-area ul li:nth-child(n+2) {
            padding-left: 1.7%;
        }

        .recommend-menu-area ul li div {
            border-top: 2px solid rgba(0, 0, 0, 0);
            border-bottom: 2px solid rgba(0, 0, 0, 0);

            position: relative;
            top: 1px;
        }

        .recommend-menu-area ul li div:hover {
            color: #e85f82;
            border-bottom: 2px solid #e85f82;
        }

        .playlistmenu-checked-effect {
            color: #e85f82;
            border-bottom: 2px solid #e85f82 !important;
        }

        .move-album-container {
            margin-bottom: 100px;
            position: relative;
        }

        .move-album-item {
            display: flex;
            flex-direction: column;
            width: 230px;
            margin: 0 10px;

            transition: all 0.5s;
        }

        .ma-img {
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid #2020203a;
        }

        .ma-img img {
            width: 230px;
            display: block;
        }

        .ma-detail {
            display: flex;
            flex-direction: column;
            margin-top: 5px;
            padding: 3px 5px;
        }

        .ma-detail div {
            font-size: 1.5rem;
        }

        .ma-title {
            color: #101010;
        }

        .ma-artist {
            color: #424242;
        }
        
        .move-album-area {
            display: flex;
            overflow: hidden;
        }


        .boxx1, .boxx-area {
            display: flex;
        }
        .move-album-item a {
            text-decoration: none;
            display: flex;
            flex-direction: column;
        }

        .focus-album-effect, .recom-album-item:hover {
            box-shadow: 0px 0px 15px 5px grey
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
                    <a href="">Aritst</a>
                    <a href="#">Album</a>
                </ul>
            </div>
            <!-- <div class="menu-empty-box side-box"></div> -->
        </div>
    </div>

    <!-- 메인 영역 -->
    <main>
        <!-- 추천 앨범 -->
        <div class="recommend-album-container">
            <div class="recommend-album-title-area">이런 음반은 어떠신가요?<br>언제나 새로운 즐거움을 느낄 수 있도록.</div>
            <div class="recommend-menu-area">
                <ul>
                    <li><div class="playlistmenu-checked-effect">최신앨범</div></li>
                    <li><div>고르고 골랐어요</div></li>
                    <li><div>내 인생 최고의 밤</div></li>
                    <li><div>지치고 힘들 때</div></li>
                    <li><div>방금 업데이트된 앨범</div></li>
                </ul>
            </div>

            <div class="move-album-container">
                <div class="move-album-area">
                    <div class="boxx-area">
                    <div class="boxx1">
                        <!-- 포스트 -->
                        <div id='ma-post1' class="move-album-item">
                            <a href="#">
                                <div class="ma-img">
                                    <img src="img/빈지노24.png" alt="">
                                </div>
                                <div class="ma-detail">
                                    <div class="ma-title">2 4 : 2 6</div>
                                    <div class="ma-artist">Beenzino 1</div>
                                </div>
                            </a>
                        </div>

                        <!-- 포스트 -->
                        <div id='ma-post2' class="move-album-item">
                            <a href="#">
                                <div class="ma-img">
                                    <img src="img/트와이스필스페셜.png" alt="">
                                </div>
                                <div class="ma-detail">
                                    <div class="ma-title">Feel Special</div>
                                    <div class="ma-artist">Twice 2</div>
                                </div>
                            </a>
                        </div>

                        <!-- 포스트 -->
                        <div id='ma-post3' class="move-album-item">
                            <a href="#">
                                <div class="ma-img">
                                    <img src="img/호랑이소굴커버.png" alt="">
                                </div>
                                <div class="ma-detail">
                                    <div class="ma-title">호랑이소굴</div>
                                    <div class="ma-artist">기리보이 3</div>
                                </div>
                            </a>
                        </div>

                        <!-- 포스트 -->
                        <div id='ma-post4' class="move-album-item">
                            <a href="#">
                                <div class="ma-img">
                                    <img src="img/나플라wu.png" alt="">
                                </div>
                                <div class="ma-detail">
                                    <div class="ma-title">Wu</div>
                                    <div class="ma-artist">nafla 4</div>
                                </div>
                            </a>
                        </div>

                        <!-- 포스트 -->
                        <div id='ma-post5' class="move-album-item">
                            <a href="#">
                                <div class="ma-img">
                                    <img src="img/이매진드래곤앨범.png" alt="">
                                </div>
                                <div class="ma-detail">
                                    <div class="ma-title">Evolve</div>
                                    <div class="ma-artist">Imagine Dragons 5</div>
                                </div>
                            </a>
                        </div>

                        <!-- 포스트 -->
                        <div id='ma-post6' class="move-album-item">
                            <a href="#">
                                <div class="ma-img">
                                    <img src="img/빈지노24.png" alt="">
                                </div>
                                <div class="ma-detail">
                                    <div class="ma-title">2 4 : 2 6</div>
                                    <div class="ma-artist">Beenzino 6</div>
                                </div>
                            </a>
                        </div>

                        <!-- 포스트 -->
                        <div id='ma-post7' class="move-album-item">
                            <a href="#">
                                <div class="ma-img">
                                    <img src="img/트와이스필스페셜.png" alt="">
                                </div>
                                <div class="ma-detail">
                                    <div class="ma-title">Feel Special</div>
                                    <div class="ma-artist">Twice 7 </div>
                                </div>
                            </a>
                        </div>

                        <!-- 포스트 -->
                        <div id='ma-post8' class="move-album-item">
                            <a href="#">
                                <div class="ma-img">
                                    <img src="img/호랑이소굴커버.png" alt="">
                                </div>
                                <div class="ma-detail">
                                    <div class="ma-title">호랑이소굴</div>
                                    <div class="ma-artist">기리보이 8 </div>
                                </div>
                            </a>
                        </div>

                        <!-- 포스트 -->
                        <div id='ma-post9' class="move-album-item">
                            <a href="#">
                                <div class="ma-img">
                                    <img src="img/나플라wu.png" alt="">
                                </div>
                                <div class="ma-detail">
                                    <div class="ma-title">Wu</div>
                                    <div class="ma-artist">nafla 9</div>
                                </div>
                            </a>
                        </div>

                        <!-- 포스트 -->
                        <div id='ma-post10' class="move-album-item">
                            <a href="#">
                                <div class="ma-img">
                                    <img src="img/이매진드래곤앨범.png" alt="">
                                </div>
                                <div class="ma-detail">
                                    <div class="ma-title">Evolve</div>
                                    <div class="ma-artist">Imagine Dragons 10</div>
                                </div>
                            </a>
                        </div>
                        
                    </div>

                    
                    </div>
                </div>
            </div>
        </div>


        <!-- 추천 앨범(초안) -->
        <div class="testtest">
            <div class="name-box-area">
                <div class="area-name-box page1">추천 앨범</div>
            </div>
            <div class="recom-album-container">
                <div class="focus-album-area">
                    
                    <div class="focus-album-img">
                        <a href="">
                            <img class="fai" src="img/호랑이소굴커버.png" alt="">
                        </a>
                    </div>
                   
                    <div class="focus-album-detail-area">
                        <div class="focus-album-title">호랑이소굴</div>
                        <div class="focus-album-detail">기리보이 | HIP-HOP | 2019-10-13</div>
                        <div class="my-description">
                            <div>
                                <div class="album-point">4/5</div>
                            </div>
                            <div class="ap-area">
                                <div class="ap-title">주인장 추천 평점</div>
                                <div class="ap-description">지칠 때 한 번 정도 위로가 될 수 있는 노래</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="recom-album-list">
                    <div class="recom-album-item focus-album-effect">
                        <img src="img/호랑이소굴커버.png" alt="">
                    </div>

                    <div class="recom-album-item">
                        <img src="img/빈지노24.png" alt="">
                    </div>

                    <div class="recom-album-item">
                        <img src="img/트와이스필스페셜.png" alt="">
                    </div>

                    <div class="recom-album-item">
                        <img src="img/나플라wu.png" alt="">
                    </div>

                    <div class="recom-album-item">
                        <img src="img/이매진드래곤앨범.png" alt="">
                    </div>
                </div>
            </div> 
        </div>

        

        <!-- 추천 아티스트 -->
        <div class="artist-container-back">
            <div class="name-box-area">
                <div class="area-name-box page2">
                    <div>추천 아티스트</div>
                    
                    <i class="fas fa-redo"></i>
                    
                </div>
                
            </div>
            <div class="artist-container">
                <div class="artist-area">
                    <!-- 포스트 -->
                    <div class="artist-post-item">
                        <a href="">
                            <div class="artist-img-box">
                                <div class="artist-detail-box">
                                    <div class="fas fa-plus"></div>
                                    <div class="vd-text">VIEW DETAIL</div>
                                </div>
                                <img class="artist-img" src="img/릴러말즈.png" alt="">
                            </div>
                        </a>
                        <div class="artist-name">Leellamarz</div>
                    </div>

                    <!-- 포스트 -->
                    <div class="artist-post-item">
                        <a href="">
                            <div class="artist-img-box">
                                <div class="artist-detail-box">
                                    <div class="fas fa-plus"></div>
                                    <div class="vd-text">VIEW DETAIL</div>
                                </div>
                                <img class="artist-img" src="img/김심야.png" alt="">
                            </div>
                        </a>
                        <div class="artist-name">Kim Ximya</div>
                    </div>

                    <!-- 포스트 -->
                    <div class="artist-post-item">
                        <a href="">
                            <div class="artist-img-box">
                                <div class="artist-detail-box">
                                    <div class="fas fa-plus"></div>
                                    <div class="vd-text">VIEW DETAIL</div>
                                </div>
                                <img class="artist-img" src="img/레드벨벳.png" alt="">
                            </div>
                        </a>
                        <div class="artist-name">Red Velvet</div>
                    </div>

                    <!-- 포스트 -->
                    <div class="artist-post-item">
                        <a href="">
                            <div class="artist-img-box">
                                <div class="artist-detail-box">
                                    <div class="fas fa-plus"></div>
                                    <div class="vd-text">VIEW DETAIL</div>
                                </div>
                                <img class="artist-img" src="img/이선희.png" alt="">
                            </div>
                        </a>
                        <div class="artist-name">Lee Sun-Hee</div>
                    </div>

                    <!-- 포스트 -->
                    <div class="artist-post-item">
                        <a href="">
                            <div class="artist-img-box">
                                <div class="artist-detail-box">
                                    <div class="fas fa-plus"></div>
                                    <div class="vd-text">VIEW DETAIL</div>
                                </div>
                                <img class="artist-img" src="img/엔버.png" alt="">
                            </div>
                        </a>
                        <div class="artist-name">Angelic Buster</div>
                    </div>

                    <!-- 포스트 -->
                    <div class="artist-post-item">
                        <a href="">
                            <div class="artist-img-box">
                                <div class="artist-detail-box">
                                    <div class="fas fa-plus"></div>
                                    <div class="vd-text">VIEW DETAIL</div>
                                </div>
                                <img class="artist-img" src="img/류이치사카모토.png" alt="">
                            </div>
                        </a>
                        <div class="artist-name">Ryuichi Sakamoto</div>
                    </div>

                    <!-- 포스트 -->
                    <div class="artist-post-item">
                        <a href="">
                            <div class="artist-img-box">
                                <div class="artist-detail-box">
                                    <div class="fas fa-plus"></div>
                                    <div class="vd-text">VIEW DETAIL</div>
                                </div>
                                <img class="artist-img" src="img/빌에반스.png" alt="">
                            </div>
                        </a>
                        <div class="artist-name">William John Evans</div>
                    </div>

                    <!-- 포스트 -->
                    <div class="artist-post-item">
                        <a href="">
                            <div class="artist-img-box">
                                <div class="artist-detail-box">
                                    <div class="fas fa-plus"></div>
                                    <div class="vd-text">VIEW DETAIL</div>
                                </div>
                                <img class="artist-img" src="img/지디.png" alt="">
                            </div>
                        </a>
                        <div class="artist-name">G-DRAGON</div>
                    </div>

                    <!-- 포스트 -->
                    <div class="artist-post-item">
                        <a href="">
                            <div class="artist-img-box">
                                <div class="artist-detail-box">
                                    <div class="fas fa-plus"></div>
                                    <div class="vd-text">VIEW DETAIL</div>
                                </div>
                                <img class="artist-img" src="img/헤이즈.png" alt="">
                            </div>
                        </a>
                        <div class="artist-name">Heize</div>
                    </div>

                    <!-- 포스트 -->
                    <div class="artist-post-item">
                        <a href="">
                            <div class="artist-img-box">
                                <div class="artist-detail-box">
                                    <div class="fas fa-plus"></div>
                                    <div class="vd-text">VIEW DETAIL</div>
                                </div>
                                <img class="artist-img" src="img/머드더.png" alt="">
                            </div>
                        </a>
                        <div class="artist-name">Mudd the student</div>
                    </div>
                </div>
            </div>
        </div>

        
        <!-- 장르별 앨범 리스트 -->
        <div class="name-box-area">
            <div class="area-name-box page3">장르별 앨범 리스트</div>
        </div>
        <div class="genre-post-container">
            
            <div class="genre-post-area">
                <!-- 포스트 -->
                <div class="genre-post-item">
                    <div class="album-genre-jacket">
                        <a href="#" ><img src="img/장르/힙합.png" alt=""></a>
                    </div>
                    <div class="cd-icon">
                        <img src="img/test_cd.png" alt="">
                    </div>
                </div>

                <!-- 포스트 -->
                <div class="genre-post-item">
                    <div class="album-genre-jacket">
                        <a href="#"><img src="img/장르/케이팝.png" alt=""></a>
                    </div>
                    <div class="cd-icon">
                        <img src="img/장르/lp_케이팝.png" alt="">
                    </div>
                </div>

                <!-- 포스트 -->
                <div class="genre-post-item">
                    <div class="album-genre-jacket">
                        <a href="#"><img src="img/장르/팝.png" alt=""></a>
                    </div>
                    <div class="cd-icon">
                        <img src="img/장르/lp_팝.png" alt="">
                    </div>
                </div>

                <!-- 포스트 -->
                <div class="genre-post-item">
                    <div class="album-genre-jacket">
                        <a href="#"><img src="img/장르/제이팝.png" alt=""></a>
                    </div>
                    <div class="cd-icon">
                        <img src="img/장르/lp_제이팝.png" alt="">
                    </div>
                </div>
            </div>

            <div class="genre-post-area2">
                <!-- 포스트 -->
                <div class="genre-post-item">
                    <div class="album-genre-jacket">
                        <a href="#"><img src="img/장르/밴드.png" alt=""></a>
                    </div>
                    <div class="cd-icon">
                        <img src="img/장르/lp_밴드.png" alt="">
                    </div>
                </div>

                <!-- 포스트 -->
                <div class="genre-post-item">
                    <div class="album-genre-jacket">
                        <a href="#"><img src="img/장르/재클.png" alt=""></a>
                    </div>
                    <div class="cd-icon">
                        <img src="img/장르/lp판.png" alt="">
                    </div>
                </div>

                <!-- 포스트 -->
                <div class="genre-post-item">
                    <div class="album-genre-jacket">
                        <a href="#"><img src="img/장르/애니송.png" alt=""></a>
                    </div>
                    <div class="cd-icon">
                        <img src="img/장르/lp_애니송.png" alt="">
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

        // 장르별 앨범에서 hover 시 cd가 나오는 모션
        $('.album-genre-jacket').hover(function(){
            $(this).parent('.genre-post-item').children('.cd-icon').children('img').addClass('move-cd');
        }, function(){
            $(this).parent('.genre-post-item').children('.cd-icon').children('img').removeClass('move-cd');
        });

        // 스크롤 시 상단 헤더 메뉴 fiexd
        $(document).scroll(function(){
            let wheel = $(document).scrollTop();
            if(wheel > 50) {
                $('.menu-area').addClass('fixed-bar');
            } else {
                $('.menu-area').removeClass('fixed-bar');
            }
        });


        // 추천 아티스트 hover 시 효과 적용
        $('.artist-post-item a').hover(function(){
            $(this).children('.artist-img-box').children('.artist-img').addClass('artist-img-hover');
            $(this).children('.artist-img-box').children('.artist-detail-box').css('display', 'flex');
        }, function(){
            $(this).children('.artist-img-box').children('.artist-img').removeClass('artist-img-hover');
            $(this).children('.artist-img-box').children('.artist-detail-box').css('display', 'none');
        });

        // 플레이리스트 선택 시 체크 효과
        $('.recommend-menu-area ul li div').click(function(){
            $('.recommend-menu-area').children('ul').children('li').children('div').removeClass('playlistmenu-checked-effect');
            $(this).addClass('playlistmenu-checked-effect');
        });

        // 플레이 리스트 자동 이동
       

        // hover 시 속도 줄이기
        // let playlist_move_speed = 15;
        // $('.boxx1').hover(function(){
        //     playlist_move_speed = 500;
        // }, function(){
        //     playlist_move_speed = 15;
        // });

        // let start = 1;
        // let end = 10;


        let $e = $('.boxx1').clone()
        $('.boxx-area').append($e);

        let value = 0;
        function bannerAutoMove() {
            value += 1;
            //$('.move-album-item').css("right", value);
            $('.boxx-area').css({"transform": "translateX(-"+value+"px)"});

            if(value % ($('.boxx1').width()) == 0) {
                value -= 2500;


                // 아래는 1번 포스트를 뒤로 옮기면서 반복시키려고 했지만, 계속 당겨지는 이슈가 있어서 위와 같이 바꾸
                //let $e = $('#ma-post'+start).clone()
                //$('.boxx').append($e);
                //$('.boxx').remove();
               //$('#ma-post'+start).remove();
                // $('#ma-post'+start).insertAfter($('#ma-post'+end));

                // end = start;
                // if(start == 10) {
                //     start = 1;
                // } else {
                //     start += 1;
                // }
            }
        };

        bannerAutoMoveInterval = setInterval(bannerAutoMove, 15);

        

        // 주인장 추천 배너 선택
        $('.recom-album-item').click(function(){
            $('.recom-album-item').removeClass('focus-album-effect');
            $(this).addClass('focus-album-effect');
            let img_src = $(this).children('img').attr("src");
            $('.fai').attr("src", img_src);
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

    </script>

</body>
</html>