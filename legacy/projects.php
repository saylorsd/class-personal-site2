<?php

$fp = fopen('maps.csv', 'r');
$maps = array();
while (!feof($fp)) {
    $line = explode(',', fgets($fp));
    $maps[$line[0]] = $line[1];
}
fclose($fp);

function show_items($items)
{
    $i = array_rand($items);
    $val = $items[$i];
    ?>
    <iframe width="100%" height="400" frameborder="0"
            src="<?php echo $val; ?>">
    </iframe>
    <?php
}

include('header.php');
?>

<div class="content-container">
    <div class="row">
        <div class="large-12 columns">
            <div class="content-wrapper">
                <h1>Projects</h1>
                <h6>I'll continue to post details on current projects as I develop them.
                    In the meantime you can check out some of my work on
                    <a target="_blank" href="https://github.com/saylorsd">Github</a>.
                </h6>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="large-12 columns">
            <div class="content-wrapper">
                <h2>Maps</h2>
                <h6>As part of wy work at UCSUR. I've been working on creating maps using
                    <a target="_blank" href="http://www.cartodb.com">CartoDB</a>. Here's one (selected at random each time the page loads) one from the bunch
                    that I've made.
                </h6>
                <?php show_items($maps); ?>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>
