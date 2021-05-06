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

        <div class="container centered">
            <img  id="enrollImage" src="enroll-now.png" />
        </div>

        <div class="container">
            <div class="row"  id="enrollInfo">
                <div class="row centered">
                    <p class="nunitoLight centered">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                    <br />
                    <br />

                    <a class="nunitoReg centered" href="https://www.ects.org/apply/" target="blank">Link to ECTS Admissions Process</a>
                    <br />
                    Click the Icon to Download Application
                
                    <a  href="Application_Form.pdf" target="blank"><img id="pdfImage" src="https://www.iconpacks.net/icons/2/free-pdf-download-icon-3388-thumb.png" /></a>
               
                    </p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>