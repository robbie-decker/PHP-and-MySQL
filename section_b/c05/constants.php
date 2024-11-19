<?php 
include 'includes/settings.php';
include 'includes/header.php';

$statement = new MyClass;

?>

<h1>Welcome to <?= SITE_NAME ?></h1>
<p>To contact us, email <?= ADMIN_EMAIL ?></p>
<p>My test: <?= testing_static() ?></p>
<p>My test: <?= testing_static() ?></p>
<p>My test: <?= testing_static() ?></p>
<p>My test: <?= testing_static() ?></p>
<p>My class test: <?= $statement->print_word() ?></p>
<?php include 'includes/footer.php'; ?> 