<?PHP
if(isset($_GET['first name'])){

 echo $_GET['first_name'] ;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>examples of GET and POST</title>
</head>
<body>
    <form method ="get" action ="formfetch.php"> 
        <input type="text" name="first_name" placeholder="firstname">
        <input type="text" value="lastname" placeholder="lastname">
        <input type="submit" value="submit">
    </form>
</body>
</html>