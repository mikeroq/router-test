<?php
// view function that loads the file
function view($file, $variables = array()) {
    $file = str_replace('.','/',$file);
    if (file_exists("../pages/$file.php")) {
        extract($variables);
        ob_start();
        include "../layout/header.php";
        include "../pages/$file.php";
        include "../layout/footer.php";
        print ob_get_clean();
    } else {
        if (file_exists("../layout/404.php")) {
            include "../layout/404.php";
        } else {
            header("HTTP/1.0 404 Not Found");
        }     
    }   
}
