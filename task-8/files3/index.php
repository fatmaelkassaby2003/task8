<?php require_once('inc/header.php'); ?>

<?php  if(file_exists("database/index.json")) {
    $photo = file_get_contents("database/index.json");
    $description_save = json_decode($photo, true);
}
?>

<h1 class="text-center my-5">Welcome Everyone</h1>
<div class="container text-center">
    <div class="row text-center">
    <!-- <center> -->
        <?php foreach($description_save as $key => $value) : ?>
<div class="card rounded mx-auto d-block mb-3" style="width: 18rem;">
  <img src="<?php echo $value["url"]; ?>" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">Eraa Soft</h5>
    <p class="card-text"><?php echo $value["des"]; ?></p>
    <a href="<?php echo "user.php" ?>" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<?php endforeach; ?>
    <!-- </center> -->
    </div>
</div>

<?php require_once('inc/footer.php'); ?>