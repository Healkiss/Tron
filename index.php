<?php
    if (!file_exists("config/parameters.yml")){
        echo "you should install the app before playing !<br/>";
        echo "./config/install.sh<br/>";
        die();
    }
    require_once 'library/Core.php';
    $core = new Core();
    $core->loadTron();
    $core->display();
?>