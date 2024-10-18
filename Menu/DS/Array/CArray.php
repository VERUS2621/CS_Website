<!DOCTYPE HTML>
<html>

<head>
    <title>Araay</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../../../assets/css/main.css" /> <!-- 절대 링크 수정 필요-->
</head>

<body class="is-preload">
    <div id="wrapper">
        <div id="main">
            <div class="inner">
                <?php include '../../../header.php'; ?>
                <!-- 절대 링크 수정 필요-->

                <section>
                    <h1>C 언어 배열 선언 방법</h1>

                    <p>C 언어에서 배열 선언 방법은 Python과 다르며, 고정된 크기의 배열을 사용합니다. 배열의 크기를 컴파일 시에 결정해야 하고, 주로 정적 크기를 사용합니다. C에서는 배열 선언 방식에 따라 여러 가지 방법이 있습니다. 아래에 C 언어에서 배열을 선언하는 다양한 방법을 설명하겠습니다.</p>

                    <h2>1. 1차원 배열 선언</h2>

                    <h3>1-1. 크기만 선언 (초기화되지 않음)</h3>
                    <pre><code>int arr[5];  // 5개의 정수를 저장할 배열 선언 (초기값은 쓰레기값)</code></pre>
                    <p>배열 크기만 선언하면 배열의 요소들은 초기화되지 않으며, 랜덤 값(쓰레기 값)을 가집니다.</p>

                    <h3>1-2. 크기와 함께 선언 (초기 값 지정)</h3>
                    <pre><code>int arr[5] = {1, 2, 3, 4, 5};  // 배열의 크기 5, 초기값 지정</code></pre>
                    <p>배열을 선언하면서 초기 값을 함께 지정할 수 있습니다.</p>

                    <h3>1-3. 크기 생략 (초기 값에 따라 크기 자동 결정)</h3>
                    <pre><code>int arr[] = {1, 2, 3, 4, 5};  // 크기는 초기값의 개수에 맞춰 자동으로 결정됨</code></pre>
                    <p>배열 크기를 생략하면 초기화한 값의 개수만큼 배열 크기가 자동으로 설정됩니다.</p>

                    <h3>1-4. 일부만 초기화 (나머지는 0으로 초기화)</h3>
                    <pre><code>int arr[5] = {1, 2};  // 나머지 요소는 0으로 초기화됨</code></pre>
                    <p>배열의 일부 요소만 초기화하고, 나머지 요소는 <code>0</code>으로 자동 초기화됩니다.</p>

                    <h2>2. 2차원 배열 선언</h2>

                    <h3>2-1. 크기만 선언 (초기화되지 않음)</h3>
                    <pre><code>int matrix[3][3];  // 3x3 크기의 2차원 배열 (쓰레기 값 포함)</code></pre>
                    <p>크기만 지정한 2차원 배열로, 모든 값이 초기화되지 않습니다.</p>

                    <h3>2-2. 초기 값 지정</h3>
                    <pre><code>int matrix[3][3] = {
    {1, 2, 3},
    {4, 5, 6},
    {7, 8, 9}
};  // 2차원 배열의 초기값 설정</code></pre>
                    <p>2차원 배열 선언 시, 초기 값을 여러 행에 걸쳐 설정할 수 있습니다.</p>

                    <h3>2-3. 크기 생략 (초기 값에 따라 크기 자동 결정)</h3>
                    <pre><code>int matrix[][3] = {
    {1, 2, 3},
    {4, 5, 6}
};  // 첫 번째 차원의 크기를 생략</code></pre>
                    <p>2차원 배열에서 <strong>첫 번째 차원의 크기를 생략</strong>할 수 있으며, 초기 값에 따라 크기가 결정됩니다.</p>

                    <h2>3. 다 차원 배열 선언</h2>

                    <h3>3-1. 3차원 배열 선언 (크기만 지정)</h3>
                    <pre><code>int arr3D[2][3][4];  // 2x3x4 크기의 3차원 배열</code></pre>
                    <p>3차원 배열 선언 시, 각 차원의 크기를 지정합니다.</p>

                    <h3>3-2. 3차원 배열 선언 (초기 값 지정)</h3>
                    <pre><code>int arr3D[2][2][2] = {
    {{1, 2}, {3, 4}},
    {{5, 6}, {7, 8}}
};  // 3차원 배열에 초기값 지정</code></pre>
                    <p>3차원 배열에 초기 값을 설정할 수 있으며, <strong>중첩된 중괄호로 각 차원의 값을 구분</strong>합니다.</p>

                    <h2>4. 동적 배열 선언 (동적 메모리 할당)</h2>

                    <h3>4-1. 1차원 동적 배열 선언 (malloc 사용)</h3>
                    <pre><code>int *arr = (int*)malloc(5 * sizeof(int));  // 5개의 정수를 저장할 공간 할당</code></pre>
                    <p>배열 크기를 런타임에 결정하고 싶을 때, <code>malloc</code> 함수를 사용해 동적 배열을 선언합니다.</p>
                    <p>할당한 메모리는 <code>free()</code> 함수로 해제해야 합니다.</p>

                    <h3>4-2. 2차원 동적 배열 선언 (이중 포인터와 malloc 사용)</h3>
                    <pre><code>int **matrix;
