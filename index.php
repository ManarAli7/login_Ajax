<?php
include 'db_connect.php';

/*$createTable1 = "CREATE TABLE IF NOT EXISTS books (id_book INT NOT NULL AUTO_INCREMENT PRIMARY KEY, name_book VARCHAR(255) NOT NULL, 
    name_author VARCHAR(255) NOT NULL, price VARCHAR(255) NOT NULL)";

    $conn->exec($createTable1);
    if($createTable1) {
        echo "Table Created!<br /><br />";
    } else {
        echo "Table Not Created!<br /><br />";
    }
    */

    /*$createTable2 = "CREATE TABLE IF NOT EXISTS clients (id_user INT NOT NULL AUTO_INCREMENT PRIMARY KEY, username VARCHAR(255) NOT NULL, 
        email VARCHAR(255) NOT NULL, id_book INT NOT NULL, FOREIGN KEY(id_book) REFERENCES  books(id_book))";

    $conn->exec($createTable2);
    if($createTable2) {
        echo "Table Created!<br /><br />";
    }else {
        echo "Table Not Created!<br /><br />";
    }*/

    /*$sql = $conn-> prepare('INSERT INTO books(name_book, name_author, price) VALUES("غربة الياسمين","خولة حمدي","5$")');
    $sql->execute();
    if($sql) {
        echo "Insert Into Table<br /><br />";
    }else {
        echo "Table Not Insert!<br /><br />";
    }*/

    /*$sql = $conn-> prepare('INSERT INTO clients(username, email, id_book) VALUES("ali", "ali@gmail.com","2")');
    $sql->execute();
    if($sql) {
        echo "Insert Into Table<br /><br />";
    }else {
        echo "Table Not Insert!<br /><br />";
    }*/

    /*$sqldelete = $conn-> prepare("DELETE FROM books WHERE id_book=7");
    $sqldelete->execute();
    if($sqldelete) {
        echo "Delete from Table<br /><br />";
    }else {
        echo "Table Not Delete!<br /><br />";
    }*/
    $sqlselect = $conn->query('SELECT books.id_book, name_book, name_author, price, username, email 
                                    FROM books INNER JOIN clients ON  books.id_book = clients.id_book ')->fetchAll(); //inner or left or right
    if($sqlselect) {
        foreach($sqlselect as $row) {
            echo $row['id_book']." --- ";
            echo $row['name_book']." --- ";
            echo $row['name_author']." --- ";
            echo $row['price']." --- ";
            echo $row['username']." --- ";
            echo $row['email']."<br />\n";
        }
    }else {
        echo "Table Not Select!<br /><br />";
    } 

    