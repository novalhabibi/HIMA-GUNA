-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2018 at 11:04 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hima`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` varchar(8) NOT NULL,
  `nm_anggota` varchar(30) NOT NULL,
  `asal_kampus` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `departemen` varchar(20) NOT NULL,
  `jabatan` varchar(10) NOT NULL,
  `foto` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nm_anggota`, `asal_kampus`, `alamat`, `email`, `nohp`, `departemen`, `jabatan`, `foto`) VALUES
('12154388', 'Noval Habibi', 'BSI', 'asjcblkas', 'noval7sihabibi@gmail.com', '085771966503', 'INFOKOM', 'Ketua', 'IMG_20170514_125423.jpg'),
('11223377', 'Sinta Dewi', 'Untirta', 'Kp. Kandangsapi Ds. Cicaringin', 'sinta@gmail.com', '2452352', 'INFOKOM', 'Anggota', 'IMG-20171030-WA0016.jpg'),
('11223344', 'Ahmad Jayani', 'Untirta', 'Ling. Perumahan Panacanagan Ba', 'jay@gmail.com', '0987655444', 'SOSIAL', 'Ketua', 'IMG-20171031-WA0002.jpg'),
('11223355', 'Andri Wiguna', 'Untirta', 'Kp. Cisempur RT.01/RW.01 Ds. S', 'aw7@gmail.com', '241523512', 'INFOKOM', 'Anggota', 'IMG-20171030-WA0018.jpg'),
('11223366', 'Usep', 'Untirta', 'Kp. Cidima rt 001 rw 001 ds. C', 'usep@gmail.com', '2412421412', 'SOSIAL', 'Ketua', 'IMG-20171030-WA0017.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `isi`, `gambar`) VALUES
(42, 'Pentingnya Menanamkan Karakter', '<div style=\"-webkit-text-stroke-width:0px; margin-bottom:0in; text-align:justify\"><span style=\"font-size:12px\"><span style=\"color:#555555\"><span style=\"font-family:Verdana,Geneva\"><span style=\"background-color:#ffffff\">Kedudukan karakter dalam perjalanan setiap manusia sangat penting sekali. Bahkan pembentukan karakter sejak dini akan sangat menentukan bagaimana seseorang dalam menjalani hidupnya. Siapapun dia, apapun profesinya, ketika memiliki karakter positif, tentu akan lebih baik dari pada yang tidak memiliki karakter. Maka dari itu, penanaman karakter positif ini sangat diperlukan sejak dini agar bisa menjadi modal mereka dalam mengarungi perjalanan hidup yang sangat berat.</span></span></span></span></div>\r\n\r\n<div style=\"-webkit-text-stroke-width:0px; margin-bottom:0in; text-align:justify\">&nbsp;</div>\r\n\r\n<div style=\"-webkit-text-stroke-width:0px; margin-bottom:0in; text-align:justify\"><span style=\"font-size:12px\"><span style=\"color:#555555\"><span style=\"font-family:Verdana,Geneva\"><span style=\"background-color:#ffffff\">Karakter yang kuat, berani dan tidak mudah menyerah akan sangat membantu siapapun dalam menjalani hidup. Karakter positif selalu bisa diterapkan dalam berbagai profesi, baik seorang pebisnis, pendidik, atau profesi lainnya. Seperti kita ketahui bersama bahwa yang sering menjadi masalah bangsa Indonesia ini adalah banyaknya manusia Indonesia yang tidak memiliki karakter positif sehingga dimanapun mereka berada akan selalu menimbulkan masalah dan bukan menjadi solusi dari sebuah masalah.</span></span></span></span></div>\r\n', 'Penguins.jpg'),
(38, 'Jangan Mudah Menyerah MAN JADD', '<div style=\"-webkit-text-stroke-width:0px; margin-bottom:0in; text-align:justify\"><span style=\"font-size:16px\"><span style=\"color:#555555\"><span style=\"font-family:Verdana,Geneva\"><span style=\"background-color:#ffffff\">Siapapun Anda, apapun profesi Anda, Anda harus memperhatikan sifat jangan mudah menyerah. Karena harus Anda sadari bahwa dalam setiap perjalanan hidup, pasti kita akan dihadapakan dengan berbagai masalah, yang kadang-kadang memang sangat berat. Namun, yakinlah bahwa di dalam sebuah masalah yang berat tersebut pasti ada hikmah yang kadang kita tidak akan mengerti sebelum kita menghadapi masalah tersebut. Maka dari itu, hadapi masalah tersebut dengan lapang dan penuh semangat, jangan menjadi orang yang mudah menyerah.</span></span></span></span></div>\r\n\r\n<div style=\"-webkit-text-stroke-width:0px; margin-bottom:0in; text-align:justify\">&nbsp;</div>\r\n\r\n<div style=\"-webkit-text-stroke-width:0px; margin-bottom:0in; text-align:justify\"><span style=\"font-size:16px\"><span style=\"color:#555555\"><span style=\"font-family:Verdana,Geneva\"><span style=\"background-color:#ffffff\">Jangan menjadi orang yang manja seperti anak kecil. Contoh sederhana adalah ketika Anda menjadi seorang pedagang dan mendapati barang dagangan Anda tidak laku dijual dalam beberpaa hari lalu kemudian Anda memutuskan berhenti menjadi pedagang begitu saja. Itu adalah contoh sikap mudah menyerah, akan lebih baik jika Anda mengevaluasi terlebih dahulu, apa yang kurang dari dagangan Anda, atau ada cara yang mungkin salah dalam strategi, dan lain-lain.</span></span></span></span></div>\r\n', 'e-learning-bsi-2.png'),
(37, 'Indonesia Negara Maritim', '<div style=\"-webkit-text-stroke-width:0px; margin-bottom:0in; text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#555555\"><span style=\"font-family:Verdana,Geneva\"><span style=\"background-color:#ffffff\">Sebagai seorang yang hidup di negara Indonesia, kita setidaknya mengerti tentang Indonesia meski hanya sedikit. Indonesia adalah negara dengan luas laut yang sangat luar biasa. Bahkan Indonesia termasuk salah satu negara yang memiliki laut terluas di dunia. Maka tak heran jika Indonesia disebut juga sebagai negara maritim karena memang pada faktanya Indonesia memiliki luas lautan yang sangat luar biasa.</span></span></span></span></div>\r\n\r\n<div style=\"-webkit-text-stroke-width:0px; margin-bottom:0in; text-align:justify\">&nbsp;</div>\r\n\r\n<div style=\"-webkit-text-stroke-width:0px; margin-bottom:0in; text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#555555\"><span style=\"font-family:Verdana,Geneva\"><span style=\"background-color:#ffffff\">Sebagai negara maritim, tentu di Indonesia banyak warga negara atau rakyatnya yang menggantungkan hidup dari hasi laut. Ada yang mengandalkan profesi sebagai nelayan, dan tak sedikit juga orang yang menjadi pedagang dan menjual hasil lautnya. Kita sepatutnya bangga dengan kondisi alam dan kekayaan Indonesia, karena dengan kekayaan sumber daya alam yang begitu melimpah, tentu Indonesia seharusnya menjadi negara yang disegani di dunia.</span></span></span></span></div>\r\n\r\n<div style=\"-webkit-text-stroke-width:0px; margin-bottom:0in; text-align:justify\">&nbsp;</div>\r\n\r\n<div style=\"-webkit-text-stroke-width:0px; margin-bottom:0in; text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#555555\"><span style=\"font-family:Verdana,Geneva\"><span style=\"background-color:#ffffff\">Nah kawan-kawan, itulah&nbsp;<strong>6 contoh artikel pendidikan singkat dan sederhana</strong>&nbsp;yang bisa kami bagikan untuk Anda semua. Perlu Anda pahami bahwa&nbsp;<strong><a href=\"http://infoguruterbaru.blogspot.com/\" style=\"color:#10c95f; text-decoration:none\" target=\"_blank\">artikel pendidikan</a></strong>&nbsp;di atas sifatnya adalah hanya sebuah contoh sederhana. Anda bisa mengembangkannya secara lebih luas dan lebih dalam lagi.</span></span></span></span></div>\r\n', 'IMG_20170701_150108.jpg'),
(34, 'Teknologi Perbankan', '<p><span style=\"font-size:12px\">Teknologi perbankan saat ini telah mencapai pada level yang dikatakan maju dibandingkan beberapa tahun kebelakang. Produk-produk yang dihasilkan cukup banyak, saya akan menjelaskan beberapa produk bank yang saya dapat dari pelajaran Terapan Komputer Perbankan.<br />\r\n<br />\r\nPertama yaitu ATM atau yang dikenal dengan Anjungan Tunai Mandiri. Ini merupakan produk bank yang sudah sangat kita kenal atau jumpai hampir disetiap tempat dan bahkan merupakan mesin kasir otomatis pengganti orang karena kita tidak perlu lagi harus mengantri panjang untuk hanya melakukan pembayaran, penarikan atau penyetoran dengan jumlah yang tidak terlalu banyak.<br />\r\n<br />\r\nMenurut perbankan berdasarkan jenisnya ATM berfungsi sebagai berikut :<br />\r\n- Multifungsi<br />\r\n- Tarik Tunai<br />\r\n- Non Tunai<br />\r\n- Setoran Tunai<br />\r\n<br />\r\nPengoperasian ATM dapat dilakukan melalui dua cara yaitu Onpromise yaitu terhubung dengan server dimana ATM tersebut ditempatkan. Dan Offpromise yaitu pengoperasian ATM yang menggunakan satelit khusus.<br />\r\n<br />\r\nStrategi pengelolaan yang dapat dilakukan ATM yaitu dilakukan sendiri atau bersama. Kalau contoh dikelola sendiri itu in house dan out sourcing. Kalau in house pasti tidak sulit kita temui. Contohnya itu bila kita melihat dimesin ATM hanya terdapat satu nama bank saja maka itu disebut in house. Sedangkan bila kita melihat banyak nama bank pada satu mesin ATM maka itu dapat dikatakan out sourcing. Sedangkan bila stategi pengelolaan yang dikatakan bersama itu seperti joint ventura dan pihak ke-3. Kedianya memiliki arti yang hamper sama yaitu bank bergabung dengan pihak lain selain bank mereka sendiri dan membayarkan sewa pada pihak tersebut.<br />\r\n<br />\r\nYang kedua dari teknologi perbankan yaitu Kartu Plastik. ATM tidak akan berfungsi bila tanpa kartu plastik ini. Kartu plastic memiliki banyak jenisnya diantaranya :<br />\r\n- Credit card<br />\r\n- Smart card<br />\r\n- Debit card<br />\r\n- Private label card<br />\r\n- Change card<br />\r\n<br />\r\nDimulai dari credit card, pastilah tidak asing kita mendengar kata-kata ini apa lagi belakangan ini banyak kamsus yang berkaitan dengan kartu ini. Bank lebih berminat menarik nasabah melalui kartu ini hal tersebut dikarenakan bunga yang dibebankan lebih besar dari pada bunga dari tabungan. Sehingga kita perlu lebih berhati-hati bila menggunakan kartu ini.<br />\r\n<br />\r\nSmart cart, pasti kurang fasi kita dengar tapi bila disebut dengan kartu flash pasti banyak yang mengerti. Kartu flash keluaran BCA itu merupakan contoh dari smart card tersebut. Yang membedakan kartu ini dengan kartu yang lain yaitu kartu ini kita isikan saldo terlebih dahulu kemudian baru dapat kita gunakan dan tidak ada potongan ataupun bunga yang dibebankan kepada kita. Serta tidak terhubung dengan rekening kita.<br />\r\n<br />\r\nKartu yang kita miliki dikatakan debit card. Atau kartu yang kita lakukan untuk penarikan tunai, pembayaran, atau pengiriman uang. Semua itu merupakan kegunaan dari kartu ini. Selain itu pada kartu ini bunga yang didapat lebih kecil dibandingkan dengan credit card. Pada proses atau transaksi yang dilakukan dengan menggubnakan kartu ini terhubung dengan rekening yang kita miliki.<br />\r\n<br />\r\nChange card pasti belakangan ini sangat jarang kita dengar. Tetapi bank mengeluarkan kartu ini. Sama halnya dengan credit card yaitu melakukan pinjaman dan tidak terhubung ke rekening kita. Tetapi yang membedakan yaitu cara pelunasannya. Bila credit card dapat melakuakn pelunasan secara bertahap atau setiap bulan tetapi lain halnya dengan kartu ini. Kartu ini membebankan nasabah dengan melunasi seluruh pinjaman yang dilakukan sesuai dengan jatuh tempo yang telah disepakati.</span></p>\r\n', 'Koala.jpg'),
(33, 'Banjir Di Karawang', '<p>Banjir melanda kota Karawang pada tanggal 22 Maret 2010,khususnya di daerah rawan banjir,namun kini banjir menghampiri daerah yang sebelumnya tidak pernah terkena banjir. Pada saat banjir, warga di daerah Gempol Anjun mengungsi ke tempat- tempat yang belum terkena banjir. Namun, warga pindah mengungsi lagi ke tempat lain ketika banjir semakin besar. Semua warga panik ketika banjir semakin besar dan mereka berusaha menyelamatkan harta bendanya yang berharga dan perlu di bawa. Sebagian warga ada yang mengungsi di masjid Al- Jihad,Kaum,dan rumah sanak saudara yang tidak terkena banjir. Semua warga mendapatkan bantuan berupa mie instan, nasi bungkus, beras, pakaian, sembako, makanan bayi,dll.<br />\r\n<br />\r\nPada saat hujan turun sangat besar, ada beberapa pohon yang tumbang. Pohon tumbang menyebabkan rumah- rumah rusak tertiban oleh pohon. Saat banjir ada seseorang yang kanyut terbawa arus, ada pula nenek- nenek yang tertabrak kereta api saat memunguti cangkir akua bekas. Banjir yang sangat besar menyebabkan beberapa rumah runtuh, juga menimbulkan berbagai penyakit.<br />\r\n<br />\r\nBanjir di sebabkan oleh tangan manusia yang tidak disiplin,banyak warga yang membuang sampah ke sungai citarum sehingga sampah tersumbat di sungai. Banjir di Karawang memang kiriman dari waduk Jati Luhur yang sedang musim hujan. Namun, semua itu akibat ulah warga yang tak pernah disiplin. Cara mencegah banjir yaitu dengan membakar sampah yang kering,sedangkan sampah yang basah di buang di lombang tanah. Kita juga harus menghentikan penebangan liar di hutan karena dapat menyebabkan banjir.<br />\r\n<br />\r\nItulah lima contoh artikel pendek dari berbagai subjek yang sengaja kami berikan untuk anda, baik anda yang ingin membuat artikel pendek ataupun yang sedang mencari artikel pendek untuk tugas anda bisa melihat referensi dari kami di atas tersebut.</p>\r\n', 'IMG_20170517_214057.jpg'),
(41, 'Bulan Ramadhan Penuh Berkah', '<div style=\"-webkit-text-stroke-width:0px; margin-bottom:0in; text-align:justify\"><span style=\"font-size:12px\"><span style=\"color:#555555\"><span style=\"font-family:Verdana,Geneva\"><span style=\"background-color:#ffffff\">Di dalam agama Islam kita mengenal adanya bulan Ramadlan. Bulan Ramadhan adalah bulan yang sangat spesial bagi umat Islam. Karena di dalam bulan Ramadlan kita sebagai umat Islam bisa beribadah dengan lebih intens. Selain itu, Allah juga menurunkan berkah yang luar biasa di dalam bulan Ramadlan. Bagi kita, di bulan Ramadlan disunahkan untuk mengikuti sholat tarawih setiap malam sehabis Sholat Isya&#39;. Kemudian biasanya akan dilanjutkan dengan membaca Al Qur&#39;an, karena memang dibulan Ramadlan kita disuruh untuk memperbanyak membaca Al Qur&#39;an.</span></span></span></span></div>\r\n\r\n<div style=\"-webkit-text-stroke-width:0px; margin-bottom:0in; text-align:justify\">&nbsp;</div>\r\n\r\n<div style=\"-webkit-text-stroke-width:0px; margin-bottom:0in; text-align:justify\"><span style=\"font-size:12px\"><span style=\"color:#555555\"><span style=\"font-family:Verdana,Geneva\"><span style=\"background-color:#ffffff\">Selain ibadah sunnah, di bulan Ramadlan kita juga diwajibkan untuk beruasa sebulan penuh. Dalam menjalankan puasa ini, bisa berjmlah 30 hari, bisa juga 29 hari atau juga bisa 31 hari, tergantung genap nya satu bulan. Maka dari itu, kita sebaiknya jangan menyia-nyiakan keberadaan bulan Ramadlan. Karena belum tentu kita bisa menjumpai bulan Ramadlan di tahun yang akan datang.</span></span></span></span></div>\r\n', 'contoh-e-learning-BSI.png');

-- --------------------------------------------------------

--
-- Table structure for table `detail_kas`
--

CREATE TABLE `detail_kas` (
  `id_kas` int(11) NOT NULL,
  `id_anggota` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_kas`
