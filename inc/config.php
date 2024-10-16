<?php
const SITE_NAME = 'PhotoSwipe';
const FOOTER_TEXT = 'PhotoSwipe Project, October 2024. All rights reserved.';
const PHOTO_MAX_SIZE = 2 * 1024 * 1024; //2Mb
const PHOTO_AVAILABLE_TYPES = [
    'image/jpeg',
    'image/png',
    ];
const UPLOAD_ERROR_MESSAGES = [
    0 => 'There is no error, the file uploaded with success',
    1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
    2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
    3 => 'The uploaded file was only partially uploaded',
    4 => 'No file was uploaded',
    6 => 'Missing a temporary folder',
    7 => 'Failed to write file to disk.',
    8 => 'A PHP extension stopped the file upload.',
];
const PHOTO_DIR = 'images';
const PAGES =  [
    [
        'name' => 'FILE',
        'action' => 'form',
    ],
    [
        'name' => 'PHOTO',
        'action' => 'view',
    ],

];