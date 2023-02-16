<?php

require_once('data/dbh.php');

$search =  htmlspecialchars($_GET['search']) . "%";

$query = $conn->prepare("SELECT name, description FROM `voyages` WHERE `name` LIKE :search LIMIT 0,25;");
$query->execute([':search' => $search]);
$result = $query->fetchAll(PDO::FETCH_ASSOC);
// var_dump($result);die;

$title = "Recherche : " . htmlspecialchars($_GET['search']);

include 'header.php';
?>

<main class="container mt-5">
    <section class="row">

        <div class="col-md-6 m-auto">

            <h3 class="text-center mb-3">Votre recherche</h3>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Pays</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 

                        foreach ($result as $pays) {
                            
                                 echo "<tr>
                                        <th scope='row'><a href='element.php?search=" . $pays['name'] . "'>" . $pays['description'] . "</a></th>
                                 </tr>";
                           
                           
                        }
                    ?>
                </tbody>

        </div>

    </section>
</main>

</body>

</html>