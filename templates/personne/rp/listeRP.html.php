<div class="container mt-5">
    <h1><?= $titre ?></h1>
    <table class="table table-bordered">
        <thead>
            <tr class="table-info">
                <th scope="col">#</th>
                <th scope="col">Nom Complet</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $i = 1;

            foreach ($rps as $rp) {


            ?>

                <tr>
                    <td><?= $i++ ?></td>

                    <td> <?=
                            $rp->nom_complet;

                            ?></td>

                    <td class="text-center">

                        <button class="btn btn-success">Modifier</button>
                        <button class="btn btn-danger">Supprimer</button>

                    </td>
                </tr>
            <?php

            } ?>
        </tbody>
    </table>
    <h4><a href="<?= $Constantes::WEB_ROOT . 'accueil' ?>">Retour</a></h4>


</div>