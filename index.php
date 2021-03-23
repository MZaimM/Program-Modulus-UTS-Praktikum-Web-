<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>Program Modulus</title>
</head>
<body>
    <!-- Bagian Top -->
    <nav>
        <ul>
            <li class="uts">UTS Praktikum Web-C</li>
            <li class="nama">Muhammad Zaim Maulana (19650058)</li>
        </ul>
    </nav>
    <!-- Akhir Bagian Top -->
    <!-- Header -->
    <header></header>
    <!-- Akhir header -->
    <!-- Pembungkus Halaman Web -->
    <div class="pembungkus">
        <!-- Bagian Konten -->
        <div class="konten clearfix">
            <!-- Bagian Form -->
            <form action="index.php" name="kirim" method="post">
                <table bor>
                    <tr>
                        <td>
                            <label for="angka1">Nilai A</label><br>
                            <input type="text" name="angka1" 
                                value= <?php 
                                $angka1 = $_POST['angka1'];
                                echo $angka1 
                                ?>
                            >
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="angka2">Nilai B</label><br>
                            <input type="text" name="angka2" 
                                value = <?php 
                                $angka2 = $_POST['angka2'];
                                echo $angka2 
                                ?>
                            >
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Bagi" onclick="hitungModulus()"></td>
                    </tr>
                </table>
                <h2 class="hasil">Hasil  
                    <?php 
                        require('hitung.php');
                        echo hitungModulus();
                    ?> 
                </h2>
            </form>
            <!-- Akhir bagian Form -->
        </div>
        <!-- Akhir Bagian Konten -->
        <!-- footer -->
        <footer>
            <p>Copyright &#169; 2021 Muhammad Zaim Maulana</p>
        </footer>
        <!-- akhir footer -->
    </div>
    <!-- Akhir Pembungkus Halaman Web -->
</body>
</html>