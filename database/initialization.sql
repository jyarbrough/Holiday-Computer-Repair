CREATE DATABASE IF NOT EXISTS holiday_computer_repair;
CREATE USER 'holiday-admin'@'localhost' IDENTIFIED BY 'holiday';
GRANT ALL ON holiday_computer_repair.* TO 'holiday-admin'@'localhost';