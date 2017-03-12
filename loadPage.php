<html>
    <head>
        <meta charset="UTF-8">
            <title>View All Books</title>
            <link rel="stylesheet" type="text/css" href="assets/style.css">
    </head>
    <body>
    <?php
        include 'dbConnect.php';
            $sql = "SELECT * FROM books";
            $results =$sql->query($sql);
            echo "<table>";
            while ($row = $results->fetch_array()){
                echo"<tr><td>".$row['Isbn-10']."</td><td>".$row['Isbn-13']."</td><td>".$row['Author']."</td><td>"
                .$row['Title']."</td><td>".$row['Language']."</td><td>".$row['PublicationDate']."</td><td>"
                .$row['Publisher']."</td><td>".$row['Price']."</td></tr>";
                }
            echo"</table>";
        ?>

    </body>
</html>

