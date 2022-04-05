<html>
<head>
    <meta charset="UTF-8">
    <title>Lista przyjaciół</title>
    <link href="styl.css" rel="stylesheet">
</head>

<body>

<section id="baner">
    <h1>Portal społecznościowy - moje konto</h1>
</section>

<section id="glowny">
    <h2>Moje zainteresowania</h2>
    <ul>
        <li>muzyka</li>
        <li>film</li>
        <li>komputery</li>
    </ul>
    <h2>Moi znajmoi</h2>
    <?php

    $con = new mysqli('localhost', 'root', '', 'dane');
    $query = "SELECT imie, nazwisko, opis, zdjecie FROM osoby WHERE Hobby_id = 1 OR Hobby_id = 2 OR Hobby_id = 6;";
    $result = $con -> query($query);
    while($row = $result->fetch_array())
    {
        echo "<section id='zdjecie'><img src=" . $row["zdjecie"] . " alt= 'przyjaciel'></section>";
        echo "<section id='opis'><h3>" . $row["imie"] . " " . $row["nazwisko"] . "</h3><p>Ostatni wpis: " . $row["opis"] . "</p></section>";
        echo "<section id='linia'><hr></section>";
    }

    $con->close();

    ?>
</section>

<section id="lewy">Stronę wykonał: Krystian Abramek
</section>

<section id="prawy">
    <a href="mailto:ja@portal.pl">napisz do mnie</a>

</section>

</body>

</html>