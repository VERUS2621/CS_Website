<!DOCTYPE HTML>
<html>

<head>
    <title>Write_post</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../assets/css/main.css" /> <!-- 절대 링크 수정 필요-->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#demo-message',
            plugins: 'lists link image code',
            toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright | bullist numlist | link image | code',
            height: 300 // 에디터 높이 조정
        });
    </script>
</head>

<body class="is-preload">
    <div id="wrapper">
        <div id="main">
            <div class="inner">
                <?php include '../header.php'; ?>
                <!-- 절대 링크 수정 필요-->
                <section>
                    <!-- Form -->
                    <h3>블로그 글 작성</h3>

                    <form method="post" action="#">
                        <div class="row gtr-uniform">
                            <div class="col-6 col-12-xsmall">
                                <input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
                            </div>
                            <!-- Break -->
                            <div class="col-12">
                                <select name="demo-category" id="demo-category">
                                    <option value="">- Category -</option>
                                    <option value="1">Algolithm</option>
                                    <option value="2">CS_Lan_Web</option>
                                    <option value="3">Tools</option>
                                    <option value="4">기타(개인용)</option>
                                </select>
                            </div>
                            <!-- Break -->
                            <div class="col-4 col-12-small">
                                <input type="radio" id="demo-priority-low" name="demo-priority" checked>
                                <label for="demo-priority-low">Low</label>
                            </div>
                            <div class="col-4 col-12-small">
                                <input type="radio" id="demo-priority-normal" name="demo-priority">
                                <label for="demo-priority-normal">Normal</label>
                            </div>
                            <div class="col-4 col-12-small">
                                <input type="radio" id="demo-priority-high" name="demo-priority">
                                <label for="demo-priority-high">High</label>
                            </div>
                            <!-- Break -->
                            <div class="col-6 col-12-small">
                                <input type="checkbox" id="demo-copy" name="demo-copy">
                                <label for="demo-copy">글 잠금</label>
                            </div>

                            <!-- Break -->
                            <div class="col-12">
                                <textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
                            </div>
                            <!-- Break -->
                            <div class="col-12">
                                <ul class="actions">
                                    <li><input type="submit" value="글 작성" class="primary" /></li>
                                    <li><input type="reset" value="초기화" /></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </section>

            </div>
        </div>
        <?php include '../sidebar.php'; ?>
        <!-- 절대 링크 수정 필요-->
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
