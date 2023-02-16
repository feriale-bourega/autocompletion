<?php

$title = "Accueil";

include 'header.php';

?>



<main class="container mt-5">
    <section class="row">

        <div class="col-md-6 m-auto">
            
            <h3 class="text-center mb-3">Pays</h3>

            <form class="d-flex" method="get" action="recherche.php">
                <input id="search" class="form-control me-sm-2" type="text" name="search" placeholder="Recherche...">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>

            <ul id="matchList"></ul>
            <ul id="matchList2"></ul>

        </div>

    </section>
</main>

</body>

</html>