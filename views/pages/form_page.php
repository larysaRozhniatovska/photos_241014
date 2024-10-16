<h1>Add File</h1>
<?php if (count($errors) > 0) :?>
    <ul>
        <?php foreach ($errors as $error) :?>
            <li><?= $error?></li>
        <?php endforeach;?>
    </ul>
<?php endif;?>
<form action="<?= getUrl('proc')?>" method="post"  enctype="multipart/form-data" >
    <label for="photo">Upload file:</label><br>
    <input type="file" id="photo" name="photo" required><br><br>

    <input type="submit" value="Submit">
</form>