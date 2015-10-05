-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 05 Okt 2015 pada 17.29
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `indonative`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `account`
--

INSERT INTO `account` (`username`, `password`) VALUES
('admin', 'ADMiniSTratoR');

-- --------------------------------------------------------

--
-- Struktur dari tabel `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `article`
--

INSERT INTO `article` (`id`, `title`, `description`, `foto`, `date`) VALUES
(1, 'Sukses Bikin Aplikasi, Kuli Pelabuhan Raup Ribuan Dolar', 'Jakarta - Henry Jufri (32), pria yang sehari-hari menjadi kuli barang di Pelabuhan Makassar, piawai merakit aplikasi berbasis Android. Dari keahliannya, Henry yang mengenyam pendidikan hanya sampai kelas IV sekolah dasar ini mampu meraup rata-rata ratusan hingga seribuan dolar per bulannya.\n<br/><br/>\nHenry ditemui detikcom di rumahnya, jalan Sabutung Raya, Makassar, Selasa (1/9/2015). Ia mengaku dari beberapa aplikasi yang dirakitnya pada bulan Juli lalu mendapat transferan dari Google di Singapura sebanyak $1.175 atau jika dirupiahkan sebesar Rp 16.500.000 dengan kurs Rp 14.000. Sementara pada Agustus ini penghasilannya menurun menjadi $ 800.\n<br/><br/>\nHenry mengaku belajar membuat aplikasi game berbasis Android dari kawan-kawannya di komunitas Android Developers Makassar.\n<br/><br/>\nSebelum rutin mendapat transferan dari Google, Henry sudah membuat lebih dari 100 aplikasi. Semua dihasilkan secara otodidak dengan menggunakan beragam software sejak Oktober 2014 silam. Salah satu aplikasinya adalah "Belajar Huruf Angka Balita" yang mendapat rate 4 bintang di Google Play.\n<br/><br/>\n"Sebelum rutin membuat aplikasi, saya lebih dulu menjadi blogger dan aktif di komunitas internet marketing Makassar. Di komunitas ini kita saling berbagi pengalaman dan pengetahuan seputar manfaat internet," ujar Henry yang pernah 3 tahun menjadi TKI ilegal di perkebunan kelapa sawit di Malaysia ini.\n<br/><br/>\nMeski telah mendapatkan penghasilan yang lebih dari cukup menghidupi istri dan dua bocahnya ini, Henry enggan meninggalkan profesi sebelumnya sebagai kuli barang di pelabuhan.\n<br/><br/>\n"Penghasilan sebagai kuli angkat barang penumpang tidak menentu, tergantung jumlah penumpangnya, rata-rata sekitar Rp 2 juta per bulannya," tutup Henry.\n(jsn/ash) ', 'Henry.jpg', '2015-09-03 16:07:46'),
(2, 'Ridwan Kamil Punya 300 Aplikasi Komputer untuk Perbaiki Bandung', 'Jakarta - Salah satu perubahan yang cukup menonjol di Kota Bandung adalah penerapan teknologi informasi dalam tata Pemerintahan. Walikota Bandung Ridwan Kamil membagi sejumlah hal yang dilakukannya untuk mengubah Kota Kembang menjadi kota pintar berbasis teknologi informasi.\n<br/><br/>\nUntuk memuluskan langkah tersebut, ia sampai harus membuat aplikasi komputer (apps) untuk berbagai keperluan penataan kota dan penataan pemerintahan yang bisa diakses secara online dari telepon genggam dan komputer.\n<br/><br/>\n"Ada 300 apps yang kita kembangkan untuk berbagai keperluan. Dari mulai data dan informasi sampai perizinan," ujar pria yang akrab disapa Emil ini di Bidakara, Jakarta, Kamis (13/8/2015).\n<br/><br/>\nSalah satu aplikasi yang dikembangkan digunakan untuk mengumpulkan berbagai data dan informasi yang dibutuhkan terkait kota yang memuat informasi pembangunan sampai keluhan masyarakat. Di mana, informasi ini diperlukan sebagai bahan bagi Emil untuk mengambil keputusan.\n<br/><br/>\n"Jadi misalnya kalau dulu saya butuh data saya harus gelar meeting. Kalau sekarang kita butuh data tinggal press the screen saja semua data sudah tampil. Ini lebih efisien," tutur dia.\n<br/><br/>\nAda pula aplikasi yang dikembangkan untuk memantau kinerja pegawai pemerintahan. "Termasuk saya pasangi GPS pada semua mobil dinas kita.? jadi mobil nggak bisa dipakai sembarangan. Misalnya ada yang izin rapat tapi ketahuan ternyata ke karaoke kita bisa tahu," ungkap dia. \n<br/><br/>\nKemudian yang paling penting adalah aplikasi untuk pengajuan berbagai perizinan. Dengan penerapan ini, Bandung berhasil menekan tingkat korupsi pejabat yang berkaitan dengan penerbitan izin. \n<br/><br/>\n"Jadi pengajuan izin disampaikan via onlnie, semua proses juga online, bisa dipantau oleh pemohon. Dan hasilnya surat-surat izin disampaikan ke pemohon via pos. Jadi mengurangi pertemuan manusia dengan manusia sehingga mengurangi peluang untuk melakukan korupsi," tegas dia.\n<br/><br/>\nHal ini diharapkan bisa diterapkan juga oleh kota atau kabupaten lain di Indonesia. Ia pun mengaku siap membagikan 300 aplikasi tersebut ke seluruh Pemerintah Daerah Kabupaten/Kota secara gratis agar hal serupa bisa diterapkan di tempat lain di Indonesia.\n<br/><br/>\n"Kita ada 300 apps. Saya bayangkan kalau ada 500 kabupaten bisa seperti Bandung, efisien kita. Jadi kalau ada Pemda yang butuh apps seperti Bandung, saya akan bagikan apps ini ke semua kabupaten gratis," pungkasnya. (dna/fyk)', 'Emil.jpg', '2015-09-03 16:07:02'),
(4, 'test', 'cuma test							', 'ladybug.png', '2015-09-05 14:24:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `message_list`
--

CREATE TABLE IF NOT EXISTS `message_list` (
  `id_message` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email_address` varchar(60) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id_message`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `message_list`
--

INSERT INTO `message_list` (`id_message`, `name`, `phone_number`, `email_address`, `message`) VALUES
(1, 'DASDA', 'ads', 'asdsda', ' adsadsads'),
(2, 'Rizkia', '0818200893', 'f.rizkia.a@gmail.com', 'Hi, Just Testing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portofolio`
--

