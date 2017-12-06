CREATE DATABASE IF NOT EXISTS angularcode;

USE angularcode;

CREATE TABLE 'contact' (
'ID' int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
'Name' varchar(50) NOT NULL,
'Email' varchar(50) NOT NULL,
'Subject' varchar(200) NOT NULL,
'Message' varchar(200) NOT NULL,
'Created' timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
)