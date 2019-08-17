<?php $path_image = '';
switch ($rsegment) {
      case "home":
            $path_image = '';
          break;
      case "checkout":
            $path_image = '';
          break;
      default:
      $path_image = '../';
}
?>



<footer class="footer" id="">
    <?php echo get_partial( 'content_footer'); ?>
    <div class="container">
        <div class="row col_footer">
            <div class="co-lg-12 co-md-12 col-sm-12 col-xs-12 text-center">
              <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="co-lg-12 co-md-12 col-sm-12 col-xs-12 text-center">
                                <div class="footer-social">
                                    <ul class="list-inline ">
                                        <li>
                                            <a href="#"> <i class="fa fa-facebook"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fa fa-twitter"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fa fa-google-plus"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fa fa-instagram"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fa fa-tripadvisor"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text_ft">
                                    <?php echo sprintf(lang( 'site_copyright'), date( 'Y'), config_item( 'site_name'), lang( 'tastyigniter_system_name')) . lang( 'tastyigniter_system_powered'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</footer>

<?php $custom_script = get_theme_options('custom_script'); ?>
<?php if (!empty($custom_script['footer'])) { echo '<script type="text/javascript">'.$custom_script['footer'].'</script>'; }; ?>
<script type="text/javascript">
    window.onscroll = onScrollWindow;

    var header = document.getElementById("searchText");
    var contentLeft = document.getElementById("category-box-affix");
    var pageContent = document.getElementById("page-content");
    var menuContainer = document.getElementById("Container");
    var sticky = pageContent.offsetTop;

    function onScrollWindow() {
        
        var selectedTab = $("ul#nav-tabs li.active");

        if (window.pageYOffset > sticky) {
            if (header)
                header.classList.add("sticky");

            if (selectedTab && menuContainer && "Menu".localeCompare(selectedTab.text()) == 0) {
                $("#searchText").css("width", menuContainer.offsetWidth - 35);
            }

            var windowHeight = window.innerHeight;
            if (menuContainer && contentLeft && menuContainer.offsetHeight < contentLeft.offsetHeight) {
                $("#Container").height(contentLeft.offsetHeight + 60);
            }
        } else {
        if (header)
            header.classList.remove("sticky");
        }
    }

    $(window).bind("load resize", function() {
        var menuContainer = document.getElementById("Container");
        var selectedTab = $("ul#nav-tabs li.active");
        if (selectedTab && menuContainer && "Menu".localeCompare(selectedTab.text()) == 0)
        $("#searchText").css("width", menuContainer.offsetWidth - 35);
     });
</script>
</body>
</html>
