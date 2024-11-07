CREATE DATABASE students;
-- create a table student
CREATE TABLE student(name VARCHAR(50) NOT NULL, surname VARCHAR(40),userID INT PRIMARY KEY,password VARCHAR(60) NOT NULL, gender VARCHAR(6) UNIQUE NOT NULL, year INT(1));
CREATE TABLE cumpus(name VARCHAR(30) PRIMARY KEY, room INT NOT NULL, year INT(1), gender VARCHAR(6);
CREATE TABLE booking(userID INT PRIMARY KEY, room_name VARCHAR(50), gender VARCHAR(6), phone INT, year INT(1);
INSERT INTO student(name, surname, userID, password, gender, year) VALUES ('Siphephelo', 'Mazibuko', '202101439', 'SibanE00037', 'male', '4');
INSERT INTO cumpus(name, room, year, gender) VALUES ('lomawa', '30', '1', 'female');
INSERT INTO cumpus(name, room, year, gender) VALUES ('sobhuza', '30', '2', 'female');
INSERT INTO cumpus(name, room, year, gender) VALUES ('k', '30', '3', 'female');
INSERT INTO cumpus(name, room, year, gender) VALUES ('r', '30', '4', 'female')
INSERT INTO cumpus(name, room, year, gender) VALUES ('ludzeludze', '30', '1', 'male');
INSERT INTO cumpus(name, room, year, gender) VALUES ('s', '30', '2', 'male');
INSERT INTO cumpus(name, room, year, gender) VALUES ('e', '30', '3', 'male');
INSERT INTO cumpus(name, room, year, gender) VALUES ('d', '30', '4', 'male');