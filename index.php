<?php
// Connecting the configuration file
require_once 'inc/config.php';

// Connecting files with functions
require_once 'inc/actions.php';
require_once 'inc/helpers.php';
//require_once 'inc/validators.php';

// Calling the initialization function
init();
?>
<!--<link rel="stylesheet" href="photoswipe.css">-->


<!--<script type="module">-->
    // import PhotoSwipeLightbox from '/photoswipe/photoswipe-lightbox.esm.js';
    // const lightbox = new PhotoSwipeLightbox({
    //     gallery: '#gallery--with-custom-button',
    //     children: 'a',
    //     pswpModule: () => import('/photoswipe/photoswipe.esm.js'),
    //     bgOpacity: 0.2,
    //     spacing: 0.5, // 50% of viewport width
    // });
    // lightbox.on('uiRegister', function() {
    //     lightbox.pswp.ui.registerElement({
    //         name: 'test-button',
    //         ariaLabel: 'Toggle zoom',
    //         order: 9,
    //         isButton: true,
    //         html: 'Test',
    //         onClick: (event, el) => {
    //             if ( confirm('Do you want to toggle zoom?') ) {
    //                 lightbox.pswp.toggleZoom();
    //             }
    //         }
    //     });
    // });

    // const lightbox = new PhotoSwipeLightbox({
    //     dataSource: [
    //         { src: 'https://dummyimage.com/800x600/555/fff/?text=1', width: 800, height: 600 },
    //         { src: 'https://dummyimage.com/800x600/555/fff/?text=2', width: 800, height: 600 },
    //         { src: 'https://dummyimage.com/800x600/555/fff/?text=3', width: 800, height: 600 },
    //         { src: 'https://dummyimage.com/800x600/555/fff/?text=4', width: 800, height: 600 },
    //         { src: 'https://dummyimage.com/800x600/555/fff/?text=5', width: 800, height: 600 },
    //     ],
    //     children: 'a',
    //     pswpModule: () => import('/photoswipe/photoswipe.esm.js')
    // });
    // lightbox.on('uiRegister', () => {
    //     const { pswp }  = lightbox;
    //
    //     let replacedCount = 0;
    //     pswp.ui.registerElement({
    //         name: 'replaceCurrentSlide',
    //         className: 'pswp__button--test-button',
    //         order: 9,
    //         isButton: true,
    //         html: 'Replace Current Slide',
    //         onClick: (event, el) => {
    //             replacedCount++;
    //             pswp.options.dataSource[pswp.currSlide.index] = {
    //                 src: 'https://dummyimage.com/800x600/555/fff/?text=New%20Slide%20' + replacedCount, width: 800,
    //                 height: 600
    //             };
    //             pswp.refreshSlideContent(pswp.currSlide.index);
    //         }
    //     });
    //
    //     let addedCount = 0;
    //     pswp.ui.registerElement({
    //         name: 'addSlide',
    //         className: 'pswp__button--test-button',
    //         order: 9,
    //         isButton: true,
    //         html: 'Add Slide',
    //         onClick: (event, el) => {
    //             addedCount++;
    //             pswp.options.dataSource.push({
    //                 src: 'https://dummyimage.com/800x600/555/fff/?text=Added%20slide%20' + addedCount, width: 800,
    //                 height: 600
    //             });
    //             pswp.refreshSlideContent(pswp.getNumItems() - 1);
    //         }
    //     });
    // });

    // lightbox.init();
    // document.querySelector('#btn-add-remove-test').onclick = () => {
    //     lightbox.loadAndOpen(0);
<!--</script>-->

