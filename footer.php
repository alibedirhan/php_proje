<?php
?>

<!-- footer -->
<!--
<div class="w3l_footer">
    <div class="container">

        <div class="w3ls_footer_grids">

            <div class="w3ls_footer_grid">
                <div class="col-md-4 w3ls_footer_grid_left">
                    <div class="w3ls_footer_grid_leftl">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="w3ls_footer_grid_leftr">
                        <h4>Location</h4>
                        <p>3030 New York, NY, USA</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 w3ls_footer_grid_left">
                    <div class="w3ls_footer_grid_leftl">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="w3ls_footer_grid_leftr">
                        <h4>Email</h4>
                        <a href="mailto:info@example.com">info@example.com</a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 w3ls_footer_grid_left">
                    <div class="w3ls_footer_grid_leftl">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="w3ls_footer_grid_leftr">
                        <h4>Call Me</h4>
                        <p>(+000) 003 003 0052</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="w3l_footer_pos">
        <p>© 2017 C-Resume. All Rights Reserved | Design by <a href="https://w3layouts.com/">W3layouts</a></p>
    </div>
</div>
<!-- //footer -->
<script src="js/bars.js"></script>
<!-- start-smoth-scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<!-- text-effect -->
<script type="text/javascript" src="js/jquery.transit.js"></script>
<script type="text/javascript" src="js/jquery.textFx.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.test').textFx({
            type: 'fadeIn',
            iChar: 100,
            iAnim: 1000
        });
    });
</script>
<!-- //text-effect -->
<!-- menu-js -->
<script src="js/modernizr.js"></script>
<script src="js/menu.js"></script>
<!-- //menu-js -->


<script type="text/javascript" src="js/move-top.js"></script>

<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>


</body>
</html>
