<?php
    include "connect.php";

    $sql = "SELECT * FROM kategori";
    $stmt = $koneksi->query($sql);
    $ktgri = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Youtuber</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Channel=channel, Jumlah Subs=subscriber, Kategori=id_kategori-->
    <div class="m-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header bg-primary">
                            <h1 class="text-center font-weight-light my-4"><b>Form YouTuber</b></h1>
                        </div>
                        <div class="card-body">
                            <form action="insert.php" method="post">
                                <div class="form-group row">
                                    <label for="nama" class="col-4 col-form-label">Nama/Channel</label> 
                                    <div class="col-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-youtube-square"></i>
                                        </div>
                                        </div> 
                                        <input id="nama" name="channel" type="text" class="form-control" required="required">
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="subs" class="col-4 col-form-label">Jumlah Subscriber</label> 
                                    <div class="col-8">
                                    <input id="subs" name="subscriber" type="number" required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kategori" class="col-4 col-form-label">Kategori</label> 
                                    <div class="col-8">
                                    <select id="kategori" name="id_kategori" class="custom-select" required="required">
                                        <option value="">- Isi kategori -</option>
                                        <?php
                                            foreach($ktgri as $kat) {
                                                echo "<option value='" . $kat['id'] . "'>" . $kat['nama_kategori'] . "</option>";
                                            }
                                        ?>
                                    </select>
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
