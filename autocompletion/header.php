<!DOCTYPE html>
<html>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Fontawesome kit -->
    <script src="https://kit.fontawesome.com/2e455cc5f8.js" crossorigin="anonymous"></script>

    <!-- JS script link -->
    <script type="text/javascript" src="js/script.js"></script>

    <title><?= $title ?></title>

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Pays</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Accueil
                                <?php if ($title == "Accueil") {
                                    echo '<span class="visually-hidden">(current)</span>';
                                } ?>
                            </a>
                        </li>
                    </ul>

                    
                </div>
            </div>
        </nav>
    </header>
    
    <?php if ($title !== "Accueil") : ?>
<div>

<form class="d-flex" method="get" action="recherche.php">
<input class="form-control me-sm-2" type="text" id="search" name="search" placeholder="Recherche">
<button class="btn btn-secondary my-2 my-sm-0" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
</form>

<ul id="matchList"></ul>
<ul id="matchList2"></ul>
</div>
    <?php endif; ?>
