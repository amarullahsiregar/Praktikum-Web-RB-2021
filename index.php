<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form card" style="width:50%;">
        <header>
            <h1 class="judul">Belanja Buah</h1>
        </header>
        <section class="content">
            <form action="submit">
                <p>
                    <label for="mangga">Mangga (Rp15.000)</label>
                    <input type="number" id="mangga" onchange="setNilai()"><br>
                </p>
                <p>
                    <label for="jambu">Jambu (Rp13.000)</label>
                    <input type="number" id="jambu" onchange="setNilai()"><br>
                </p>
                <p>
                    <label for="salak">Salak (Rp10.000)</label>
                    <input type="number" id="salak" onchange="setNilai()"><br>
                </p>
                <p>
                    Total Harga :
                    <input id="total">
                </p>
                <input type="submit" value="Kirim">
            </form>
        </section>
    </div>
</body>

<script>
    function setNilai() {
        var jumlah = document.getElementById("total");
        var mangga = document.getElementById("mangga").value * 15000;
        var jambu = document.getElementById("jambu").value * 13000;
        var salak = document.getElementById("salak").value * 10000;
        jumlah.value = mangga + jambu + salak;
    }
</script>

</html>