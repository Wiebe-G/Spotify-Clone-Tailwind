<?php
// Doel: Alle bestanden in een mooie lijst zetten, met directories die openen
$SongDir = "./Songs";
$Songs = array_diff(scandir($SongDir), array('.', '..'));
$DirectoryIterator = 1;

foreach ($Songs as $x) {
    // echo "$DirectoryIterator: $x\n";
    $DirectoryIterator++;
}


?>

<html>

<head>
    <title>Spotify Clone</title>
    <link rel="stylesheet" href="./dist/output.css">
</head>

<body>
    <div class="flex flex-col h-screen">
        <div id="TopBar" class="bg-gray-600 w-screen flex">
            <h1 class="text-white align-middle">Top balk</h1>
        </div>
        <div class="flex grow">
            <div id="SideBar" class="relative justify-center align-middle h-screen w-25 bg-gray-600 text-white">
                <h1 class=" h-full">Hier playlists</h1>
            </div>

            <div id="MainContent" class="bg-gray-400 flex-1">
                <p>Test</p>
            </div>
        </div>
    </div>
    <script src="./dist/index.js"></script>
</body>

</html>