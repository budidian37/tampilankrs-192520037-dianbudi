<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Data</title>
</head>
<style>
#data-mhs {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#data-mhs td,
#data-mhs th {
    border: 1px solid #ddd;
    padding: 8px;
}

#data-mhs tr:nth-child(even) {
    background-color: #f2f2f2;
}

#data-mhs tr:hover {
    background-color: #ddd;
}

#data-mhs th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #7942ee;
    color: white;
}
#data-mhs td{
    padding-left: 15px;
}
</style>

<body>
    <?php
    $no = $_POST['no'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kode_mk = $_POST['kode_mk'];
    $nama_mk = $_POST['nama_mk'];
    $sks = $_POST['sks'];
    $kelas = $_POST['kelas'];
    $semester = $_POST['semester'];
    ?>
    <table id="data-mhs">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kode Matkul</th>
            <th>Nama Matkul</th>
            <th>Jumlah SKS</th>
            <th>Kelas</th>
            <th>Semester</th>
        </tr>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $nim; ?></td>
            <td><?= $nama; ?></td>
            <td><?= $kode_mk; ?></td>
            <td><?= $nama_mk; ?></td>
            <td><?= $sks; ?></td>
            <td><?= $kelas; ?></td>
            <td><?= $semester; ?></td>
            h
        </tr>

    </table>
</body>

</html>