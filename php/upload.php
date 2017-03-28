<?php 
    include_once 'dbconnect.php';
 ?>   
<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>persistent data storges</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <link href="style.css" rel="stylesheet" type="text/css"/>
         <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <div class="main">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <header>
            <h1>DREAMTIME NOTEBOOK</h1>
            <a href="../index.php">HOME</a> <a href="notes.php">notes</a>
        </header>

        <section class="notes-hold">

            <?php



              $title = mysqli_real_escape_string($db, $_POST['title']);
              $note = mysqli_real_escape_string($db, $_POST['note']);

              $note_insert = "INSERT INTO DreamNotes (title, note) VALUES ('$title', '$note')";

              if (mysqli_query($db, $note_insert)){
                echo '<br>DEBUG / success: notes add to database';
              } else {
                echo '<br>DEBUG / failed. could not execute because: ' . mysqli_error($db);
              }

              $db -> close();



            ?>


        </section>

          </div>

      </body>
      </html?






















