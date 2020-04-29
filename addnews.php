<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["action"] == "Addnews") {
    $conn = new PDO('mysql:host=localhost; dbname=posts', 'root');
    $Statement = $conn->prepare('INSERT into `post` SET `title`=:satauri,`image`=:image , `author`=:author , `summary`=:texti, `category`=:category');
    try {

        $Statement->execute([
            ':satauri' => $_POST['satauri'],
            ':image' => $_POST['imagi'],
            ':author' => $_POST['author'],
            ':texti' => $_POST['texti'],
            ':category' => $_POST['category']
            ]);

    } catch (Exception $err) {
        echo $err->getMessage();
    }
}
?>
<html>

<head>
    <title> pagename</title>
    <style>
        .field {
            display: block;
        }

        .Form {
            margin-left: auto;
            margin-right: auto;
            display: block;
            width: 60%;
        }
    </style>
</head>

<body>
    <form class="Form" action="/blog/addnews.php" method="post">
        <input type="hidden" name="action" value="Addnews">
        <input type="text" name="satauri" placeholder="teqsti" class="field Newstext">
        <input type="text" name="imagi" placeholder="surati" class="field Newsimage">
        <input type="text" name="author" placeholder="avtori" class="field Newsauthor">
        <input type="text" name="category" placeholder="categoria">
        <textarea name="texti" cols="30" rows="10"></textarea>
        <button type="submit">Submit</button>
    </form>
</body>

</html>