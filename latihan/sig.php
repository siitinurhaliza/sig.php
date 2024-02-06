<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aplikasi sistem informasi</title>
</head>
<body>
    <body bgcolor="black" text="white">
        <h1>"hallo dunia"</h1>
<?php
$filecounter = "counter.txt";
$fileload = fopen($filecounter,"r+");
$hit = fread ($fileload, filesize($filecounter));

echo("<table width=250 align=center border=1
cellspacing = 0 cellpadding = 0
bordercolor = #0000ff> <tr>");

echo("<td width = 250 valign= middle align=center>");
echo("<fontface = verdana size = 2 color =#ff0000><br>");
echo("Anda Pengunjung yang ke: ");
echo ($hit);
echo("</b></font>");
echo("</td>");
echo("</tr></table>");


$fl = fopen($filecounter, "w+");
$hit=$hit+1;
fwrite($fl, $hit, strlen($hit));
fclose($fl);

echo "nama : siti nurhaliza <br>";
echo "alamat : jalan sepakat <br>";
echo "tempat tanggal lahir : pangkalan kerinci, 30 april 2004 <br>";
echo "no hp : 08974395648 <br>";


?>
</body>
</html>
