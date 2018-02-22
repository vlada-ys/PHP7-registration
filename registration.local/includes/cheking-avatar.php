<?php

//------------------check avatar file---------------------

$file = $_FILES['avatar'];//-----------------file from input name ='avatar'-----------------------

const PHOTO_UPLOAD_DIR = 'avatars';//--------------direction--------
const MAX_UPLOAD_PHOTO_SIZE= 3*1024*1024;//3mb
//----------------------------------проверка на ошибку загружаемого файла из сайта php------------
if ($file['error'] !== UPLOAD_ERR_OK) {
    switch ($code) {
        case UPLOAD_ERR_INI_SIZE:
            $msg = "The uploaded file exceeds the upload_max_filesize directive in php.ini";
            break;
        case UPLOAD_ERR_FORM_SIZE:
            $msg = "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form";
            break;
        case UPLOAD_ERR_PARTIAL:
            $msg = "The uploaded file was only partially uploaded";
            break;
        case UPLOAD_ERR_NO_FILE:
            $msg = "No file was uploaded";
            break;
        case UPLOAD_ERR_NO_TMP_DIR:
            $msg = "Missing a temporary folder";
            break;
        case UPLOAD_ERR_CANT_WRITE:
            $msg = "Failed to write file to disk";
            break;
        case UPLOAD_ERR_EXTENSION:
            $msg = "File upload stopped by extension";
            break;

        default:
            $msg = "Unknown upload error";
            break;
    }
}
////--------------after  default cheking from php cite we changing name with md5 and add its expantion of img. (TODO max size 3mb). after that upload -----------
else if($file['size']>MAX_UPLOAD_PHOTO_SIZE){
    $msg='File is  too large';
}else {
    $file_name_separating= explode('.', $file['name']);
    $file_name_changing=md5($file_name_separating[0]).'.'.$file_name_separating[1];
    $file_name = PHOTO_UPLOAD_DIR . DIRECTORY_SEPARATOR . $file_name_changing;
    if (!move_uploaded_file($file['tmp_name'], $file_name)) {
        $msg = 'Файл не был загружен';
    } else {
        $msg = 'Файл загрузирся успешно';
        $avatar=$file_name_changing;
    }
}