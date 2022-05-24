<div class="container mt-5">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom Complet</th>
                <th scope="col">Login</th>
                <th scope="col">Role</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $i = 1;

            foreach ($personnes as $personne) {
            ?>

                <tr>
                    <td><?= $i++ ?></td>

                    <td class="table-info"> <?=
                                            $personne->nom_complet;

                                            ?></td>
                    <td class="table-success"> <?=
                                                $personne->login;

                                                ?></td>
                    <td class="table-primary"> <?=
                                                $personne->role;

                                                ?></td>
                </tr>
            <?php

            } ?>
        </tbody>
    </table>
    <h4><a href="<?= $Constantes::WEB_ROOT . 'accueil' ?>">Retour</a></h4>

</div>