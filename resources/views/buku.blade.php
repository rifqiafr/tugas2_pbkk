<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
    <style>
        /* Gaya CSS di sini */
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 20px;
    color: #333; /* Warna teks */
}

.info {
    margin-bottom: 10px;
    background-color: #fff;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

h1 {
    font-size: 24px;
    color: #555; /* Warna judul */
    margin-bottom: 20px;
    text-align: center
}

label {
    font-weight: bold;
}

input[type="text"], input[type="number"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    padding: 10px 20px;
    background-color: #007bff; /* Warna tombol */
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #0056b3; /* Warna tombol saat dihover */
}     
    </style>
</head>
<body>
  <h1>Buku</h1>
    <div class="info">
        Judul Buku : {{ $nama_buku }}
        <br>
        <br>
        Penulis : {{ $penulis }}
    </div>
</body>
</html>
