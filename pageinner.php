<?php
session_start();
require 'php/db_connect.php';


if((isset($_SESSION['user'])&&isset($_SESSION['password'])) )
{

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <title>Page Inner</title>
</head>

<body>
    <table> 
        <caption>Inner Join</caption>
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Name Book</th>
            <th>Name Author</th>
        </tr>
            <?php
        $sqlselect = $conn->query('SELECT books.id_book, name_book, name_author, username 
                                    FROM books INNER JOIN clients ON  books.id_book = clients.id_book ')->fetchAll(); //inner or left or right
        if($sqlselect) {
        foreach($sqlselect as $row) {

            $id = $row["id_book"];
            $user = $row["username"];
            $name_book = $row["name_book"];
            $name_author = $row["name_author"];

            echo "  <tr>
            <td>$id</td>
            <td>$user</td>
            <td>$name_book</td>
            <td>$name_author</td>
        </tr>";
        }
    }
        else {
            echo "Table Not Inner Join !<br /><br />";
        } 
        $conn = null;
        ?>
    </table>
</body>

</html>
<?php
}
else
header('location:index.html');
?>