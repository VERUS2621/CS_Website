<!DOCTYPE HTML>
<html>

<head>
    <title>List</title>
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
                    <h2>리스트는 배열의 다른 타입?</h2>
                    <p>정적인 크기가 아닌 가변 크기를 가짐. 또한 Python과 같은 특정한 함수 기능을 제공함.</p>
                    <p>기능은 비슷하므로 위에서 작성한 “배열”의 글을 읽고 위 글을 읽기 바람.</p>

                    <h3>배열과 리스트 비교</h3>
                    <br>
                    <table>
                        <thead>
                        <tr>
                            <th>구분</th>
                            <th>배열 (Array)</th>
                            <th>리스트 (List)</th>
                        </tr>
                        </thead>
                        <tr>
                            <td>크기</td>
                            <td>고정 크기</td>
                            <td>가변 크기</td>
                        </tr>
                        <tr>
                            <td>메모리</td>
                            <td>연속된 메모리 할당</td>
                            <td>비연속적 메모리 할당 가능</td>
                        </tr>
                        <tr>
                            <td>데이터 타입</td>
                            <td>동일한 데이터 타입만 저장</td>
                            <td>다양한 데이터 타입 저장 가능</td>
                        </tr>
                        <tr>
                            <td>삽입/삭제</td>
                            <td>비효율적</td>
                            <td>효율적</td>
                        </tr>
                        <tr>
                            <td>성능</td>
                            <td>인덱스 접근이 매우 빠름 (O(1))</td>
                            <td>인덱스 접근이 배열보다 느릴 수 있음</td>
                        </tr>
                        <tr>
                            <td>언어 지원</td>
                            <td>거의 모든 언어에서 지원</td>
                            <td>언어에 따라 기본 혹은 라이브러리로 제공</td>
                        </tr>
                    </table>

                    <h3>리스트 메서드</h3>
                    <table>
                        <thead>
                        <tr>
                            <th>메서드</th>
                            <th>설명</th>
                            <th>사용 방법</th>
                            <th>예시 코드</th>
                        </tr>
                        </thead>
                        <tr>
                            <td><code>append(x)</code></td>
                            <td>리스트의 <strong>끝</strong>에 요소 <code>x</code>를 추가</td>
                            <td><code>list.append(x)</code></td>
                            <td><code>my_list.append(10)</code><br><code># [1, 2, 3, 10]</code></td>
                        </tr>
                        <tr>
                            <td><code>insert(i, x)</code></td>
                            <td>인덱스 <code>i</code> 위치에 요소 <code>x</code>를 삽입</td>
                            <td><code>list.insert(i, x)</code></td>
                            <td><code>my_list.insert(1, 20</code><br><code># [1, 20, 3]</code></td>
                        </tr>
                        <tr>
                            <td><code>remove(x)</code></td>
                            <td>리스트에서 첫 번째로 등장하는 요소 <code>x</code>를 제거</td>
                            <td><code>list.remove(x)</code></td>
                            <td><code>my_list.remove(3) # [1, 2, 4]</code></td>
                        </tr>
                        <tr>
                            <td><code>pop([i])</code></td>
                            <td>인덱스 <code>i</code>에 있는 요소를 제거하고 반환 (기본은 <strong>마지막</strong>)</td>
                            <td><code>list.pop([i])</code></td>
                            <td><code>my_list.pop(2) # [1, 2, 4]</code></td>
                        </tr>
                        <tr>
                            <td><code>clear()</code></td>
                            <td>리스트의 모든 요소를 제거</td>
                            <td><code>list.clear()</code></td>
                            <td><code>my_list.clear() # []</code></td>
                        </tr>
                        <tr>
                            <td><code>index(x)</code></td>
                            <td>리스트에서 첫 번째로 등장하는 요소 <code>x</code>의 인덱스를 반환</td>
                            <td><code>list.index(x)</code></td>
                            <td><code>my_list.index(2) # 반환: 1</code></td>
                        </tr>
                        <tr>
                            <td><code>count(x)</code></td>
                            <td>리스트에서 요소 <code>x</code>의 개수를 반환</td>
                            <td><code>list.count(x)</code></td>
                            <td><code>my_list.count(2) # 반환: 2</code></td>
                        </tr>
                        <tr>
                            <td><code>sort()</code></td>
                            <td>리스트의 요소를 <strong>오름차순</strong>으로 정렬</td>
                            <td><code>list.sort()</code></td>
                            <td><code>my_list.sort() # [1, 2, 3]</code></td>
                        </tr>
                        <tr>
                            <td><code>reverse()</code></td>
                            <td>리스트의 요소를 <strong>역순</strong>으로 뒤집음</td>
                            <td><code>list.reverse()</code></td>
                            <td><code>my_list.reverse() # [3, 2, 1]</code></td>
                        </tr>
                        <tr>
                            <td><code>extend(iter)</code></td>
                            <td>다른 <strong>이터러블(iterable)</strong>의 모든 요소를 리스트에 추가</td>
                            <td><code>list.extend(iter)</code></td>
                            <td><code>my_list.extend([5, 6])</code> <br> <code># [1, 2, 5]</code></td>
                        </tr>
                    </table>
                    <h2>1. 크기 변경</h2>
                    <p><strong>배열</strong>은 <code>int arr[5] = {1, 2, 3, 4, 5};</code> (크기 5인 배열) 위처럼 선언할 시 “고정된” 크기를 가지며 선언 후에는 바꿀 수 없음 → 절대 절대 못 바꿈.</p>
                    <p>동적 메모리 할당으로 선언하여 바꿀 수는 있긴 함 → 배열을 2개 선언하여 자체적으로 옮기는 과정.</p>
                    <h3>리스트는 가변 크기를 가짐</h3>
                    <ul>
                        <li>이에 해당하는 자료형은 Python의 리스트, C++의 std::vector 등이 이에 해당함.</li>
                        <li>데이터 추가</li>
                        <li>데이터 삭제</li>
                        <li>크기 자동 조정</li>
                    </ul>
                    <p>위에 해당하는 항목이 자유로움. 선언은 <code>my_list = [1, 2, 3, 4, 5]</code> (Python에서 크기가 자동 조정되는 리스트)</p>
                    <h2>2. 메모리 할당</h2>
                    <p>배열, 리스트 모두 인덱스를 통해서 특정한 위치에 존재하는 요소에 대해서 접근할 수 있음.</p>
                    <p>배열의 장점 중 하나로 메모리에서 연속된 공간을 차지함.</p>
                    <p>→ 배열의 각 요소는 메모리 상에서 연속된 위치에 저장하여 기본 주소, 자료형의 크기를 이용해서 계산하여 메모리 위치에 “접근”할 수 있음.</p>
                    <p>리스트는 “일반적”으로 배열처럼 연속된 메모리 공간을 사용할 수도 있지만, 많은 리스트 구현체에서는 동적으로 크기가 변경되면서 비연속적인 메모리 공간을 사용하는 경우가 많기 때문에 배열처럼 “항상”은 아님.</p>
                    <h2>3. 데이터 타입</h2>
                    <h3>배열(Array)</h3>
                    <p>대부분의 언어에서 “동일한 데이터 타입”만 저장할 수 있음.</p>
                    <pre><code>int[] // 위 배열은 정수만 저장할 수 있음</code></pre>
                    <h3>리스트(List)</h3>
                    <p>많은 언어에서는 리스트에 서로 다른 데이터 타입을 저장할 수 있음.</p>
                    <pre><code>my_list = [1, "apple", 3.14] // Python의 예</code></pre>
                    <h2>4. 성능 및 활용</h2>
                    <p>배열(Array) → 고정된 크기 덕분에 인덱스 접근 속도가 매우 빠름. 특정 인덱스의 값에 바로 접근할 수 있어 시간 복잡도 O(1)입니다.</p>
                    <p>리스트(List) → 크기가 가변적이므로 추가/삭제에 유리하지만, 배열처럼 인덱스 기반 접근이 빠르지 않을 수 있습니다. 특정 상황에서 성능 저하가 발생할 수 있음.</p>

                    <h2>5. 삽입 및 삭제</h2>
                    <ul>
                        <li><strong>배열 (Array)</strong>: 중간에 요소를 삽입하거나 삭제하는 것이 비효율적입니다. 중간에 값을 삽입하거나 삭제하려면, 다른 값들을 이동시켜야 하므로 시간이 많이 걸립니다.</li>
                        <li><strong>리스트 (List)</strong>: 리스트는 크기가 유동적이기 때문에 삽입과 삭제가 상대적으로 용이합니다. 예를 들어 Python의 리스트는 <code>append</code>, <code>insert</code>, <code>remove</code> 등을 사용해 쉽게 값을 추가하거나 삭제할 수 있습니다.</li>
                    </ul>

                    <h2>6. 언어 지원</h2>
                    <ul>
                        <li><strong>배열 (Array)</strong>: 거의 모든 프로그래밍 언어에서 기본 자료 구조로 지원됩니다. <strong>C, C++, Java, Python</strong> 등 모든 언어에서 배열을 지원합니다.</li>
                        <li><strong>리스트 (List)</strong>: 일부 언어에서는 리스트를 별도의 라이브러리로 제공하기도 하지만, <strong>Python, JavaScript</strong> 등에서는 리스트가 기본 자료 구조로 제공됩니다.</li>
                    </ul>

                    <h2>리스트 선언 방식</h2>
                    <h3>1-1 기본 리스트 선언</h3>
                    <pre><code># 빈 리스트 선언
                        my_list = []  # 여러 자료형이 리스트에 들어감.

                        # 요소를 가진 리스트 선언
                        my_list = [1, 2, 3, 4, 5]</code></pre>

                                            <h3>1-2 리스트 컴프리헨션(List Comprehension)</h3>
                                            <pre><code># 0부터 9까지 숫자를 포함하는 리스트 선언
                        my_list = [i for i in range(10)]  # [0, 1, 2, ..., 9]</code></pre>

                                            <h3>1-3 기본 값을 가진 리스트 선언</h3>
                                            <pre><code># 크기가 5이고 모든 요소가 0인 리스트
                        my_list = [0] * 5  # [0, 0, 0, 0, 0]</code></pre>

                                            <h3>1-4 다차원 리스트 선언</h3>
                                            <pre><code># 2x3 크기의 2차원 리스트 (모든 요소가 0)
                        my_list = [[0] * 3 for _ in range(2)]  # [[0, 0, 0], [0, 0, 0]]
                    </code></pre>

                </section>

            </div>
        </div>
        <?php include '../../../sidebar.php'; ?>
        <!-- 절대 링크 수정 필요-->
    </div>
    <?php include '../../../js.php'; ?>
</body>

</html>