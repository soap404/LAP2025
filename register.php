<?php
require_once __DIR__ . '/Controller/UserController.php';

use Controller\UserController;

$errors = [];

if (isset($_POST['register'])) {
    $result = UserController::store($_POST);
    if ($result === true) {
        header('Location: login.php');
        exit;
    } else {
        $errors = $result;
    }
}

?>


<?php require_once 'Templates/header.php'; ?>

    <div>
        <?php foreach ($errors as $error) : ?>
            <div class="alert alert-danger" role="alert">
                <?= $error ?>
            </div>
        <?php endforeach; ?>
    </div>


    <form action="" method="POST">
        <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name">
        </div>

        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name">
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <button type="submit" class="btn btn-primary" name="register">Register</button>
    </form>

<?php require_once 'Templates/footer.php'; ?>