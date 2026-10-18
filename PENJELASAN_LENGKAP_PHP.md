# Buku Panduan Lengkap: Memahami PHP dan Bedah Kode Proyek KasirQu

> Dokumen ini dirancang khusus sebagai referensi belajar yang **sangat mendalam, terstruktur, dan komprehensif** untuk memahami dasar-dasar pemrograman PHP (Hypertext Preprocessor) menggunakan studi kasus nyata dari repositori **KasirQu (Toko Maju Jaya)**.

---

## DAFTAR ISI

1. [Bab 1: Apa itu PHP? Konsep Dasar & Filosofi](#bab-1-apa-itu-php-konsep-dasar--filosofi)
   - 1.1 Definisi & Asal Usul PHP
   - 1.2 Mengapa PHP Sangat Populer?
   - 1.3 Perbedaan Client-Side Scripting vs Server-Side Scripting
   - 1.4 Cara Kerja PHP (Siklus Request - Response)
   - 1.5 Mengapa File PHP Tidak Bisa Dibuka Langsung (Double Click)?
2. [Bab 2: Anatomi & Sintaks Dasar PHP](#bab-2-anatomi--sintaks-dasar-php)
   - 2.1 Tag Pembuka dan Penutup PHP (`<?php ... ?>` dan `<?= ... ?>`)
   - 2.2 Semicolon (Titik Koma `;`) dan Error Klasik
   - 2.3 Komentar dalam Kode (Single-line & Multi-line)
   - 2.4 Menampilkan Output (`echo` vs `print` vs `var_dump`)
3. [Bab 3: Variabel dan Aturan Penamaan](#bab-3-variabel-dan-aturan-penamaan)
   - 3.1 Konsep Variabel: Kotak Penyimpan Data
   - 3.2 Karakter Dollar (`$`) & Aturan Penamaan
   - 3.3 Interpolasi String: Kutip Dua (`" "`) vs Kutip Satu (`' '`)
   - 3.4 Operator Penggabung String / Concatenation (`.`)
4. [Bab 4: Tipe Data di PHP](#bab-4-tipe-data-di-php)
   - 4.1 PHP Bersifat Loosely Typed
   - 4.2 String (Teks)
   - 4.3 Integer (Bilangan Bulat)
   - 4.4 Float / Double (Bilangan Desimal)
   - 4.5 Boolean (`true` / `false`)
   - 4.6 Array (Indexed Array & Associative Array)
   - 4.7 Mengenal `var_dump()` untuk Debugging Tipe Data
5. [Bab 5: Operator dalam PHP](#bab-5-operator-dalam-php)
   - 5.1 Operator Aritmatika (`+`, `-`, `*`, `/`, `%`)
   - 5.2 Operator Penugasan / Assignment (`=`, `+=`, `-=`, `*=`)
   - 5.3 Operator Perbandingan (`==`, `===`, `!=`, `<`, `>`, `<=`, `>=`)
   - 5.4 Operator Logika (`&&`, `||`, `!`)
6. [Bab 6: Struktur Kontrol: Percabangan (Kondisional)](#bab-6-struktur-kontrol-percabangan-kondisional)
   - 6.1 Logika Pengambilan Keputusan
   - 6.2 `if`, `elseif`, dan `else`
   - 6.3 Percabangan Multi-Kondisi dengan `switch - case`
   - 6.4 Operator Ternary (`? :`)
7. [Bab 7: Struktur Kontrol: Perulangan (Looping)](#bab-7-struktur-kontrol-perulangan-looping)
   - 7.1 Konsep Otomasi Perulangan
   - 7.2 Perulangan `for`
   - 7.3 Perulangan `while` & `do-while`
   - 7.4 Perulangan `foreach` (Paling Sering Dipakai untuk Array)
8. [Bab 8: Fungsi (Functions) di PHP](#bab-8-fungsi-functions-di-php)
   - 8.1 Apa itu Fungsi?
   - 8.2 Built-in Functions bawaan PHP (Contoh: `date()`, `number_format()`)
   - 8.3 User-Defined Functions (Fungsi Buatan Sendiri)
9. [Bab 9: Bedah Kode Repositori KasirQu File demi File](#bab-9-bedah-kode-repositori-kasirqu-file-demi-file)
   - 9.1 `01_halo.php` — Menyematkan PHP ke dalam HTML
   - 9.2 `02_variabel.php` — Manajemen Identitas Kasir & Data Siswa
   - 9.3 `03_tipe_data.php` — Struktur Data Katalog Produk
   - 9.4 `04_operator.php` — Simulasi Hitungan Kasir Warung
   - 9.5 `05_percabangan.php` — Logika Diskon & Hari Kerja
   - 9.6 `06_perulangan.php` — Cetak Baris Barang & Tabel Perkalian
   - 9.7 `07_mesin_kasir.php` — Mahakarya: Mesin Kasir Digital Lengkap
   - 9.8 `index.php` — Portal Menu Dinamis Berbasis Array Data
10. [Bab 10: Troubleshooting & Tips Menghadapi Error Umum](#bab-10-troubleshooting--tips-menghadapi-error-umum)
11. [Bab 11: Glosarium Istilah Penting PHP](#bab-11-glosarium-istilah-penting-php)

---

## BAB 1: APA ITU PHP? KONSEP DASAR & FILOSOFI

### 1.1 Definisi & Asal Usul PHP
**PHP** adalah singkatan rekursif dari **PHP: Hypertext Preprocessor** (pada awal kemunculannya pada tahun 1994 oleh Rasmus Lerdorf, singkatannya adalah *Personal Home Page Tools*).

Secara teknis:
> **PHP adalah bahasa pemrograman skrip open-source yang berjalan di sisi server (server-side scripting language) dan dirancang khusus untuk pengembangan web dinamis.**

Kode PHP dapat disisipkan secara langsung ke dalam berkas HTML, atau sebaliknya, HTML dapat digenerate secara terprogram dari dalam skrip PHP.

### 1.2 Mengapa PHP Sangat Populer?
1. **Mudah Dipelajari:** Sintaks PHP mirip bahasa C, Java, dan Perl. Kurva pembelajarannya sangat ramah bagi pemula.
2. **Open Source & Gratis:** Bebas digunakan tanpa lisensi berbayar.
3. **Kompatibilitas Luas:** Berjalan di hampir semua sistem operasi (Linux, Windows, macOS) dan kompatibel dengan semua web server populer (Apache, Nginx, LiteSpeed, IIS).
4. **Dukungan Basis Data yang Kuat:** PHP memiliki driver bawaan untuk berinteraksi dengan MySQL, PostgreSQL, SQLite, Oracle, dan basis data lainnya.
5. **Ekosistem Raksasa:** Sekitar 70%+ situs web di dunia masih ditenagai oleh PHP (termasuk WordPress, Wikipedia, hingga fondasi awal Facebook).

### 1.3 Perbedaan Client-Side Scripting vs Server-Side Scripting

Untuk memahami PHP, kita wajib membedakan dua wilayah kerja di web:

| Parameter | Client-Side (HTML, CSS, JavaScript) | Server-Side (PHP, Python, Node.js) |
|---|---|---|
| **Tempat Berjalan** | Di browser pengunjung (Chrome, Firefox, Edge, HP) | Di komputer server (Apache, Nginx, XAMPP, Laragon) |
| **Kerahasiaan Kode** | Terbuka (siapapun bisa *Right Click -> View Page Source*) | Tertutup (kode PHP tidak pernah terlihat oleh pengguna) |
| **Akses Database** | Tidak bisa mengakses database internal secara langsung | Sangat leluasa membaca/menulis ke database |
| **Hasil Akhir** | Ditampilkan & di-render oleh mesin browser | Menghasilkan teks murni (biasanya HTML murni) lalu dikirim ke browser |

### 1.4 Cara Kerja PHP (Siklus Request - Response)

Alur ketika seseorang membuka halaman web PHP:

```
[Pengguna di Browser]
       |
       | 1. Meminta alamat: http://localhost/smk4/kasirqu/01_halo.php
       v
[Web Server: Apache]
       |
       | 2. Menemukan file berakhiran .php, menyerahkannya ke PHP Engine
       v
[PHP Engine / Interpreter]
       |
       | 3. Mengeksekusi instruksi: membaca variabel, berhitung, membaca DB
       | 4. Mengubah kode <?php ... ?> menjadi teks/HTML biasa
       v
[Web Server: Apache]
       |
       | 5. Mengirimkan HTML hasil kompilasi kembali ke Browser
       v
[Pengguna di Browser]
       (Menerima dan melihat halaman HTML polos tanpa tag <?php ?>)
```

### 1.5 Mengapa File PHP Tidak Bisa Dibuka Langsung (Double Click)?
Jika Anda mengklik ganda file `01_halo.php` dari File Explorer Windows/Linux:
- Browser akan membukanya lewat protokol `file:///C:/...` atau `file:///opt/...`.
- Browser hanya mengerti HTML, CSS, dan JavaScript. Browser **TIDAK memiliki mesin PHP**.
- Akibatnya: Kode mentah PHP (`<?php echo ... ?>`) akan muncul di layar sebagai teks polos atau bahkan diunduh paksa sebagai file teks.
- **Solusi:** File PHP wajib ditaruh di direktori web server (seperti `htdocs` di XAMPP atau `www` di Laragon) dan diakses melalui protokol HTTP: `http://localhost/smk4/kasirqu/...`.

---

## BAB 2: ANATOMI & SINTAKS DASAR PHP

### 2.1 Tag Pembuka dan Penutup PHP
Untuk memberi tahu mesin server bahwa baris kode tertentu adalah bahasa PHP dan bukan teks HTML biasa, kita menggunakan tag pembatas:

```php
<?php
    // Semua kode di dalam tag ini diproses oleh PHP
    echo "Halo Dunia";
?>
```

Jika file hanya berisi kode PHP murni tanpa campuran HTML di bawahnya, penutup `?>` dianjurkan untuk dihilangkan guna mencegah kebocoran spasi liar (whitespace leak):
```php
<?php
$nama = "Budi";
echo $nama;
// Tidak wajib ditutup dengan ?>
```

#### Tag Short-Echo
Selain `<?php echo $variabel; ?>`, PHP menyediakan jalan pintas:
```php
<?= $variabel ?>
```
Bentuk ini sangat sering dipakai saat menyisipkan nilai ke dalam tabel atau tag HTML (contoh ada di file `03_tipe_data.php`).

### 2.2 Semicolon (Titik Koma `;`)
Setiap baris instruksi tunggal di PHP **wajib diakhiri dengan titik koma (`;`)**.
```php
$harga = 5000;      // Benar
echo $harga;        // Benar
```
Lupa tanda titik koma adalah penyebab nomor 1 munculnya pesan error:
`Parse error: syntax error, unexpected token...`

### 2.3 Komentar dalam Kode
Komentar adalah baris catatan yang diabaikan oleh mesin PHP. Sangat bermanfaat untuk dokumentasi penjelasan:

```php
// 1. Komentar satu baris (single line)
# 1. Alternatif komentar satu baris ala shell

/*
   2. Komentar banyak baris (multi-line)
   Bisa menulis catatan panjang di sini.
*/
```

### 2.4 Menampilkan Output (`echo` vs `var_dump`)
- `echo`: Perintah paling cepat dan ringan untuk mencetak string atau angka langsung ke layar HTML.
- `print`: Mirip `echo`, namun mengembalikan nilai balik (return value `1`). Jarang dipakai dibanding `echo`.
- `var_dump()`: Fungsi khusus untuk inspeksi mendalam (debugging). Fungsi ini tidak hanya mencetak nilai, tapi juga **tipe data** dan **panjang nilainya**.

---

## BAB 3: VARIABEL DAN ATURAN PENAMAAN

### 3.1 Konsep Variabel: Kotak Penyimpan Data
Bayangkan variabel seperti sebuah kotak berlabel. Di dalam kotak tersebut kita bisa menaruh benda (nilai data). Sewaktu-waktu kita butuh bendanya, kita cukup memanggil label kotaknya.

### 3.2 Karakter Dollar (`$`) & Aturan Penamaan
Di PHP, setiap variabel **wajib diawali dengan simbol dollar (`$`)**.

Aturan penamaan variabel:
1. Wajib diawali huruf atau garis bawah/underscore (`_`), contoh: `$nama`, `$_kasir`.
2. **Tidak boleh** diawali oleh angka (misal: `$1nama` adalah SALAH / syntax error).
3. Hanya boleh mengandung karakter alfanumerik dan garis bawah (`a-z`, `A-Z`, `0-9`, `_`).
4. **Case-Sensitive**: Huruf besar dan kecil dibedakan. `$nama`, `$Nama`, dan `$NAMA` adalah 3 variabel yang berbeda.

Contoh dari [02_variabel.php](file:///opt/lampp/htdocs/smk4/kasirqu/02_variabel.php#L12-L16):
```php
$nama     = "Rani";
$umur     = 16;
$sekolah  = "SMK Nusantara 1";
$hobi     = "main game online";
```

### 3.3 Interpolasi String: Kutip Dua (`" "`) vs Kutip Satu (`' '`)
Perbedaan tanda kutip di PHP sangat fundamental:

1. **Kutip Ganda (`"..."`):** PHP akan memindai teks dan otomatis mengganti variabel dengan nilainya (disebut **String Interpolation**).
   ```php
   $nama = "Rani";
   echo "Halo, $nama!"; // Hasil: Halo, Rani!
   ```
2. **Kutip Tunggal (`'...'`):** PHP menganggap semuanya teks harfiah murni tanpa parsing variabel.
   ```php
   $nama = "Rani";
   echo 'Halo, $nama!'; // Hasil: Halo, $nama!
   ```

### 3.4 Operator Penggabung String / Concatenation (`.`)
Jika di bahasa lain (seperti JavaScript atau Python) penggabung teks memakai tanda tambah (`+`), di PHP penggabung teks menggunakan **titik (`.`)**:

```php
$depan = "Toko";
$belakang = "Maju Jaya";
$lengkap = $depan . " " . $belakang; // Hasil: "Toko Maju Jaya"
```
Contoh dari [02_variabel.php](file:///opt/lampp/htdocs/smk4/kasirqu/02_variabel.php#L43):
```php
echo "Halo, " . $nama;
```

---

## BAB 4: TIPE DATA DI PHP

### 4.1 PHP Bersifat Loosely Typed
PHP adalah bahasa *loosely typed* (atau *dynamically typed*). Anda tidak perlu mendeklarasikan tipe data saat membuat variabel (tidak perlu menulis `int umur = 16` seperti di Java/C++). PHP secara cerdas menentukan tipe data berdasarkan nilai yang dimasukkan.

### 4.2 Tipe Data Skalar & Komposit

Mari kita bedah tipe data utama yang digunakan dalam [03_tipe_data.php](file:///opt/lampp/htdocs/smk4/kasirqu/03_tipe_data.php#L11-L17):

#### A. String (Teks)
Menyimpan karakter huruf, angka, dan simbol yang diapit tanda kutip:
```php
$teks = "Toko Maju Jaya"; // Tipe: String
```

#### B. Integer (Bilangan Bulat)
Menyimpan angka positif atau negatif tanpa desimal:
```php
$jumlah = 20; // Tipe: Integer
```

#### C. Float / Double (Bilangan Desimal)
Menyimpan bilangan pecahan atau koma (di PHP penulisan koma menggunakan titik `.`).
```php
$harga = 3500.50; // Tipe: Float
```

#### D. Boolean (Kebenaran Logika)
Hanya bernilai salah satu dari dua keadaan: `true` (benar) atau `false` (salah). Tipe ini sangat penting untuk kondisi percabangan `if`.
```php
$stok_ada = true; // Tipe: Boolean
```

#### E. Array (Kumpulan Data / List)
Array adalah tipe data majemuk yang dapat menampung banyak nilai sekaligus dalam satu variabel.

1. **Indexed Array (Array Berindeks Angka)**:
   Elemen diakses dengan indeks angka mulai dari `0`.
   ```php
   $produk = ["Indomie", "Teh Pucuk", "Kopi", 1];
   // $produk[0] -> "Indomie"
   // $produk[1] -> "Teh Pucuk"
   ```
2. **Associative Array (Array Asosiatif / Berpasangan Key-Value)**:
   Elemen memiliki label nama (kunci / key) sendiri menggunakan operator panah gemuk `=>`.
   ```php
   $array_to = [
       "produk" => $produk,
       "harga"  => $harga,
       "jumlah" => $jumlah
   ];
   // Mengaksesnya: $array_to["harga"] -> menghasilkan 3500.50
   ```

### 4.7 Mengenal `var_dump()` untuk Debugging
Dalam [03_tipe_data.php](file:///opt/lampp/htdocs/smk4/kasirqu/03_tipe_data.php#L18-L24), fungsi `var_dump()` dipakai untuk menganalisis isi variabel:
```php
var_dump($teks);      // string(14) "Toko Maju Jaya"
var_dump($jumlah);    // int(20)
var_dump($harga);     // float(3500.5)
var_dump($stok_ada);  // bool(true)
```
Output ini memberi tahu programmer secara presisi: jenis tipe datanya, ukurannya, dan isi nilainya.

---

## BAB 5: OPERATOR DALAM PHP

Operator adalah simbol khusus yang digunakan untuk memproses atau memanipulasi nilai variabel.

### 5.1 Operator Aritmatika (Perhitungan Matematika)
Dicontohkan di file [04_operator.php](file:///opt/lampp/htdocs/smk4/kasirqu/04_operator.php#L48-L52):

| Lambang | Nama | Contoh di Kode | Penjelasan |
|---|---|---|---|
| `+` | Penjumlahan | `$a + $b` | `7 + 2 = 9` |
| `-` | Pengurangan | `$a - $b` | `7 - 2 = 5` |
| `*` | Perkalian | `$a * $b` | `7 * 2 = 14` |
| `/` | Pembagian | `$a / $b` | `7 / 2 = 3.5` |
| `%` | Modulo (Sisa Bagi) | `$a % $b` | `7 % 2 = 1` (karena 7 dibagi 2 dapat 3 sisa 1) |

Studi Kasus Kasir Warung di [04_operator.php](file:///opt/lampp/htdocs/smk4/kasirqu/04_operator.php#L15-L21):
```php
$nama_barang = "Indomie Goreng";
$harga_satu  = 3500;
$jumlah_beli = 3;

$total       = $harga_satu * $jumlah_beli;   // 3500 * 3 = 10500
$uang_dibawa = 15000;
$kembalian   = $uang_dibawa - $total;        // 15000 - 10500 = 4500
```

### 5.2 Operator Penugasan (Assignment)
- `=` : Memberikan nilai (`$total = 10000;`).
- `+=`: Menambahkan ke nilai yang sudah ada (`$total += $subtotal;` sama artinya dengan `$total = $total + $subtotal;`). Diterapkan di mesin kasir [07_mesin_kasir.php](file:///opt/lampp/htdocs/smk4/kasirqu/07_mesin_kasir.php#L32).
- `-=`: Mengurangkan nilai lama.

### 5.3 Operator Perbandingan
Menghasilkan nilai boolean `true` atau `false`:
- `==` : Sama nilainya (tidak memeriksa tipe data). Contoh: `5 == "5"` bernilai `true`.
- `===`: Identik (nilai DAN tipe data wajib sama persis). Contoh: `5 === "5"` bernilai `false`.
- `!=` : Tidak sama nilainya.
- `>`  : Lebih besar dari.
- `<`  : Lebih kecil dari.
- `>=` : Lebih besar atau sama dengan. Contoh di diskon kasir: `$total >= 50000`.
- `<=` : Lebih kecil atau sama dengan.

### 5.4 Operator Logika
- `&&` (AND): Bernilai `true` hanya jika kedua kondisi bernilai benar.
- `||` (OR) : Bernilai `true` jika salah satu atau kedua kondisi bernilai benar.
- `!`  (NOT): Membalikkan logika (`!true` menjadi `false`).

---

## BAB 6: STRUKTUR KONTROL: PERCABANGAN (KONDISIONAL)

Percabangan memungkinkan program kita **mengambil keputusan** secara mandiri layaknya otak manusia: "Jika kondisi A terpenuhi, lakukan X; jika tidak, lakukan Y".

### 6.1 `if`, `elseif`, dan `else`

Contoh nyata pada penentuan diskon toko di [05_percabangan.php](file:///opt/lampp/htdocs/smk4/kasirqu/05_percabangan.php#L25-L31) dan [07_mesin_kasir.php](file:///opt/lampp/htdocs/smk4/kasirqu/07_mesin_kasir.php#L36-L42):

```php
if ($total >= 50000) {
    $persen_diskon = 0.10;   // Jika belanja >= 50rb dapat diskon 10%
} elseif ($total >= 30000) {
    $persen_diskon = 0.05;   // Jika belanja >= 30rb dapat diskon 5%
} else {
    $persen_diskon = 0;      // Di bawah 30rb tidak dapat diskon
}
```

Contoh penilaian siswa di [05_percabangan.php](file:///opt/lampp/htdocs/smk4/kasirqu/05_percabangan.php#L12-L22):
```php
$nilai = 78;

if ($nilai >= 90) {
    $predikat = "A (Luar biasa)";
} elseif ($nilai >= 80) {
    $predikat = "B (Bagus)";
} elseif ($nilai >= 70) {
    $predikat = "C (Cukup)";
} else {
    $predikat = "D (Perlu belajar lagi)";
}
```

### 6.2 Percabangan `switch - case`
Digunakan ketika kita ingin menguji satu variabel tunggal terhadap banyak kemungkinan nilai yang spesifik:

Contoh di [05_percabangan.php](file:///opt/lampp/htdocs/smk4/kasirqu/05_percabangan.php#L34-L47):
```php
$hari = "Rabu";
switch ($hari) {
    case "Senin":
        $status = "Awal pekan, semangat!";
        break;
    case "Rabu":
        $status = "Pertengahan pekan, tetap fokus!";
        break;
    case "Jumat":
        $status = "Hampir libur!";
        break;
    default:
        $status = "Hari biasa.";
}
```
*Catatan:* Jangan lupa perintah `break;` di setiap blok `case`, jika tidak, PHP akan mengeksekusi blok di bawahnya (fall-through).

---

## BAB 7: STRUKTUR KONTROL: PERULANGAN (LOOPING)

Perulangan digunakan agar komputer mengeksekusi instruksi berulang-ulang tanpa kita harus mengetik kode yang sama berulang kali.

### 7.1 Perulangan `for`
Digunakan saat kita **tahu secara pasti** berapa kali perulangan harus berjalan.

Struktur:
`for (nilai_awal; kondisi_berhenti; penambahan) { ... }`

Contoh di [06_perulangan.php](file:///opt/lampp/htdocs/smk4/kasirqu/06_perulangan.php#L43-L46) untuk membuat tabel perkalian 3:
```php
for ($i = 1; $i <= 5; $i++) {
    $hasil = 3 * $i;
    echo "<tr><td>3 x $i</td><td>=</td><td><strong>$hasil</strong></td></tr>";
}
```

### 7.2 Perulangan `while`
Digunakan saat perulangan harus terus berjalan **selama suatu kondisi bernilai true**.

Contoh hitung mundur di [06_perulangan.php](file:///opt/lampp/htdocs/smk4/kasirqu/06_perulangan.php#L57-L61):
```php
$n = 5;
while ($n > 0) {
    echo "<span class='pill'>$n</span> ";
    $n--; // Mengurangi $n sebesar 1 setiap putaran
}
```

### 7.3 Perulangan `foreach` (Paling Populer di PHP Web)
`foreach` diciptakan khusus untuk melintasi seluruh elemen dalam sebuah **Array** dari awal sampai habis tanpa perlu mengelola indeks manual `$i`.

Contoh 1: Array Sederhana di [06_perulangan.php](file:///opt/lampp/htdocs/smk4/kasirqu/06_perulangan.php#L12):
```php
$keranjang = ["Indomie", "Teh Pucuk", "Kopi", "Roti"];

foreach ($keranjang as $item) {
    echo "<li>$item</li>";
}
```

Contoh 2: Menghitung Akumulasi Total Belanja di [07_mesin_kasir.php](file:///opt/lampp/htdocs/smk4/kasirqu/07_mesin_kasir.php#L29-L33):
```php
$total = 0;
foreach ($belanja as $item) {
    $subtotal = $item["harga"] * $item["jumlah"]; // Perkalian subtotal per barang
    $total += $subtotal;                          // Ditambahkan ke total belanja
}
```

---

## BAB 8: FUNGSI (FUNCTIONS) DI PHP

Fungsi adalah blok kode terbungkus yang diberi nama dan dapat dipanggil berulang kali untuk melakukan tugas spesifik tanpa menulis ulang logikanya.

### 8.1 Built-in Functions (Bawaan PHP)
PHP menyediakan ribuan fungsi siap pakai:
1. `date("d/m/Y H:i")`: Menghasilkan format tanggal dan waktu saat ini (dipakai di [01_halo.php](file:///opt/lampp/htdocs/smk4/kasirqu/01_halo.php#L43) dan [07_mesin_kasir.php](file:///opt/lampp/htdocs/smk4/kasirqu/07_mesin_kasir.php#L16)).
2. `number_format($angka, 0, ",", ".")`: Memformat angka murni menjadi format ribuan dengan titik pemisah desimal/ribuan.
3. `count($array)`: Menghitung jumlah elemen dalam array.

### 8.2 User-Defined Functions (Fungsi Buatan Kita)
Kita dapat membuat fungsi kustom menggunakan kata kunci `function`.

Contoh nyata fungsi konversi mata uang rupiah di [07_mesin_kasir.php](file:///opt/lampp/htdocs/smk4/kasirqu/07_mesin_kasir.php#L49-L51):
```php
function rupiah($angka) {
    return "Rp" . number_format($angka, 0, ",", ".");
}

// Cara Penggunaan:
echo rupiah(3500);   // Menghasilkan teks: "Rp3.500"
echo rupiah(50000);  // Menghasilkan teks: "Rp50.000"
```
Fungsi `rupiah()` ini menerima parameter `$angka`, memformatnya dengan pemisah ribuan titik, menambahkan prefix `"Rp"`, lalu mengembalikan (*return*) hasilnya.

---

## BAB 9: BEDAH KODE REPOSITORI KASIRQU FILE DEMI FILE

Repositori `kasirqu` ini adalah miniatur modul pembelajaran kelas pemrograman SMK (Pertemuan 9). Mari kita bedah bagaimana materi PHP diterapkan di tiap file:

### 9.1 `01_halo.php` — Fondasi Output & HTML Embedding
- **Tujuan Pembelajaran:** Mengenal `echo`, menyematkan kode PHP di dalam dokumen HTML5.
- **Potongan Kode Kunci:**
  ```php
  <?php
    echo "<h2>Halo, Dunia!</h2>";
    echo "<p>Namaku <strong>PHP</strong>, bahasa yang membuat web jadi hidup.</p>";
    echo "<p>Hari ini: " . date("d M Y") . "</p>";
  ?>
  ```
- **Poin Penting:** Tag PHP bisa dibuka dan ditutup berulang kali di sembarang tempat di file HTML. Bahkan di baris 49:
  ```php
  <p>2 + 3 = <strong><?php echo 2 + 3; ?></strong></p>
  ```
  Ini mendemonstrasikan bahwa PHP melakukan komputasi di server sebelum browser menerima markup HTML.

### 9.2 `02_variabel.php` — Menyimpan Informasi Toko & Kasir
- **Tujuan Pembelajaran:** Deklarasi variabel string & integer serta cara menampilkannya.
- **Potongan Kode Kunci:**
  ```php
  $nama     = "Rani";
  $umur     = 16;
  $tahun_lahir = 2026 - $umur;
  ```
- **Poin Penting:** Mendemonstrasikan 2 gaya output:
  1. Penggabungan string titik (`echo "Halo, " . $nama;`)
  2. Interpolasi kutip dua (`echo "Halo, $nama!";`)

### 9.3 `03_tipe_data.php` — Mengenal Tipe Data & Inspeksi
- **Tujuan Pembelajaran:** Membedakan String, Integer, Float, Boolean, dan Array Asosiatif.
- **Potongan Kode Kunci:**
  ```php
  $teks      = "Toko Maju Jaya";   // String
  $jumlah    = 20;                 // Integer
  $harga     = 3500.50;            // Float
  $stok_ada  = true;               // Boolean
  $produk    = ["Indomie", "Teh Pucuk", "Kopi", 1]; // Array
  $array_to  = ["produk" => $produk, "harga" => $harga, "jumlah" => $jumlah];
  ```
- **Poin Penting:** Penggunaan `var_dump()` untuk membongkar tipe data di layar dan akses array bersarang `<?= var_dump($array_to["produk"][0]); ?>`.

### 9.4 `04_operator.php` — Perhitungan Kasir Warung
- **Tujuan Pembelajaran:** Aritmatika perkalian belanja dan pengurangan kembalian uang.
- **Potongan Kode Kunci:**
  ```php
  $total       = $harga_satu * $jumlah_beli;   // Perkalian
  $kembalian   = $uang_dibawa - $total;        // Pengurangan
  ```

### 9.5 `05_percabangan.php` — Logika Diskon & Predikat
- **Tujuan Pembelajaran:** Memahami alur logika kondisional bersarang dengan `if - elseif - else` dan `switch - case`.
- **Potongan Kode Kunci:**
  Aturan diskon belanja Rp100.000 ke atas mendapatkan potongan 10%:
  ```php
  if ($total_belanja >= 100000) {
      $diskon = 0.10 * $total_belanja;
  } else {
      $diskon = 0;
  }
  ```

### 9.6 `06_perulangan.php` — Perulangan Daftar Belanja & Perkalian
- **Tujuan Pembelajaran:** Memahami kapan menggunakan `for`, `while`, dan `foreach`.
- **Potongan Kode Kunci:**
  Menelusuri keranjang belanja dengan `foreach`:
  ```php
  foreach ($keranjang as $item) {
      echo "<li>$item</li>";
  }
  ```

### 9.7 `07_mesin_kasir.php` — Miniatur Aplikasi Kasir (Momen WOW)
File ini adalah sintesis puncak yang menggabungkan seluruh materi 01 sampai 06 menjadi satu aplikasi mini kasir yang fungsional:
1. **Model Data (Array Multidimensi):**
   ```php
   $belanja = [
       ["nama" => "Indomie Goreng", "harga" => 3500,  "jumlah" => 2],
       ["nama" => "Teh Pucuk",      "harga" => 4000,  "jumlah" => 3],
       ["nama" => "Kopi Sachet",    "harga" => 2500,  "jumlah" => 4],
       ["nama" => "Roti Tawar",     "harga" => 15000, "jumlah" => 1],
   ];
   ```
2. **Kalkulasi Akumulatif:**
   Menghitung subtotal tiap barang dan total keseluruhan dengan loop `foreach`.
3. **Logika Diskon Bertingkat:**
   Belanja $\ge$ 50.000 dapat diskon 10%, belanja $\ge$ 30.000 dapat diskon 5%.
4. **Hitung Kembalian Uang:**
   `$kembalian = $uang_dibayar - $total_bayar;`
5. **Render Tabel HTML & Struk Kasir:**
   Data di-looping langsung ke baris tabel HTML `<tr><td>...</td></tr>` menggunakan helper `rupiah()`.

### 9.8 `index.php` — Halaman Portal Menu Berbasis Data Array
Bahkan halaman menu navigasi utama `index.php` dibuat dengan prinsip pemrograman yang bersih:
Daftar latihan tidak ditulis manual (*hardcoded*) satu per satu di HTML, melainkan disimpan dalam array master:
```php
$latihan = [
    ["file" => "01_halo.php",         "judul" => "Halo, PHP!",         ...],
    ["file" => "02_variabel.php",     "judul" => "Variabel",           ...],
    // ...
];
```
Lalu digenerate secara otomatis menggunakan `foreach`:
```php
<?php foreach ($latihan as $lat): ?>
  <a class="card-item ..." href="<?= $lat['file']; ?>">
    <!-- Render Card -->
  </a>
<?php endforeach; ?>
```
Ini mengajarkan konsep fundamental pemrograman web: **Pemisahan antara Data dan Tampilan (Presentation)**.

---

## BAB 10: TROUBLESHOOTING & TIPS MENGHADAPI ERROR UMUM

Ketika Anda memodifikasi file di repo ini, berikut error yang paling sering muncul beserta cara mengatasinya:

1. **`Parse error: syntax error, unexpected token ";", expecting "]" ...`**
   - **Penyebab:** Ada kurung yang belum ditutup, tanda kutip ganjil, atau lupa memberi titik koma di baris sebelumnya.
   - **Solusi:** Periksa baris yang disebutkan di pesan error dan 1 baris tepat di atasnya.
2. **`Warning: Undefined variable $nama...`**
   - **Penyebab:** Anda memanggil nama variabel yang belum pernah dibuat atau salah ketik huruf besar/kecil (*typo*).
   - **Solusi:** Cek kembali ejaan variabel (ingat bahwa PHP bersifat case-sensitive).
3. **`Fatal error: Uncaught Error: Call to undefined function...`**
   - **Penyebab:** Memanggil fungsi yang salah ketik atau posisinya belum dideklarasikan.
4. **Halaman Putih Bersih (White Screen of Death)**
   - **Penyebab:** Terjadi error fatal saat opsi `display_errors` pada `php.ini` dalam keadaan `Off`.
   - **Solusi:** Aktifkan pelaporan error di baris paling atas skrip untuk sementara:
     ```php
     ini_set('display_errors', 1);
     error_reporting(E_ALL);
     ```

---

## BAB 11: GLOSARIUM ISTILAH PENTING PHP

- **Server-Side:** Proses komputasi yang dijalankan di server sebelum hasilnya dikirim ke pengguna.
- **Interpreter:** Mesin penerjemah yang membaca dan mengeksekusi baris kode sumber secara langsung baris demi baris.
- **Interpolasi:** Kemampuan PHP menyisipkan nilai variabel langsung ke dalam teks di dalam tanda kutip dua.
- **Concatenation:** Operasi penyambungan dua atau lebih string teks menjadi satu (di PHP menggunakan lambang titik `.`).
- **Associative Array:** Array yang indeksnya berupa kata/teks kunci (*key*), bukan angka urut.
- **Multidimensional Array:** Array di dalam array (seperti tabel data belanja barang di kasir).
- **Return Value:** Nilai hasil akhir yang dikembalikan oleh suatu fungsi kepada pemanggilnya.
- **Loosely Typed:** Bahasa pemrograman yang tidak mewajibkan tipe data variabel ditentukan secara kaku.
- **Short-Echo Tag:** Sintaks ringkas `<?= $nilai ?>` yang setara dengan `<?php echo $nilai; ?>`.

---

*Disusun sebagai materi panduan komprehensif untuk repositori KasirQu — SMK Pemrograman Web.*
