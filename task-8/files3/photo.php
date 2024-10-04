<?php require_once('inc/header.php'); ?>

<?php
    if(file_exists("database/photo.json"))
    {
        $user = file_get_contents("database/photo.json");
        $user_data = json_decode($user, true);
    }
    else
    {
        $user = file_get_contents("https://jsonplaceholder.typicode.com/photos");
        $data =file_put_contents("database/photo.json", $user);
        $user_data = json_decode($user, true);
    }
    
?>
    <h1 class="text-center">All Photos</h1>
    <div class="container ">
    <div class="row p-3">

    <?php foreach($user_data as $key => $value) : ?>

    <div class="card mb-3 p-3" style="width: 18rem;">
    <div class="card-body text-center ">
    <h5 class="card-title"><?php echo $value["title"] ;?></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary"> <?php echo $value["url"] ?></h6>
    <p class="card-text"><?php echo $value["thumbnailUrl"] ?></p>
    </div>
    </div>
    <?php endforeach; ?>
    
    </div>
    </div>
<?php require_once('inc/footer.php'); ?>