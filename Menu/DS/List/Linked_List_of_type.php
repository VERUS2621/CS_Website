<!DOCTYPE HTML>
<html>

<head>
    <title>Generic - Editorial by HTML5 UP</title>
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
                    <h1>연결 리스트의 종류</h1>

                    <p>전 글에서는 <a href="#">Linked List</a>에 대해서 간단히 다뤄보았다. 쉬운 내용은 저렇게 간단하게 다룰 예정이니 참고 바란다.</p>

                    <p>위 글은 Linked List 리스트에 전반적으로 나누어지는 종류에 대해서 소개만 하고 넘어가도록 하겠다.</p>

                    <h2>단일 연결 리스트 (Singly Linked List)</h2>
                    <ul>
                        <li>프로그램에서 일반적으로 사용되는 연결 리스트</li>
                        <li>데이터 부분과 주소 부분 두 부분으로 이루어져 있음</li>
                        <li>마지막 노드는 어떤 노드도 가리키지 않으므로 주소 부분에 NULL 값을 포함함</li>
                        <li>초기 노드의 주소를 보관하는 포인터를 head라고 함</li>
                        <li>전방 순회만 가능하며, 후방 순회는 불가능</li>
                    </ul>
                    <pre><code class="c">
struct node  
{  
   int data;  
   struct node *next;  
}  
</code></pre>

                    <img src="Linked_List_of_type_img/image.png" alt="단일 연결 리스트">

                    <h2>이중 연결 리스트 (Doubly Linked List)</h2>
                    <p>이름에서 알 수 있듯이 이중 연결 리스트는 두 개의 포인터를 포함함.</p>
                    <ul>
                        <li>단일 노드에 세 부분이 있는 리스트</li>
                        <li>데이터, 이전 노드에 대한 포인터, 다음 노드에 대한 포인터</li>
                    </ul>
                    <p>처음 원소를 삽입할 때와 이중 연결 리스트의 경우 head = tail인 경우, 즉 원소가 1개일 때 예외를 둬서 원소를 삭제해야 한다.</p>
                    <p>코드 구현 시 next, prev 연결 주의 → NULL 처리 빠짐없이 할 것</p>
                    <ul>
                        <li>next → 다음 노드의 주소 보관</li>
                        <li>prev → 이전 노드의 주소를 보관</li>
                    </ul>
                    <pre><code class="c">
  struct node  
  {  
    int data;  
    struct node *next;  
    struct node *prev;   
  }  
  </code></pre>
                    <img src="Linked_List_of_type_img/image1.png" alt="이중 연결 리스트">

                    <h2>원형 연결 리스트 (Circular Linked List)</h2>
                    <p>단일과 원형 연결 리스트의 차이점은:</p>
                    <ul>
                        <li>단일 → 마지막 노드의 주소 부분이 NULL</li>
                        <li>원형 → 마지막 노드의 주소 부분이 첫 번째 노드의 주소가 있음 / 즉 순환함.</li>
                        <li>원형 연결 리스트는 시작 및 종료 노드가 없음</li>
                        <li>뒤로 또는 앞으로도 이동할 수 있음</li>
                    </ul>
                    <img src="Linked_List_of_type_img/image2.png" alt="원형 연결 리스트">
                    <h2>이중 원형 연결 리스트 (Doubly Circular Linked List)</h2>
                    <p>원형 연결 리스트에 + 이중으로 앞 뒤로도 갈 수 있다는 의미가 된다. (한 바퀴 순회할 필요 없이)</p>
                    <ul>
                        <li>각 노드가 이전 노드의 주소를 가지고 있음</li>
                        <li>이중 연결 리스트와 이중 원형 연결 리스트의 주요한 차이점은:</li>
                        <li>이중 원형 연결 리스트의 노드의 이전 필드에 NULL 값을 포함하지 않는다는 것임</li>
                    </ul>
                    <p>처음 원소를 삽입할 때와 이중 연결 리스트의 경우 head = tail인 경우, 즉 원소가 1개일 때 예외를 둬서 원소를 삭제해야 한다.</p>
                    <p>코드 구현 시 next, prev 연결 주의</p>
                    <p>비슷한 점으로는 세 부분 즉, 두 개의 주소 부분과 하나의 데이터 부분을 포함하고 있는 것은 비슷함.</p>
                    <img src="Linked_List_of_type_img/image3.png" alt="이중 원형 연결 리스트">
                </section>

            </div>
        </div>
        <?php include '../../../sidebar.php'; ?>
        <!-- 절대 링크 수정 필요-->
    </div>
    <?php include '../../../js.php'; ?>
</body>

</html>