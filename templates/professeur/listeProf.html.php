<?php

use App\Core\HtmlProvider;
?>
<div class="container mt-5">
<?=HtmlProvider::navInfo($titre, "info", 6, "Ajouter", "success", "ajoutP") ?>

    <table class="table table-bordered">
        <thead>
            <tr class="table-info">
                <th scope="col">#</th>
                <th scope="col">Nom Complet</th>
                <th scope="col">Grade</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $i = 1;

            foreach ($profs as $prof) {


            ?>

                <tr>
                    <td><?= $i++ ?></td>

                    <td> <?=
                            $prof->nom_complet;

                            ?></td>
                    <td class=""> <?=
                                    $prof->grade;

                                    ?></td>
                    <td class="text-center">
                        <a href="editProf/<?= $prof->id ?>" class="btn btn-outline-warning">Modifier</a>
                        <a href=" deleteProf/<?= $prof->id  ?>" class="btn btn-outline-danger">Supprimer</a>



                    </td>
                </tr>
            <?php

            } ?>
        </tbody>
    </table>


</div>