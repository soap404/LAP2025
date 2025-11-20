<?php
require_once 'Templates/header.php';

use Controller\UserController;

$users = UserController::index();

?>


<h1 class="h1">Users Panel</h1>
<br>

<div class="d-flex justify-content-between">
    <a href="admin.php" class="btn btn-secondary">Back</a>
    <a href="#" class="btn btn-primary">Add new User</a>
</div>
<hr>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user) : ?>
        <tr>
            <th scope="row"><?= $user['id'] ?></th>
            <td><?= $user['first_name'] ?></td>
            <td><?= $user['last_name'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><?= $user['phone'] ?></td>
            <td>
                <button type="button" class="btn btn-warning">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </td>
        </tr>
    <?php endforeach; ?>


    </tbody>
</table>


<?php require_once 'Templates/footer.php'; ?>
