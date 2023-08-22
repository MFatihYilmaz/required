

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
            <option value="files/secret">Secret File</option>
            <option value="files/system">System File</option>
            <option value="files/settings">Settings File</option>
            <option value="files/info">info File</option>
        </select>
    <button type="submit">Submit</button>
    </form>    

<div>
<?php

if(isset($_GET["ext"]) && isset($_GET["file"])){
    include("./".$_GET["file"].$_GET["ext"]);
}elseif(isset($_GET["file"])){
    include("./".$_GET["file"].".php");
}else{
 include("index.php");   
}


?>

</div>

</body>
</html>
<?php 
