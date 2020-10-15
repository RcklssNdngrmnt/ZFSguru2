<?php

// import main lib
require 'includes/main.php';

// select page
if (@isset($_GET[ 'executecommand' ]) ) {
    $content = content_handle('internal', 'executecommand');
} elseif (@strlen($_GET[ 'serviceicon' ]) > 0 ) {
    include 'pages/internal/imagehandler.php';
    internal_serviceicon();
}
elseif (@strlen($_GET[ 'servicebigicon' ]) > 0 ) {
    include 'pages/internal/imagehandler.php';
    internal_servicebigicon();
}
else {
    redirect_url('status.php');
}

// serve page
page_handle($content);
