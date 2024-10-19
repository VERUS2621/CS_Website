<!DOCTYPE HTML>
<html>

<head>
    <title>CS_InterView</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../../assets/css/main.css" /> <!-- 절대 링크 수정 필요-->
    <style>
    ul.pagination {
  display: flex !important;
  justify-content: center !important;
  cursor: default;
  list-style: none;
}
</style>
</head>

<body class="is-preload">
    <div id="wrapper">
        <div id="main">
            <div class="inner">
                <?php include '../../header.php'; ?>
                <!-- 절대 링크 수정 필요-->

                <section>
                    <h3>CS_InterView</h3>
                    <hr>
                    <h4>블로그 글 목록</h4>
                    <div class="table-wrapper">
                        <table>
                            <thead>
                                <tr>
                                    <th>이름</th>
                                    <th>글 제목</th>
                                    <th>일시</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                </section>
                <section>
                    <ul class="pagination">
                        <li><a href="#" class="page active">1</a></li>
                    </ul>
                </section>

            </div>
        </div>
        <?php include '../../sidebar.php'; ?>
        <!-- 절대 링크 수정 필요-->
    </div>
    <?php include '../../js.php'; ?>
</body>

</html>