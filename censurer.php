<?php
$text = $_POST["userText"];
$badWord = $_POST["badWord"];

$censuredText = str_replace($badWord, "***", $text);
?>
<head>
    <title>Badwords</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark">
    <div class="container">
        <h1 class="text-center text-primary">BadWors cutter</h1>
        <h6 class="text-center text-warning">la lunghezza del testo inserito è <?php echo strlen($text) ?></h6>
        <h5 class="text-center text-warning mt-3 mb-2">Il testo censurato:</h5>
        <p class="text-white text-center"><?php echo $censuredText ?></p>
    </div>    
</body>
