<?php

use App\Core\HtmlProvider;

?>

<div class="container mt-5">
    <?= HtmlProvider::navInfo($titre, "info", 6, "Ajouter", "success", "ajoutClasse") ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Libelle</th>
                <th scope="col">Niveau</th>
                <th scope="col">Filiere</th>
                <th scope="col">Action</th>



            </tr>
        </thead>
        <tbody>

            <?php
            $i = 1;

            foreach ($classes as $classe) {


            ?>

                <tr>
                    <td><?= $i++ ?></td>

                    <td class=""> <?=
                                    $classe->libelle;

                                    ?></td>

                    <td class=""> <?=
                                    $classe->niveau;

                                    ?></td>

                    <td class=""> <?=
                                    $classe->filiere;

                                    ?></td>

                    <td class="text-center">


                        <a href="" class="btn btn-outline-warning m-3">Modifier</a>
                        <a href="" class="btn btn-outline-danger">Supprimer</a>



                    </td>

                    </td>
                </tr>
            <?php

            } ?>
        </tbody>
    </table>
</div>