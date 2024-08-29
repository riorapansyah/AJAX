<?php
$link = mysqli_connect("localhost", "root", "", "kampusku");

$nama_mahasiswa = $_GET["n"];

$query  = "SELECT * FROM mahasiswa WHERE nama = '$nama_mahasiswa' ";
$result = mysqli_query($link, $query);

while ($data = mysqli_fetch_row($result)) {
    $tanggal_php = strtotime($data[3]);
    $tanggal = date("d - m - Y", $tanggal_php);


    echo "<table border='1'>";
    echo "<tr><td>NIM</td><td>$data[0]</td></tr>";
    echo "<tr><td>Nama</td><td>$data[1]</td>";
    echo "<tr><td>Tempat Lahir</td><td>$data[2]</td>";
    echo "<tr><td>Tanggal Lahir</td><td>$tanggal</td>";
    echo "<tr><td>Fakultas</td><td>$data[4]</td>";
    echo "<tr><td>Jurusan</td><td>$data[5]</td>";
    echo "<tr><td>IPK</td><td>$data[6]</td>";
    echo "</table>";
}
