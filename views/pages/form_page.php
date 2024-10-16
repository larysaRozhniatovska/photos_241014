<?php if (count($errors) > 0) :?>
    <ul>
        <?php foreach ($errors as $error) :?>
            <li><?= $error?></li>
        <?php endforeach;?>
    </ul>
<?php endif;?>
<form action="<?= getUrl('proc')?>" method="post"  enctype="multipart/form-data" >
    <label for="photo">Upload file:</label>
    <div>
        <input type="file" id="photo" name="photo[]" required/>
        <input type="submit" value="Submit">
    </div>
</form>