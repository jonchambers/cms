<?php
include($root."pageheader.php");
?>
<!--Transition the pages fade in and out--->

<script type="text/javascript">


    $(document).ready(function() {
        $("body").css("display", "none");

        $("body").fadeIn(1000);

        $(".transition").click(function(event){
            event.preventDefault();
            linkLocation = this.href;
            $("body").fadeOut(1000, redirectPage);
        });

        function redirectPage() {
            window.location = linkLocation;
        }
    });
</script>

<body>
    <div id="wrapper">

        <?php include "menu.php"; ?>

        <div id="container">

            <?php include "sidemenu.php"?>

            <div id="gallery" class="content">
					
				<div class="slideshow-container">

					<div id="loading" class="loader"></div>

					<div id="slideshow" class="slideshow"></div>

				</div>

                <div id="caption" class="caption-container"></div>

            </div>

            <div id="thumbs" class="navigation">
				
				<ul class="thumbs">
						
					<?php
                    photo();
                    ?>
						
                </ul>
					
			</div>

        </div>
    </div>

</body>
</html>