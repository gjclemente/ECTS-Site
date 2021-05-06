<?php
    session_start();

    require_once "config.php";

?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
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

        <div class="container" id="quotes">
            <div class="row centered">
                <p class="nunitoReg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>

            <div class="row nunitoReg" id="reviews">
                
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $.ajax({
                    'url' : 'php/getReviews.php',
                    'type' : 'POST',
                    'data': {
                        //year: 2021,
                        limit: 5,
                        active: 1
                    },
                    'success' : function(data) {              
                        //alert('Data: '+data);

                        for (let i=0; i < data["results"].length; i++){
                            $insert = $('<div class="col-md-6 reviewText"><figure class="quote"><blockquote>' + data["results"][i]["review_text"] + '</blockquote><figcaption  class="nunitoLight">&mdash; ' + data["results"][i]["student_name"] + ', <cite>ECTS CMP Student Class of ' + data["results"][i]["student_year"] + '</cite></figcaption></figure></div>');
                            $("#reviews").append($insert);
                        }
                        
                     },
                    'error' : function(request,error)
                    {
                        alert("Request: "+JSON.stringify(request));
                    }
                });
            });
        </script>
    </body>

</html>