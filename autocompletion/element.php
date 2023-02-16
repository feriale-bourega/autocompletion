<?php

require_once('data/dbh.php');

$search = htmlspecialchars($_GET['search']);

$query = $conn->prepare("SELECT * FROM `voyages` WHERE name = :search;");
$query->execute([':search' => $search]);
$result = $query->fetchAll(PDO::FETCH_ASSOC);

$title = $result[0]['name'];

include 'header.php';

?>
<main class="container mt-5">
    <section class="row">
        <div class="col-md-6 m-auto">

            <div class="card border-primary mb-3" style="max-width: 20rem;">
                <div class="card-header">Pays :</div>
                <div class="card-body">
                    <h4 class="card-title"><?= $result[0]['name'] ?></h4>
                    <table>
                        <tbody>
                            <tr>
                                <th scope="row">Description</td>
                                <td class="text-right"><?= $result[0]['description'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Capitale</td>
                                <td class="text-right"><?= $result[0]['capitalcity'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Continent</td>
                                <td class="text-right"><?= $result[0]['continent'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Population </td>
                                <td class="text-right"><?= $result[0]['population'] ?> hab.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>
</body>

</html>