--

INSERT INTO `detail_kas` (`id_kas`, `id_anggota`) VALUES
(35, '11223377'),
(35, '12154388');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `nm_event` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `nm_event`, `deskripsi`, `foto`) VALUES
(5, 'Penggalangan Dana 2', 'Perhitungan dana yang di dapat', 'Instagram-post-by-HIMAGUNA_BQXn6xrjKp6.jpg'),
(6, 'Surpey Bencana Alam', 'Desa Cimanyanggrai', 'Instagram-post-by-HIMAGUNA_BQZhJj7hsdL.jpg'),
(4, 'Penggalangan Dana 1', 'Gunungkencana', 'Instagram-post-by-HIMAGUNA_BQXqAkYDc0N.jpg'),
(7, 'Penyerahan Bantuan', 'Lokasi Bencana Alama', 'Instagram-post-by-HIMAGUNA_BQZsPejhKkB.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `periode_kas`
--

CREATE TABLE `periode_kas` (
  `id_kas` int(11) NOT NULL,
  `tgl_buka` date NOT NULL,
  `tgl_tutup` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `periode_kas`
--

INSERT INTO `periode_kas` (`id_kas`, `tgl_buka`, `tgl_tutup`) VALUES
(35, '2017-11-13', '2017-11-30'),
(34, '2017-11-13', '2017-11-13'),
(36, '2017-12-06', '2017-12-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `periode_kas`
--
ALTER TABLE `periode_kas`
  ADD PRIMARY KEY (`id_kas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `periode_kas`
--
ALTER TABLE `periode_kas`
  MODIFY `id_kas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
