<?php

use App\Model\Personne;
?>
<div class="container mt-5">
    <table class="table table-bordered">
        <thead>
            <tr>
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

                    <td class="table-info"> <?=
                                            $prof->nom_complet;

                                            ?></td>
                    <td class="table-success"> <?=
                                                $prof->grade;

                                                ?></td>
                    <td>

                        <button class="btn btn-success">Modifier</button>
                        <button class="btn btn-danger">Supprimer</button>

                    </td>
                </tr>
            <?php

            } ?>
        </tbody>
    </table>
</div>