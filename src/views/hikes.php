<?php
    ob_start();

    ?>

    <form action="">
        <p>ici pour trier</p>
    </form>

    <?php
    echo $content;
    $content = ob_get_clean();