CREATE TABLE IF NOT EXISTS `portofolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `release_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `portofolio`
--

INSERT INTO `portofolio` (`id`, `title`, `description`, `foto`, `release_date`) VALUES
(1, 'Aplikasi BPJS Kesehatan', 'Aplikasi BPJS Kesehatan ini dibuat saat acara hackathon di Bandung Digital Valley.', 'screenshot aplikasi bpjs.png', '2014-09-27'),
(8, 'International Conference Special Education (ICSE) Ebook', 'Test test test', 'icse2015.png', '2015-09-02'),
(9, 'MIDI Website', 'This is midi website. This site provide few of old western pop song. Those are like Jet, Kelly Clarkson, The Cure, etc.', 'midi-website.png', '2015-08-19'),
(10, 'SEAMEO SEN - Human Resource Management', 'This site is human resource website of SEAMEO SEN Office. In the website, there is auto cv generator, many informations about every employees, employee salary and other things related with employee. ', 'seameosen-hrd.png', '2015-09-30'),
(11, 'Agenda Of Sarawak Government Meeting With SEAMEO SEN ', 'This is website view of meeting agenda which includes Sarawak Government and SEAMEO SEN.', 'sarawak-agenda.png', '2015-09-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portofolio_photo`
--

CREATE TABLE IF NOT EXISTS `portofolio_photo` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `id_portofolio` int(11) NOT NULL,
  `title_photo` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `portofolio_photo`
--

INSERT INTO `portofolio_photo` (`index`, `id_portofolio`, `title_photo`, `foto`) VALUES
(1, 1, 'info lebih lanjut tentang BPJS Kesehatan', 'info bpjs kesehatan.jpg'),
(2, 1, 'map tempat di bandung yang didukung oleh BPJS Kesehatan', 'map bpjs kesehatan bandung.jpg'),
(3, 1, 'rute arah dari posisi user ke rumah sakit hasan sadikin', 'rute arah ke rumah sakit.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
