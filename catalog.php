<?php include "header.php"; ?>
<!-- // TODO: load all the data from the database... -->
<h1>Clothing Catalog</h1>
<div id="itemList">
<?php
    require('dbh.inc.php');

    $query = 'select * from clothing_data';
    $result = mysqli_query($conn, $query);

    if($result) {
        $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_free_result($result);

        foreach($posts as $post) {
            echo "<div id='item'><img src='" . $post['clothingImage'] . "'</img>";
            echo "<p>" . $post['name'] . "</p>";
            echo "<p>ID " . $post['clothingID'] . "</p>";
            echo "<div>";
        }
    } else {
        echo "Error - could not retrieve clothing data";
    }
    mysqli_close($conn);
?>
</div>

<?php include "footer.php"; ?>