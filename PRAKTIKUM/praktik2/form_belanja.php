<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja Online</title>
</head>
<body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <h2 class="m-3">Belanja Online</h2>
    <hr>

    <form class="m-5" method="POST" action="#">
        <div class="form-group row">
            <label for="costumer" class="col-4 col-form-label">Costumer</label> 
            <div class="col-8">
                <input id="costumer" name="costumer" placeholder="Nama Costumer" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Pilih Produk</label> 
            <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv" required="required"> 
                    <label for="produk_0" class="custom-control-label">TV</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas" required="required"> 
                    <label for="produk_1" class="custom-control-label">KULKAS</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin_cuci" required="required"> 
                    <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
            <div class="col-8">
                <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="proses" type="submit" class="btn btn-success">Kirim</button>
            </div>
        </div>
    </form>
    <hr>

    <?php
        $costumer = $_POST['costumer'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];

        // Menentukan Harga barang
        switch ($produk){
            case 'tv':
                $harga = 4200000;
                break;
            case 'kulkas':
                $harga = 3100000;
                break;
            case 'mesin_cuci':
                $harga = 3800000;
                break;
            default:
            $harga = 0;
            break;
        }

        $total_belanja = $harga * $jumlah;

        // Cetak Hasil
        echo "Nama Costumer: $costumer";
        echo "<br>Produk Pilihan: $produk";
        echo "<br>Jumlah Beli: $jumlah";
        echo "<br>Total Belanja: $total_belanja";
    ?>
</body>
</html>