matrix = (int**)malloc(3 * sizeof(int*));  // 3개의 행에 대한 포인터 배열 할당
for (int i = 0; i < 3; i++) {
    matrix[i] = (int*)malloc(3 * sizeof(int));  // 각 행에 3개의 열 할당
}</code></pre>
                    <p>이중 포인터와 <code>malloc</code>을 사용해 동적으로 2차원 배열을 선언할 수 있습니다.</p>

                    <h2>5. 배열을 활용한 함수 매개변수 전달</h2>

                    <h3>5-1. 1차원 배열을 함수의 매개변수로 전달</h3>
                    <pre><code>void printArray(int arr[], int size) {
    for (int i = 0; i < size; i++) {
        printf("%d ", arr[i]);
    }
}</code></pre>
                    <p>배열을 함수에 전달할 때는 배열의 <strong>크기 정보를 함께 전달</strong>하는 것이 일반적입니다.</p>

                    <h3>5-2. 2차원 배열을 함수의 매개변수로 전달</h3>
                    <pre><code>void printMatrix(int matrix[][3], int rows) {
    for (int i = 0; i < rows; i++) {
        for (int j = 0; j < 3; j++) {
            printf("%d ", matrix[i][j]);
        }
    }
}</code></pre>
                    <p>2차원 배열을 함수에 전달할 때는 <strong>두 번째 차원의 크기를 명시</strong>해야 합니다.</p>

                    <h2>요약</h2>
                    <p>C 언어에서 배열은 고정된 크기를 가지며, 정적 배열과 동적 배열로 선언할 수 있습니다. 정적 배열은 크기가 컴파일 시에 고정되며, 동적 배열은 <code>malloc</code> 등의 함수를 사용해 런타임에 크기를 결정할 수 있습니다.</p>
                    <ul>
                        <li><strong>1차원 배열</strong>은 고정된 크기 또는 초기 값을 사용하여 선언할 수 있습니다.</li>
                        <li><strong>2차원 배열</strong>은 행렬 구조로 선언되며, 초기 값을 지정하거나 크기를 생략할 수 있습니다.</li>
                        <li><strong>다 차원 배열</strong>도 동일하게 사용할 수 있으며, 동적 메모리 할당을 통해 크기를 런타임에 지정하는 것이 가능합니다.</li>
                    </ul>

</body>
</section>

</div>
</div>
<?php include '../../../sidebar.php'; ?>
<!-- 절대 링크 수정 필요-->
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
</body>

</html>