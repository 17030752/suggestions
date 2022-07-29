<?php 
use d17030752\Suggestions\models\Suggestion;
require_once 'src/models/Suggestions.php';
if (isset($_POST['q'])) {
    # code...
    $q = $_POST['q'];
    Suggestion::saveSearch($q);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suggestions</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <input type="text" name="q" id="">
        </form>
        <div class="suggestions">
            <?php 
            $suggestions =Suggestion::getSuggestions();
            foreach ($suggestions as $suggestion) {
                # code...
                echo "<div>{$suggestion['title']}</div>";
            }
            ?>
        </div>
    </div>
</body>
</html>