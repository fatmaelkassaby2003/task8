    <?php 
    if(isset($_GET['name']))
    {
         $name = $_GET['name'];
    $email = $_GET['email'];
    $password = $_GET['password'];

    $user=[$name,$email,$password];
    $file = json_decode(file_get_contents("users.json"),true);
    $file[]=$user;

    file_put_contents("users.json",json_encode($file));

    }
   
