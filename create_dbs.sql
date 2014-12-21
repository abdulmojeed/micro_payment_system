CREATE DATABASE micro_payment;
USE micro_payment;
CREATE TABLE tb_users(id INT(25) NOT NULL AUTO_INCREMENT,
						username VARCHAR(25) NOT NULL,
						salt VARCHAR(25) 
						password VARCHAR(25) NOT NULL,
						first_name VARCHAR(25) NOT NULL,
						last_name VARCHAR(25) NOT NULL,
						is_active VARCHAR(2),
						PRIMARY KEY (id)
						);
CREATE TABLE tb_students(id INT(25) NOT NULL AUTO_INCREMENT,
						enrolment_no VARCHAR(25) NOT NULL,
						first_name VARCHAR(25) NOT NULL, 
						middle_name VARCHAR(25),
						last_name VARCHAR(25) NOT NULL,
						date_of_birth DATE NOT NULL,
						gender VARCHAR(6),
						is_active VARCHAR(2),
						PRIMARY KEY (enrollment_no, id)
						);
