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

                    <h2>배열이란?</h2>
                    <p><strong>배열</strong> 은 연속된 메모리 위치에 저장된 유사한 유형의 데이터 항목의 컬렉션으로 정의</p>
                    <p><a href="CArray.php">C언어 배열 선언 방법</a></p>

                    <h3>배열의 장점</h3>
                    <ul>
                        <li>배열은 같은 유형의 변수 그룹에 대한 단일 이름을 제공함. (배열의 모든 요소의 이름을 기억하는 것이 쉬움)</li>
                        <li>배열의 탐색 → 매우 간단한 과정 / 배열의 기본 주소만 증가시키면 각 요소 하나하나씩 접근할 수 있음</li>
                        <li>인덱스를 사용하여 배열의 모든 요소에 직접 접근할 수 있음 / 단, 인덱스는 0 시작</li>
                    </ul>

                    <h3>배열의 단점</h3>
                    <ul>
                        <li>배열은 동질적 / 유사한 데이터 유형의 요소를 저장할 수 있음</li>
                        <li>배열은 정적 메모리 할당 / 선언 후 배열의 크기를 변경할 수 없음</li>
                        <li>선언된 크기보다 적은 수의 요소를 저장하면 메모리 낭비가 발생</li>
                    </ul>
                    <p>만약, 배열의 크기를 10 으로 선언했는데 5개의 요소만 저장한다면 메모리 낭비가 발생할 것임.</p>

                    <p>C 프로그래밍에서 int, char, double, float 등과 같은 기본 자료형에 데이터를 저장할 수 있는 파생 데이터 유형.</p>
                    <p>예를 들어, <strong>6개 과목의 학생 점수를 저장</strong>하고 싶다면, 다른 과목의 점수에 대해 <strong>다른 변수를 정의할 필요가 없으며</strong>, 대신 <strong>연속된 메모리 위치</strong>에 각 과목의 점수를 저장할 수 있는 배열을 정의할 수 있습니다.</p>

                    <h2>배열의 특성</h2>
                    <ul>
                        <li>배열의 각 요소는 동일한 데이터 유형이며, 4Byte 라는 동일한 크기를 가짐</li>
                        <li>배열의 요소는 인접한 메모리 위치에 저장되며, 첫 번째 요소는 가장 작은 메모리 위치에 저장됨</li>
                    </ul>
                    <p>예로 들어 크기가 3인 배열을 선언할 때 첫 원소의 메모리 위치가 “xx0473A01” 이라면 다음 원소의 메모리 위치가 “xx0463A04” 라는 인접한 메모리 위치를 가진다.</p>
                    <ul>
                        <li>주어진 <strong>기본 주소</strong>와 <strong>데이터 요소의 크기</strong>를 사용하여 <strong>배열의 각 요소의 주소를 계산</strong>할 수 있으므로 배열의 요소에 무작위로 접근할 수 있음</li>
                    </ul>

                    <h3>배열의 표현(C언어)</h3>
                    <img src="Array_image/image.png" alt="배열 표현">

                    <ul>
                        <li><strong>배열의 인덱스는 “0” 부터 시작 → 컴퓨터는 숫자를 0부터 세아림.</strong></li>
                        <li>위 배열의 크기는 10이므로 10개의 요소를 저장할 수 있음</li>
                        <li>배열의 각 요소는 인덱스를 통해서 접근할 수 있음</li>
                    </ul>

                    <h3>배열이 필요한 이유</h3>
                    <ul>
                        <li>배열에서 값을 정렬하고 검색하는 것이 더 쉬움</li>
                        <li>배열은 여러 값을 빠르고 쉽게 처리하는데 가장 좋음</li>
                        <li><strong>배열은 단일 변수에 여러 값을 저장하는데 좋음</strong></li>
                    </ul>
                    <p>컴퓨터 프로그래밍에서 대부분의 경우 유사한 유형의 많은 데이터를 저장해야 함.</p>
                    <p>(<strong>모든 변수의 이름을 기억하는 것은 매우 어렵</strong>기 때문에 변수마다 다른 이름을 지정하는 대신 배열을 정의하고 모든 요소를 정의하는 것이 좋음)</p>

                    <h3>배열의 메모리 할당</h3>
                    <img src="Array_image/image1.png" alt="배열 메모리 할당">

                    <p>배열은 0부터 시작하는 인덱싱 방식을 따름</p>
                    <p>배열의 기본 주소는 100byte → arr[0]의 주소</p>
                    <p>여기서 사용된 데이터 유형의 크기는 4Byte</p>
                    <p>따라서 각 요소는 메모리에서 4바이트를 차지함.</p>

                    <h3>배열의 주소 계산</h3>
                    <p>배열의 임의의 주소에 접근하기 위해서는</p>
                    <ul>
                        <li>배열의 기본 주소</li>
                        <li>바이트 단위의 요소 크기</li>
                    </ul>
                    <p>따라서 배열에 요소에 접근하기 위한 주소를 계산하는 공식은</p>
                    <pre><code>요소 A[i]의 바이트 주소 = 기본 주소 + 크기 * ( i - 첫 번째 인덱스)</code></pre>
                    <p>크기는 기본 데이터 유형이 차지하는 메모리를 나타냄</p>
                    <ul>
                        <li>int → 2byte</li>
                        <li>float → 4Byte</li>
                    </ul>
                    <p>위는 프로그래밍 언어에 따라 다를 수 있음. (위는 C언어 기준)</p>

                    <h3>예를 들어</h3>
                    <p>배열의 A[-10 …. +2] 의 기본 주소(BA)가 999이고 크기가 2Byte 라고 가정할 때 A[-1]의 메모리 위치는</p>
                    <pre><code>L[(A[-1]) = 999 + 2 * [(-1) -(-10)]
= 999 + 18
= 1017</code></pre>

                    <h2>기본 작업</h2>
                    <p>배열 기본 작업은 아래와 같다.</p>
                    <ul>
                        <li>순회 : 배열의 요소를 출력</li>
                        <li>삽입 : 특정 인덱스에 요소 추가</li>
                        <li>삭제 : 특정 인덱스에 요소 삭제</li>
                        <li>검색 : 주어진 인덱스 값을 이용하여 요소를 검색</li>
                        <li>업데이트 : 특정 인덱스의 요소를 업데이트</li>
                    </ul>

                    <h3>순회</h3>
                    <pre><code>#include &lt;stdio.h&gt;  
void main() {  
   int Arr[5] = {18, 30, 15, 70, 12};  
   int i;  
   printf("Elements of the array are:\n");  
   for(i = 0; i &lt; 5; i++) {  
      printf("Arr[%d] = %d,  ", i, Arr[i]);  
   }  
}</code></pre>
                    <img src="Array_image/image2.png" alt="순회">

                    <h3>삽입</h3>
                    <pre><code>#include &lt;stdio.h&gt;  
int main()  
{  
    int arr[20] = { 18, 30, 15, 70, 12 };  
    int i, x, pos, n = 5;  
    printf("Array elements before insertion\n");  
    for (i = 0; i &lt; n; i++)  
        printf("%d ", arr[i]);  
    printf("\n");  
  
    x = 50; // 삽입할 값
    pos = 4; // 삽입할 위치
    n++;  // 배열의 크기 1 증가
  
    for (i = n-1; i &gt;= pos; i--)  
        arr[i] = arr[i - 1];  
    
    arr[pos - 1] = x;  
    
    printf("Array elements after insertion\n");  
    for (i = 0; i &lt; n; i++)  
        printf("%d ", arr[i]);  
    printf("\n");  
    return 0;  
}</code></pre>
                    <img src="Array_image/image3.png" alt="삽입">
                    <h2>삭제</h2>
                    <pre><code>#include &lt;stdio.h&gt;  

void main() {  
   int arr[] = {18, 30, 15, 70, 12};  
   int k = 30, n = 5; // k 는 삭제할 요소의 값, n은 배열의 크기
   int i, j, index = -1;  
     
   printf("Given array elements are:\n");  
      
   for(i = 0; i < n; i++) {  
      printf("arr[%d] = %d,  ", i, arr[i]);  
   }  

   // 삭제할 값 k의 인덱스를 찾음
   for(i = 0; i < n; i++) {  
      if(arr[i] == k) {  
         index = i;  
         break;  
      }  
   }  
   
   // 만약 값이 배열에 없으면 종료
   if(index == -1) {
      printf("\nElement %d not found in array.\n", k);
      return;
   }
      
   // 값이 존재하면 앞으로 이동시키며 삭제
   for(j = index; j < n - 1; j++) {  
      arr[j] = arr[j + 1];  
   }  
      
   n = n - 1;  // 배열 크기 감소
     
   printf("\nElements of array after deletion:\n");  
      
   for(i = 0; i < n; i++) {  
      printf("arr[%d] = %d,  ", i, arr[i]);  
   }  
}</code></pre>
                    <img src="Array_image/image4.png" alt="삭제">
                    <h2>검색</h2>
                    <pre><code>#include &lt;stdio.h&gt;  
  
void main() {  
   int arr[5] = {18, 30, 15, 70, 12};  
   int item = 70, i, j=0 ;  
     
   printf("Given array elements are :\n");  
      
   for(i = 0; i&lt;5; i++) {  
      printf("arr[%d] = %d,  ", i, arr[i]);  
   }  
   printf("\nElement to be searched = %d", item);  
   while( j < 5){  
      if( arr[j] == item ) {  
         break;  
      }  
      j = j + 1;  
   }  
      
   printf("\nElement %d is found at %d position", item, j+1);  
}</code></pre>
                    <img src="Array_image/image5.png" alt="검색">
                    <h2>업데이트</h2>
                    <pre><code>#include &lt;stdio.h&gt;  
  
void main() {  
   int arr[5] = {18, 30, 15, 70, 12};  
   int item = 50, i, pos = 3;  // index가 3인 요소를 50으로 업데이트 함.
     
   printf("Given array elements are :\n");  
      
   for(i = 0; i&lt;5; i++) {  
      printf("arr[%d] = %d,  ", i, arr[i]);  
   }  
      
   arr[pos-1] = item;    
   printf("\nArray elements after updation :\n");  
      
   for(i = 0; i&lt;5; i++) {  
      printf("arr[%d] = %d,  ", i, arr[i]);  
   }  
}</code></pre>
                    <img src="Array_image/image6.png" alt="업데이트">
                    <h2>배열의 복잡도</h2>
                    <h3>시간 복잡성</h3>
                    <table>
                        <tr>
                            <th>Operation</th>
                            <th>Average Case</th>
                            <th>Worst Case</th>
                        </tr>
                        <tr>
                            <td>값 접근</td>
                            <td>O(1)</td>
                            <td>O(1)</td>
                        </tr>
                        <tr>
                            <td>검색</td>
                            <td>O(n)</td>
                            <td>O(n)</td>
                        </tr>
                        <tr>
                            <td>삽입</td>
                            <td>O(n)</td>
                            <td>O(n)</td>
                        </tr>
                        <tr>
                            <td>삭제</td>
                            <td>O(n)</td>
                            <td>O(n)</td>
                        </tr>
                    </table>

                    <h3>공간 복잡성</h3>
                    <p>→ 배열에서 최악의 경우에 대한 공간 복잡도는 O(n) 인 것을 알 수 있음.</p>
                    <p>값을 검색, 삽입, 삭제하기 위해서는 만약 값이 끝에 있는 경우 모든 요소를 검색해야 하기 때문.</p>

                </section>

            </div>
        </div>
        <?php include '../../../sidebar.php'; ?>
        <!-- 절대 링크 수정 필요-->
    </div>
    <?php include '../../../js.php'; ?>
</body>

</html>