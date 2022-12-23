<?php
    ob_start();

    ?>

    <form action="Hikes/list" method="GET">
        <label for="tag">Search by Tag:</label>
        <input type="search" id="search_tag" name="search_tag"><br>
        <button> Search </button>
    </form>

   

    echo $content;
    $content = ob_get_clean();