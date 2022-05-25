<?php

use App\Core\HtmlProvider;
?>
<div class="container mt-5">
    <?= HtmlProvider::navInfo($titre, "dark", 6, "Ajouter", "success", "ajoutEtudiant") ?>

    <table class="table table-bordered">
        <thead>
            <tr class="table-info">
                <th scope="col">#</th>
                <th scope="col">Nom Complet</th>
                <th scope="col">Matricule</th>
                <th scope="col">Sexe</th>
                <th scope="col">Adresse</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $i = 1;

            foreach ($etudiants as $etudiant) {


            ?>

                <tr>
                    <td><?= $i++ ?></td>

                    <td> <?=
                            $etudiant->nom_complet;

                            ?></td>
                    <td class=""> <?=
                                    $etudiant->matricule;

                                    ?></td>
                    <td class=""> <?=
                                    $etudiant->sexe;

                                    ?></td>
                    <td class=""> <?=
                                    $etudiant->adresse;

                                    ?></td>

                    <td class="text-center">
                        <a href="" class="btn btn-outline-success">
                            <details></details>
                        </a>

                        <a href="" class="btn btn-outline-warning">Modifier</a>
                        <a href="" class="btn btn-outline-danger">Supprimer</a>



                    </td>
                    </td>
                </tr>
            <?php

            } ?>
        </tbody>
    </table>

</div>

