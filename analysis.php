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
    <div id="wrapper">
        <!-- start header -->
        <?php include("menu.php"); ?>
        <!-- end header -->

        <section id="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <?php

                        function eval_alert($par_name)
                        {
                            $para = $_GET[$par_name];
                            if (isset($para) && $para == "1") {
                                switch ($par_name) {
                                    case "isEdge0NameNotGood":
                                        echo "<div class=\"alert alert-danger\">" .
                                            "<strong>Error!</strong> Please provide a valid name for the output edge cvs file of group 1." .
                                            "</div>";
                                        break;

                                    case "isEdge1NameNotGood":
                                        echo "<div class=\"alert alert-danger\">" .
                                            "<strong>Error!</strong> Please provide a valid name for the output edge cvs file of group 2." .
                                            "</div>";
                                        break;

                                    case "isNode0NameNotGood":
                                        echo "<div class=\"alert alert-danger\">" .
                                            "<strong>Error!</strong> Please provide a valid name for the output node cvs file of group 1." .
                                            "</div>";
                                        break;

                                    case "isNode1NameNotGood":
                                        echo "<div class=\"alert alert-danger\">" .
                                            "<strong>Error!</strong> Please provide a name for the output node cvs file of group 2." .
                                            "</div>";
                                        break;

                                    case "isWrongName":
                                        echo "<div class=\"alert alert-danger\">" .
                                            "<strong>Error!</strong> Please provide a valid user name." .
                                            "</div>";
                                        break;

                                    case "isWrongOrganization":
                                        echo "<div class=\"alert alert-danger\">" .
                                            "<strong>Error!</strong> Please provide a valid name for institution." .
                                            "</div>";
                                        break;

                                    case "isWrongEmail":
                                        echo "<div class=\"alert alert-danger\">" .
                                            "<strong>Error!</strong> Please provide a valid email address." .
                                            "</div>";
                                        break;

                                    case "isFileSizeNotGood":
                                        echo "<div class=\"alert alert-danger\">" .
                                            "<strong>Error!</strong> The csv file should be no larger than 10 MB." .
                                            "</div>";
                                        break;

                                    case "isFileTypeNotGood":
                                        echo "<div class=\"alert alert-danger\">" .
                                            "<strong>Error!</strong> Please upload a csv file." .
                                            "</div>";
                                        break;

                                    case "isFileNameNotGood":
                                        echo "<div class=\"alert alert-danger\">" .
                                            "<strong>Error!</strong> Please make sure the csv file name is ended with .csv." .
                                            "</div>";
                                        break;
                                }
                            }
                        }

                        // alter information //
                        eval_alert("isEdge0NameNotGood");
                        eval_alert("isEdge1NameNotGood");
                        eval_alert("isNode0NameNotGood");
                        eval_alert("isNode1NameNotGood");
                        eval_alert("isWrongName");
                        eval_alert("isWrongOrganization");
                        eval_alert("isWrongEmail");
                        eval_alert("isFileSizeNotGood");
                        eval_alert("isFileTypeNotGood");
                        eval_alert("isFileNameNotGood");
                        ?>

                        <article>

                            <div class="post-slider">
                                <div class="post-heading">
                                    <h3>Online Analysis</h3>
                                </div>
                            </div>
                            <p>
                                HARMONIES takes the subject-by-taxon count matrix and the subjects’ phenotype as the
                                model input. Please refer to the example of microbiome count information on the right
                                for how to organize the input information into a single .csv file.
                            </p>
                            <p>
                                HARMONIES can handle either one or two phenotypes among all the subjects. When all the
                                subjects have the same phenotype, HARMONIES provides (1) the estimated partial
                                correlations in the network, and (2) the normalized abundances given by the
                                zero-inflated negative binomial model with the Dirichlet process prior. Given two
                                phenotypes (e.g., subjects with disease and healthy controls), HARMONIES jointly models
                                the observations from the two groups to achieve an improved abundance estimation. It
                                provides (1) the estimated partial correlations in two networks corresponding to the two
                                groups, (2) the normalized abundances of the taxa in each phenotype group, (3) the
                                posterior probability for each taxon to be differentiating between the two groups, and
                                (4) the estimated fold change of each taxon between the two groups.
                            </p>
                        </article>

                        <article>
                            <div class="post-slider">
                                <div class="post-heading">
                                    <h3>Input your data</h3>
                                </div>
                            </div>
                            <form action="sendanalysis.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="yourname">Your Name (Optional)</label>
                                    <input type="text" class="form-control" id="yourname" name="yourname"
                                           placeholder="Enter name">
                                </div>
                                <div class="form-group">
                                    <label for="organization">Your Institution (Optional)</label>
                                    <input type="text" class="form-control" id="organization" name="organization"
                                           placeholder="Enter institution">
                                </div>
                                <div class="form-group">
                                    <label for="youremail">Your Email (Optional)</label>
                                    <input type="email" class="form-control" id="youremail" name="youremail"
                                           aria-describedby="emailHelp" placeholder="Enter email">
                                    <small id="emailHelp" class="form-text text-muted">A valid email address is
                                        suggested to
                                        receive the notice when job is completed. (the average job execution is 1 - 10
                                        minutes)
                                    </small>
                                </div>
                                <hr class="style14">
                                <div class="form-group">
                                    <label for="yourfile">Microbiome Count Information (Required)
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                                data-target="#modal1">
                                            See Example
                                        </button>
                                    </label>
                                    <input type="file" class="form-control-file" id="matfile" name="matfile" required>
                                </div>
                                <div class="form-group">
                                    <label for="ddl_niter">MCMC iteration <span
                                                class="glyphicon glyphicon-question-sign"
                                                data-toggle="tooltip"
                                                data-original-title="Number of MCMC iterations"></label>
                                    <select class="form-control" id="ddl_niter" name="ddl_niter">
                                        <option value="10000">10000</option>
                                        <option value="20000">20000</option>
                                        <option value="50000">50000</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="zero_filter"> Filtering threshold <span
                                                class="glyphicon glyphicon-question-sign" data-toggle="tooltip"
                                                data-original-title="Sparse taxonomic features with zero proportions greater than the threshold would be removed in network estimation"></label>
                                    <input type="number" class="form-control" id="zero_filter" name="zero_filter"
                                           min="0.01" max="0.99" value="0.5" step="0.01" required>
                                    <small id="zero_range" class="form-text text-muted"> 0 < input < 1
                                    </small>
                                </div>
                                <div class="form-group">
                                    <button id="button" type="button" class="btn btn-link" data-toggle="collapse"
                                            data-target="#demo">
                                        <span class="glyphicon glyphicon-collapse-down"></span> Advanced Parameters
                                    </button>
                                </div>
                                <div id="demo" class="collapse">
                                    <div class="form-group">
                                        <label for="bpar"> Shape parameter <span
                                                    class="glyphicon glyphicon-question-sign"
                                                    data-toggle="tooltip"
                                                    data-original-title="hyper-parameter setting - shape parameter of the inverse-gamma distribution"></label>
                                        <input type="number" class="form-control" id="bpar" name="bpar"
                                               min="0.001" max="2.999" value="1" step="0.001" required>
                                        <small id="bpar_range" class="form-text text-muted"> 0 < input < 3
                                        </small>

                                    </div>
                                    <div class="form-group">
                                        <label for="hpar"> Scale parameter <span
                                                    class="glyphicon glyphicon-question-sign"
                                                    data-toggle="tooltip"
                                                    data-original-title="hyper-parameter setting - scale parameter of the inverse-gamma distribution"></label>
                                        <input type="number" class="form-control" id="hpar" name="hpar"
                                               min="10" value="10" max="50" required>
                                        <small id="hpar_range" class="form-text text-muted"> 10 <= input <= 50
                                        </small>
                                    </div>
                                    <div class="form-group">
                                        <label for="beta_star"> Stability parameter <span
                                                    class="glyphicon glyphicon-question-sign"
                                                    data-toggle="tooltip"
                                                    data-original-title="Stability ﻿threshold ﻿for the selection criterion"></label>
                                        <input type="number" class="form-control" id="beta_star" name="beta_star"
                                               min="0.01" max="0.1" value="0.05" step="0.01" required>
                                        <small id="bstar_range" class="form-text text-muted"> 0.01 < input < 0.1
                                        </small>

                                    </div>
                                    <div class="form-group">
                                        <label for="nrep"> Resample time <span
                                                    class="glyphicon glyphicon-question-sign"
                                                    data-toggle="tooltip"
                                                    data-original-title="Number of random subsamples to take for network estimation"></label>
                                        <input type="number" class="form-control" id="nrep" name="nrep"
                                               min="2" max="50" value="20" step="1" required>
                                        <small id="nrep_range" class="form-text text-muted"> 2 < input < 50
                                        </small>
                                    </div>
                                    <div class="form-group">
                                        <label for="bayfdr"> Bayesian False Discovery Rate <span
                                                    class="glyphicon glyphicon-question-sign"
                                                    data-toggle="tooltip"
                                                    data-original-title="Bayesian false discovery rate controlled for zero imputation"></label>
                                        <input type="number" class="form-control" id="bayfdr" name="bayfdr"
                                               min="0.01" max="0.1" value="0.05" step="0.01" required>
                                        <small id="bfdr_range" class="form-text text-muted"> 0.01 <= input <= 0.1
                                        </small>


                                        <div class="form-group">
                                            <label for="seed"> Random seed <span
                                                        class="glyphicon glyphicon-question-sign"
                                                        data-toggle="tooltip"
                                                        data-original-title="Random seed set for the MCMC algorithm and the resampling process used in the StARS method"></label>
                                            <input type="number" class="form-control" id="seed" name="seed"
                                                   min="1" max="200000000" value="1" step="1" required>
                                            <small id="seed_range" class="form-text text-muted"> 1 <= input <= 2e+08
                                            </small>
                                        </div>
                                        <div class="row">
                                            <p>
                                                Group name below should be less than 25 characters. (Only number and
                                                letters are allowed). Group name will display as filename of results.
                                            </p>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="g0_edge_name">Name of Group 1</label>
                                                    <input type="text" class="form-control" id="group1name"
                                                           name="group1name"
                                                           value="group1" required>
                                                    <small class="form-text text-muted"> e.g. group1
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="g0_node_name"> Name of Group 2 if available</label>
                                                    <input type="text" class="form-control" id="group2name"
                                                           name="group2name"
                                                           value="group2" required>
                                                    <small class="form-text text-muted"> E.g. group2
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </article>
                    </div>

                    <div class="col-lg-4">

                        <div class="sdb_holder">

                            <div class="post-slider">
                                <div class="post-heading">
                                    <h4>Microbiome Count Information</h4>
                                </div>
                            </div>
                            <p>
                                A .csv file containing the observed microbiome counts and sample information:
                            </p>
                            <ol>
                                <li>Each row corresponds to a sample in the study.</li>
                                <li>The first two columns contain the sample ID and the group information.</li>
                                <li>The 3rd to the last column consist the observed microbiome count matrix, with
                                    values being nonnegative integers.
                                </li>
                            </ol>
                            <br>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal1">
                                See Example
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modal1" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Upload File Format</h5>
                                        </div>
                                        <div class="modal-body">
                                            <img src="images/uploadformat.jpg" class="img-responsive"/>
                                            <hr>
                                            <strong>Other requirements of upload file</strong><br>
                                            <ul>
                                                <li>The upload file must be csv file</li>
                                                <li>The upload file must be smaller than 5MB</li>
                                            </ul>
                                            <a href="download/example_one_group.csv" class="btn btn-success"><i
                                                        class="fa fa-download"></i> Example of One Group</a>&nbsp;
                                            <a href="download/example_two_groups.csv" class="btn btn-success"><i
                                                        class="fa fa-download"></i> Example of Two Groups</a><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include("footer-small.php"); ?>

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
    <script src="js/google-code-prettify/prettify.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>

    <script type="text/javascript">
        $("#navanalysis").addClass("active");

        $('#demo').on('hide.bs.collapse', function () {
            $('#button').html('<span class="glyphicon glyphicon-collapse-down"></span> Advanced Parameters');
        })
        $('#demo').on('show.bs.collapse', function () {
            $('#button').html('<span class="glyphicon glyphicon-collapse-up"></span> Hide Advanced Parameters');
        })

        $('[data-toggle="tooltip"]').tooltip({
            placement: 'top'
        });
    </script>

</body>
</html>