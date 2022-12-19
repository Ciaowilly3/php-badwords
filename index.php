<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Badwords</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- <link rel="stylesheet" href="css/style.css"> -->
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    </head>
    <body class="bg-dark">
        <div class="container">
            <h1 class="text-center text-primary mb-5">No Badwords</h1>
        </div>
        <div class="container d-flex justify-content-center">
            <form action="censurer.php" method="POST">
                <legend>Inserisci un testo e una parola da censurare</legend>
                <div class="mb-3">
                    <textarea class="form-control" name="userText" id=""></textarea>
                </div>
                <div class="mb-3">
                    <input type="text" name="badWord" placeholder="Badword">
                </div>
                <button class="btn btn-secondary">Invia</button>
            </form>
        </div>
        <script src="js/main.js"></script>
    </body>
</html> (