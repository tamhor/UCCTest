CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Car');
INSERT INTO `categories` (`id`, `name`) VALUES
(2, 'Truck');
INSERT INTO `categories` (`id`, `name`) VALUES
(3, 'Motorcycle');


CREATE TABLE `vehicles` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `engine_displacement` int NOT NULL,
  `engine_power` int NOT NULL,
  `price` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `category_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `vehicles` (`id`, `name`, `engine_displacement`, `engine_power`, `price`, `location`, `category_id`) VALUES
(1, 'Avanza', 1300, 1500, '160000000', 'Malang', 1);

ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `vehicles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

