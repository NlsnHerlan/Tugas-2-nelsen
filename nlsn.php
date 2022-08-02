<?php
    $dbh = new PDO('mysql:host=localhost;dbname=cekulah','root','');

    $query = $dbh->query("select * from siswa");
   
?>

<h1>Data Nelsen</h1>

<?php while($result = $query->fetch()){ ?>
        <p><?= $result['nama']; ?>
<?php } ?>