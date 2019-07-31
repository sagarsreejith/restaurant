<style>
    footer:before {
        background: url(assets/images/shadow.png) no-repeat scroll center bottom rgba(0, 0, 0, 0);
        content: "";
        height: 9px;
        position: absolute;
        width: 100%;
    }

    
    footer {
        background: url(assets/images/abstract.png) no-repeat scroll center bottom #611124;
    }
</style>

<footer class="flex-rw">

    <ul class="footer-list-top">
        <li>
            <h3 class="footer-list-header">About Pavilion</h3></li>
        <li><a href='/shop/about-mission' class="generic-anchor footer-list-anchor" itemprop="significantLink">GET TO KNOW US</a></li>
        <li><a href='/promos.html' class="generic-anchor footer-list-anchor" itemprop="significantLink">PROMOS</a></li>
        <li><a href='/retailers/new-retailers.html' class="generic-anchor footer-list-anchor" itemprop="significantLink">BECOME A RETAILER</a></li>

        <li><a href='/job-openings.html' itemprop="significantLink" class="generic-anchor footer-list-anchor">JOB OPENINGS</a></li>

        <li><a href='/shop/about-show-schedule' class="generic-anchor footer-list-anchor" itemprop="significantLink">EVENTS</a></li>
    </ul>
    <ul class="footer-list-top">
        <li>
            <h3 class="footer-list-header">The Gift Selection</h3></li>

        <li><a href='/Angels/cat/id/70' class="generic-anchor footer-list-anchor">ANGEL FIGURINES</a></li>
        <li><a href='/Home-Decor/cat/id/64' class="generic-anchor footer-list-anchor">HOME DECOR</a></li>
        <li><a href='/Mugs/cat/id/32' class="generic-anchor footer-list-anchor">MUGS</a></li>
        <li><a href='/Pet-Lover/cat/id/108' class="generic-anchor footer-list-anchor">PET LOVER</a></li>
        <li><a href='/Ladies-Accessories/cat/id/117' class="generic-anchor footer-list-anchor" target="_blank">HANDBAGS & JEWELRY</a></li>
    </ul>
    <ul class="footer-list-top">
        <li id='help'>
            <h3 class="footer-list-header">Please Help Me</h3></li>
        <li><a href='/shop/about-contact' class="generic-anchor footer-list-anchor" itemprop="significantLink">CONTACT</a></li>
        <li><a href='/faq.html' class="generic-anchor footer-list-anchor" itemprop="significantLink">FAQ</a></li>
        <li id='find-a-store'><a href='/shop/store-locator' class="generic-anchor footer-list-anchor" itemprop="significantLink">STORE LOCATOR</a></li>
        <li id='user-registration'><a href='/shop/user-registration?URL=' class="generic-anchor footer-list-anchor" itemprop="significantLink">NEW USERS</a></li>
        <li id='order-tracking'><a href='/shop/order-status' itemprop="significantLink" class="generic-anchor footer-list-anchor">ORDER STATUS</a></li>
    </ul>
    <section class="footer-social-section flex-rw">
        <span class="footer-social-overlap footer-social-connect">
      CONNECT <span class="footer-social-small">with</span> US
        </span>
        <div class=" footer-social-overlap footer-social-connec soc">
            <ul>
                <li><a href="https://www.facebook.com/profile.php?id=100012512077239"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="https://www.linkedin.com/in/raj-kumar-web-designer/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </section>
    <section class="footer-bottom-section flex-rw">
        <div class="footer-bottom-wrapper">
            <i class="fa fa-copyright" role="copyright">

            </i> 2019 Pavilion in <address class="footer-address" role="company address">Bergen, NY</address><span class="footer-bottom-rights"> - All Rights Reserved - </span>
        </div>
        <div class="footer-bottom-wrapper">
            <a href="/terms-of-use.html" class="generic-anchor" rel="nofollow">Terms</a> | <a href="/privacy-policy.html" class="generic-anchor" rel="nofollow">Privacy</a>
        </div>
    </section>
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