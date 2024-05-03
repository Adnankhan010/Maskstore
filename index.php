<?php

require_once "./config/connection.php";

require_once "common/header.php";


if (empty($_GET['page'])) {
    require_once "pages/home.php";
} else {

    switch ($_GET['page']) {
        case 'about':
            require_once "pages/about.php";
            break;

        case 'product':
            require_once "pages/products.php";
            break;

        case 'services':
            require_once "pages/services.php";
            break;

        case 'contact':
            require_once "pages/contact.php";
            break;

        default:
            require_once "pages/404.php";
            break;
    }
}

require_once "common/footer.php";
?>