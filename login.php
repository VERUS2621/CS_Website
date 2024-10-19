<!DOCTYPE HTML>
<html>

<head>
    <title>Generic - Editorial by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" /> <!-- 절대 링크 수정 필요-->
    <style>
/* 로그인 섹션 스타일 */
.login-section {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh; /* 화면 높이의 100% */
    text-align: center; /* 텍스트 중앙 정렬 */
}

.login-section form {
    width: 400px; /* 폼의 너비를 늘림 */
    padding: 30px; /* 패딩을 늘림 */
    border: 1px solid #ccc; /* 테두리 추가 */
    border-radius: 10px; /* 테두리 둥글게 */
    background-color: #f9f9f9; /* 배경 색상 */
}

.row.gtr-uniform > div {
    margin-bottom: 20px; /* 입력란 사이의 간격 추가 */
}

.actions {
    display: flex; /* 플렉스박스를 사용하여 중앙 정렬 */
    justify-content: center; /* 가로 중앙 정렬 */
    margin-top: 20px; /* 버튼을 아래로 내리기 위해 마진 추가 */
}


    </style>
</head>

<body class="is-preload">
    <div id="wrapper">
        <div id="main">
            <div class="inner">
                <?php include 'header.php'; ?>
                <!-- 절대 링크 수정 필요-->

                <section class="login-section">
                    <h3>로그인</h3>

                    <form method="post" action="#">
                        <div class="row gtr-uniform">
                            <div>
                                <input type="text" name="username" id="username" placeholder="아이디" style="width:334.5px"/>
                            </div>
                            <div>
                                <input type="password" name="password" id="password" placeholder="비밀번호" style="width:334.5px"/>
                            </div>
                        </div>
                        <ul class="actions">
                            <li><input type="submit" value="로그인" class="button primary" /></li>
                        </ul>
                    </form>
                </section>


            </div>
        </div>
        <?php include 'sidebar.php'; ?>
        <!-- 절대 링크 수정 필요-->
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>