<?php
/**
 * connects template converts error parameter
 * @param string $page
 * @param array $data
 * @param string $template
 * @return void
 */
function render(string $page, array $data = [],string $template = 'default') : void
{
    extract($data);
    include "views/templates/{$template}_template.php";
}

/**
 * renders the page PHOTO
 * @return void
 */
function view() : void
{
    render('view');
}

/**
 * renders the page FORM
 * @return void
 */
function form() : void
{
    render('form');
//    , ['errors' => getErrors()]);
}

function proc() : void
{
//    var_dump($_FILES);
    $errors = [];
    //Валидація файлу
    if(empty($_FILES['photo'])){
        $errors[] = 'No POST data for file';
    }else{
        $photoFile = $_FILES['photo'];
        if($photoFile['error'] !== UPLOAD_ERR_OK){
            $errors[] = UPLOAD_ERROR_MESSAGES[$photoFile['error']];
        }else{
            if(!in_array($photoFile['type'], PHOTO_AVAILABLE_TYPES)){
                $errors[] = 'Not available type';
            }
            if($photoFile['size'] > PHOTO_MAX_SIZE){
                $errors[] = 'Photo is too large';
            }
            if(count($errors) == 0){
                $extension = pathinfo($photoFile['name'], PATHINFO_EXTENSION);
                $uniqueName = uniqid() . '.' . $extension;
                $fileName = PHOTO_DIR . DIRECTORY_SEPARATOR . $uniqueName;
                if(!move_uploaded_file($photoFile['tmp_name'], $fileName)){
                    $errors[] = 'Photo was not uploaded';
                }
            }
        }
    }
    var_dump($errors);
    //если ошибки то сохранияем и переправляем на форму
    if(count($errors) > 0){
        setErrors($errors);
        redirect('form');
    }

    redirect('view');
}
function redirect(string $action) : never
{
    header('Location: ' . getUrl($action));
    exit();
}