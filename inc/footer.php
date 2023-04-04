


<!-- ========Start footer======== -->
<footer class="footer_wraper">
    <div class="container">
        <div class="footer_logo row">
            <p>Rafiq</p>
        </div>
        <div class="footer_discription row">
            <p >&copy; 2023 <a href="rafiq.com">Rafiqul Islam</a> - All Rights Reserved</p>
        </div>
        <div class="social_icon row">
            <ul>
                <li class="facebook"><a href="#"><img src="img/fb.png"></a></li>
                <li class="tweeter"><a href="#"><img src="img/tw.png"></a></li>
                <li class="being"><a href="#"><img src="img/be.png"></a></li>
                <li class="warld"><a href="#"><img src="img/w.png"></a></li>
            </ul>
        </div>
    </div>
</footer>
<!-- ========End footer======== -->


<!--     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
<script src="js/jQuery-v1.12.4.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">


    let CURRENT_URL = window.location.href.split('#')[0].split('?')[0],
        $SIDEBAR_MENU = $('#navID');

    function init_sidebar() {
        // check active menu
        $SIDEBAR_MENU.find('a[href="' + CURRENT_URL + '"]').parent('li').addClass('active');

        $SIDEBAR_MENU.find('a').filter(function () {
            return this.href == CURRENT_URL;
        }).parent('li').addClass('active');
    }

    init_sidebar();

</script>
</body>
</html>