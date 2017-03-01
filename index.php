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
    </head>
    <body>

        <div class="main">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <head>
            <h1>NOTEBOOK</h1>
            <p>write your title and notes entry below. then click on the submit button</p>
        </head>

        <section class="note-hold">
            <section class="link-holder">

            <form name="notesForm" action ="php/upload.php" onsubmit="return" method="post">

                <p>
                    <input type="text" name="title" id="title" placeholder="note Title">
                </p>

                <p>
                  <textarea type="text" name="note" id="note" placeholder="your note entry"></textarea>

                </p>
                <input type="submit" id="submitbutton" value="submit note">



                </form>


            </section>


        </section>

           

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        </div>
    </body>
</html>
