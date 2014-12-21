CREATE TABLE tb_users(	id INT(25) NOT NULL AUTO_INCREMENT,
						username VARCHAR(25) NOT NULL,
						salt VARCHAR(25),
						password VARCHAR(225) NOT NULL,
						first_name VARCHAR(25) NOT NULL,
						last_name VARCHAR(25) NOT NULL,
						is_active VARCHAR(2) NOT NULL,
						PRIMARY KEY(id)
						);