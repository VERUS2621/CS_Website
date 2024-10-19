<!-- Sidebar -->
<div id="sidebar">
    <div class="inner">

        <!-- Search -->
        <section id="search" class="alt">
            <!-- 나중 제목을 데이터 베이스에 모아 post 찾는 기능 구현 -->
            <form method="post" action="#">
                <input type="text" name="query" id="query" placeholder="Search" />
            </form>
        </section>

        <!-- Menu -->
        <nav id="menu">
            <header class="major">
                <h2>Menu</h2>
            </header>
            <ul>
                <li>
                    <form method="post" action="/my_website/Login.php" style="display:flex;justify-content:center;">
                        <input type="submit" value="로그인" class="button primary" style="width:300px; font-size:14px; font-family:Hahmelt"/>
                    </form>
                </li>
                <li>
                    <span class="opener">최근 게시물</span>
                    <ul>
                        <li><a href="#">게시물 제목 1</a></li>
                        <li><a href="#">게시물 제목 2</a></li>
                        <li><a href="#">게시물 제목 3</a></li>
                    </ul>
                </li>
                <li><a href="/my_website/index.php">Home</a></li>
                <li><a href="/my_website/Menu/Profile.php">Profile</a></li>
                <li><a href="/my_website/Menu/Reference.php">Reference Site</a></li>
                <li>
                    <span class="opener">🚧CS Languague & Web🚧</span>
                    <ul>
                        <li><a href="#">Python</a></li>
                        <li><a href="#">HTML5/CSS3</a></li>
                        <li><a href="#">C</a></li>
                        <li><a href="#">C++</a></li>
                        <li><a href="#">java</a></li>
                        <li><a href="#">javascript</a></li>
                    </ul>
                </li>
                <li>
                    <span class="opener">🚧Tools🚧</span>
                    <ul>
                        <li><a href="#">DataBase(SQL)</a></li>
                        <li><a href="#">Node.js</a></li>
                        <li><a href="#">Spring Boot</a></li>
                        <li><a href="#">Vue.js</a></li>
                        <li><a href="#">React.js</a></li>
                    </ul>
                </li>
                <li>
                    <span class="opener">DS</span>
                    <ul>
                        <li><a href="/my_website/Menu/DS/Array/Array.php">Array</a></li>
                        <li><a href="/my_website/Menu/DS/List/List_Menu.php">List</a></li>
                        <li><a href="/my_website/Menu/DS/Stack/Stack.php">Stack</a></li>
                        <li><a href="/my_website/Menu/DS/Queue/Queue.php">Queue</a></li>
                        <li><a href="/my_website/Menu/DS/Tree/Tree_Menu.php">🚧Tree🚧</a></li>
                        <li><a href="/my_website/Menu/DS/Search/Search_Menu.php">🚧Search🚧</a></li>
                        <li><a href="/my_website/Menu/DS/Graph/Graph_Menu.php">🚧Graph🚧</a></li>
                        
                    </ul>
                </li>
                <li>
                    <span class="opener">🚧Algorithm🚧</span>
                    <ul>
                        <li><a href="#">🚧</a></li>
                    </ul>
                </li>
                <li><a href="/my_website/Menu/interview/interview_Menu.php">CS 관련 면접 & 정확히 알고 가기</a></li>
                <li>
                    <span class="opener">🚧Linux🚧</span>
                    <ul>
                        <li><a href="#">🚧</a></li>
                    </ul>
                </li>
                <li>
                    <span class="opener">🚧Security🚧</span>
                    <ul>
                        <li><a href="#">🚧</a></li>
                    </ul>
                </li>
                <li>
                    <span class="opener">기타(개인용)</span>
                    <ul>
                        <li><a href="/my_website/Secret/password.php">🔒</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- Section -->
        <section>
            <header class="major">
                <h2>오늘의 노래 추천</h2>
            </header>
            <div class="mini-posts">
                <article>
                    <!-- 유튜브 비디오를 iframe으로 삽입 -->
                    <iframe width="260" height="180" src="https://www.youtube.com/embed/UmN7Fr_Kf-8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                    <p> ムーンライト(달빛) / 星街すいせい </p>
                </article>
                <ul class="actions">
                    <li>
                        <a href="https://www.youtube.com/watch?v=UmN7Fr_Kf-8" class="button" target="_blank">YouTube에서 보기</a>
                    </li>
                </ul>
                <p>광고</p>
            </div>
        </section>

        <!-- Section -->
        <section>
            <header class="major">
                <h2>Get in Contact</h2>
            </header>
            <p> 프로젝트 및 연락은 이쪽으로 부탁드립니다.</p>
            <ul class="contact">
                <li class="icon solid fa-envelope"><a href="mailto:kim051902@naver.com"></a>kim051902@naver.com</li>
            </ul>
        </section>

        <!-- Footer -->
        <footer id="footer">
            <p class="copyright">&copy; Untitled. All rights reserved. <br> Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>. <br> Made By Verus. 김강민 / kimkangmin</be>
            </p>
        </footer>

    </div>
</div>