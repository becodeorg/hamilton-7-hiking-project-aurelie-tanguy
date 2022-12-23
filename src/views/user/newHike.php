<?php
    ob_start();
    ?>

    <form action="" method="post">
        <h2>new hike form</h2>
        <input type="text">
    </form>

<?php
    $content = ob_get_clean();