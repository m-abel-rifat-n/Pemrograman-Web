<?php
// Array multidimensi berisi informasi mahasiswa
$mahasiswa = array(
    array(
        'gambar' => 'john.png',
        'nama' => 'John Doe',
        'nim' => '123456789',
        'jurusan' => 'Teknik Informatika',
        'email' => 'john.doe@example.com'
    ),
    array(
        'gambar' => 'jane.jpg',
        'nama' => 'Jane Smith',
        'nim' => '987654321',
        'jurusan' => 'Manajemen',
        'email' => 'jane.smith@example.com'
    ),
    array(
        'gambar' => 'alice.png',
        'nama' => 'Alice Johnson',
        'nim' => '456789123',
        'jurusan' => 'Akuntansi',
        'email' => 'alice.johnson@example.com'
    ),
    array(
        'gambar' => 'bob.png',
        'nama' => 'Bob Brown',
        'nim' => '321654987',
        'jurusan' => 'Desain Grafis',
        'email' => 'bob.brown@example.com'
    ),
    array(
        'gambar' => 'eva.jpg',
        'nama' => 'Eva Green',
        'nim' => '654321987',
        'jurusan' => 'Psikologi',
        'email' => 'eva.green@example.com'
    )
);

// Menampilkan informasi mahasiswa
foreach ($mahasiswa as $mhs) {
    echo "<img src='{$mhs['gambar']}' alt='{$mhs['nama']}'>"; // Menampilkan gambar
    echo "<br>";
    echo "Nama: {$mhs['nama']}<br>";
    echo "NIM: {$mhs['nim']}<br>";
    echo "Jurusan: {$mhs['jurusan']}<br>";
    echo "Email: {$mhs['email']}<br><br>";
}
?>