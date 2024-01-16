<?php 
require('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="Content-Type" content="рыжов; апт; билли; фильм; новости;"> 
    <meta name="description" content="Сайт о новостях апт"> 
</head>
<body>

    <header>
    <h1>Новости АПТ</h1>
    </header>
    <div class="pag">
        <?php
        $limit = 5;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $result = $conn->query("SELECT * FROM contents");
        $total = $result->num_rows;
        $pages = ceil($total/5);
        $offset = ($page-1) * $limit;
        $sql = "SELECT * FROM contents LIMIT $limit OFFSET $offset";
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {
            echo "<div class='dd' style='display: flex; border: 1px solid black;'><div>";
    echo "<h2>" . $row['name'] . "</h2>";
    echo "<p class='sx'>" . $row['osn'] . "</p></div>";
    echo "<img width='300px' hight='300px' src='" . $row['img'] . "' alt=''>";
    echo "</div>";
        }
        ?>

        <?php
        if ($page > 1) {
            $prevPage = $page - 1;
            echo "<a href='index.php?page=" . $prevPage . "'><button>Previous</button></a>";
        }
    
        // Add "Next" button for next page
        if ($page < $pages) {
            $nextPage = $page + 1;
            echo "<a href='index.php?page=" . $nextPage . "'><button>Next</button></a>";}
            
        ?>
    </div>
</body>
</html>