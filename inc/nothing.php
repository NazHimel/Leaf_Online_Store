CREATE DATABASE `leafOnlineStore` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE `leafOnlineStore`;

CREATE TABLE IF NOT EXISTS `products` (
  `sku` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `paypal` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(101, 'Logo Shirt, Red', 'img/shirts/shirt-101.jpg', 18.00, 'RMLV9VG5KUYRQ');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(102, 'Mike the Frog Shirt, Black', 'img/shirts/shirt-102.jpg', 20.00, 'DP993QALRDGWJ');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(103, 'Mike the Frog Shirt, Blue', 'img/shirts/shirt-103.jpg', 20.00, '35VXCMDSTYAR2');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(104, 'Logo Shirt, Green', 'img/shirts/shirt-104.jpg', 18.00, 'HHMV5P25HTQZC');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(105, 'Mike the Frog Shirt, Yellow', 'img/shirts/shirt-105.jpg', 25.00, 'JDVRDT6WZ9KP6');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(106, 'Logo Shirt, Gray', 'img/shirts/shirt-106.jpg', 20.00, 'SMVBS6YAXNZCA');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(107, 'Logo Shirt, Teal', 'img/shirts/shirt-107.jpg', 20.00, 'HJL3YR5READ8C');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(108, 'Mike the Frog Shirt, Orange', 'img/shirts/shirt-108.jpg', 25.00, 'NXL58ELM3CJSS');

INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(109, 'Get Coding Shirt, Gray', 'img/shirts/shirt-109.jpg', 20.00, 'B5DAJHWHDA4RC');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(110, 'HTML5 Shirt, Orange', 'img/shirts/shirt-110.jpg', 22.00, '6T2LVA8EDZR8L');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(111, 'CSS3 Shirt, Gray', 'img/shirts/shirt-111.jpg', 22.00, 'MA2WQGE2KCWDS');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(112, 'HTML5 Shirt, Blue', 'img/shirts/shirt-112.jpg', 22.00, 'FWR955VF5PALA');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(113, 'CSS3 Shirt, Black', 'img/shirts/shirt-113.jpg', 22.00, '4ELH2M2FW7272');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(114, 'PHP Shirt, Yellow', 'img/shirts/shirt-114.jpg', 24.00, 'AT3XQ3ZVP2DZG');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(115, 'PHP Shirt, Purple', 'img/shirts/shirt-115.jpg', 24.00, 'LYESEKV9JWE3A');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(116, 'PHP Shirt, Green', 'img/shirts/shirt-116.jpg', 24.00, 'KT7MRRJUXZR34');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(117, 'Get Coding Shirt, Red', 'img/shirts/shirt-117.jpg', 20.00, '5UXJG8PXRXFKE');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(118, 'Mike the Frog Shirt, Purple', 'img/shirts/shirt-118.jpg', 25.00, 'KHP8PYPDZZFTA');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(119, 'CSS3 Shirt, Purple', 'img/shirts/shirt-119.jpg', 22.00, 'BFJRFE24L93NW');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(120, 'HTML5 Shirt, Red', 'img/shirts/shirt-120.jpg', 22.00, 'RUVJSBR9FXXWQ');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(121, 'Get Coding Shirt, Blue', 'img/shirts/shirt-121.jpg', 20.00, 'PGN6ULGFZTXL4');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(122, 'PHP Shirt, Gray', 'img/shirts/shirt-122.jpg', 24.00, 'PYR4QH97W2TSJ');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(123, 'Mike the Frog Shirt, Green', 'img/shirts/shirt-123.jpg', 25.00, 'STDAUJJTSPT54');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(124, 'Logo Shirt, Yellow', 'img/shirts/shirt-124.jpg', 20.00, '2R2U74KWU5RXG');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(125, 'CSS3 Shirt, Blue', 'img/shirts/shirt-125.jpg', 22.00, 'GJG7F8EW3XFAS');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(126, 'Doctype Shirt, Green', 'img/shirts/shirt-126.jpg', 25.00, 'QW2LFRYGU7L4Q');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(127, 'Logo Shirt, Purple', 'img/shirts/shirt-127.jpg', 20.00, 'GFV6QVRMJU7F8');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(128, 'Doctype Shirt, Purple', 'img/shirts/shirt-128.jpg', 25.00, 'BARQMHMB565PN');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(129, 'Get Coding Shirt, Green', 'img/shirts/shirt-129.jpg', 20.00, 'DH9GXABU3P8GS');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(130, 'HTML5 Shirt, Teal', 'img/shirts/shirt-130.jpg', 22.00, '4LZ3EUVCBENE4');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(131, 'Logo Shirt, Orange', 'img/shirts/shirt-131.jpg', 20.00, '7BNDYJBKWD364');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(132, 'Mike the Frog Shirt, Red', 'img/shirts/shirt-132.jpg', 25.00, 'Y6EQRE445MYYW');







////////////



CREATE TABLE `sizes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `size` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

INSERT INTO `sizes` (`id`, `size`, `order`) VALUES(1, 'Small', 10);
INSERT INTO `sizes` (`id`, `size`, `order`) VALUES(2, 'Medium', 20);
INSERT INTO `sizes` (`id`, `size`, `order`) VALUES(3, 'Large', 30);
INSERT INTO `sizes` (`id`, `size`, `order`) VALUES(4, 'X-Large', 40);

CREATE TABLE `products_sizes` (
  `product_sku` int(11) NOT NULL,
  `size_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(101, 1);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(101, 2);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(101, 3);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(101, 4);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(102, 1);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(102, 2);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(102, 3);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(102, 4);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(103, 1);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(103, 2);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(103, 3);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(103, 4);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(104, 1);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(104, 2);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(104, 3);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(104, 4);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(105, 1);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(105, 2);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(105, 3);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(105, 4);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(106, 1);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(106, 2);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(106, 3);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(106, 4);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(107, 1);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(107, 2);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(107, 3);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(107, 4);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(108, 1);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(108, 2);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(108, 3);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(108, 4);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(109, 1);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(109, 2);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(109, 3);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(109, 4);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(110, 1);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(110, 2);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(110, 3);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(110, 4);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(111, 1);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(111, 2);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(111, 3);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(111, 4);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(112, 1);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(112, 2);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(112, 3);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(112, 4);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(113, 1);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(113, 2);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(113, 3);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(113, 4);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(114, 1);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(114, 2);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(114, 3);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(114, 4);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(115, 1);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(115, 2);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(115, 3);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(115, 4);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(116, 1);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(116, 2);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(116, 3);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(116, 4);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(117, 1);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(117, 2);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(117, 3);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(117, 4);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(118, 1);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(118, 2);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(118, 3);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(118, 4);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(119, 1);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(119, 2);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(119, 3);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(119, 4);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(120, 1);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(120, 2);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(120, 3);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(120, 4);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(121, 1);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(121, 2);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(121, 3);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(121, 4);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(122, 1);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(122, 2);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(122, 3);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(122, 4);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(123, 1);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(123, 2);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(123, 3);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(123, 4);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(124, 1);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(124, 2);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(124, 3);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(124, 4);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(125, 1);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(125, 2);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(125, 3);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(125, 4);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(126, 1);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(126, 2);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(126, 3);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(126, 4);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(127, 1);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(127, 2);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(127, 3);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(127, 4);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(128, 1);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(128, 2);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(128, 3);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(128, 4);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(129, 1);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(129, 2);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(129, 3);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(129, 4);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(130, 1);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(130, 2);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(130, 3);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(130, 4);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(131, 1);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(131, 2);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(131, 3);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(131, 4);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(132, 1);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(132, 2);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(132, 3);
INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES(132, 4);











////////////////


CREATE TABLE `users` (
`user_id` INT( 5 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`username` VARCHAR( 25 ) NOT NULL ,
`email` VARCHAR( 35 ) NOT NULL ,
`password` VARCHAR( 50 ) NOT NULL ,
UNIQUE (`email`)
) ENGINE = MYISAM ;