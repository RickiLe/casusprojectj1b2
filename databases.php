<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <section id="header">
        <ul id="navbar">
            <li><a class="active" href="index.html">Home</a></li>
            <li><a href="databases.html">Databases</a></li>
        </ul>
        <div>
            <p>EPPEL</p>
        </div>
    </section>

    <table>
        <tr>
            <th>ID</th>
            <th>Voornaam</th>
            <th>Achternaam</th>
            <th>Email</th>
            <th>Telefoonnummer</th>
        </tr>
        <?php
        $conn = mysqli_connect("192.168.56.52","admin","dataserverww","exampleDB");
        $sql = "SELECT * FROM alfa";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result-> fetch_assoc()){
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["voornaam"] . "</td><td>" . $row["achternaam"] . "</td><td>" . $row["email"] . "</td><td>" . $row["tel"] . "</td></tr>";
            }
        } else {
            echo "No results";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>