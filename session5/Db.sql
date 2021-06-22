DROP DATABASE `foodstore_db`;
CREATE DATABASE `foodstore_db`;

CREATE TABLE `foodstore_db`.`customers`(
  id int ,
  username varchar(100),
  password varchar(150),
  email varchar(150) UNIQUE,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY(id)
);

CREATE TABLE `foodstore_db`.`admins`(
 id int not null,
 email varchar(100) UNIQUE,
 password varchar(150) not null,
 role int DEFAULT 1,
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
 PRIMARY KEY (id)
);

CREATE TABLE `foodstore_db`.`applications`(
 id int not null,
 name varchar(100) not null,
 logo varchar(150) not null,
 address text,
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
 PRIMARY KEY (id)
);

-- rename table sql Query
RENAME TABLE `foodstore_db`.`applications` TO `foodstore_db`.`application`