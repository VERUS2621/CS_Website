<!DOCTYPE HTML>
<html>

<head>
    <title>Queue</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../../../assets/css/main.css" /> <!-- 절대 링크 수정 필요-->
</head>

<body class="is-preload">
    <div id="wrapper">
        <div id="main">
            <div class="inner">
                <?php include '../../../header.php'; ?> <!-- 절대 링크 수정 필요-->
            
            <section>
            <div class="section">
        <h2>Queue</h2>
        <p>큐는 FIFO(First - In - First- Out) 원칙을 따릅니다.</p>
        <img src="Queue_img/image.png" alt="큐 설명 이미지">
        <p>큐는 삽입 작업이 <strong>REAR</strong>라는 한 쪽 끝에서 수행되고 삭제 작업은 <strong>FRONT</strong>라는 다른 쪽 끝에서 수행될 수 있도록 하는 순서 있는 목록으로 정의할 수 있습니다. 예를 들어 물건을 사기 위해, 기차표를 사기 위해 줄을 서서 기다리는 사람들이 바로 큐에 예입니다.</p>
    </div>

    <div class="section">
        <h3>큐에서 수행되는 작업</h3>
        <ul>
            <li><strong>Enqueue:</strong> Enqueue 연산은 큐의 rear에 요소를 삽입하는 데 사용됩니다. void를 반환합니다.</li>
            <li><strong>Dequeue:</strong> 큐의 front에서 삭제를 수행합니다. 또한 front에서 제거된 요소를 반환합니다. 정수 값을 반환합니다.</li>
            <li><strong>Peek:</strong> 이것은 큐의 앞쪽 포인터가 가리키는 요소를 반환하는 세 번째 연산이지만, 해당 요소를 삭제하지는 않습니다.</li>
            <li><strong>큐 오버플로우 (isfull):</strong> 큐가 완전히 가득 찼을 때 오버플로우 상황을 보여줍니다.</li>
            <li><strong>큐 언더플로우 (isempty):</strong> 큐가 비어 있을 때, 즉 큐에 아무 요소도 없을 때의 언더플로우 조건을 보여줍니다.</li>
        </ul>
    </div>

    <div class="section">
        <h3>큐의 종류</h3>
        <ul>
            <li><strong>Simple Queue or Linear Queue (단순 큐, 선형 큐):</strong> FIFO 규칙을 따르는 기본적인 큐</li>
            <img src="Queue_img/image1.png" alt="단순 큐 이미지">
            
            <li><strong>Circular Queue (순환 큐):</strong> 모든 노드는 원형 연결 리스트처럼 모든 끝이 다른 끝에 연결된 큐입니다. 원형 큐에 빈 공간이 있는 경우, 새로운 요소는 rear의 값을 증가시키는 것만으로 빈 공간을 추가할 수 있습니다.</li>
            <img src="Queue_img/image2.png" alt="순환 큐 이미지">
            
            <li><strong>Priority Queue (우선순위 큐):</strong> 삽입은 똑같이 진행되나 삭제는 우선순위에 따라 발생합니다 (오름차순 또는 내림차순). 우선순위 큐는 주로 CPU Scheduling 알고리즘을 구현하는 데 사용됩니다.</li>
            <img src="Queue_img/image3.png" alt="우선순위 큐 이미지">
            
            <li><strong>Double Ended Queue (Deque):</strong> 삽입과 삭제를 큐의 양쪽 끝에서 할 수 있는 큐입니다. FIFO 원칙을 따르지 않습니다.</li>
            <img src="Queue_img/image4.png" alt="Deque 이미지">
            
            <li><strong>Input restricted deque:</strong> 삽입 연산이 한쪽 끝에서만 수행됩니다.</li>
            <img src="Queue_img/image5.png" alt="Input restricted deque 이미지">
            
            <li><strong>Output restricted deque:</strong> 삭제 작업이 한쪽 끝에서만 수행됩니다.</li>
            <img src="Queue_img/image6.png" alt="Output restricted deque 이미지">
        </ul>
    </div>
            </section>
            
            </div>
        </div>
        <?php include '../../../sidebar.php'; ?> <!-- 절대 링크 수정 필요-->
    </div>
    <script src="../../../assets/js/jquery.min.js"></script>
    <script src="../../../assets/js/browser.min.js"></script>
    <script src="../../../assets/js/breakpoints.min.js"></script>
    <script src="../../../assets/js/util.js"></script>
    <script src="../../../assets/js/main.js"></script>
</body>

</html>