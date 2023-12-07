-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 07, 2023 at 10:42 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `kutipan` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `status` enum('publish','draft','pending') NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `slug`, `isi`, `kutipan`, `gambar`, `status`, `kategori_id`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(4, 'Capaian Realisasi Investasi Kabupaten Purwakarta Triwulan II (April-Juni) tahun 2023', 'capaian-realisasi-investasi-kabupaten-purwakarta-triwulan-ii-april-juni-tahun-2023', '&lt;p&gt;&lt;strong&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui voluptatum soluta, facilis ut odit tempore totam similique, quas repellendus quia reiciendis vero ipsam ea, placeat dolor quasi. Ullam veniam pariatur voluptates.&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Tempore architecto unde, sint natus, sequi omnis incidunt libero ipsa quidem nemo quas cupiditate! Ipsa inventore, optio quod dolorum facere culpa modi voluptates rem sunt. Eligendi pariatur dolore quod quidem error:&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Sequi cumque debitis quia iure rerum doloremque expedita voluptatum nam optio delectus corporis aut exercitationem perspiciatis facere eos deserunt eum veritatis commodi labore.&lt;/li&gt;&lt;li&gt;Odit deserunt et corrupti repellat accusamus, labore reprehenderit quae aut! Incidunt at pariatur quisquam unde error natus minima nobis provident sunt quae repellendus inventore voluptatibus, molestiae vero enim tempore minus dolores dignissimos, debitis quidem eveniet? Perferendis dolor eaque delectus quo magni maiores libero nihil inventore. Voluptatem dolorem, explicabo fugit, maiores voluptatibus earum natus aspernatur amet voluptatum consectetur magni repellendus adipisci accusamus modi rem cupiditate veniam optio. Incidunt aperiam at distinctio voluptatum delectus&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;&lt;em&gt;A, officiis ab blanditiis nisi&lt;/em&gt;. Distinctio quae doloremque obcaecati reprehenderit, aliquid corrupti quia, repellendus tenetur hic, ipsum dolores voluptatem. Autem possimus numquam aspernatur nihil dolorem sapiente alias modi quam ipsum repudiandae provident exercitationem vero distinctio eos sint doloremque, accusamus cum incidunt hic. Repellendus sequi, quia esse nobis impedit illo voluptates. Iste inventore hic eum quidem expedita laudantium cupiditate earum modi molestiae, nesciunt mollitia&lt;/p&gt;', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui voluptatum soluta, facilis ut odit tempore totam similique, quas repellendus quia reiciendis vero ipsam ea, placeat dolor quasi. Ullam veniam pariatur voluptates, tempore architecto unde, sint natus, sequi omnis incidunt libero ipsa quidem nemo', '4062d2c384ac214158eaa4749cd20d4d.jpeg', 'publish', 1, '2023-12-03 13:38:29', 'Authors', NULL, NULL),
(5, 'Peresmian Gerai Pelayanan Publik Teras Madukara Kecamatan Subang', 'peresmian-gerai-pelayanan-publik-teras-madukara-kecamatan-subang', '&lt;p&gt;&lt;strong&gt;Mal Pelayanan Publik Bale Madukara&lt;/strong&gt; merupakan wujud nyata Pemerintah Kabupaten Purwakarta dalam memberikan kemudahan pelayanan publik kepada masyarakat, tidak sampai disitu, hadirnya Teras Madukara juga sebagai bentuk inovasi pelayanan publik yang mudah dijangkau oleh masyarakat.&lt;/p&gt;\r\n\r\n&lt;p&gt;Senin 04 September 2023, telah diresmikan Gerai Pelayanan Publik Teras Madukara Kecamatan Maniis, yang diresmikan oleh Bupati Purwakarta Anne Ratna Mustika. Saat ini Kabupaten Purwakarta memiliki 5 (lima) Teras Madukara yang tersebar diantaranya Teras Madukara Kecamatan Campaka, Wanayasa, Plered, Jatiluhur dan Maniis.&lt;/p&gt;\r\n\r\n&lt;p&gt;Teras Madukara saat ini memiliki 407 jenis layanan, layanan OSS seperti permbuatan NIB, layanan sidang online pengadilan negeri, layanan kependudukan dan pencatatan sipil, layanan taspen, pengadilan agama dan paspor.&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;Dengan hadirnya Teras Madukara, diharapkan dapat menjangkau masyarakat lebih luas dalam mendapatkan pelayanan publik.&lt;/p&gt;\r\n', 'Mal Pelayanan Publik Bale Madukara merupakan wujud nyata Pemerintah Kabupaten Purwakarta dalam memberikan kemudahan pelayanan publik kepada masyarakat, tidak sampai disitu, hadirnya Teras Madukara juga sebagai...', 'd1510b9c3dfe595960a21b5f5f6e77a1.png', 'pending', 1, '2023-12-03 14:22:43', 'Authors', '2023-12-03 15:28:31', 'Authors');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `keterangan` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `gambar`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'f182ea024420eec9f4f178d26fc87141.jpg', 'asasass', '2023-12-05 17:18:41', '2023-12-05 17:19:38');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'Uncategorized', '2023-12-02 20:10:50', '2023-12-02 23:03:35');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `slider` varchar(255) NOT NULL,
  `keterangan` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider`, `keterangan`, `created_at`, `updated_at`) VALUES
(4, 'd0e76188871340d8ee283810454b3398.jpg', 'Slider 1', '2023-12-02 16:52:01', '2023-12-02 23:43:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kategori` (`kategori`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
