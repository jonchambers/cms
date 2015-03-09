<?php
include($root."header.php");
?>

<body>
    <div id="wrapper">

        <?php include "menu.php"; ?>

        <div id="container">

            <?php include "sidemenu.php"?>

            <div id="infotext">

                <?php
                contact();
                ?>

            </div>

        </div>

    </div>

    <script type="text/javascript">
        //fade screen out
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

</body>
</html>