<?php

$root_url = 'http://localhost/steve/';
$curr_page = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
function get_active($link)
{
    global $curr_page, $root_url;
    $link = $root_url . $link . '.php';
    if ($link == $curr_page) {
        return 'current';
    } else {
        return '';
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steven Saylor</title>
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet" type="text/css">
    <link href="css/foundation.css" rel="stylesheet">
</head>

<body>

<div id="header">
    <div class="row">
        <div class="small-12 medium-6 large-6 columns" id="header-left">
            <h1 id="main-title">Steven Saylor</h1>
            <h5>Full Stack Developer | Cool Guy</h5>
        </div>
    </div>
</div>
<div class="gray-bg">
    <div class="row menu-row">
        <div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium"
        ">
        <button class="menu-icon" type="button" data-toggle></button>
        <div class="title-bar-title">Menu</div>
    </div>

    <div class="top-bar" id="main-menu">
        <div class="top-bar-left">
            <ul class="dropdown menu" data-responsive-menu>
                <li>
                    <a href="<?php echo $root_url ?>index.php" class="<?php echo get_active('index'); ?>">
                        Home
                    </a>
                </li>
                <li><a href="<?php echo $root_url ?>work.php" class="<?php echo get_active('work') ?>">Work</a></li>
                <li><a href="<?php echo $root_url ?>projects.php" class="<?php echo get_active('projects') ?>">Projects</a></li>
                <li><a href="<?php echo $root_url ?>skills.php" class="<?php echo get_active('skills') ?>">Skills</a></li>
                <li><a href="<?php echo $root_url ?>testimonials.php" class="<?php echo get_active('testimonials') ?>">Testimonials</a></li>
                <li><a href="<?php echo $root_url ?>contact.php" class="<?php echo get_active('contact') ?>">Contact Me</a></li>
            </ul>
        </div>
    </div>
</div>
</div>
