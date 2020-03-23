<?php
$input = $_GET["red1"].",".$_GET["green1"].",".$_GET["blue1"]."/".
         $_GET["red2"].",".$_GET["green2"].",".$_GET["blue2"]."/".
         $_GET["red3"].",".$_GET["green3"].",".$_GET["blue3"]."/".
         $_GET["red4"].",".$_GET["green4"].",".$_GET["blue4"]."/".
         $_GET["red5"].",".$_GET["green5"].",".$_GET["blue5"]."/".
         $_GET["red6"].",".$_GET["green6"].",".$_GET["blue6"]."/".
         $_GET["red7"].",".$_GET["green7"].",".$_GET["blue7"]."/".
         $_GET["red8"].",".$_GET["green8"].",".$_GET["blue8"]."/".
         $_GET["red9"].",".$_GET["green9"].",".$_GET["blue9"];


// mengirimkan variabel input ke python
$command = escapeshellcmd('python C:\xampp\htdocs\phpXpython\main_ui\test.py '.$input);
// mengambi output dari python, berupa nama2 file
$output = shell_exec($command);

$arr_img = explode("|",$output);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="manifest" href="/site.webmanifest">
    <!-- CSS -->
    <link rel="stylesheet" href="./public/css/index0.css" />
    <!-- CSS -->
    <title>Web Profile</title>
</head>

<body>

    <main id="content">

        <div id="artworks" class="gallery-title">
            <h2>Result</h2>
            <div class="gallery-container">

              <!-- menampilkan gambar -->
              <?php for ($kk=0; $kk < 5; $kk++): ?>
              <div class="gallery-grid">
              <?php
                  for ($i=0; $i < count($arr_img)-1; $i++) {
                    if ($i % 5 == $kk) {
                      echo '<img src="./public/images/'.$arr_img[$i].'" style="width:100%" />';
                    }
                  }
                ?>
               </div>
             <?php endfor; ?>
            </div>
        </div>
    </main>



</body>

</html>
