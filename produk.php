<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
<div class="row justify-content-between">
    <div class="col-10"><b>Kategori </b></div>
    <div class="col-2 d-flex justify-content-end align-items-end">
        <button class="btn btn-dark btn-sm" type="button">add</button>
    </div>
</div>
<hr>
<table class="table table-sm border border-dark">
    <thead class="thead-dark">
        <tr>
            <th scope="col" width="5%">No</th>
            <th scope="col">Nama</th>
            <th scope="col" width="12%">Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $que = "SELECT * FROM produk";
    $select = mysqli_query($con, $que);
    while($data = mysqli_fetch_array($select)) {
        echo "<tr>";
        echo "<th scope='row'>" . $data['id_produk'] . "</th>";
        echo "<td>" . $data['nama_produk'] . "</td>";
        echo "<td>" . $data['harga'] . "</td>";
        echo "<td>" . $data['gambar'] . "</td>";



        echo "<td>";
        echo "<button class='btn btn-dark btn-sm' type='button'>edit</button>";
        echo "<button class='btn btn-dark btn-sm' type='button'>delete</button>";
        echo "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
</body>
</html>