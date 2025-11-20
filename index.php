<?php require_once 'Templates/header.php'; ?>

    <h1 class="h1">Welcome to the Homepage</h1>

<?php if (isset($_SESSION['user'])): ?>
    <p>Hello <?= $_SESSION['user']['first_name'] ?>!</p>
<?php endif; ?>

<?php require_once 'Templates/footer.php'; ?>