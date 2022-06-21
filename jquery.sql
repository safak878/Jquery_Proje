
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `bilgi` (
  `bilgi_id` int(11) NOT NULL,
  `bilgi_ad` varchar(50) NOT NULL,
  `bilgi_soyad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `bilgi` (`bilgi_id`, `bilgi_ad`, `bilgi_soyad`) VALUES
(260, 'Şafak', 'Küsmez'),
(265, 'Ahmet', 'Keleş'),
(266, 'Ahmet', 'Sezer');



ALTER TABLE `bilgi`
  ADD PRIMARY KEY (`bilgi_id`);


ALTER TABLE `bilgi`
  MODIFY `bilgi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=267;

