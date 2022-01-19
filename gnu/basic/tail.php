<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>


<?php
if(!defined('_INDEX_')) {
    include_once(G5_THEME_PATH.'/tail-d.php');
}
?>

    <footer class="footer">
        <ul>
            <li>농업회사법인제주홍암가(주)</li>
            <li>대표자 : 이규길</li>
            <li>사업자번호 : 616-81-68648</li>
            <li>통신판매업신고 : 2016-제주남원-00036</li>
            <li>개인정보보호책임 : 이규길</li>
            <li>이메일 : jhfd0720@hanmail.net</li>
            <li>사업장 소재지 : 제주특별자치도 서귀포시 남원읍 일주동로 7506</li>
            <li>대표전화 : 1588-4836</li>
            <li>팩스 : 064-764-4555 </li>
        </ul>
        <address>&copy; 2014 JEJUHONGAMGA ALL RIGHTSRESERVE</address>
    </footer>
</div>

<script src="<?php echo G5_THEME_URL ?>/js/slick.min.js"></script>
<script src="<?php echo G5_THEME_URL ?>/js/main.js"></script>


    
<button type="button" id="top_btn">
    <i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
</button>
<script>
$(function() {
    $("#top_btn").on("click", function() {
        $("html, body").animate({scrollTop:0}, '500');
        return false;
    });
});
</script>


<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");