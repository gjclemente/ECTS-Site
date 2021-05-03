<?php
    session_start();

    require_once "config.php";
?>

<!DOCTYPE html>

<html lang='en' xmlns='http://www.w3.org/1999/xhtml'>
    <head>
        <meta charset='utf-8' />
        <?php
            $myfile = fopen("includes.inc", "r");
            echo fread($myfile,filesize("includes.inc"));
            fclose($myfile);
        ?>
    </head>
    <body>
        <?php
                $myfile = fopen("navbar.inc", "r");
                echo fread($myfile,filesize("navbar.inc"));
                fclose($myfile);
        ?>

        <?php
                $myfile = fopen("slideshow.inc", "r");
                echo fread($myfile,filesize("slideshow.inc"));
                fclose($myfile);
        ?>

        <div>
            <div class="container nunitoRegular">
                <section class="row parallax" id="welcome">
                    <h1>Welcome to ECTS Computer Programming</h1>
                </section>
            </div>

            <div class="container">
                <div class="row parallax">
                    <div class="col-md-8 order-2 order-sm-2 order-md-1">
                        <h2 class="nunitoLight">Level 1</h2>
                        <p class="nunitoExtraLight">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                    </div>
                    <div class="col-md-4 order-1 order-sm-1 order-md-2">
                        <img class="lvlimg" src="https://complianz.io/wp-content/uploads/2019/03/placeholder-300x202.jpg">

                    </div>


                </div>
            </div>

            <div class="container">
                <div class="row parallax">
                    <div class="col-md-4 col-lg-4">
                        <img class="lvlimg" src="https://complianz.io/wp-content/uploads/2019/03/placeholder-300x202.jpg">
                    </div>

                    <div class="col-md-8 col-lg-8">
                        <h2 class="nunitoLight">Level 2</h2>
                        <p class="nunitoExtraLight">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</pclass="poppinsLight">

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row parallax">
                    <div class="col-md-8 order-2 order-sm-2 order-md-1">
                        <h2 class="nunitoLight">Level 3</h2>
                        <p class="nunitoExtraLight">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                    </div>

                    <div class="col-md-4 order-1 order-sm-1 order-md-2">
                        <img class="lvlimg" src="https://complianz.io/wp-content/uploads/2019/03/placeholder-300x202.jpg">
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>