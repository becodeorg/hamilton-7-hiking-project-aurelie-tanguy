<?php

    $title = 'Hikes';

    ob_start();

    foreach ($hikes as $hike) {
    ?>

    <p><?= $hike?></p>

    <?php
    }
    $content = ob_get_clean();