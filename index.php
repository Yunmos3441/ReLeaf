<?php require_once('admin/private/initialize_f.php');

include('h_f/header.php');
?>

<main>

    <p>Releaf is coming soon!</p>

    <?php if (user_is_logged_in()) { ?>
        <h2 style="margin: auto; width: 60%; padding: 10px;">Hi <?php echo $_SESSION['nickname']; ?>!</h2>
    <?php } ?>
    <p></p>
</main>

<br><br><br><br>

<?php include('h_f/footer.php'); ?>