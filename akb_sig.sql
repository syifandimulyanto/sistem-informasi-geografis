/*
Navicat MySQL Data Transfer

Source Server         : LOCAL
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : akb_sig

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-06-13 09:18:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for agent
-- ----------------------------
DROP TABLE IF EXISTS `agent`;
CREATE TABLE `agent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `district_id` int(11) NOT NULL,
  `marker_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(126) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` text,
  `address` text,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `phone_number` varchar(26) DEFAULT NULL,
  `info` text,
  `status` int(1) DEFAULT NULL,
  `flag` int(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of agent
-- ----------------------------
INSERT INTO `agent` VALUES ('6', '2', '0', '1', 'Jawa Timur Park 1', 'jawa-timur-park-1', 'Berapa banyak yang bisa kamu pelajari dalam satu hari?\r\nDari arca batu hingga menyaksikan ikan yang hidup sejak ratusan tahun lalu. Detik-detik proklamasi hingga detak jantung memompa darah. Galeri rumah adat nusantara hingga memberi makan piranha. Sejarah, fisika, biologi, sosiologi, dan matematika. Jatim Park 1, laboratorium raksasa interaktif untuk mempelajari dunia sekitarmu, tanpa ensiklopedia dan hafalan. Hanya satu tiket untuk menjadi lebih pintar dalam satu hari!\r\n\r\nMatematika dan fisika bukan sekadar coretan rumus tanpa arti. Ilmu pengetahuan bisa menjadi wahana atraksi untuk menguji adrenalinmu! Berani berputar satu lingkaran penuh dengan pendulum raksasa? Ingin uji ketahananmu sebagai pilot? Ingin merasakan berada di pusat angin tornado? Jangan mengaku jenius kalau belum berhasil mengalahkan ketakutanmu!', 'Jl. Kartika No. 2, Sisir, Batu, Sisir, Kec. Batu, Kota Batu, Jawa Timur 65315', '-7.884342100000002', '112.52487240000005', '(0341) 597777', 'Wisata edukasi', '1', '1', '2017-06-10 17:58:14', null);
INSERT INTO `agent` VALUES ('7', '2', '0', '1', 'The Bagong Adventeru', 'the-bagong-adventeru', 'The Bagong Adventure Museum Tubuh adalah museum tubuh manusia pertama di Indonesia dan terbesar di Asia saat ini. Museum Tubuh berlokasi satu area dengan Jawa Timur Park 1 di Jl. Kartika No. 2 Kota Wisata Batu. The Bagong Adventure Museum Tubuh merupakan tempat wisata edukasi yang menampilkan anatomi tubuh manusia. Berdiri di atas lahan 1 hektar, museum berbentuk relief tubuh manusia dengan karakter Bagong, yang terdiri dari 6 lantai.\r\n\r\nPengunjung Museum Tubuh bisa mendapatkan check up secara gratis dengan tenaga medis di ruang pemeriksaan yang ada di dalam Museum Tubuh. Pemeriksaan gratis yang akan didapatkan pengunjung antara lain pemeriksaan mata, cek lemak tubuh, cek osteoporosis, cek kolesterol, cek asam urat, dan cek gula darah. Semua ini bisa didapatkan gratis bagi pengunjung museum tubuh.\r\n\r\nPembelajaran anatomi tubuh manusia di Museum Tubuh The Bagong Adventute ini dilengkapi dengan fasilitas multimedia yang modern guna mendukung zona di dalamnya. Mulai dari zona gigi, zona telinga, zona hidung, zona otak, zona mata, zona pembuluh darah, zona jantung, dan masih banyak zona lainnya.', '\r\nJawa Timur Park 1, Jalan Kartika No. 1, Sisir, Kec. Batu, Kota Batu, Jawa Timur 65314', '-7.883470900000001', '112.52498200000002', '(0341) 597778', '', '1', '1', '2017-06-10 18:01:18', null);
INSERT INTO `agent` VALUES ('8', '2', '0', '1', 'Batu Secret Zoo', 'batu-secret-zoo', 'Tak perlu keliling dunia menyaksikan ragam satwa unik. Dari satwa prasejarah, fauna di kutub utara, hingga mamalia di lautan terdalam, Jatim Park 2 menghadirkan rimba di tengah kota!\r\n\r\nBerfoto dengan kangguru, menyentuh kura-kura terbesar ketiga di dunia, memberi makan hewan pengerat terbesar di dunia. Dari Madagaskar, Amazon, hingga pedalaman Indonesia, rasakan sensasi bertatapan langsung dengan satwa langka dari balik kaca! ', 'Jl. Oro-Oro Ombo No.9, Temas, Kec. Batu, Kota Batu, Jawa Timur 65315', '-7.8890823', '112.52823620000004', '(0341) 597777', '', '1', '1', '2017-06-10 18:03:31', null);
INSERT INTO `agent` VALUES ('9', '3', '0', '0', 'Museum Satwa', 'museum-satwa', 'Tidak kurang dari 1.000 spesies satwa liar dan 10.000 serangga dapat disaksikan di museum satwa terbesar dan terlengkap di Indonesia! Menelusuri sejarah dunia lewat replika tulang-belulang dinosaurus, evolusi mamalia selama ratusan tahun, hingga menyaksikan lebih dekat serangga kecil yang luput dari mata manusia.', 'Eco Green Park, Jalan Raya Oro-Oro Ombo No.9, Batu, Temas, Kec. Batu, Kota Batu, Jawa Timur 65316', '-7.8886297', '112.52987380000002', ' (0341) 597777', '', '1', '1', '2017-06-10 18:05:17', null);
INSERT INTO `agent` VALUES ('10', '2', '0', '1', 'Eco Green Park', 'eco-green-park', 'Setiap hari berjejalan dengan macet, rasakan satu hari bebas polusi di taman ekosistem terbesar di Indonesia. Berdiri bersebelahan dengan aneka burung, merasakan kalajengking di tanganmu, hingga melewati laba-laba raksasa di hutan buatan. Setiap sudut taman penuh dengan teknologi ekologi, dari tenaga surya, kompos, pengolahan susu, dan kerangka robot dari 1.001 handphone! ', 'Jl. Raya Oro-Oro Ombo No.9A, Temas, Kec. Batu, Kota Batu, Jawa Timur 65314', '-7.889179500000001', '112.52753510000002', '(0341) 512525', '', '1', '1', '2017-06-10 18:07:08', null);
INSERT INTO `agent` VALUES ('11', '2', '0', '1', 'Museum Angkut', 'museum-angkut', 'Pecinta mobil klasik, pecinta sejarah, dan penggemar film Hollywood kini menemukan rumah di Museum Angkut. Dengan luas hampir mencapai empat hektar, inilah museum transportasi pertama di Asia Tenggara. Tidak hanya menikmati sejarah setiap mobil, dari angkutan pertama Presiden RI hingga Istana Buckingham Inggris, area museum sangat artistik untuk fotografi. ', 'No. 2, Kota Wisata, Jalan Terusan Sultan Agung, Ngaglik, Kecamatan Batu, Ngaglik, Kec. Batu, Kota Batu, Jawa Timur 65314', '-7.878514999999999', '112.51910700000008', '0821-4446-8002', '', '1', '1', '2017-06-10 18:09:03', null);
INSERT INTO `agent` VALUES ('12', '2', '0', '1', 'Preadator Fun Park', 'preadator-fun-park', 'Apa yang ada di bayangan Anda saat mendengar kata predator? Taring tajam, badan besar, dan hewan ganas? Predator Park menunjukkan kalau predator seperti buaya tidak menyeramkan seperti yang dibayangkan. Mulai dari replika menetasnya telur buaya hingga menyentuh langsung buaya hidup, kita akan melihat sisi lain di balik taring tajam sang buaya. Bukan hanya buaya, Predator Park dilengkapi dengan beragam wahana outbound, baik untuk anak maupun dewasa, untuk menguji ketangkasan seperti predator yang sedang berburu!', 'Jl. Raya Tlekung No. 315, Dusun Gangsiran, Desa Tlekung, Kecamatan Junrejo, Tlekung, Junrejo, Kota Batu, Jawa Timur 65327', '-7.912744799999999', '112.54812719999995', '(0341) 531999', '', '1', '1', '2017-06-10 18:11:25', null);
INSERT INTO `agent` VALUES ('13', '2', '0', '1', 'Batu Night Spectacular', 'batu-night-spectacular', 'Tahukah kamu? Pasar malam tadinya adalah festival perayaan Maulud Nabi di Jawa, terutama di Surakarta dan Yogyakarta. Kini, pasar malam setia menemani begitu matahari tenggelam, apalagi di Kota Batu! Batu Night Spectacular adalah pasar malam modern dengan beragam atraksi menguji adrenalin dan menghibur untuk keluarga. Perang laser, rumah hantu, roller coaster, hingga film 4D membuat malam sayang dilewatkan begitu saja. Abadikan malam dengan berfoto di balon udara, menara Eiffel, dan kereta Cinderella di taman lampion.', 'Jl. Hayam Wuruk No.1, Oro-Oro Ombo, Kec. Batu, Kota Batu, Jawa Timur 65316\r\n', '-7.8965247', '112.53453539999998', ' (0341) 5025111', '', '1', '1', '2017-06-10 18:13:14', null);
INSERT INTO `agent` VALUES ('14', '2', '0', '2', 'Villa Hadipoeran', 'villa-hadipoeran', 'Hunian sejuk di kota wisata batu', 'Jl. Bukit Berbunga No.15, Sidomulyo, Kec. Batu, Kota Batu, Jawa Timur 65317', '-7.860200000000002', '112.52620300000001', '(0341) 591102', '', '1', '1', '2017-06-10 18:17:10', null);
INSERT INTO `agent` VALUES ('15', '2', '0', '2', 'Villa Fortune Batu', 'villa-fortune-batu', 'Villa keluarga dengan fasilitas kolam renang pribadi yang terletak tepat di sebelah museum angkut batu				', 'Jl. Abdul Gani No.9, Ngaglik, Kec. Batu, Kota Batu, Jawa Timur 65311', '-7.8765297', '112.52080209999997', '0822-3433-5585', '', '1', '1', '2017-06-10 18:20:03', null);
INSERT INTO `agent` VALUES ('16', '4', '0', '3', 'Hotel Purnama', 'hotel-purnama', '', 'Jl. Raya Selecta No. 1-15, Punten, Bumiaji, Kota Batu, Jawa Timur 65338', '-7.840235', '112.527514', '0341) 592700', '', '0', '1', '2017-06-10 18:29:49', null);
INSERT INTO `agent` VALUES ('17', '2', '0', '3', 'Kusuma Agrowisata Resort & Convention Hotel', 'kusuma-agrowisata-resort-convention-hotel', 'Hotel di kawasan dataran tinggi kota wisata batu', 'Kawasan Wisata Kusuma Agro, Jalan Abdul Gani Atas, Ngaglik, Batu Sub-District, Batu City, East Java 65311', '-7.883586', '112.51568500000008', '0800 1593333', '', '1', '1', '2017-06-10 18:32:09', null);
INSERT INTO `agent` VALUES ('18', '0', '0', '4', 'Brawijaya Istana Oleh - Oleh', 'brawijaya-istana-oleh-oleh', 'Kami juga menyediakan hostel untuk backpacker, pujasera kedai susu, rest area yang nyaman, kamar mandi dengan air hangat maupun dingin juga tersedia untuk anda. - See more at: http://brawijayaoleholeh.com/?content=home#sthash.yuIyN5Ds.dpuf', 'Jl. Diponegoro No.86, Sisir, Kec. Batu, Kota Batu, Jawa Timur 65314', '-7.8758601', '112.53216780000002', '(0341) 2990911', '', '1', '1', '2017-06-10 18:37:50', null);

-- ----------------------------
-- Table structure for agent_facilities
-- ----------------------------
DROP TABLE IF EXISTS `agent_facilities`;
CREATE TABLE `agent_facilities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `agent_id` int(1) NOT NULL,
  `facilities_id` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `flag` int(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of agent_facilities
-- ----------------------------
INSERT INTO `agent_facilities` VALUES ('13', '14', '1', '1', '1', '2017-06-10 18:17:10', null);
INSERT INTO `agent_facilities` VALUES ('14', '14', '2', '1', '1', '2017-06-10 18:17:11', null);
INSERT INTO `agent_facilities` VALUES ('15', '14', '3', '1', '1', '2017-06-10 18:17:11', null);
INSERT INTO `agent_facilities` VALUES ('16', '15', '1', '1', '1', '2017-06-10 18:20:03', null);
INSERT INTO `agent_facilities` VALUES ('17', '15', '2', '1', '1', '2017-06-10 18:20:03', null);
INSERT INTO `agent_facilities` VALUES ('18', '15', '3', '1', '1', '2017-06-10 18:20:03', null);
INSERT INTO `agent_facilities` VALUES ('19', '16', '2', '1', '1', '2017-06-10 18:29:49', null);
INSERT INTO `agent_facilities` VALUES ('20', '16', '3', '1', '1', '2017-06-10 18:29:49', null);
INSERT INTO `agent_facilities` VALUES ('21', '16', '9', '1', '1', '2017-06-10 18:29:49', null);
INSERT INTO `agent_facilities` VALUES ('22', '17', '1', '1', '1', '2017-06-10 18:32:09', null);
INSERT INTO `agent_facilities` VALUES ('23', '17', '2', '1', '1', '2017-06-10 18:32:09', null);
INSERT INTO `agent_facilities` VALUES ('24', '17', '3', '1', '1', '2017-06-10 18:32:09', null);
INSERT INTO `agent_facilities` VALUES ('25', '17', '4', '1', '1', '2017-06-10 18:32:09', null);
INSERT INTO `agent_facilities` VALUES ('26', '17', '5', '1', '1', '2017-06-10 18:32:10', null);
INSERT INTO `agent_facilities` VALUES ('27', '17', '7', '1', '1', '2017-06-10 18:32:10', null);

-- ----------------------------
-- Table structure for agent_images
-- ----------------------------
DROP TABLE IF EXISTS `agent_images`;
CREATE TABLE `agent_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `agent_id` int(11) NOT NULL,
  `path` varchar(126) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `flag` int(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of agent_images
-- ----------------------------
INSERT INTO `agent_images` VALUES ('4', '6', './uploads/agent/', 'd01f4578920b0d3b928c466e4f37ef92.jpg', '1', '1', '2017-06-10 17:58:16', null);
INSERT INTO `agent_images` VALUES ('5', '6', './uploads/agent/', '47307aff6f00e41b6479e2799b31a3ea.jpg', '1', '1', '2017-06-10 17:58:16', null);
INSERT INTO `agent_images` VALUES ('6', '6', './uploads/agent/', '56d8e007b2fc2ff63f685856a0695cc7.jpg', '1', '1', '2017-06-10 17:58:16', null);
INSERT INTO `agent_images` VALUES ('7', '7', './uploads/agent/', '486e3236f742bf81968eb572b64353d9.jpg', '1', '1', '2017-06-10 18:01:19', null);
INSERT INTO `agent_images` VALUES ('8', '7', './uploads/agent/', '259d48648719d4aba9f9939caa63c974.jpg', '1', '1', '2017-06-10 18:01:19', null);
INSERT INTO `agent_images` VALUES ('9', '7', './uploads/agent/', '026ad6e36ab682bfaf95ffeb030298a7.png', '1', '1', '2017-06-10 18:01:20', null);
INSERT INTO `agent_images` VALUES ('10', '8', './uploads/agent/', '330e37c90449b717688b352452c1fbff.jpg', '1', '1', '2017-06-10 18:03:34', null);
INSERT INTO `agent_images` VALUES ('11', '8', './uploads/agent/', '97b2be58135ec9408ca983d9d87f066e.JPG', '1', '1', '2017-06-10 18:03:34', null);
INSERT INTO `agent_images` VALUES ('12', '8', './uploads/agent/', '5d7e1e620cb35a8475eb04c2b2f02cae.jpg', '1', '1', '2017-06-10 18:03:34', null);
INSERT INTO `agent_images` VALUES ('13', '9', './uploads/agent/', 'e9fb024422ece40028eceaccebeac257.jpg', '1', '1', '2017-06-10 18:05:18', null);
INSERT INTO `agent_images` VALUES ('14', '9', './uploads/agent/', 'dcd5f9d012681f08e4fba5bd7b494a7a.jpg', '1', '1', '2017-06-10 18:05:18', null);
INSERT INTO `agent_images` VALUES ('15', '9', './uploads/agent/', 'f436723385e76add1e52abb761bf25a1.jpg', '1', '1', '2017-06-10 18:05:18', null);
INSERT INTO `agent_images` VALUES ('16', '10', './uploads/agent/', '86fe5a2855449b6fea141c75086867fd.jpg', '1', '1', '2017-06-10 18:07:09', null);
INSERT INTO `agent_images` VALUES ('17', '10', './uploads/agent/', '3ca83d6308f1fa0bfb6a10ccdd2611dd.jpg', '1', '1', '2017-06-10 18:07:09', null);
INSERT INTO `agent_images` VALUES ('18', '10', './uploads/agent/', '7859292f658c3cddf1e9265a47c21b27.jpg', '1', '1', '2017-06-10 18:07:10', null);
INSERT INTO `agent_images` VALUES ('19', '11', './uploads/agent/', 'd7c6a12283702d29c0ade846626d9699.jpg', '1', '1', '2017-06-10 18:09:09', null);
INSERT INTO `agent_images` VALUES ('20', '11', './uploads/agent/', '9200a803cc044089f7dbad742a011299.jpg', '1', '1', '2017-06-10 18:09:09', null);
INSERT INTO `agent_images` VALUES ('21', '11', './uploads/agent/', '673e2e4bd02770215a5de8f6e8651899.jpg', '1', '1', '2017-06-10 18:09:09', null);
INSERT INTO `agent_images` VALUES ('22', '12', './uploads/agent/', '424d80836ec40e622af8c1ada7bbd466.jpg', '1', '1', '2017-06-10 18:11:27', null);
INSERT INTO `agent_images` VALUES ('23', '12', './uploads/agent/', 'bd6b5fd43afef64d7fd1353b2bb94630.jpg', '1', '1', '2017-06-10 18:11:27', null);
INSERT INTO `agent_images` VALUES ('24', '13', './uploads/agent/', '47146fd90d29aa163a1aa209f8a4c72d.jpg', '1', '1', '2017-06-10 18:13:14', null);
INSERT INTO `agent_images` VALUES ('25', '13', './uploads/agent/', '2cb1a0c12b536c97458ec0aad8b7a002.jpg', '1', '1', '2017-06-10 18:13:15', null);
INSERT INTO `agent_images` VALUES ('26', '14', './uploads/agent/', '39c8d6c6c379194aa0bd1928b5150234.JPG', '1', '1', '2017-06-10 18:17:28', null);
INSERT INTO `agent_images` VALUES ('27', '14', './uploads/agent/', '446305fd00dbb096f616e93868ddb6c7.JPG', '1', '1', '2017-06-10 18:17:28', null);
INSERT INTO `agent_images` VALUES ('28', '14', './uploads/agent/', '13718e7ff2701fb4d73245e2da0f5e72.JPG', '1', '1', '2017-06-10 18:17:28', null);
INSERT INTO `agent_images` VALUES ('29', '15', './uploads/agent/', '57f9b7492cfb5c41dc0efb2e8bb19589.jpg', '1', '1', '2017-06-10 18:20:03', null);
INSERT INTO `agent_images` VALUES ('30', '15', './uploads/agent/', 'd23b438c3da53538b17c01c78fbcfec0.jpg', '1', '1', '2017-06-10 18:20:03', null);
INSERT INTO `agent_images` VALUES ('31', '16', './uploads/agent/', '50be5ed589d733a7a55c00fa4486bb51.jpg', '1', '1', '2017-06-10 18:29:49', null);
INSERT INTO `agent_images` VALUES ('32', '17', './uploads/agent/', '7f32ac3ce3c63a232fa114884972f2ba.jpg', '1', '1', '2017-06-10 18:32:11', null);
INSERT INTO `agent_images` VALUES ('33', '17', './uploads/agent/', 'fd602eb4a98c6e33f7552934325a49ca.jpg', '1', '1', '2017-06-10 18:32:11', null);
INSERT INTO `agent_images` VALUES ('34', '17', './uploads/agent/', '78faea409fff4023aff8fa4dc169cc2a.jpg', '1', '1', '2017-06-10 18:32:11', null);
INSERT INTO `agent_images` VALUES ('35', '18', './uploads/agent/', '018513379d239180daa8df1395c46c85.jpg', '1', '1', '2017-06-10 18:37:51', null);
INSERT INTO `agent_images` VALUES ('36', '18', './uploads/agent/', 'cee3d93f43841fb898880fc7ede5fe7b.jpg', '1', '1', '2017-06-10 18:37:51', null);

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(26) DEFAULT NULL,
  `description` text,
  `icon` varchar(26) DEFAULT NULL,
  `path` varchar(126) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `flag` int(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', 'Wisata', '', 'im-icon-Tourch', 'uploads/category/', 'tours.jpeg', '1', '1', '2017-06-06 07:58:49', '2017-06-12 11:12:54');
INSERT INTO `category` VALUES ('2', 'Villa', '', 'im-icon-Home-5', 'uploads/category/', 'villa.jpeg', '1', '1', '2017-06-06 08:01:00', '2017-06-12 10:58:29');
INSERT INTO `category` VALUES ('3', 'Hotel', '', 'im-icon-Hotel', 'uploads/category/', 'hotels.jpeg', '1', '1', '2017-06-10 18:26:55', '2017-06-12 10:57:01');
INSERT INTO `category` VALUES ('4', 'Oleh -  oleh', '-', 'im-icon-Hamburger', 'uploads/category/', 'souvenirs.jpeg', '1', '1', '2017-06-10 18:32:37', '2017-06-12 10:59:26');

-- ----------------------------
-- Table structure for city
-- ----------------------------
DROP TABLE IF EXISTS `city`;
CREATE TABLE `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `province_id` int(11) NOT NULL,
  `name` varchar(126) DEFAULT NULL,
  `description` text,
  `status` int(1) DEFAULT NULL,
  `flag` int(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of city
-- ----------------------------
INSERT INTO `city` VALUES ('1', '1', 'Kota Malang', '', '1', '1', '2017-06-06 06:08:42', null);
INSERT INTO `city` VALUES ('2', '1', 'Kota Batu', '', '1', '1', '2017-06-06 06:09:07', null);

-- ----------------------------
-- Table structure for country
-- ----------------------------
DROP TABLE IF EXISTS `country`;
CREATE TABLE `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(126) DEFAULT NULL,
  `description` text,
  `status` int(1) DEFAULT NULL,
  `flag` int(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of country
-- ----------------------------
INSERT INTO `country` VALUES ('1', 'Indonesia', '', '1', '1', '2017-06-06 05:52:11', '2017-06-06 05:53:29');

-- ----------------------------
-- Table structure for district
-- ----------------------------
DROP TABLE IF EXISTS `district`;
CREATE TABLE `district` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city_id` int(11) NOT NULL,
  `name` varchar(126) DEFAULT NULL,
  `description` text,
  `status` int(1) DEFAULT NULL,
  `flag` int(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of district
-- ----------------------------
INSERT INTO `district` VALUES ('1', '1', 'Klojen', '', '1', '1', '2017-06-06 06:08:52', null);
INSERT INTO `district` VALUES ('2', '2', 'Batu', '', '1', '1', '2017-06-06 06:09:17', null);
INSERT INTO `district` VALUES ('3', '2', 'Junrejo', '', '1', '1', '2017-06-06 06:09:26', null);
INSERT INTO `district` VALUES ('4', '2', 'Bumiaji', '', '1', '1', '2017-06-06 06:10:35', null);

-- ----------------------------
-- Table structure for facilities
-- ----------------------------
DROP TABLE IF EXISTS `facilities`;
CREATE TABLE `facilities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(126) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `icon` varchar(126) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `flag` int(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of facilities
-- ----------------------------
INSERT INTO `facilities` VALUES ('1', 'Dapur', '', '-', '1', '1', '2017-06-06 08:56:08', '2017-06-10 18:24:06');
INSERT INTO `facilities` VALUES ('2', 'Kolam Renang', '', '-', '1', '1', '2017-06-06 08:56:15', '2017-06-10 18:24:11');
INSERT INTO `facilities` VALUES ('3', 'Wifi', '', '-', '1', '1', '2017-06-06 08:56:23', '2017-06-10 18:25:09');
INSERT INTO `facilities` VALUES ('4', 'Kitchen Set', '', '-', '1', '1', '2017-06-10 18:24:00', null);
INSERT INTO `facilities` VALUES ('5', 'Televisi', '', '-', '1', '1', '2017-06-10 18:25:39', null);
INSERT INTO `facilities` VALUES ('7', 'Ruang Keluarga', '', '-', '1', '1', '2017-06-10 18:25:59', null);
INSERT INTO `facilities` VALUES ('8', 'Extra Bed', '', '-', '1', '1', '2017-06-10 18:26:11', null);
INSERT INTO `facilities` VALUES ('9', 'Parking Area', '', '-', '1', '1', '2017-06-10 18:26:23', null);
INSERT INTO `facilities` VALUES ('10', 'Garden', '', '-', '1', '1', '2017-06-10 18:26:30', null);
INSERT INTO `facilities` VALUES ('11', 'One gate security', '', '-', '1', '1', '2017-06-10 18:26:41', null);

-- ----------------------------
-- Table structure for marker
-- ----------------------------
DROP TABLE IF EXISTS `marker`;
CREATE TABLE `marker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(26) DEFAULT NULL,
  `path` varchar(126) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `flag` int(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of marker
-- ----------------------------

-- ----------------------------
-- Table structure for province
-- ----------------------------
DROP TABLE IF EXISTS `province`;
CREATE TABLE `province` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `name` varchar(126) DEFAULT NULL,
  `description` text,
  `status` int(1) DEFAULT NULL,
  `flag` int(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of province
-- ----------------------------
INSERT INTO `province` VALUES ('1', '1', 'Jawa Timur', '', '1', '1', '2017-06-06 06:08:30', null);

-- ----------------------------
-- Table structure for role
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(64) DEFAULT NULL,
  `description` text,
  `status` int(1) DEFAULT NULL,
  `flag` int(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` VALUES ('14', '0', 'Head Of Backend Developer', '', '1', '1', '2017-05-27 08:56:19', null);
INSERT INTO `role` VALUES ('15', '14', 'Senior Backend Developer', '', '1', '1', '2017-05-27 08:56:29', null);
INSERT INTO `role` VALUES ('16', '15', 'Junior Backend Developer', '', '0', '0', '2017-05-27 08:56:38', '2017-05-27 09:04:00');
INSERT INTO `role` VALUES ('17', '0', 'Head Of Frontend Developer', '', '1', '1', '2017-05-27 08:56:49', null);
INSERT INTO `role` VALUES ('18', '17', 'Frontend Developer22', '', '0', '0', '2017-05-27 09:05:42', '2017-05-27 09:06:01');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(126) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `flag` int(1) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Syifandi Mulyanto', 'fanfandi17@gmail.com', '9bb773615bccfc87168aa059884ca038', '1', '1', null, null);
INSERT INTO `users` VALUES ('2', 'Admins', 'admin@admin.com', '9bb773615bccfc87168aa059884ca038', '1', '1', null, null);
