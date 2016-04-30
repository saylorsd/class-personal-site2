<?php

$fp = fopen('tech.csv', 'r');
$langs = array();
while (!feof($fp)) {
    $line = explode(',', fgets($fp));
    $langs[$line[0]] = $line[1];
}
fclose($fp);

function show_items($items)
{
    foreach ($items as $key => $val) {
        ?>
        <div class="small-4 medium-2 columns">
            <img src="img/<?php echo $val; ?>" height="128" width="128">
        </div>
        <?php
    }
}

include('header.php'); ?>

<div class="content-container">
    <div class="row">
        <div class="small-12 columns">
            <div class="content-wrapper">
                <h1>Skills Technology</h1>
                <p>I have a BS in Pyschology from the University of Pittsburgh, and am currently finishing coursework
                to receive a BS in Computer Science from there as well.  After completing my CS degree, I plan to enroll
                in graduate school to work towards a Masters, or possibly a PhD, in Computer Science.</p>
                <p>I'm currently busy doing a lot of ETL work, primarily in Python and through the use and creation
                of several RESTFul APIs. I'm also currently developing more front-end skills through my job and
                by through classes at the University of Pittsburgh.</p>
                <p>I have a big interest in Machine Learning, and am in the early stages of developing tools that
                inolve realtime analysis of civic data to provide local citizens, community groups and local government
                better insights into what's happening in their area.  Please check back to my
                <a href="http://localhost/steve/projects.php">projects</a> page for more information on those as they
                are developed.</p>
                <div class="row" id="languages">
                    <?php show_items($langs); ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('footer.php') ?>
