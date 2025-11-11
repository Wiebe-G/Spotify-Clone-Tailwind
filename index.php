<?php
// Doel: Alle bestanden in een mooie lijst zetten, met directories die openen
$SongDir = "./Songs";
$Songs = array_diff(scandir($SongDir), array('.', '..'));
$DirectoryIterator = 1;

foreach ($Songs as $x) {
    echo "$DirectoryIterator: $x\n";
    $DirectoryIterator++;
}


?>

<html>

<head>
    <Title>Spotify Clone</Title>
    <link rel="stylesheet" href="./dist/output.css">
</head>

<body>
    <p>Test</p>
</body>

</html>