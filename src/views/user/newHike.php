<?php
    ob_start();
    ?>



<form action="/hikes/newHike" method="post">
    <label for="name">name</label>
    <input type="text" name="name" require>
    <br>
    <br>
    <label for="distance">distance</label>
    <input type="number" name="distance" id="" require>
    <br>
    <br>
    <label for="duration">duration</label>
    <input type="time" name="duration" id=""require>
    <br>
    <br>
    <label for="elevation">elevation</label>
    <input type="number" name="elevation" id="" require>
    <br>
    <br>
    <label for="description">description</label>
    <textarea name="description" id="" cols="30" rows="10" require></textarea>
    <br>
    <br>
    <label for="tag">tag</label>
    <select name="tag" id="">
        <?php
            foreach ($dataTags as $tag) {
                echo '<option value="'.$tag['id'].'">'.$tag['name'].'</option>';
            }
        ?>
    </select>
    <br>
    <br>
    <input type="submit" value="submit">
</form>



<?php
    $content = ob_get_clean();