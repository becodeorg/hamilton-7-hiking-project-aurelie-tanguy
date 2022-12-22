<?php

    ob_start();

?>

    <h2><?=$datahike["name"]?></h2>

<?php
    echo $content;
    $content = ob_get_clean();