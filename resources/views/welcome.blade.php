<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome Page</title>
        <style>
            .p_tdbr{
                border:1px dashed black;
            }
            header{
                height: 120px;
                background-color:#D3D3D3;
                color:#fff;
            }
            main{
                height:300px;
                background-color:#F8F6F0;
                color:black;
            }
            footer{
                height: 100px;
                background-color:#000;
                color:#fff;
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
       <div class="container">
            <header class="text-center  fs-1">Welcome Page</header>
            <main> <h1 class="text-center">Welcome {{ session('username') }}</h1></main>
            <footer class="text-center  fs-1">Footer</footer>
       </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>