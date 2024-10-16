<?php
$dataSource = readImages();
?>

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

<script type="module">
import PhotoSwipeLightbox from '/photoswipe/photoswipe-lightbox.esm.js';
const lightbox = new PhotoSwipeLightbox({
    gallery: '#gallery--with-custom-button',
    children: 'a',
    pswpModule: () => import('/photoswipe/photoswipe.esm.js'),
    bgOpacity: 0.2,
    spacing: 0.5, // 50% of viewport width
});
lightbox.on('uiRegister', function() {
    lightbox.pswp.ui.registerElement({
        name: 'test-button',
        ariaLabel: 'Toggle zoom',
        order: 9,
        isButton: true,
        html: 'Zoom',
        onClick: (event, el) => {
            if ( confirm('Do you want to toggle zoom?') ) {
                lightbox.pswp.toggleZoom();
            }
        }
    });
});
lightbox.init();
</script>

