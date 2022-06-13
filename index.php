<html>
<head>
    <title>TEST WEB Sakana</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
<div class="container">
    <div class="vertical-center">
        <button class="button-5" data-href="data.php">Tourner le dé !</button>
    </div>
    <div id="results">
        <?php include('data.php'); ?>
    </div>
</div>

<footer>By Sami pour Sakana</footer>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('button.button-5').click(function(){
            scriptUrl = $(this).attr('data-href');
            $.post(scriptUrl, function(response){
                $('#results').html(response);
            });
        });
    });
</script>
</body>
</html>
