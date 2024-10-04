<?php require_once('inc/header.php'); ?>

<?php
    if(file_exists("database/user.json"))
    {
        $user = file_get_contents("database/user.json");
        $user_data = json_decode($user, true);
    }
    else
    {
        $user = file_get_contents("https://jsonplaceholder.typicode.com/comments");
        $data =file_put_contents("database/user.json", $user);
        $user_data = json_decode($user, true);
    }
    
?>
    <table>
    <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Email</th>
      <th>Body</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($user_data as $key => $value) : ?>
    <tr>
      <th scope="row"><?php echo $value["postId"] ?></th>
      <td><?php echo $value["name"] ?></td>
      <td><?php echo $value["email"] ?></td>
      <td><?php echo $value["body"] ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
        </table>





<?php require_once('inc/footer.php'); ?>