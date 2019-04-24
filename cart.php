<?php

    session_start();

    if (!isset($_SESSION['name'])) {
        header("Location: login.php");
    }

require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        Pecan nuts : <?= $_SESSION['pecannuts']; ?>
    </div>
    <div class="row">
        Chocolate chips : <?= $_SESSION['chocolatechips']; ?>
    </div>
    <div class="row">
        Chocolate cookies : <?= $_SESSION['chocolatecookie']; ?>
    </div>
    <div class="row">
        M&M's&copy; cookies : <?= $_SESSION['mmscookie']; ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
