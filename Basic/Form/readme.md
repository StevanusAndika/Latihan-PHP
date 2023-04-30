

GET dan POST adalah dua metode pengiriman data antara client dan server pada protokol HTTP. Di PHP, keduanya dapat digunakan untuk mengirim data ke halaman PHP.

Perbedaan utama antara GET dan POST adalah sebagai berikut:

1. GET mengirimkan data melalui URL, sementara POST mengirimkan data melalui body request HTTP.

2. GET memiliki batasan jumlah data yang dapat dikirimkan, sedangkan POST tidak memiliki batasan.

3. GET dapat dikonfirmasi dan di-bookmark, sedangkan POST tidak dapat di-bookmark.

4. GET data dapat dikirim melalui URL dan terlihat pada browser, sedangkan POST tidak terlihat pada browser.

Dalam PHP, Anda dapat mengakses data yang dikirim melalui GET atau POST dengan menggunakan variabel superglobal. Untuk data GET, gunakan variabel $_GET, sedangkan untuk data POST, gunakan variabel $_POST.

Contoh penggunaan GET:
```php
// URL: example.com/?name=John&age=30
$name = $_GET['name'];
$age = $_GET['age'];
echo "Hello, $name. You are $age years old.";
```

Contoh penggunaan POST:
```php
<form action="submit.php" method="post">
  <input type="text" name="name">
  <input type="text" name="age">
  <button type="submit">Submit</button>
</form>

<?php
// submit.php
$name = $_POST['name'];
$age = $_POST['age'];
echo "Hello, $name. You are $age years old.";
?>
```
