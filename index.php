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
    <?php include("menu.php") ?>
    <!-- end header -->

    <section class="callaction">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-text">
                        <h2><span>HARMONIES:</span> A Hybrid Approach for Microbiome Networks Inference via Exploiting
                            Sparsity</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- start slider -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p style="padding-top:10px;">Microbiota forms complex community structures and collectively affect human
                    health.
                    Understanding the structural organization of the human microbiome plays a vital role in
                    revealing how the microbial taxa are collaborating or competing with each other under different
                    host physiology conditions. The exponentially growing large datasets made available by
                    next-generation sequencing technology motivate the development of statistic tools to
                    quantitatively study the microbial community structures. To this end, we proposed a general
                    framework, HARMONIES, a Hybrid Approach foR MicrobiOme Network Inferences via Exploiting
                    Sparsity, to infer the microbial association networks.</p>
                <!-- Slider -->
                <a href="images/workflow.png">
                    <img src="images/workflow.png" alt="" class="img-responsive center-block" style="padding: 20px 0">
                </a>
                <!-- end slider -->
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p>
                    HARMONIES accounts for the uneven sequencing depth, zero-inflation, and over-dispersion when
                    normalizing the real microbiome data. It also provides a sparse and consistent estimation of the
                    network structure by selecting the most stable associations between taxa in the network.
                </p>
            </div>
        </div>
    </div>

    <section class="callaction">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="heading">How to use the online analysis tool HARMONIES?</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <a href="images/step1-1.png">
                        <img src="images/step1-1.png" class="img-responsive">
                    </a>
                    <br>
                    <p><strong>Step 1: </strong>Prepare Microbiome Count File</p>
                </div>
                <div class="col-lg-4">
                    <a href="images/step1-2.png">
                        <img src="images/step1-2.png" class="img-responsive">
                    </a>
                    <br>
                    <p><strong>Step 2: </strong>Upload Microbiome Count File</p>
                </div>
                <div class="col-lg-4">
                    <a href="images/step1-3.png">
                        <img src="images/step1-3.png" class="img-responsive">
                    </a>
                    <br>
                    <p><strong>Step 3: </strong>Get Microbiome Network Estimation</p>
                </div>
            </div>
        </div>
    </section>

    <?php include("footer.php"); ?>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/stellar.js"></script>
<script src="js/classie.js"></script>
<script src="js/uisearch.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>

<script type="text/javascript">
    $("#navhome").addClass("active");
</script>

</body>
</html>