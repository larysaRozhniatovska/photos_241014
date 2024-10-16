<?php
function readImages(): array
{
    $dir    = PHOTO_DIR;
    $files = scandir($dir);
    $dataSource = [];
    $counter = 0;
    foreach ($files as $file){
        $name =  PHOTO_DIR . DIRECTORY_SEPARATOR . $file;
        if (is_file($name) ){
            $size = getimagesize($name);
            if ($size !== false){
                $dataSource[$counter]['src'] = PHOTO_PATH . PHOTO_DIR . DIRECTORY_SEPARATOR . $file;
                $dataSource[$counter]['alt'] = 'file ' . $file;
                $dataSource[$counter]['width'] = $size[0];
                $dataSource[$counter]['height'] = $size[1];
                $counter++;
            }
        }
    }
    return $dataSource;
}
