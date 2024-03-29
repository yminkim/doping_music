<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>(아티스트명) | Doping Music</title>
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


        .link-menu-area ul li, .link-menu-area ul a {
            list-style: none;
            display: flex;
            align-items: center;
            
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
        main {
            margin-top: 5%;
            display: flex;
            justify-content: center;
        }

        .main-container {
            width: 70%;
            display: flex;
            justify-content: space-between;
        }
        
        .introduce-area {
            margin-bottom: 7%;
        }

        .artist-info-container {
            width: 65%;

            display: flex;
            flex-direction: column;
            border: 1px solid rgba(173, 137, 137, 0);
        }   

        .title-box {
            font-size: 4rem;

            display: flex;
            align-items: center;
            border-bottom: 1px solid #ccc;
        }

        .first-title {
            margin-bottom: 2.5%;
        }

        .artist-box {
            display: flex;
            justify-content: space-around;
            
        }

        .artist-img {
            padding: 0.5%;
            border: 1px solid black;
            width: 35%;
        }

        .artist-img img {
            width: 100%;
        }
        
        .info-group {
            display: flex;
            margin: 5px;
            font-size: 1.6rem;
        }

        .info-item {
            min-width: 70px;
            color: #4c4c4c;
        }

        .info-contents {
            margin-left: 10px;
        }

        .artist-info-box {
            width: 58%;

            border-top: 3px solid black;
            border-bottom: 3px solid black;
        }

        .ai-name {
            font-size: 3.5rem;
            padding-top: 5px;
            padding-left: 10px;
            color: black;
            margin-bottom: 5%;
        }

        .artist-main-song {
            margin-top: 20px;
        }

        /* 디스코그라피 영역 */
        .album-type-menu {
            margin: 1.5% 0;
        }

        .album-type-menu ul {
            display: flex;
        }

        .album-type-menu ul li {
            list-style: none;
            font-size: 1.5rem;
            color: #4c4c4c;
            cursor: pointer;
        }

        .bold {
            font-weight: bold;
        }

        .kanmaki {
            margin: 0 3%;
        }

        .album-post-area {
            border: 1px solid rgba(204, 204, 204, 0);
            /* border-radius: 10px; */
            width: 100%;
            
            display: flex;
            flex-wrap: wrap;

        }

        .post-item {
            width: 25%;
            padding: 1%;
            
            display: flex;
            flex-direction: column;
            border: 1px solid rgba(128, 128, 128, 0);
        }

        .post-item:hover {
            border: 1px solid #ccc;
        }

        .post-img img {
            width: 100%;
        }

        .post-info {
            display: flex;
            flex-direction: column;
            padding: 2% 1% 1% 1%;
        }

        .post-title {
            font-size: 1.6rem;
        }

        .post-release-date, .post-album-type {
            font-size: 1.3rem;
            color: #585858;
        }

        .post-aulbum-detail {
            display: flex;
            flex-direction: column;
            margin: 5% 0;
        }

        .post-comment {
            font-size: 1.4rem;
            height: 40px;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }

        .post-vm {
            margin-top: 4%;
            font-size: 1.4rem;
            margin-left: auto;
        }

        .post-item a {
            text-decoration: none;
            color: black;
        }

        .post-vm span {
            color: #428bca;
        }

        /* 메인 우측 메뉴 */
        .artist-board-container {
            width: 33.5%;
            height: 1100px;
            border: 1px solid rgba(204, 204, 204, 0);
        }

        .youtube-box {
            margin-top: 5%;
            width: 100%;
            height: 25%;
            display: flex;
            justify-content: center;
        }

        .youtube-box iframe {
            
            width: 98%;
        }

        .comment-title {
            margin: 10% 0 5% 0;
        }

        .comment-input-area {
            width: 75%;
            display: flex;
            flex-direction: column;
        }

        .comment-input-area textarea {
            width: 100%;
            resize: none;
            border: 1px solid #ccc;
            border-bottom: none;
            padding: 3%;
            
        }

        .comment-input-area textarea::-webkit-scrollbar {
            display: none;
        }

        .comment-input-area textarea:focus {
            outline: none;            
        }

        .text-count-box {
            font-family: '맑은고딕';
            padding: 1.5% 3%;
            text-align: end;
            font-size: 1.3rem;
            width: 100%;
            background-color: #fff;
            border: 1px solid #ccc;
            border-top: none;

            
        }

        .comment-input-container {
            display: flex;
            justify-content: space-around;
            padding: 0 2%;
            margin-bottom: 2%;
        }

        .comment-input-container button {
            width: 20%;
            background-color: #fff;
            border: 1px solid #ccc;
            cursor: pointer;
        }

        .comment-input-container button:hover {
            background-color: #ccc;
            border: 1px solid #ccc;
        }


        .comment-input-container button:active {
            background-color: rgba(245, 245, 245, 0);
            border: 1px solid #ccc;
        }



        .comment-count-box {
            font-size: 2.4rem;
            padding: 3.5%;
            border-bottom: 1px solid #ccc;
        }

        .comment-count-box span {
            font-weight: bold;
            color: #1fb10d;
        }

        .comment-list-area {
            max-height: 40%;
            padding: 3.5%;

            overflow: scroll;
            overflow-x: hidden;

            border-bottom: 1px solid #ccc;
        }

        .comment-item {
            margin-bottom: 2%;
            border-bottom: 1px dotted #ccc;
            padding: 2% 0;
        }

        .write-info {
            display: flex;
            color: gray;
            font-size: 1.2rem;
        }

        .comment-content {
            color: #181818;
            font-size: 1.5rem;
            margin-bottom: 1%;
        }

        .comment-item:nth-last-child(1) {
            border-bottom: 1px solid #ccc;
        }

        footer {
            margin-top: 100px;
            width: 100%;
            height: 300px;
            background-color: rgb(58, 58, 58);
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


    <!-- 메인영역 -->
    <main>
        <div class="main-container">
            <div class="artist-info-container">
                <div class="introduce-area">
                    <div class="title-box first-title">WHO</div>
                    <div class="artist-box">
                        <div class="artist-img">
                            <img src="img/이방인.png" alt="">
                        </div>
                        <div class="artist-info-box">
                            <div class="ai-name">E SENS</div>

                            <div class="info-group">
                                <dt class="info-item">국적</dt>
                                <dl class="info-contents">대한민국</dl>
                            </div>

                            <div class="info-group">
                                <dt class="info-item">활동장르</dt>
                                <dl class="info-contents">힙합/R&B</dl>
                            </div>

                            <div class="info-group">
                                <dt class="info-item">소속사</dt>
                                <dl class="info-contents">비스츠앤네이티브스</dl>
                            </div>

                            <div class="info-group">
                                <dt class="info-item">출생</dt>
                                <dl class="info-contents">1987.02.09</dl>
                            </div>

                            <div class="info-group artist-main-song">
                                <dt class="info-item">대표곡</dt>
                                <dl class="info-contents">Tick Tock(Feat. Kim Ximya)</dl>
                            </div>
                            

                        </div>
                    </div>
                </div>
                <div class="discography-area">
                    <div class="title-box">DISCOGRAPHY</div>
                    <div class="album-type-menu">
                        <ul>
                            <li class="bold">ALL</li>
                            <div class="kanmaki">|</div>
                            <li>SINGLE</li>
                            <div class="kanmaki">|</div>
                            <li>ALBUM</li>
                            <div class="kanmaki">|</div>
                            <li>OTHERS</li>
                        </ul>
                    </div>

                    <div class="album-post-area">
                        <!-- 포스트 -->
                        <div class="post-item">
                            <a href="">
                                <div class="post-img">
                                    <img src="img/마리골드.png" alt="">
                                </div>
                                <div class="post-info">
                                    <div class="post-title">Marigold Tapes</div>
                                    <div class="post-aulbum-detail">
                                        <div class="post-release-date">2020.08.27</div>
                                        <div class="post-album-type">EP</div>
                                    </div>
                                    <!-- 요건 앨범 한줄평 -->
                                    <div class="post-comment">에넥도트 5주년 기념 EP !</div>
                                    <div class="post-vm"><span>view more </span>></div>
                                </div>
                            </a>
                        </div>


                        <!-- 포스트 -->
                        <div class="post-item">
                            <a href="">
                                <div class="post-img">
                                    <img src="img/이센스.png" alt="">
                                </div>
                                <div class="post-info">
                                    <div class="post-title">이방인</div>
                                    <div class="post-aulbum-detail">
                                        <div class="post-release-date">2019.07.22</div>
                                        <div class="post-album-type">앨범</div>
                                    </div>
                                    <!-- 요건 앨범 한줄평 -->
                                    <div class="post-comment">속세에 돌아온 이센스의 명반</div>
                                    <div class="post-vm"><span>view more </span>></div>
                                </div>
                            </a>
                        </div>

                        <!-- 포스트 -->
                        <div class="post-item">
                            <a href="">
                                <div class="post-img">
                                    <img src="img/kmh.png" alt="">
                                </div>
                                <div class="post-info">
                                    <div class="post-title">The Anecdote</div>
                                    <div class="post-aulbum-detail">
                                        <div class="post-release-date">2015.08.27</div>
                                        <div class="post-album-type">앨범</div>
                                    </div>
                                    <!-- 요건 앨범 한줄평 -->
                                    <div class="post-comment">2015년 최고의 음반</div>
                                    <div class="post-vm"><span>view more </span>></div>
                                </div>
                            </a>
                        </div>

                        <!-- 포스트 -->
                        <div class="post-item">
                            <a href="">
                                <div class="post-img">
                                    <img src="img/kmh.png" alt="">
                                </div>
                                <div class="post-info">
                                    <div class="post-title">TEST COVER</div>
                                    <div class="post-aulbum-detail">
                                        <div class="post-release-date">9999.99.99</div>
                                        <div class="post-album-type">앨범</div>
                                    </div>
                                    <!-- 요건 앨범 한줄평 -->
                                    <div class="post-comment">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo maxime sint totam obcaecati repellendus impedit, dolore commodi rerum minus aspernatur corrupti recusandae soluta voluptatibus nulla expedita nesciunt cumque laborum eius.</div>
                                    <div class="post-vm"><span>view more </span>></div>
                                </div>
                            </a>
                        </div>

                        <!-- 포스트 -->
                        <div class="post-item">
                            <a href="">
                                <div class="post-img">
                                    <img src="img/kmh.png" alt="">
                                </div>
                                <div class="post-info">
                                    <div class="post-title">TEST COVER</div>
                                    <div class="post-aulbum-detail">
                                        <div class="post-release-date">9999.99.99</div>
                                        <div class="post-album-type">앨범</div>
                                    </div>
                                    <!-- 요건 앨범 한줄평 -->
                                    <div class="post-comment">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo maxime sint totam obcaecati repellendus impedit, dolore commodi rerum minus aspernatur corrupti recusandae soluta voluptatibus nulla expedita nesciunt cumque laborum eius.</div>
                                    <div class="post-vm"><span>view more </span>></div>
                                </div>
                            </a>
                        </div>

                        

                    </div>
                </div>
            </div>

            <!-- 메인 우측 영역 -->
            <div class="artist-board-container">
                <div class="title-box">아티스트 추천영상</div>
                <div class="youtube-box">
                    <iframe src="https://www.youtube.com/embed/M48Dzb3oc6o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div class="title-box comment-title">코멘트</div>
                <div class="comment-input-container">
                    <div class="comment-input-area">
                        <textarea name="" id="" maxlength="99" placeholder="어떤 아티스트인가요?"></textarea>
                        <div class="text-count-box">(0/100)</div>
                    </div>
                    <button>등록</button>
                </div>

                <div class="comment-count-box">총 <span>70</span>개</div>
                <div class="comment-list-area">
                    <!-- 아이템 -->
                    <div class="comment-item">
                        <div class="comment-content">어쩌구 저쩌구 역시 이센스 짱이네 호호</div>
                        <div class="write-info">
                            <div class="writer">센충이</div>
                            <div class="kanmaki">|</div>
                            <div class="write-date">2017.10.08</div>
                            <div class="kanmaki">|</div>
                            <div>편집</div>
                        </div>
                    </div>

                    <!-- 아이템 -->
                    <div class="comment-item">
                        <div class="comment-content">이센스는 전설이다 <br>미안하다 이거 보여주려고 어그로 끌었다❤❤</div>
                        <div class="write-info">
                            <div class="writer">센충이</div>
                            <div class="kanmaki">|</div>
                            <div class="write-date">2017.10.08</div>
                            <div class="kanmaki">|</div>
                            <div>편집</div>
                        </div>
                    </div>

                    <!-- 아이템 -->
                    <div class="comment-item">
                        <div class="comment-content">요즘은 유튭에서 이센스 노래 잘 안 나오네, 딩고 프리스타일 일 좀 해라~!!</div>
                        <div class="write-info">
                            <div class="writer">센충이</div>
                            <div class="kanmaki">|</div>
                            <div class="write-date">2017.10.08</div>
                            <div class="kanmaki">|</div>
                            <div>편집</div>
                        </div>
                    </div>

                    <!-- 아이템 -->
                    <div class="comment-item">
                        <div class="comment-content">어쩌구 저쩌구 역시 이센스 짱이네 호호</div>
                        <div class="write-info">
                            <div class="writer">센충이</div>
                            <div class="kanmaki">|</div>
                            <div class="write-date">2017.10.08</div>
                            <div class="kanmaki">|</div>
                            <div>편집</div>
                        </div>
                    </div>

                    <!-- 아이템 -->
                    <div class="comment-item">
                        <div class="comment-content">이센스는 전설이다 <br>미안하다 이거 보여주려고 어그로 끌었다❤❤</div>
                        <div class="write-info">
                            <div class="writer">센충이</div>
                            <div class="kanmaki">|</div>
                            <div class="write-date">2017.10.08</div>
                            <div class="kanmaki">|</div>
                            <div>편집</div>
                        </div>
                    </div>

                    <!-- 아이템 -->
                    <div class="comment-item">
                        <div class="comment-content">요즘은 유튭에서 이센스 노래 잘 안 나오네, 딩고 프리스타일 일 좀 해라~!!</div>
                        <div class="write-info">
                            <div class="writer">센충이</div>
                            <div class="kanmaki">|</div>
                            <div class="write-date">2017.10.08</div>
                            <div class="kanmaki">|</div>
                            <div>편집</div>
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
        $('.album-type-menu ul li').click(function(){
            $('.album-type-menu ul li').removeClass('bold');
            $(this).addClass('bold');
        });

        // 글자수 카운트
        $('.comment-input-area textarea').keyup(function(){
            $('.text-count-box').text('('+$('.comment-input-area textarea').val().length+'/100)')
        });

    
    </script>
</body>
</html>