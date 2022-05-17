<div class="container mt-5">
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col" >Nom Complet</th>
            <th scope="col">Login</th>
            <th scope="col">Role</th>
        </tr>
    </thead>
    <tbody>

        <?php

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
</div>