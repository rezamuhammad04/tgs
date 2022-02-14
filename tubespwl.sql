-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jul 2020 pada 23.11
-- Versi server: 10.3.15-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubespwl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_adm` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_adm`, `username`, `password`) VALUES
(1, 'Rifki', '123'),
(2, 'Kamal', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapasien`
--

CREATE TABLE `datapasien` (
  `id_pas` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `noidentitas` varchar(20) NOT NULL,
  `jenkel` varchar(15) NOT NULL,
  `tgllahir` date NOT NULL,
  `umur` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datapasien`
--

INSERT INTO `datapasien` (`id_pas`, `nama`, `noidentitas`, `jenkel`, `tgllahir`, `umur`, `alamat`, `nohp`) VALUES
(117, 'Kamal Ramadhan N', '327405040100008', 'Laki-laki', '2000-04-01', 20, 'Jalan Dokter Cipto MK MArgasari Komplek Asrama CPM No 39', '0895351128786'),
(118, 'Agung MIftakhul Huda', '327405040100010', 'Laki-laki', '1999-01-02', 21, 'Jalan Boyolali Musuk No 50', '087829578982'),
(119, 'Rifki Burhannudin', '327405040100011', 'Laki-laki', '1999-09-09', 21, 'Jalan Jatienom Klaten No.20', '081395845049'),
(120, 'Firza Maulana Nasution', '327405040100020', 'Laki-laki', '2000-02-02', 20, 'Jalan Pejuang Pelajar No 99', '087853281083'),
(121, 'Rayan Pahlevi Dahlan', '327405040100123', 'Laki-laki', '1999-02-07', 21, 'Jalan Majalaya Gang Demang No 90', '082167483647'),
(122, 'Dimas Rafif Wijaya', '327405040100234', 'Laki-laki', '1999-08-07', 21, 'Jalan Sumber Raya Komplek Pom Anair No 77', '081224869735'),
(123, 'M Amien Fadhillah', '32740504010012', 'Laki-laki', '2000-09-09', 20, 'Jalan Banjarmasin No 20', '081395846099'),
(124, 'Rendy Agung', '327405040110009', 'Laki-laki', '1999-08-07', 19, 'Jalan Perumnas Burung Gang Parkit Blok A No 110', '089240663286');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id_dok` int(11) NOT NULL,
  `pilpol` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `namadokter` varchar(50) NOT NULL,
  `notlp` varchar(20) NOT NULL,
  `alamatdok` text NOT NULL,
  `jadwal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id_dok`, `pilpol`, `username`, `password`, `namadokter`, `notlp`, `alamatdok`, `jadwal`) VALUES
(15, 'Kardiologi', 'nuruls', 'nuruls', 'Dr. Nurul Soeherman', '0272-322075', 'Jl. Mriwis No. 34 Bareng', 'Senin - Jumat 08.00 - 11.00'),
(16, 'Urologi', 'srisi', 'srisi', 'Dr. Sri Sundari Indriastuti', '0272-897296', 'Nosutan 01/06 Cawas, Klaten', 'Senin - Jumat 08.00 - 11.00'),
(17, 'Perawatan Gigi', 'ayhara', 'ayhara', 'Dr. Ayhar Arifin', '081215026015', 'Ngawonggo 17/08 Ceper Klaten', 'Senin - Jumat 08.00 - 11.00'),
(18, 'Perawatan Mata', 'tiniw', 'tiniw', 'Dr. Tini Wijayanti', '08122618482', 'Dongkalan 3/2 Delanggu, Klaten', 'Senin - Jumat 08.00 - 11.00'),
(19, 'Neurologi', 'cahoynow', 'cahoynow', 'Dr. Cahyono Widodo', '0272-333313', 'Margorejo Canan Wedi Klaten', 'Senin - Jumat 08.00 - 11.00'),
(20, 'Operasi Plastik', 'efyk', 'efyk', 'Dr. Efy Kusumawati, M.Kes', '0272-337125', 'Krajan, Jatinom, Klaten', 'Senin - Jumat 08.00 - 11.00'),
(21, 'Kardiologi', 'andim', 'andim', 'Dr. Andi Markoco', '081567879075', 'Jl.Klaten-Yogya KM 7 Prawatan ', 'Senin - Jumat 13.00 - 16.00'),
(22, 'Urologi', 'anggitb', 'anggitb', 'Dr. Anggit Budiarto', '081328828239', 'Sentono, Karangdowo,Klaten', 'Senin - Jumat 13.00 - 16.00'),
(23, 'Perawatan Gigi', 'sigitjn', 'sigitjn', 'Dr. Sigit Joko Nugroho', '081329009701', 'Jagalan, Karangnongko,Klaten', 'Senin - Jumat 13.00 - 16.00'),
(24, 'Perawatan Mata', 'ahmadb', 'ahmadb', 'Dr. Ahmad Budoli', '0272-498004', 'Kios Tegal Mampir 8/3 Joton', 'Senin - Jumat 13.00 - 16.00'),
(25, 'Neurologi', 'yuniantods', 'yuniantods', 'Dr. Yunianto Dwi S', '0272-8881435', 'Keputran, Kemalang,Klaten', 'Senin - Jumat 13.00 - 16.00'),
(26, 'Operasi Plastik', 'ronnyr', 'ronnyr', 'Dr. Ronny Roekminto,M.Kes', '0272-324170', 'Jl.Mayor Kusmanto Dadi Mulyo C', 'Senin - Jumat 13.00 - 16.00'),
(27, 'Kardiologi', 'rinih', 'rinih', 'Dr. Rini Hidayati', '08156745796', 'Beluk,Bayat,Klaten', 'Sabtu 08.00-11.00'),
(28, 'Urologi', 'Manusamahb', 'manusamahb', 'Dr. Manusama Hasan Sabana', '081391772226', 'Jl. Raya Penggung Jatinom KM.2', 'Sabtu 08.00-11.00'),
(29, 'Perawatan Gigi', 'apriliadk', 'apriliadk', 'Dr. Aprilia Dwi Kumayasari', '085729335354', 'Krasak 01/02 Pondok, Karanganom', 'Sabtu 08.00-11.00'),
(30, 'Perawatan Mata', 'marianas', 'marianas', 'Dr. Mariana Sukowati', '085647357272', 'Jerukan,Troketon,Pedan', 'Sabtu 08.00-11.00'),
(31, 'Neurologi', 'anitanp', 'anitanp', 'Dr. Anita Nuke Pramasuti', '081372252251', 'Karangduren,Plawikan,Jogonalan', 'Sabtu 08.00-11.00'),
(32, 'Operasi Plastik', 'dhenih', 'dhenih', 'Dr. Dheni Hastuti', '081390311222', 'Dk.Dowo,Banyuripan,Bayat,Klaten', 'Sabtu 08.00-11.00'),
(34, 'Kardiologi', 'manikp', 'manikp', 'Dr. Manik Permatasari', '085640202042', 'Srijaya 4/4  Pucangan Miliran', 'Sabtu 13.00 - 16.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pempol`
--

CREATE TABLE `pempol` (
  `id1` int(11) NOT NULL,
  `id_pas` int(11) NOT NULL,
  `id_dok` int(11) NOT NULL,
  `pilpol` varchar(30) NOT NULL,
  `tglkun` date NOT NULL,
  `pembayaran` varchar(15) NOT NULL,
  `noantrian` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pempol`
--

INSERT INTO `pempol` (`id1`, `id_pas`, `id_dok`, `pilpol`, `tglkun`, `pembayaran`, `noantrian`) VALUES
(120, 117, 15, 'Kardiologi', '2020-07-04', 'Umum', '0001'),
(122, 119, 16, 'Urologi', '2020-07-04', 'BPJS', '0001'),
(124, 119, 18, 'Perawatan Mata', '2020-07-04', 'Umum', '0001'),
(125, 120, 19, 'Neurologi', '2020-07-04', 'Umum', '0001'),
(126, 121, 21, 'Kardiologi', '2020-07-04', 'Umum', '0001'),
(127, 122, 26, 'Operasi Plastik', '2020-07-04', 'Umum', '0001'),
(128, 123, 15, 'Kardiologi', '2020-07-04', 'Umum', '0002'),
(129, 123, 15, 'Kardiologi', '2020-07-05', 'Umum', '0001'),
(131, 124, 23, 'Perawatan Gigi', '2020-07-05', 'Umum', '0002');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekam`
--

CREATE TABLE `rekam` (
  `id_rekam` int(11) NOT NULL,
  `norkm` varchar(50) DEFAULT NULL,
  `id_pas` int(11) NOT NULL,
  `id1` int(11) NOT NULL,
  `jenis_rawat` varchar(20) NOT NULL,
  `tglkun` date NOT NULL,
  `diagnosa` text DEFAULT NULL,
  `resep` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rekam`
--

INSERT INTO `rekam` (`id_rekam`, `norkm`, `id_pas`, `id1`, `jenis_rawat`, `tglkun`, `diagnosa`, `resep`) VALUES
(72, 'ABCD01', 117, 120, 'Rawat Inap', '2020-07-04', 'Pusing, Mual, Batuk, Pilek, Panas', 'Amoxilin 20 Mg 1 Strip, Cetrizine 10 Mg 2 Strip,  Ambroxol 30 Mg 3 Strip'),
(73, 'ABCD02', 119, 122, 'Rawat Inap', '2020-07-04', 'Pusing, Demam', 'Panadol 20 Mg 1 Strip, Paracetamol 20 Mg 2 Strip'),
(75, 'ABCD03', 120, 125, 'Rawat Inap', '2020-07-04', 'Sakit Kepala, Pusing, Batuk', 'Amoxilin 20 Mg 1 Strip, Ranitidin 30 Mg 2 Strip, Strepsill 1 Strip'),
(76, 'ABCD04', 121, 126, 'Rawat Jalan', '2020-07-04', 'Batuk Pilek', 'Fluedane 30 Mg 2 Strip'),
(77, 'ABCD06', 122, 127, 'Rawat Jalan', '2020-07-04', 'Batuk Pilek', 'Fluedane 30 Mg 1 Strip'),
(78, 'ABCD05', 123, 128, 'Rawat Inap', '2020-07-04', 'Demam', 'Paracetamol 20 Mg 1 Strip'),
(79, 'ABCD05', 123, 129, 'Rawat Inap', '2020-07-05', 'Demam', 'Amoxicil 20 Mg 1 Strip');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indeks untuk tabel `datapasien`
--
ALTER TABLE `datapasien`
  ADD PRIMARY KEY (`id_pas`);

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dok`);

--
-- Indeks untuk tabel `pempol`
--
ALTER TABLE `pempol`
  ADD PRIMARY KEY (`id1`),
  ADD KEY `fkpolpas` (`id_pas`),
  ADD KEY `fkpoldok` (`id_dok`);

--
-- Indeks untuk tabel `rekam`
--
ALTER TABLE `rekam`
  ADD PRIMARY KEY (`id_rekam`),
  ADD KEY `id_pas` (`id_pas`) USING BTREE,
  ADD KEY `id1` (`id1`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `datapasien`
--
ALTER TABLE `datapasien`
  MODIFY `id_pas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `pempol`
--
ALTER TABLE `pempol`
  MODIFY `id1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT untuk tabel `rekam`
--
ALTER TABLE `rekam`
  MODIFY `id_rekam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pempol`
--
ALTER TABLE `pempol`
  ADD CONSTRAINT `fkpoldok` FOREIGN KEY (`id_dok`) REFERENCES `dokter` (`id_dok`),
  ADD CONSTRAINT `fkpolpas` FOREIGN KEY (`id_pas`) REFERENCES `datapasien` (`id_pas`);

--
-- Ketidakleluasaan untuk tabel `rekam`
--
ALTER TABLE `rekam`
  ADD CONSTRAINT `fkrekpas` FOREIGN KEY (`id_pas`) REFERENCES `datapasien` (`id_pas`),
  ADD CONSTRAINT `fkrekpol` FOREIGN KEY (`id1`) REFERENCES `pempol` (`id1`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
