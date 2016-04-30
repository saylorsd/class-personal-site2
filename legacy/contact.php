<?php

if (isset($_GET)) ;
include('contact_handler.php');

# Since phone and msg are not requried
if (!isset($_GET['phone'])) {
    $phone = '';
} else {
    $phone = $_GET['phone'];
}

if (!isset($_GET['msg'])) {
    $msg = '';
} else {
    $msg = $_GET['msg'];
}

store_contact(
    $_GET['f_name'],
    $_GET['l_name'],
    $_GET['email'],
    $phone,
    $msg
);

include('header.php'); ?>

<div class="content-container">
    <div class="row">
        <div class="medium-12 columns">
            <div class="content-wrapper">
                <?php if (isset($_GET['f_name'])): ?>
                    <p class="alert">Thanks, <?php echo $_GET['f_name'] ?>!</p>
                <?php endif; ?>
                <h1>Contact Me</h1>
                <p>Leave your contact information and a message for me below, and I'll get back to you as soon as
                    possible.</p>
                <form id="contact-form" method="get">
                    <div class="row">
                        <div class="small-12 medium-6 columns">

                            <label>Name</label>
                            <input type="text" name="f_name" placeholder="First Name" required>
                        </div>

                        <div class="small-12 medium-6 columns">
                            <label>Name</label>
                            <input type="text" name="l_name" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 medium-6 columns">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="username@address.com" required>
                        </div>
                        <div class="small-12 medium-6 columns">
                            <label>Phone</label>
                            <input type="tel" name="phone" placeholder="555-555-5555">
                        </div>
                        <div class="small-12 columns">

                            <label>Your Message</label>
                            <textarea name="msg" form="contact-form" placeholder="Enter your message here"></textarea>

                            <input type="submit" class="button" value="Send Message">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include('footer.php') ?>
