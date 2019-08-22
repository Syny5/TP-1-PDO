<?php
include_once '../controllers/userListControllers.php';
include_once 'header.php';
?>
<table class="table table-bordered text-center">
    <thead>
    <th>Nom</th>
    <th>Prénom</th>
    <th>Date de naissance</th>
    <th>Adresse</th>
    <th>Code Postal</th>
    <th>Numéro de tel</th>
    <th>Service</th>
</thead>
<tbody>
    <?php foreach ($UserList as $user) { ?>
        <tr>
            <td><?= $user->lastName ?></td>
            <td><?= $user->firstName ?></td>
            <td><?= $user->birthdate ?></td>
            <td><?= $user->adress ?></td>
            <td><?= $user->zipCode ?></td>
            <td><?= $user->phoneNumber ?></td>
            <td><?= $user->service ?></td>
        </tr>
        <?php
    }
    ?>
</tbody>
</table>
<?php include_once 'footer.php';
