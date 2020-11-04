


# HARMONIES: A Hybrid Approach for Microbiome Networks Inference via Exploiting Sparsity

Web server development (<http://lce.biohpc.swmed.edu/harmonies/>) for
implementing HARMONIES with both front- and back-ends.

<div class="figure" style="text-align: center">

<img src="https://github.com/shuangj00/HARMONIES_WebTool/blob/main/Rmarkdown/workflow.png" alt=" " width="90%" />

<p class="caption">

</p>

</div>

## Introduction

We introduce the online analysis tool for implementing the HARMONIES to
infer the microbial association networks. We proposed the HARMONIES to

  - account for the uneven sequencing depth, zero-inflation, and
    over-dispersion when normalizing the real microbiome data
  - provide a sparse and consistent estimation of the network structure
    by selecting the most stable associations between taxa in the
    network

<div style="margin-bottom:50px;">

</div>

## Contents

  - [Workflow](#workflow)
  - [Online Analysis](#online-analysis)
      - [Model input](#model-input)
      - [Model output](#model-output)
  - [Download Package](#download-package)
  - [Contact](#contact)
  - [Reference](#reference)

## Workflow

Three major steps of the online analysis:

<div class="figure" style="text-align: center">

<img src="https://github.com/shuangj00/HARMONIES_WebTool/blob/main/Rmarkdown/steps.png" alt=" " width="100%" />

<p class="caption">

</p>

</div>

<div style="margin-bottom:50px;">

</div>

<details>

<summary>Step 1: Prepare Microbiome Count File </summary>

The input data is summarized into a single .csv file where

  - Each row in the file corresponds to a sample (subject) in the study
  - The first two columns contain the sample ID and the group
    information
  - The 3rd to the last column consist the observed microbiome count
    matrix, with values being nonnegative integers

<div style="margin-bottom:25px;">

</div>

</details>

<div style="margin-bottom:20px;">

</div>

<details>

<summary>Step 2: Upload Microbiome Count File </summary>

Upload the .csv file at
<http://lce.biohpc.swmed.edu/harmonies/analysis.php> and specify the
model parameters. Users can provide their contact information
(e.g. email address) to receive notifications since running the
HARMONIES may take a while depending on the size of the input data

<div style="margin-bottom:25px;">

</div>

</details>

<div style="margin-bottom:20px;">

</div>

<details>

<summary>Step 3: Get Microbiome Network Estimation </summary>

The results will be available for download (as a .csv file) and other
downstream analyses. Our website provide automatic visualization of
network structure on the result page

<div style="margin-bottom:25px;">

</div>

</details>

## Online Analysis

Here, we explain how to use the webtool
(<http://lce.biohpc.swmed.edu/harmonies/analysis.php>) to analyze a
microbiome dataset for the purpose of network estimation.

### Model input

Users should first prepare the microbiome sequencing count data into a
.csv file. An example is shown below:

<div class="figure" style="text-align: center">

<img src="https://github.com/shuangj00/HARMONIES_WebTool/blob/main/Rmarkdown/uploadformat.jpg" alt=" " width="70%" />

<p class="caption">

</p>

</div>

<div style="margin-bottom:30px;">

</div>

  - Each row in the file corresponds to a sample (subject) in the study
  - The first two columns contain the sample ID and the group
    information. In this example, all the samples are from the same
    group (e.g. patients with a same disease) and thus the group labels
    are all 1s. If having subjects from two groups (case and control),
    then the group labels should be a vector of 1 and 2
  - The 3rd to the last column consist the observed microbiome count
    matrix, with values being nonnegative
  - The column names should also be specified following the given
    example

<div style="margin-bottom:30px;">

</div>

Next, we provide the default settings for all the model parameters,
while the users are encouraged to change the parameters based on their
preferences. The meaning of each parameter is also specified (see
example below).

<div style="margin-bottom:10px;">

</div>

<div class="figure" style="text-align: left">

<img src="https://github.com/shuangj00/HARMONIES_WebTool/blob/main/Rmarkdown/explain.png" alt=" " width="50%" />

<p class="caption">

</p>

</div>

<div style="margin-bottom:30px;">

</div>

Since running the HARMONIES model may take a while, we encourage users
to leave their emails when submitting the jobs. A notification email
will be sent automatically once the job is finished.

### Model output

After submiting the job, users will see a waiting page similar as

<div style="margin-bottom:10px;">

</div>

<div class="figure" style="text-align: center">

<img src="https://github.com/shuangj00/HARMONIES_WebTool/blob/main/Rmarkdown/waiting_page.png" alt=" " width="80%" />

<p class="caption">

</p>

</div>

<div style="margin-bottom:20px;">

</div>

The user is able to check the input information for the submitted job on
the waiting page. Then, the user will be redirected to the model fitting
result page if the job is successfully finished. The result page, as
shown below, provided various informations.

<div style="margin-bottom:10px;">

</div>

<div class="figure" style="text-align: center">

<img src="https://github.com/shuangj00/HARMONIES_WebTool/blob/main/Rmarkdown/finish.png" alt=" " width="80%" />

<p class="caption">

</p>

</div>

<div style="margin-bottom:30px;">

</div>

  - The estimated network structure (with a green edge represents a
    positive partial correlation while a red edge represents a negative
    partial correlation)
  - The model fitting results with the node and edge information for the
    network
  - The model fitting log file

<div style="margin-bottom:10px;">

</div>

The main results are summarized into two .csv files. Below is the output
from an example dataset.

<div style="margin-bottom:10px;">

</div>

<div class="figure" style="text-align: center">

<img src="https://github.com/shuangj00/HARMONIES_WebTool/blob/main/Rmarkdown/result.png" alt=" " width="50%" />

<p class="caption">

</p>

</div>

**Edge** information

<div style="margin-bottom:10px;">

</div>

  - First and second columns: The names of each connected taxa pair
  - Third column: Estimated partial correlation of the association
    between the taxa pair

**Node** information

<div style="margin-bottom:10px;">

</div>

  - First column: Taxon name
  - Second column: Estimated mean abundances based on the ZINB-DPP model

## Download Package

The R package is available to download at
<http://lce.biohpc.swmed.edu/harmonies/download.php>.

The HARMONIES package serves to infer the network structure of the
microbiome count data generated by next-generation sequencing (NGS)
technology. It also provides functions to generate overdispersed and
zero-inflated count data from a Dirichlet Multinomial model.

For more information of package installation and tutorial, please visit
<https://shuangj00.github.io/HARMONIES/>

## Contact

Shuang Jiang <shuangj@smu.edu>, Department of Statistical Science,
Southern Methodist University, Dallas, TX 75275

## Reference

S. Jiang et al. (2020) \`\`HARMONIES: A Hybrid Approach for Microbiome
Networks Inference via Exploiting Sparsity", *frontiers in Genetics*,
**11**:445

Link: <https://doi.org/10.3389/fgene.2020.00445>
