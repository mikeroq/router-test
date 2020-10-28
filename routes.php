<?php

// home = /views/home.php
// base route IE: site.com
// variables passed to page in the array, like page_title = $page_title on home.php

Route::add('/',function(){
    view("home", [
        'page_title' => 'Home Page'
    ]);
});

Route::add('/about',function(){
    view("about", [
        'page_title' => 'About Page'
    ]);
});

// if your file is under pages/test/page.php
// Then your view is "named" test.page.php
// does not need to match the route
Route::add('/pages/fun',function(){
    view("test.page", [
        'page_title' => 'About Page'
    ]);
});
Route::run('/');