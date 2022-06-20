CREATE TABLE my_table (
id INT(10) unsigned NOT NULL AUTO_INCREMENT,
name VARCHAR(128),
email VARCHAR(30),
year_of_birth YEAR(4),
gender VARCHAR(10),
number_of_limbs INT(5),
biography TEXT,
PRIMARY KEY(id)
);

CREATE TABLE superpowers(
id INT(10) unsigned NOT NULL AUTO_INCREMENT,
name VARCHAR(128),
PRIMARY KEY(id)
);
