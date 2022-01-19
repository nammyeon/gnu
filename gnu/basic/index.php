<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>


    <main>
        <section class="main">
            <div class="m_slide">
                <figure class="itm01"></figure>
                <figure class="itm02"></figure>
                <figure class="itm03"></figure>
            </div>
            <div class="slogan">
                <h2>발효식품명가 제주홍암가</h2>
                <p>제주홍암가는 자연과 생명의 가치, 힐링푸드를 지향합니다.</p>
            </div>
        </section>

        <section class="customer">
            <div class="container">
                <div class="lf">
                    <h3>Notice<a href="/bbs/board.php?bo_table=notice"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></h3>
                    <?php echo latest('theme/basic', 'notice', 4, 24);	?>
                </div>
                <div class="cn">
                    <!-- * 카카오맵 - 지도퍼가기 -->
                    <!-- 1. 지도 노드 -->
                    <div id="daumRoughmapContainer1642488916056" class="root_daum_roughmap root_daum_roughmap_landing" style="width: 100%;"></div>

                    <!--
                        2. 설치 스크립트
                        * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
                    -->
                    <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

                    <!-- 3. 실행 스크립트 -->
                    <script charset="UTF-8">
                        new daum.roughmap.Lander({
                            "timestamp" : "1642488916056",
                            "key" : "28ucg",
                            //"mapWidth" : "640",
                            "mapHeight" : "200"
                        }).render();
                    </script>
                </div>
                <div class="rt">
                    
                    <strong><a href="tel:1588-4836">1588-4836<i class="fa fa-phone"></i></a></strong>
                    <span>
                        Fax : 064-764-4555
                        <a href="mailto:jhfd0720@hanmail.net">e-mail : jhfd0720@hanmail.net </a>
                    </span>
                </div>
            </div>
        </section>
    </main>

<?php
include_once(G5_THEME_PATH.'/tail.php');