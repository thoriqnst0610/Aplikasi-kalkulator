<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <style>
        .hasil-operasi{
            background-color: antiquewhite;
            width: 300px;
            height: 30px;
            border: 1px solid;
            margin-left: 40px;
            margin-top: 20px;
            padding-bottom: ;
            
        }
        .kalkulator{
            background-color: #efefef;
            width: 392px;
            margin: 30px auto;
            height: 400px;
            border: 1px solid coral;
            border-radius: 10px;
        }
        *{
            color: blue;
            font-style: italic;
            font-weight: 800;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        .judul{
            padding-left: 120px;
            padding-top: 5px;
            box-shadow: 0dvb;
        }
        h1{
            text-shadow:12 67 09 77;
            font-style: normal;
        }
        .bil1{
            padding-left: 40px;
        }
        .bil2{
            padding-left: 40px;
        }
        input{
            height: 25px;
            width: 300px;
            border: 1px solid coral;
        }
        .operasi{
            padding-left: 10px;
            display: inline;
        }
        .hitung{
            display: inline;
            padding-left: 45px;
            font-style: normal;
        }
        .hitung:hover{
            
        }
        #hitung-1{
            width: 120px;
            border-radius: 10px;
        }
        #hitung-1:hover{
            cursor: pointer;
            background-color: chartreuse;
        }
        .gabung{
            display: inline;
        }
        select{
            padding: 4px;
        }
        textarea{
            margin-top: 20px;
            margin-left: 40px;
            width: 300px;
            padding-top: 15px;
            text-align: center;
            font-size: 20px;
            height: 40px;
        }
    </style>
</head>
<body>
    <div class="kalkulator">
        <div class="judul">
        <h1>Kalkulator</h1>
        </div>
    <form action="kalkulator.php" method="post">
        <div class="bil1">
        <label >bilangan pertama:
            <br>
            <input type="number" name="bil1" required>
        </label>
        </div>
        <br>
        <div class="bil2">
        <label>bilangan kedua:
            <br>
            <input type="number" name="bil2" required>
        </label>
        </div>
        <br>
        <div class="gabung">
        <div class="hitung">
        <input type="submit" name="hitung" value="hitung" id="hitung-1">
        </div>
        <div class="operasi">
        <label >Operasi:</label>
        <select name="operasi">
            <option value="tambah">tambah</option>
            <option value="kurang">kurang</option>
            <option value="bagi">bagi</option>
            <option value="kali">kali</option>
        </select>
        </div>
        </div>
        <br>
    </form>
    <?php 
$hasil = 0;

?>
<?php
if(isset($_POST['hitung']))
{
    if($_POST['operasi'] == "tambah")
    {
        $hasil = $_POST['bil1'] + $_POST['bil2'];
    }elseif($_POST['operasi'] == "kurang")
    {
        $hasil = $_POST['bil1'] - $_POST['bil2'];
    }
    elseif($_POST['operasi'] == "bagi")
    {
        $hasil = $_POST['bil1'] / $_POST['bil2'];
    }
    elseif($_POST['operasi'] == "kali")
    {
        $hasil = $_POST['bil1'] * $_POST['bil2'];
    }
}
?>
    <textarea  cols="30" rows="3">Hasil = <?= $hasil; ?></textarea>
    </div>
    <p></p>
</body>
</html>