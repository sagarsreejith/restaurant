
<div class="clearfix"></div>


<footer class="footer" id="" style="background-image: url(assets/images/bg.jpg);">

<?php echo get_partial('content_footer'); ?>
  <div class="object-bottom">
    <div class="object-left">
      <img class="img-responsive bottom" src="assets/images/data/06.png" alt="">
    </div>
    <div class="object-right">
      <img  class="img-responsive bottom" src="assets/images/data/16.png" alt="">
    </div>
  </div>
  <div class="container">
  
    <div class="row col_footer">
               

<div class="col-md-2 offset-md-2" style=""></div>
                <div class="col-xs-4 col-sm-3">
                    <div class="footer-links">
                       <h4 class="footer-title hidden-xs"><?php echo lang('text_my_account'); ?></h4>
                        <ul>
                        <li><a href="<?php echo site_url('account/login'); ?>"><?php echo lang('menu_login'); ?></a></li>
                    
                            <li><a href="<?php echo site_url('account/gallery'); ?>">gallery</a></li>
                            <li><a href="<?php echo site_url('account/register'); ?>"><?php echo lang('menu_register'); ?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-4 col-sm-3">
                    <div class="footer-links">
                        <h4 class="footer-title hidden-xs"><?php echo config_item('site_name'); ?></h4>
                        <ul>
                            <li><a href="<?php echo site_url('local/all'); ?>"><?php echo lang('menu_locations'); ?></a></li>
                            <li><a href="<?php echo site_url('contact'); ?>"><?php echo lang('menu_contact'); ?></a></li>
                            <?php if (get_theme_options('hide_admin_link') !== '1') { ?>
                                <li><a target="_blank" href="<?php echo admin_url(); ?>"><?php echo lang('menu_admin'); ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-4 col-sm-3">
                    <div class="footer-links">
                        <h4 class="footer-title hidden-xs"><?php echo lang('text_information'); ?></h4>
                        <ul>
                            <?php $pages = $this->Pages_model->getPages(); ?>
                            <?php if ($pages) { ?>
                                <?php foreach ($pages as $page) { ?>
                                    <?php if (in_array('footer', $page['navigation'])) { ?>
                                        <li><a href="<?php echo site_url('pages?page_id='.$page['page_id']); ?>"><?php echo $page['name']; ?></a></li>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="co-lg-12 co-md-12 col-sm-12 col-xs-12 text-center">
          <div class="footer-social">
            <ul class="list-inline">
              <li><a href="#" data-tooltip="facebook"> <i class="fa fa-facebook"></i> </a> </li>
              <li><a href="#" data-tooltip="twitter"> <i class="fa fa-twitter"></i> </a> </li>
              <li><a href="#" data-tooltip="google-plus"> <i class="fa fa-google-plus"></i> </a> </li>
              <li><a href="#" data-tooltip="instagram"> <i class="fa fa-instagram"></i> </a> </li>
              <li><a href="#" data-tooltip="tripadvisor"> <i class="fa fa-tripadvisor"></i> </a> </li>
            </ul>
          </div>
          <div class="text_ft">
                <?php echo sprintf(lang('site_copyright'), date('Y'), config_item('site_name'), lang('tastyigniter_system_name')) . lang('tastyigniter_system_powered'); ?>
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
