<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HARMONIES | Microbiome Network Inference | QBRC | UT Southwesetern | Southern Methodist University</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>

    <link rel="shortcut icon" href="images/utsw-icon.png">
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>

    <!-- Theme skin -->
    <link id="t-colors" href="skins/default.css" rel="stylesheet"/>

    <!-- boxed bg -->
    <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css"/>
</head>

<body>

<div id="wrapper">
    <!-- start header -->
    <?php include("menu.php"); ?>
    <!-- end header -->

    <div class="wrapper row2">
        <main class="hoc container clear">
            <!-- main body -->
            <h3>Opps: Something Wrong with Job Execution</h3>
            <hr/>

            <!-- ################################################################################################ -->
            <p style="color:#ff0000;">
                <?php
                include "testInput.inc";

                $errorid = "";
                if (isset($_GET["errorid"])) {
                    $errorid = testInput::escape($_GET["errorid"]);
                }

                switch ($errorid) {
                    case "1":
                        echo "Empty Job ID. Please re-submit your job.";
                        break;
                    case "2":
                        echo "Your Job ID is not found in our server. Please re-submit your job.";
                        break;
                    case "3":
                        echo "Database connection failed. Please re-submit your job later.";
                        break;
                    default:
                        echo "Unexpected error. Please re-submit your job";
                }
                ?>
            </p>
            <!-- ################################################################################################ -->
            <!-- / main body -->
            <div class="clear"></div>
            <div><a class="btn btn-primary" href="analysis.php">Resubmit Your Job</a></div>
            <hr />
            <div class="clear"></div>

        </main>

        <?php include("footer-small.php"); ?>
    </div>

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/stellar.js"></script>
<script src="js/classie.js"></script>
<script src="js/uisearch.js"></script>
<script src="js/jquery.cubeportfolio.min.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>

<script type="text/javascript">
    $("#navanalysis").addClass("active");
</script>

</body>
</html>