<!DOCTYPE HTML>
<html>

<head>
    <title>Generic - Editorial by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../../../assets/css/main.css" /> <!-- 절대 링크 수정 필요-->
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
                <?php include '../../../header.php'; ?>
                <!-- 절대 링크 수정 필요-->

                <section>
                    <h3>DS/Tree</h3>
                    <hr>
                    <h4>Tree Basic</h4>
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
                                <tr>
                                    <td>Verus</td>
                                    <td><a href="Tree.php">Tree</a></td>
                                    <td> - </td>
                                </tr>
                                <tr>
                                    <td>Verus</td>
                                    <td><a href="Binary_Tree.php">Binary Tree</a></td>
                                    <td> - </td>
                                </tr>
                                <tr>
                                    <td>Verus</td>
                                    <td><a href="Binary_Search_Tree.php">Binary Search Tree</a></td>
                                    <td> - </td>
                                </tr>
                                <tr>
                                    <td>Verus</td>
                                    <td><a href="Heap.php">Heap</a></td>
                                    <td> - </td>
                                </tr>
                            </tbody>
                        </table>
                        <br><br>
                        <h4>Tree Advanced</h4>
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
                                    <tr>
                                        <td>Verus</td>
                                        <td><a href="AVL Tree.php">AVL_Tree</a></td>
                                        <td> - </td>
                                    </tr>
                                    <tr>
                                        <td>Verus</td>
                                        <td><a href="B-Tree.php">B-Tree</a></td>
                                        <td> - </td>
                                    </tr>
                                    <tr>
                                        <td>Verus</td>
                                        <td><a href="B+Tree.php">b+Tree</a></td>
                                        <td> - </td>
                                    </tr>
                                    <tr>
                                        <td>Verus</td>
                                        <td><a href="Red Black Tree.php">Red_Black_Tree</a></td>
                                        <td> - </td>
                                    </tr>
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
        <?php include '../../../sidebar.php'; ?>
        <!-- 절대 링크 수정 필요-->
    </div>
    <?php include '../../../js.php'; ?>
</body>

</html>