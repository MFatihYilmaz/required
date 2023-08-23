

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Search</title>
</head>
<body>
    <form action="content.php" method="get">
        <h3>Get file</h3>
        <select name="file" id="">
            <option value="secret">Secret File</option>
            <option value="system">System File</option>
            <option value="settings">Settings File</option>
            <option value="info">info File</option>
        </select>
    <button type="submit">Submit</button>
    </form>    

<div>
<?php
$ext=(isset($_GET["ext"]))?$_GET["ext"]:".php";
if(isset($_GET["file"])){
    include("./".$_GET["file"].$ext);
}

?>

</div>

</body>
</html>
<?php 
