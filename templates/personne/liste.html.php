<?php

use App\Model\Personne;
?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Nom Complet</th>
            <th scope="col">Login</th>
            <th scope="col">Role</th>
        </tr>
    </thead>
    <tbody>

        <?php


        $personnes = Personne::findAll();
        foreach ($personnes as $personne) {

        ?>

            <tr>

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