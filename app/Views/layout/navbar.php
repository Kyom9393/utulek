<!DOCTYPE html>
<html>
    <head>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand"><i class="fa-solid fa-shield-cat fa-flip"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('CatPage')?>">Naše Kočky</a>
                </li>
                <li class="nav-item">
                    <?php
                    echo anchor('login','Přihlásit',['class' => 'btn btn-info']);
                    ?>
                </li>
                <li class="nav-item">
                    <?php
                    echo anchor('register','Registrovat',['class' => 'btn btn-success']);
                    ?>
                </li>
                <li class="nav-item">
                    <?php
                    if ($logged){
                        echo anchor('logout','Odhlásit',['class' => 'btn btn-warning']);
                    }
                    ?>
                </li>
            </ul>
        </div>
    </div>
</nav>

</body>
</html>
