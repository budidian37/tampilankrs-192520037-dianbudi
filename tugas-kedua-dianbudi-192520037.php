<!DOCTYPE html>
<html lang="en">

<style>
legend {
    color: white;
    padding: 5px;
    background-color: #7942ee;
    border-radius: 5px;
    text-align: center;
    margin-bottom: 10px;
    box-shadow: 0px 4px 12px 0px rgba(0, 0, 0, 0.2);

}

body {
    margin-left: 500px;
    display: inline-block;
    border-radius: 5px;
    font-family: 'arial', sans-serif;
    width: 300px;
}

form input {
    height: 20px;
}

input {
    border: none;
    border-radius: 5px;
    width: 270px;
}

body input {
    display: flex;

}

.dropdown {
    display: flex;
    justify-content: space-between;
}

.container {
    display: flex;
    justify-content: center;
    border: 1px solid black;
    border-radius: 2px;
    border: none;
    margin-top: -10px;
}

button {
    width: 200px;
}

.container button {
    border: none;
    font-size: 15px;
    background-color: #7942ee;
    color: white;
    border-radius: 5px;
    box-shadow: 0px 4px 12px 0px rgba(0, 0, 0, 0.2);
    text-align: center;
    margin: 5px 2px;
    padding: 5px 15px;
    cursor: pointer;
    height: 30px;
}

select {
    text-align: center;
    color: white;
    display: flex;
    height: 25px;
    width: 135px;
    border: none;
    background-color: #7942ee;
    border-radius: 4px;
}

form {
    display: block;
    padding: 7px 7px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    transition: 0.3s;
    border-radius: 5px;
    margin: 5px 5px;
    background-color: rgba(8, 5, 1, 0.2);

}
</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengisi Data</title>
</head>

<body>
    <form action="menampilkandata.php" method="POST">
        <legend>Input Data</legend>
        <label>No</label>
        <input type="text" name="no"><br>
        <label>NIM</label>
        <input type="text" name="nim"><br>
        <label>Nama</label>
        <input type="text" name="nama"><br>
        <label>Kode Matkul</label>
        <input type="text" name="kode_mk"><br>
        <label>Nama Matkul</label>
        <input type="text" name="nama_mk"><br>
        <label>Jumlah SKS</label>
        <input type="text" name="sks"><br>
        <div class="dropdown">
            <select name="kelas" id="kelas">
                <option value="-">Pilih Kelas</option>
                <option value="A">A</option>
                <option value="B">B</option>
            </select>
            <select name="semester" id="semester">
                <option value="-">Pilih Semester</option>
                <option value="1">1</option>
                <option value="3">3</option>
                <option value="5">5</option>
                <option value="7">7</option>
            </select>
        </div><br>
        <div class="container">
            <button type="submit" value="submit" name="submit">SUBMIT </button>
        </div>
    </form>
</body>

</html>