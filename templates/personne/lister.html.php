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

                    <td> <?=
                            $personne->nom_complet;

                            ?></td>
                    <td> <?=
                            $personne->login;

                            ?></td>
                    <td> <?=
                            $personne->role;

                            ?></td>
                </tr>
            <?php

            } ?>
        </tbody>
    </table>

</div>