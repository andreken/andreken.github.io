-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mar 18, 2018 alle 14:09
-- Versione del server: 10.1.26-MariaDB
-- Versione PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carolina_spa`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image_full` varchar(30) NOT NULL,
  `image_thumb` varchar(30) NOT NULL,
  `price` varchar(6) NOT NULL,
  `descr_long` longtext NOT NULL,
  `descr_short` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `products`
--

INSERT INTO `products` (`ID`, `name`, `image_full`, `image_thumb`, `price`, `descr_long`, `descr_short`) VALUES
(1, 'Home Kit', 'product_large_01.jpg', 'product_thumb_01.jpg', '25', 'Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\nSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.', 'Short description of the Home Kit'),
(2, 'Aromatherapy and Essential Oil', 'product_large_02.jpg', 'product_thumb_02.jpg', '30', 'Suspendisse eleifend ac nisi non rutrum. Praesent pulvinar ex at luctus luctus. Ut fermentum condimentum nibh. Cras vitae lorem a nulla euismod dapibus. Duis tempor, odio eu cursus lobortis, velit turpis tristique lorem, in vehicula velit mi ut ipsum. Nullam sed sapien velit. Sed justo urna, consectetur sed rhoncus ut, tempor et lectus. Nulla a pulvinar lectus. Sed tempor dignissim convallis.\r\n\r\nMorbi a condimentum neque. Nam lectus lorem, molestie tincidunt tincidunt sit amet, commodo eget justo. Aenean et molestie neque. Nulla tincidunt suscipit metus at consequat. Fusce tincidunt nec ipsum eu auctor. Ut rutrum ligula vitae pretium congue. Nam placerat risus metus, nec consequat sem viverra vel. Aenean consectetur tortor purus, ut luctus leo molestie eu. Praesent tristique elit sit amet sapien placerat, ut tristique urna ultricies. Aenean et libero efficitur, consequat sapien vel, pharetra dui. Suspendisse luctus id sem sed consequat. Ut neque sapien, tempor sit amet lorem ut, rhoncus laoreet eros. Cras id urna id metus vestibulum gravida.', 'Aromatherapy and Essential Oil Short Description'),
(3, 'Spa Soap with 2 pieces', 'product_large_03.jpg', 'product_thumb_03.jpg', '15', 'Vivamus in commodo lectus. Maecenas tincidunt ac nulla lobortis varius. Suspendisse condimentum urna ac malesuada ultricies. Morbi semper tellus gravida elit tristique euismod. Sed ullamcorper tellus lorem, quis dapibus dolor tempus et. Vivamus sollicitudin neque non nunc efficitur, vitae sollicitudin turpis aliquam. Aliquam vitae est purus. Nulla efficitur ipsum ipsum, vulputate tempor augue lacinia ut. Suspendisse a augue at orci gravida laoreet. Duis vestibulum lorem vel sem molestie, id gravida lectus vestibulum. Pellentesque bibendum pellentesque lectus a hendrerit.\r\n\r\nInteger nec lobortis purus. Nam et est eu magna vulputate gravida. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce nec efficitur arcu. Mauris ut lacus malesuada nisl accumsan tempor. Suspendisse et lectus massa. Ut gravida hendrerit finibus. Vestibulum in ante in justo varius dignissim vel eget dolor. Vivamus at malesuada erat, nec bibendum ex. Suspendisse nec elit ut massa interdum tincidunt sit amet sed leo. Fusce nec lorem lacus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu fringilla mauris, sit amet facilisis tellus. Etiam semper, elit eu facilisis tincidunt, lectus lectus vehicula nisi, at imperdiet ligula lectus eget turpis. Phasellus iaculis, dolor id ullamcorper congue, mi elit lobortis justo, eget tempus orci tellus vehicula lorem.', 'Spa Soap with 2 pieces Short Description'),
(4, 'Home Kit 2', 'product_large_04.jpg', 'product_thumb_04.jpg', '20', 'Sed lobortis egestas sagittis. Pellentesque vestibulum scelerisque nisi quis consectetur. Duis pretium sem ac risus bibendum iaculis. Quisque a urna a lectus auctor tincidunt. Donec efficitur tempus interdum. Quisque imperdiet arcu eleifend dapibus cursus. Sed bibendum justo a bibendum tristique. Maecenas sollicitudin odio finibus, sollicitudin nunc sed, mollis ipsum. Fusce dapibus nisl nunc, a sagittis nibh posuere id. Mauris convallis tempus commodo. Pellentesque et elit leo. Etiam id neque turpis. Aliquam accumsan risus in enim faucibus, vitae congue orci tristique.\r\n\r\nInterdum et malesuada fames ac ante ipsum primis in faucibus. Fusce dignissim dictum quam sed euismod. Maecenas molestie massa at pretium scelerisque. Fusce ut tortor egestas nulla viverra congue. Aenean euismod maximus ultrices. Aenean cursus cursus lacus, vel mattis nulla mollis at. Morbi dapibus egestas laoreet.', 'Home Kit 2 Short Description'),
(5, 'Aromatic Candles', 'product_large_05.jpg', 'product_thumb_05.jpg', '35', 'Maecenas eget consectetur dolor, sit amet suscipit dolor. Ut facilisis augue vitae sem egestas sollicitudin. Sed commodo metus neque, id mattis justo tincidunt vitae. Sed pellentesque velit nec augue convallis, non facilisis tellus vestibulum. Mauris malesuada metus leo, et gravida turpis molestie sodales. Donec non dui quis sem semper pharetra. Donec ornare turpis sit amet ex interdum sollicitudin. Suspendisse quis purus massa. In eu finibus velit. Morbi consectetur ante at libero luctus pretium. Etiam sed lacus congue, varius dui vitae, suscipit massa.\r\n\r\nProin venenatis at libero ut porttitor. Morbi malesuada eleifend purus nec consequat. Pellentesque in elit urna. Nulla facilisi. Aenean sodales turpis vitae justo sodales, eget sagittis augue accumsan. Aenean quis dui justo. Duis sollicitudin pulvinar cursus.', 'Aromatic Candles Short Description'),
(6, 'Rose Water', 'product_large_06.jpg', 'product_thumb_06.jpg', '3', 'Aenean vulputate nisi vitae nulla tincidunt, non ultrices lacus semper. Vivamus vestibulum sollicitudin turpis eget sagittis. Integer tristique fringilla fringilla. Integer sagittis dignissim felis eu ultrices. Nulla ac ante bibendum, finibus arcu et, mattis lacus. Morbi vehicula, justo quis consectetur condimentum, ipsum nunc cursus turpis, non dignissim nunc leo eget lorem. Ut massa ante, consequat a nisl ut, tempor tincidunt neque. Donec viverra venenatis vehicula. In sit amet mauris consequat, rutrum ligula vitae, tincidunt velit. Nunc rhoncus, felis id congue eleifend, tortor neque porttitor mi, vel sagittis leo ex at dui. Sed eros massa, vestibulum quis rutrum vel, pretium in tellus. Curabitur at turpis at ligula vehicula euismod a vitae erat. Proin et tellus eget metus vulputate tempor. Donec commodo ex eget diam maximus, a finibus leo suscipit. Morbi vulputate sapien sed tortor malesuada viverra. Phasellus lobortis felis ac varius bibendum.\r\n\r\nNullam tincidunt facilisis massa a auctor. Vivamus commodo diam at sapien mollis, rutrum malesuada est bibendum. Ut sagittis diam id ex interdum, non accumsan nisl sollicitudin. Integer sit amet suscipit lacus. Nam maximus dapibus odio, non dapibus orci placerat vitae. Donec auctor arcu vel egestas interdum. Sed consectetur diam vel turpis sodales, id vehicula leo ultrices. Aenean tincidunt enim justo, et rhoncus tellus mollis et.', 'Rose Water Short Description'),
(7, 'Hot Rocks', 'product_large_07.jpg', 'product_thumb_07.jpg', '10', 'Maecenas nec aliquet nisl. Suspendisse risus ante, pulvinar eu porta pretium, pulvinar et tortor. Donec malesuada, nisi sit amet laoreet pellentesque, dolor nibh lobortis metus, vitae tincidunt justo turpis eget quam. Maecenas ut mollis nisi, in gravida nisl. Vivamus eget tincidunt mauris, et sodales neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed mollis dapibus consectetur. Integer tristique, erat vel pharetra ultrices, sapien leo gravida quam, vitae semper leo orci sed diam. Aliquam eu imperdiet elit. Nullam volutpat id massa id egestas. Nullam quis augue mauris. Praesent quis sagittis enim. Phasellus sed convallis odio. Phasellus et diam et elit fermentum ultricies.\r\n\r\nSuspendisse at sapien hendrerit, tincidunt lectus sed, aliquam quam. Mauris at consectetur ipsum. Suspendisse justo mi, suscipit nec dictum vitae, varius vitae ligula. Mauris in quam ac orci tincidunt condimentum in accumsan nisl. Morbi dictum viverra velit, eget elementum nisi luctus id. Nulla placerat ultricies augue. Morbi nec dui eros. Aliquam sit amet urna ac augue porta vulputate a eget arcu. Quisque elementum quam vel blandit feugiat. Vivamus dui dui, cursus vel vestibulum eu, iaculis eu purus. Nulla egestas sodales justo. Pellentesque congue id eros ac luctus. Sed metus risus, imperdiet id rutrum eu, imperdiet ut mi.', 'Hot Rocks Short Description'),
(8, 'Towels', 'product_large_08.jpg', 'product_thumb_08.jpg', '12', 'Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas malesuada, dui sed iaculis varius, augue felis volutpat est, id semper velit nunc eu tortor. Morbi ex lectus, semper eu aliquet vel, pharetra in elit. Aliquam maximus malesuada ante, eget porttitor erat imperdiet vel. Sed justo massa, mollis laoreet pulvinar eu, hendrerit nec sem. In suscipit gravida lectus, eget finibus augue mollis a. Ut iaculis elementum blandit. Ut tincidunt velit vel quam posuere, eget efficitur ex rutrum. Sed aliquam tellus id venenatis condimentum. Sed rhoncus, leo vitae sollicitudin tempor, nunc nisi auctor leo, vitae pharetra magna dolor sed tortor. In vitae tellus at ipsum interdum vulputate. Etiam tristique congue ligula eget ullamcorper. Sed scelerisque tincidunt auctor. Duis mollis nisi ut metus volutpat, ut lacinia ipsum blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida ante sed justo hendrerit, ac imperdiet nibh pellentesque.\r\n\r\nCras nec interdum nisl, id posuere nunc. Curabitur accumsan lorem vel nisi tincidunt imperdiet. Sed ultricies consequat neque ac venenatis. Pellentesque tristique sagittis turpis vel imperdiet. Sed at dui eu nisl elementum facilisis. Curabitur lacinia risus sed consectetur ultrices. Morbi ut tellus vitae nunc placerat cursus eu eget urna. Vivamus consectetur feugiat justo, nec maximus neque auctor quis. Suspendisse potenti. Maecenas ut pellentesque neque, id auctor mauris. Quisque justo odio, cursus ac ligula eget, aliquet aliquam ex. Aenean sed erat commodo, convallis nibh ut, imperdiet massa. Donec ultricies quis quam in gravida. Proin placerat felis at lorem fringilla, non fringilla turpis efficitur. Duis ullamcorper lacus nec nibh pharetra posuere id sit amet neque. Vivamus vel auctor libero, et imperdiet nisi.\r\n\r\n', 'Towels Short Description');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
