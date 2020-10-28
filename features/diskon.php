<html>
<head>
    <title>Tutorial Cara Membuat Script PHP Hitung Diskon</title>
    <style type="text/css">
        #hasil{width:500px;margin:0 auto;padding:5px;font-weight:bold;color:#f00;}
        body{padding:0;margin:0;font-family:arial;font-size:12px;}
        #main-wrapper{border:3px double #faa800;padding:5px;width:550px;margin:20px auto 0;}
        #main{text-align:left;padding:5px;background:#e8eef0;}
        table{font-size:12px;width:450px;}
        #prn{border:1px solid #b3ccf7;background:#c3d9ff;cursor:pointer;padding:2px 24px;}
        h1{font-size:18px;font-weight:bold;padding:10px 0;text-align:center;}
        #efri{font-size:11px;padding:5px 0 0;color:#0000ff;text-align:center;}red{font-weight:bold;color:#f00;}
    </style>
</head>
<body>
    <div id="main-wrapper">
        <div id="main">
            <h1>Hitung Diskon dengan PHP</h1>
            <br />
            <form method="POST" action="">                
                <table>
                    <tr>
                        <td>Masukan Harga</td>
                        <td><input type="text" name="bil1" required/></td>
                    </tr>
                    <tr>
                        <td>Masukan Diskon (Tanpa Tanda %)</td>
                        <td><input type="text" name="bil2" required/></td>
                    </tr>
                    <tr>
                        <td>
                        <label><br><br>
                            <input type="submit" name="Submit" value="Hitung" id="prn">
                        </label>
                        <label>
                            <input type="reset" name="reset" value="Batal" id="prn">
                        </label>
                        <label>
                             <a href="./">Hitung Ulang</a>
                        </label>
                        </td>
                        <td></td>
                    </tr>
                </table>
            </form>
            <div id="hasil">
                <?php error_reporting (E_ALL ^ E_NOTICE);
                    $harga    =$_POST['bil1'];
                    $diskon    =$_POST['bil2'];
                    
                    $nilai=($diskon/100)*$harga;
                    echo 'Nominal diskon ';echo $diskon;echo'% dari '; echo number_format($harga,2,",","."); echo' adalah sebesar <u>';echo number_format($nilai,2,",",".");echo'</u>';
                ?>
            </div>
        </div>
    </div>
</body>
</html>