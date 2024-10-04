<?php require_once('inc/header.php'); ?>
<?php
if (file_exists("database/albym.json")) {
    $album = file_get_contents("database/albym.json");
    $data = json_decode($album, true);
} else {
    $album = file_get_contents("https://jsonplaceholder.typicode.com/albums");
    $file_new = file_put_contents("database/albym.json", $album);
    $data = json_decode($album, true);
}
?>
<h1 class="text-center my-5">All Albums</h1>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 200px ; width: 300px " >
    <div class="row">
        <table>
            <thead>
                <tr>
                    <th class="p-2">User_ID</th>
                    <th class="p-2">id</th>
                    <th class="p-2">Title</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $key => $value) : ?>
                    <tr>
                        <td class="p-2"><?php echo $value["userId"] ?></td>
                        <td class="p-2"><?php echo $value["id"] ?></td>
                        <td class="p-2"><?php echo $value["title"] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once('inc/footer.php'); ?>
