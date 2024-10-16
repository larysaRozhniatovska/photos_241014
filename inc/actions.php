<?php
function render(string $page, array $data = [],string $template = 'default') : void
{
    extract($data);
    include "views/templates/{$template}_template.php";
}
function view() : void
{
    render('view');
}
function form() : void
{
    render('form');
//    , ['errors' => getErrors()]);
}