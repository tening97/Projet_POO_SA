<?php

use App\Core\HtmlProvider;
use App\Model\Personne;
?>

<div class="container mt-5">
    <?= HtmlProvider::navInfo($titre, "info", 6, "Ajouter", "success", "addAc") ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom Complet</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $i = 1;

            foreach ($ac as $attache) {


            ?>

                <tr>
                    <td><?= $i++ ?></td>

                    <td class=""> <?=
                                    $attache->nom_complet;

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