<?php

use Core\Helpers\Helper; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS system</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'] ?>/resources/css/styles.css">
</head>

<body class="admin-view">

    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <div class="container-fluid">
        <?php if (Helper::check_permission(['user:read'])) : ?>
            <a class="navbar-brand" href="/">POS system</a>
            <?php else :?>
                <a class="navbar-brand" href="#">POS system</a>
                <?php endif; ?>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    

    <div id="admin-area" class="row">
        <div class="col-2 admin-links">
            <ul class="list-group list-group-flush mt-3">
                <?php if (Helper::check_permission(['item:read'])) : ?>
                    <li class="list-group-item">
                        <a href="/items"><i class="fa-solid fa-store"></i> All Items</a>
                    </li>
                <?php endif;
                if (Helper::check_permission(['item:create'])) :
                ?>
                    <li class="list-group-item">
                        <a href="/items/create"><i class="fa-solid fa-cart-plus"></i> Create item</a>
                    </li>

                    <?php endif;
                if (Helper::check_permission(['user:read'])) :
                ?>
              
                    <li class="list-group-item">
                        <a href="/users"><i class="fa-solid fa-users"></i> All Users</a>
                    </li>
                    
                    <?php endif;
                if (Helper::check_permission(['user:create'])) :
                ?>
               
                    <li class="list-group-item">
                        <a href="/users/create"><i class="fa-solid fa-user-plus"></i> Create User</a>
                    </li>
                    <?php endif;
                if (Helper::check_permission(['transaction:create'])) :
                ?>
                    <li class="list-group-item">
                        <a href="/selling"><i class="fa-solid fa-basket-shopping"></i> selling</a>
                    </li>
                    <?php endif;
                if (Helper::check_permission(['transaction:read'])) :
                ?>
                    <li class="list-group-item">
                        <a href="/transaction"> <i class="fa-solid fa-clipboard"></i> transaction</a>
                    </li>
                <?php endif; ?>
                <li class="list-group-item">
                     <a class="nav-link" href="/logout"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
                </li>
            </ul>
        </div>
        <div class="col-10 admin-area-content">
            <div class="container my-5">