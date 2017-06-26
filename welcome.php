<!DOCTYPE>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/welcomestyle.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="overlay"></div>
        <header>

        </header>

        <div id="welcome">
            <div id="welcome1">
                <a id="welcome2" href="index.php">
                    <span>
                        TO STARS!
                    </span>
                </a>
            </div>
        </div>

        <script>
            $(document).ready(function(){
                $('#welcome2').on('mouseover', function(e){
                    $('.overlay').addClass('not-hidden');
                });
                $('#welcome2').on('mouseout', function(e){
                    $('.overlay').removeClass('not-hidden');
                });
            });
        </script>
    </body>

</html>
