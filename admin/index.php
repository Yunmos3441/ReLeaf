<?php require_once('private/initialize_b.php');

admin_require_login();
$page_title = 'Releaf';

$adminuser = get_admin_by_id($_SESSION['admin_id']);
$total_user_count = get_total_user();

include('h_f/header.php');
?>


<div class="login_div">
<br>
    <h2 style="margin: auto; width: 60%; padding: 10px;">Hi <?php echo $adminuser['username']; ?>!</h2>

</div>

<main>
    <h3>Main</h3>
    <h3>Total user count in database: <?php echo $total_user_count['count']; ?></h3>
</main>

<br>

<?php include('h_f/footer.php'); ?>