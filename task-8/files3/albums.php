<?php require_once('inc/header.php'); ?>
<?php
if (file_exists("database/albym.json")) {
    $album = file_get_contents("database/albym.json");
    $data = json_decode($album, true);
} else {
    $album = file_get_contents("https://jsonplaceholder.typicode.com/albums");
    $file_new = file_put_contents("database/albym.json", $album);
    $data = json_decode($file_new, true);
}
?>
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

<?php require_once('inc/footer.php'); ?>