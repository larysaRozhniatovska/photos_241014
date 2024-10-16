<?php
/**
 * Create an URL by specify algorithm
 * @param string $action
 * @return string
 */
function getUrl(string $action) : string
{
    return '/index.php?action=' . $action;
}