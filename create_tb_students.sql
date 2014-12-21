CREATE TABLE tb_students(	id INT(25) NOT NULL AUTO_INCREMENT,
							enrollment_no VARCHAR(25) NOT NULL,
							first_name VARCHAR(25) NOT NULL,
							middle_name VARCHAR(25),
							last_name VARCHAR(25) NOT NULL,
							date_of_birth DATE NOT NULL,
							gender VARCHAR(6) NOT NULL,
							is_active VARCHAR(2) NOT NULL,
							PRIMARY KEY(id, enrollment_no)
);
