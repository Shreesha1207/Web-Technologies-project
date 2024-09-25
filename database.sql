-- Active: 1709059429178@@127.0.0.1@3306@wtproject
-- ####################################################################
-- # Basic CREATE TABLE statement
-- # See https://www.ibm.com/docs/en/db2-for-zos/13?topic=statements-create-table for complete syntax.
-- ####################################################################
CREATE TABLE newUser (
    Username VARCHAR(30),
    Password VARCHAR(20)
);

INSERT INTO newuser(Username,Password) VALUES ('Shreesha','password');

SELECT *FROM newuser

INSERT INTO newuser (Username,Password) VALUES ('Admin','1234') ,('User','Hello');

SELECT *FROM newuser

DELETE FROM newuser WHERE Username='Admin'

SELECT *FROM newuser

-- ####################################################################
-- # Basic CREATE TABLE statement
-- # See https://www.ibm.com/docs/en/db2-for-zos/13?topic=statements-create-table for complete syntax.
-- ####################################################################
CREATE TABLE result (
    Username VARCHAR(30),
    Marks VARCHAR(20)
);

SELECT *FROM result;