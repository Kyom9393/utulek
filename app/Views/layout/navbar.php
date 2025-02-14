<!DOCTYPE html>
<html>
    <head>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand"><img class="logo" src="<?=base_url('assets/images/icon.png')?>"></a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav me-auto">
            <p class="navbar-title">K&K Kočičí útulek</p>
            <div class="dropdown">
                
                <button data-mdb-button-init data-mdb-ripple-init data-mdb-dropdown-init class="dropbtn" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-caret-right"></i>
                        Naše Kočky
                    <i class="fa-solid fa-caret-left"></i>    
                </button>
                
                <div class="dropdown-content" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="<?=base_url('CatPage')?>"><i class="fa-solid fa-caret-right"></i> Všechny Kočky</a>
                    <a class="dropdown-item" href="<?=base_url('CatAvailablePage')?>"><i class="fa-solid fa-caret-right"></i> Dostupné kočky</a>
                    <a class="dropdown-item" href="<?=base_url('CatAdoptedPage')?>"><i class="fa-solid fa-caret-right"></i> Našli si domov</a>
                    <a class="dropdown-item" href="<?=base_url('AdoptionInfoPage')?>"><i class="fa-solid fa-right-long"></i> Informace o adopcích</a>
                    <a class="dropdown-item" href="<?=base_url('CatUnavailablePage')?>"><i class="fa-solid fa-caret-right"></i> Nedostupné kočky</a>
                </div>
            </div>
                <li class="nav-item">
                    
                    <?php
                    if (!$logged){
                        echo anchor('login','Přihlásit',['class' => 'btn']);
                    }
                    ?>
                </li>
                <li class="nav-item">
                    <?php
                    if (!$logged){
                        echo anchor('register','Registrovat',['class' => 'btn']);
                    }
                    ?>
                </li>
                <li class="nav-item">
                    <?php
                    if ($logged){
                        echo anchor('logout','Odhlásit',['class' => 'btn']);
                    }
                    ?>
                </li>
            </ul>
            
        </div>
    </div>
</nav>


</body>
</html>
