<?php
// Connecting the configuration file
require_once 'inc/config.php';

// Connecting files with functions
require_once 'inc/actions.php';
require_once 'inc/helpers.php';
require_once 'inc/init_photo.php';

?>

<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="css/photoswipe.css">
<?php
// Calling the initialization function
init();
?>


