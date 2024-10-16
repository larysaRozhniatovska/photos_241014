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
function init() : void
{
    // Reading the GET parameter 'action' using filter_input
    $action = filter_input(INPUT_GET, 'action');

    if(!$action){
        notFound();
    }

    $action = htmlspecialchars($action);

    // Checking if a function with the same name exists
    if (!function_exists($action)) {
        // Generating a 404 error
        notFound();
    }
    // Если функция существует, вызываем ее
    call_user_func($action);
}


/**
 * @return never
 */
function notFound() : never
{
    //header("HTTP/1.0 404 Not Found");
    http_response_code(404);
    render('not_found');
    exit();
}