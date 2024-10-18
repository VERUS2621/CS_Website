<!DOCTYPE HTML>
<html>

<head>
    <title>연결 리스트(Linked List)</title>
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
                    <h1>연결 리스트 (Linked List)</h1>

                    <p>
                        Linked는 “연결된” 이라는 뜻을 가지고 있다.<br>
                        List는 여러 개의 값을 순서대로 저장할 수 있는 <strong>변경 가능한(mutable)</strong> 자료형이다.
                    </p>

                    <h2>Linked List란</h2>
                    <p>
                        말 그대로 개별적 요소들끼리 서로 연결을 한다는 의미를 가지고 있다.<br>
                        원래 리스트는 개별적으로 요소를 가지고 인덱스로만 접근할 수 있었지만,<br>
                        이제는 앞 요소, 뒤 요소를 이용해서도 접근할 수 있으며, 이를 통해 여러 가지 행동을 할 수 있다.
                    </p>
                    <img src="Linked_List_img/image.png" alt ="Linked List">
                    <p> 위 사진을 보면 </p>
                    <p>하나의 노드를 정의하고:</p>
                    <ul>
                        <li>앞 칸은 “데이터”를 집어 넣고</li>
                        <li>뒤 한 칸은 다음 요소를 “참조”할 수 있게 위치(메모리 주소)를 저장한다.</li>
                    </ul>
                    <p>
                        맨 앞의 요소를 Head, 맨 뒤 요소를 Tail로 “접근”할 수 있게 위치를 저장한다.<br>
                        단, Linked List는 현재 → 뒤에 있는 노드에만 접근할 수 있다.
                    </p>
                    <p> 말을 어정쩡하게 한 이유는 각 언어마다 메모리 주소를 기억하는 포인터 형식으로 작동할 수도 있고, 참조를 이용할 수도 있기 때문이다.</p>
                    <p> 나머지 특징 같은 경우에는 직접 구현한 코드를 보면서 이해하는 것이 더 빠를 것이다.</p>

                    <p> 그런데 의문이 안생기는가? 배열로 메모리 주소가 연속이라는데 왜 굳이 연결을 하는 걸까?</p>

                    <h2>배열&리스트를 계속 사용할 수는 없을까?</h2>
                    <p>
                        연결 리스트는 배열의 한계를 극복한 데이터 구조라는 점이다.<br>
                        배열의 특징으로는 아래와 같다.
                    </p>
                    <ul>
                        <li>프로그램에서 배열을 사용하기 전에 <strong>배열의 크기를 미리</strong> 알아야 함.</li>
                        <li>배열의 <strong>크기를 늘리는 것은 시간이 걸리는 과정</strong>임.</li>
                        <li>배열의 모든 요소는 <strong>메모리에 연속적으로 저장</strong>되어야 함.</li>
                    </ul>

                    <h3>연결 리스트의 장점</h3>
                    <ul>
                        <li>메모리를 동적으로 할당 → 모든 노드는 <strong>메모리에 비연속적으로</strong> 저장됨.</li>
                        <li>연결 리스트에서 선언 시 크기를 정의할 필요가 없음.</li>
                    </ul>

                    <h2>연결 리스트 선언하는 방법</h2>
                    <p>연결 리스트는 두 부분으로 구성되어 있으며, 하나는 단순 변수 저장, 다른 하나는 포인터 변수를 저장한다.</p>

                    <h3>언어별 예시</h3>

                    <h4>Python</h4>
                    <pre><code class="python">
class Node:
    def __init__(self, data):
        self.data = data   # 데이터를 저장할 변수
        self.next = None   # 다음 노드를 가리키는 포인터 (초기값은 None)
</code></pre>

                    <h4>C</h4>
                    <pre><code class="c">
struct node  
{  
    int data;  
    struct node *next;  
}  
</code></pre>

                    <h4>C++</h4>
                    <pre><code class="cpp">
class Node {
public:
    int data;      // 데이터를 저장할 변수
    Node* next;    // 다음 노드를 가리키는 포인터

    // 생성자
    Node(int val) {
        data = val;
        next = nullptr; // 초기에는 다음 노드를 가리키지 않음
    }
};
</code></pre>

                    <h4>Java</h4>
                    <pre><code class="java">
class Node {
    int data;     // 데이터를 저장할 변수
    Node next;    // 다음 노드를 가리키는 포인터

    // 생성자
    public Node(int data) {
        this.data = data;
        this.next = null; // 초기에는 다음 노드를 가리키지 않음
    }
}
</code></pre>

                    <h2>연결 리스트의 장단점</h2>
                    <h3>장점</h3>
                    <ul>
                        <li>동적 데이터 구조 - 연결 리스트의 크기는 요구 사항에 따라 바꿀 수 있다.</li>
                        <li>삽입 및 삭제 - 배열보다 연결 리스트가 더 쉽다.</li>
                        <li>메모리 효율성 - 요구 사항에 따라 크기를 바꾸면 되기에 메모리 소비가 효율적이다.</li>
                        <li>구현 - 연결 리스트를 이용해서 스택과 큐를 모두 구현할 수 있다.</li>
                    </ul>

                    <h3>단점</h3>
                    <ul>
                        <li>메모리 사용 - 배열보다 더 많은 메모리를 차지한다.</li>
                        <li>순회 - 연결 리스트 요소에 접근하는 경우, 무작위로 접근할 수 없다.</li>
                        <li>역방향 트래버싱 - 연결 리스트에서 백트래킹 또는 역방향 트래버싱은 어렵다.</li>
                    </ul>

                    <h2>연결 리스트 응용</h2>
                    <ul>
                        <li>다항식 표현, 연산 가능</li>
                        <li>희소 행렬을 표현하는데 사용할 수 있다.</li>
                        <li>학생 세부 정보, 직원 세부 정보 등 연결 목록을 구현할 수 있다.</li>
                        <li>스택, 큐, 트리 등 다양한 데이터 구조를 표현할 수 있다.</li>
                        <li>동적 메모리 할당을 구현하는데 사용할 수 있다.</li>
                    </ul>

                    <h2>Complexity of Linked List</h2>

                    <h3>1. Time Complexity</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>Operations</th>
                                <th>Average case time complexity</th>
                                <th>Worst-case time complexity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Insertion</td>
                                <td>O(1)</td>
                                <td>O(1)</td>
                            </tr>
                            <tr>
                                <td>Deletion</td>
                                <td>O(1)</td>
                                <td>O(1)</td>
                            </tr>
                            <tr>
                                <td>Search</td>
                                <td>O(n)</td>
                                <td>O(n)</td>
                            </tr>
                        </tbody>
                    </table>

                    <h3>2. Space Complexity</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>Operations</th>
                                <th>Space Complexity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Insertion</td>
                                <td>O(n)</td>
                            </tr>
                            <tr>
                                <td>Deletion</td>
                                <td>O(n)</td>
                            </tr>
                            <tr>
                                <td>Search</td>
                                <td>O(n)</td>
                            </tr>
                        </tbody>
                    </table>

                    <p>연결 리스트의 공간 복잡도는 O(n)입니다. 각 노드가 추가적인 포인터를 가지고 있기때문</p>

                </section>

            </div>
        </div>
        <?php include '../../../sidebar.php'; ?>
        <!-- 절대 링크 수정 필요-->
    </div>
    <?php include '../../../js.php'; ?>
</body>

</html>