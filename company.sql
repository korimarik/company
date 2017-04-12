-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.45 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- Dumping data for table company.department: ~8 rows (approximately)
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
INSERT IGNORE INTO `department` (`id`, `department_name`, `description`, `created_date`, `parent_department_id`) VALUES
	(1, 'Administration', 'The chief executive officer, also called the company president, and any other managers involved in making decisions for the company are a part of the administration department. Businesses need managers to oversee employees and implement company directives created by the president. Managers also typically interview and hire new employees for the company.', '2017-04-12 17:15:09', NULL),
	(2, 'Accounting', 'The accounting department handles the bookkeeping for a business during the fiscal year. All revenue, expenses and company equity are tracked by the accounting department and reported to the Internal Revenue Service at the end of the company\'s fiscal year. The accounting department also tracks accounts payable so that all clients are paid for services or products. Accountants typically prepare income statements, cash flow statements, general ledgers and balance sheets for the company.', '2017-04-12 17:15:09', NULL),
	(3, 'Sales', 'Sales departments are needed in companies that sell retail or wholesale items to other businesses or consumers. Sales departments coordinate their sales force to build customer relationships, meet particular revenue goals and pitch new products. The sales force may use a "push" or a "pull" method for attracting customers. The pull method typically involves placing a salesman in a physical store to sell products. Sales departments using the push method usually instruct their sales force to call, email or visit prospective customers.', '2017-04-12 17:16:45', NULL),
	(4, 'Accounting', 'The accounting department handles the bookkeeping for a business during the fiscal year. All revenue, expenses and company equity are tracked by the accounting department and reported to the Internal Revenue Service at the end of the company\'s fiscal year. The accounting department also tracks accounts payable so that all clients are paid for services or products. Accountants typically prepare income statements, cash flow statements, general ledgers and balance sheets for the company.', '2017-04-12 17:15:28', NULL),
	(5, 'Administration', 'The chief executive officer, also called the company president, and any other managers involved in making decisions for the company are a part of the administration department. Businesses need managers to oversee employees and implement company directives created by the president. Managers also typically interview and hire new employees for the company.', '2017-04-12 17:16:45', NULL),
	(6, 'Accounting', 'The accounting department handles the bookkeeping for a business during the fiscal year. All revenue, expenses and company equity are tracked by the accounting department and reported to the Internal Revenue Service at the end of the company\'s fiscal year. The accounting department also tracks accounts payable so that all clients are paid for services or products. Accountants typically prepare income statements, cash flow statements, general ledgers and balance sheets for the company.', '2017-04-12 17:16:45', NULL),
	(7, 'Marketing and Advertising', 'The marketing and advertising department for a business is responsible for developing product packaging, pricing, and creative materials for informing potential customers of the company\'s offerings. Additionally, the department may conduct research to discover the needs of its customers. For example, a toy company\'s marketing and advertising department may design a pink box for a new doll, set the price at $14 -- based on price data research -- and advertise the doll in commercials set to air during Saturday morning cartoons.', '2017-04-12 17:16:45', NULL),
	(8, 'Production', 'The production department orders inventory for production when needed, fulfills production orders specified by management and coordinates with the marketing and advertising department to make changes to products. If your company builds electric guitars, for example, you need a production department and staff that focuses solely on producing your guitars.', '2017-04-12 17:16:45', NULL);
/*!40000 ALTER TABLE `department` ENABLE KEYS */;

-- Dumping data for table company.department_employee: ~0 rows (approximately)
/*!40000 ALTER TABLE `department_employee` DISABLE KEYS */;
INSERT IGNORE INTO `department_employee` (`id`, `department_id`, `employee_id`) VALUES
	(1, 1, 1),
	(2, 1, 7),
	(3, 2, 11),
	(4, 2, 2),
	(5, 2, 4),
	(6, 3, 5),
	(7, 3, 6),
	(8, 3, 3),
	(9, 4, 8),
	(10, 4, 9),
	(11, 4, 10),
	(12, 5, 2),
	(13, 5, 11),
	(14, 5, 7),
	(15, 6, 1),
	(16, 6, 6),
	(17, 7, 9),
	(18, 7, 10),
	(19, 7, 3),
	(20, 8, 4),
	(21, 8, 5),
	(22, 8, 8),
	(23, 1, 9);
/*!40000 ALTER TABLE `department_employee` ENABLE KEYS */;

-- Dumping data for table company.employee: ~11 rows (approximately)
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT IGNORE INTO `employee` (`id`, `employee_name`, `gender`, `age`, `position_name`, `created_date`, `parent_employee_id`) VALUES
	(1, 'Крупко Іван Петрович', 'чоловіча', 31, 'спеціаліст', '2017-04-12 17:36:54', NULL),
	(2, 'Мельник Генадій Едуардович', 'чоловіча', 28, 'інженер 1 категорії', '2017-04-12 17:36:54', NULL),
	(3, 'Шевченко Петро Харитонович', 'чоловіча', 46, 'спеціаліст по нестандартним розробкам', '2017-04-12 17:36:54', NULL),
	(4, 'Коваленко Ганна Павлівна', 'жіноча', 42, 'головний спеціаліст', '2017-04-12 17:36:54', NULL),
	(5, 'Бондаренко Марина Дмитрівна', 'жіноча', 23, 'інженер 2 категорії', '2017-04-12 17:36:54', NULL),
	(6, 'Ткаченко Ілля Сергійович', 'чоловіча', 34, 'спеціаліст', '2017-04-12 17:36:54', NULL),
	(7, 'Ковальчук Ірина Максимівна', 'жіноча', 50, 'інженер 1 категорії', '2017-04-12 17:36:54', NULL),
	(8, 'Кравченко Микола Пилипович', 'чоловіча', 40, 'працівник', '2017-04-12 17:36:54', NULL),
	(9, 'Олійник Любов Миколаївна', 'жіноча', 37, 'головний спеціаліст', '2017-04-12 17:36:54', NULL),
	(10, 'Шевчук Ольга Сергіївна', 'жіноча', 40, 'інженер 1 категорії', '2017-04-12 17:36:54', NULL),
	(11, 'Бойко Сергій Анатолійович', 'чоловіча', 38, 'інженер 2 категорії', '2017-04-12 17:36:54', NULL);
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
