<!DOCTYPE html>
<html lang="en">
<!-- coba lalala -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cekdata</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
    <header class="bg-primary text-white">
        <div class="row">
            <div class="col-6 py-4 ml-4 text-center">
                <h1 class="display-5">Cek Data Customer</h1>
                <p class="lead">Muhammad Najmi Rahmani - 2200018187</p>
            </div>  
        </div>
    </header>

<body>
    <div class="col-4 mb-3 border">    
        <?php
        $file = fopen("data.txt", "r");
        
        while(true)
        {
            $line = fgets($file);
            if($line == null)break;
            else {
                echo "$line <br>";
            }
            
        }
        
        fclose($file);
        ?>
    </div>

    <footer class="bg-light">
        <div class="row">
            <div class="col-12 py-4">
                Ini Footer
            </div>
        </div>
    </footer>
</body>
</html>