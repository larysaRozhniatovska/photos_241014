<?php
?>

<form action="<?= getUrl('proc')?>" method="post"  enctype="multipart/form-data" >
    <label for="photo">Upload file:</label><br>
    <input type="file" id="photo" name="photo" required><br><br>

    <input type="submit" value="Submit">
</form>