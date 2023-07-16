<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Layout 1 Kolom</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
    <header class="bg-primary text-white">
        <div class="row">
            <div class="col-6 py-4 ml-4 text-center">
                <h1 class="display-5">PROGRAM JASA PENGIRIMAN</h1>
                <p class="lead">Muhammad Najmi Rahmani - 2200018187</p>
            </div>
        </div>
    </header>

<body>
    <script>        
        function tampil(){
            var jarak = document.getElementById("jarak").value;
            var hasil = jarak * 15000;
            alert("Biaya yang harus anda bayar adalah :" + hasil);
            }
    </script>
    <main class="col-6 border mb-4">
        <div class="row">
            <div class="col-12 py-2 ">
                <p>Gito merupakan seorang pemilik jasa pengiriman. Dia ingin membangun sebuah website untuk
                    mempermudah usahanya. Gito ingin sebuah website yang bisa memberikan informasi berapa
                    biaya pengirimian (Gunakan rumus Total = Jarak (Dalam km) x Rp.15000) yang dihitung sesuai
                    dengan jarak pengiriman. Kemudian setiap customer menggunakan fitur mencari biaya
                    pengiriman website akan otomatis menyimpan apa yang mereka inputkan kedalam file .txt yang
                    nantinya Gito bisa mengecek data yang terdapat pada file .txt dalam sebuah file halaman khusus.</p>
            </div>
        </div>    
    </main>

    <div class="mb-4">
        <form action="cetakdata.php" method="post">
        <div class="row g-4">
            <div class="col-auto">
                <label class="form-label visually-hidden" for="formcontrolinput1">Masukkan Jarak yang ditempuh</label>
                <input type="number" class="form-control mb-3 border-primary" name="jarak" id="jarak" placeholder="Masukkan Jarak (KM)">
            </div>
        
            <div class="col-auto" >
                <button type="submit" class="btn btn-primary" onclick="tampil()">Submit</button>
            </div>
        </div>
        </form>    
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