<!DOCTYPE HTML>
<html>

<head>
    <title>Generic - Editorial by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../../../assets/css/main.css" /> <!-- 절대 링크 수정 필요-->
<style>
  #stack_func {
    font-size:20px;
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
                    <h2>스택 (Stack)</h2>

                    <p style="font-size:20px">
                        스택은 LIFO(Last - In - First - Out) 원칙을 따르는 선형 데이터 구조입니다.<br>
                        예시로는, 프링글스 통을 생각하면 됩니다.
                    </p>

                    <img src="image.png" alt="Stack_img" style="width: 500px; height: 300px;">

                    <p style="font-size:20px">
                        스택은 한 쪽 끝이 있는 반면, 큐는 두 개의 끝(앞쪽과 뒤쪽)이 있습니다.<br>
                        - 스택은 가장 위에 있는 요소를 가리키는 포인터인 top 포인터 하나만 포함합니다.<br>
                        - 스택에 요소가 추가될 때마다 스택의 맨 위에 추가되고, 요소는 스택에서만 삭제할 수 있습니다.<br>
                        즉, 스택은 삽입과 삭제가 스택의 맨 위라고 알려진 한 끝에서 수행될 수 있는 컨테이너입니다.
                    </p>

                    <h2 style="font-family:BlackHanSans">표준 스택 작업</h2>
                    <p style="font-size:20px">스택에 구현되는 몇 가지 일반적인 연산은 아래와 같습니다.</p>
                    <ul>
                        <li id="stack_func"><strong>push():</strong> 스택에 요소를 삽입 스택이 가득 차면 오버플로우 조건이 발생합니다.</li>
                        <li id="stack_func"><strong>pop():</strong> 스택에서 요소를 삭제합니다. 스택이 비어 있으면 스택에 요소가 없다는 의미이며, 이 상태를 언더플로우 상태라고 합니다.</li>
                        <li id="stack_func"><strong>isEmpty():</strong> 스택이 비어 있는지 여부를 판별합니다.</li>
                        <li id="stack_func"><strong>isFull():</strong> 스택이 가득 찼는지 여부를 판별합니다.</li>
                        <li id="stack_func"><strong>peek():</strong> 주어진 위치에 있는 요소를 반환합니다.</li>
                        <li id="stack_func"><strong>count():</strong> 스택에 있는 총 요소의 개수를 반환합니다.</li>
                        <li id="stack_func"><strong>change():</strong> 주어진 위치의 요소를 변경합니다.</li>
                        <li id="stack_func"><strong>display():</strong> 스택에 있는 모든 요소를 출력합니다.</li>
                    </ul>

                    <h2 style="font-family:BlackHanSans">스택의 활용 예시</h2>
                    <ul>
                        <li id="stack_func">웹 브라우저 뒤로 가기 : 가장 나중에 열린 페이지부터 뒤로 가기를 실행합니다.</li>
                        <li id="stack_func">문서작업에서 Ctrl+Z : 가장 나중에 수정한 내역부터 되돌립니다.</li>
                        <li id="stack_func">역순 문자열 만들기 : 맨 끝의 문자열부터 차례대로 만들어집니다.</li>
                        <li id="stack_func">후위 표기법 계산</li>
                        <li id="stack_func">재귀적 알고리즘</li>
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