
<!--Footer-->
<footer class="page-footer light-blue accent-4 center-on-small-only">
       <!--Footer Links-->
    <div class="container-fluid">
        <div class="row">
          <!--First column-->
<div class="col-lg-3 col-md-6 ml-auto">
    <h5 class="title mb-3">Footer Content</h5>
    <p>Here you can use rows and columns here to organize your footer content.</p>
</div>
<!--/.First column-->

                <hr class="w-100 clearfix d-sm-none">

            <!--Second column-->
           
            
<div class="col-lg-2 col-md-6 ml-auto">
    <h5 class="title mb-3">First column</h5>
    <?php
    wp_nav_menu( array(
    'menu'              => 'footer1',
    'theme_location'    => 'footer1',
    'depth'             => 1
    )
    );
    ?>
</div>
<!--/.Second column-->
            <!--/.Second column-->

            <hr class="hidden-md-up">

            <!--Third column-->
            <div class="col-lg-2 col-md-6 ml-auto">
                <h5 class="title mb-3">Links</h5>
                <ul>
                    <li><a href="#!">Link 1</a></li>
                    <li><a href="#!">Link 2</a></li>
                    <li><a href="#!">Link 3</a></li>
                    <li><a href="#!">Link 4</a></li>
                </ul>
            </div>
            <!--/.Third column-->

            <hr class="hidden-md-up">

            <!--Fourth column-->
            <div class="col-lg-2 col-md-6 ml-auto">
                <h5 class="title mb-3">Links</h5>
                <ul>
                    <li><a href="#!">Link 1</a></li>
                    <li><a href="#!">Link 2</a></li>
                    <li><a href="#!">Link 3</a></li>
                    <li><a href="#!">Link 4</a></li>
                </ul>
            </div>
            <!--/.Fourth column-->
        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2017 Copyright: <a href="https://www.MDBootstrap.com"  rel="nofollow"> MDBootstrap.com </a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->
<?php wp_footer(); ?>
<script>
$("#mdb-navigation > ul > li").addClass("page-item")
$("#mdb-navigation > ul > li > a").addClass("page-link")
</script>
</body>
</html>     