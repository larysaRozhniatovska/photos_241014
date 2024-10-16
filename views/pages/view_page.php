<?php
$dataSource = readImages();
?>
<?php include_once 'views/pages/form_page.php'?>
<div class="pswp-gallery pswp-gallery--single-column" id="gallery--with-custom-button">
    <?php if (count($dataSource) > 0) :?>

        <?php foreach ($dataSource as $source) : ?>
            <a href="<?= $source['src']?>"
               data-pswp-width="<?= $source['width']?>"
               data-pswp-height="<?= $source['height']?>"
               target="_blank">
                <img src="<?= $source['src']?>" alt="<?= $source['alt']?>" />
            </a>
        <?php endforeach;?>
    <?php endif;?>
</div>

