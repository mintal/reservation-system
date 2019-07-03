drop database drs;
create database drs;

use drs;

CREATE TABLE IF NOT EXISTS drs_company (
    id int AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS drs_rank(
    id int AUTO_INCREMENT,
    name VARCHAR(32) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS drs_user (
    id int AUTO_INCREMENT,
    username VARCHAR(32) NOT NULL,
    password VARCHAR(32) NOT NULL, /*PLZ CHANGE*/
    company_id int,
    rank_id int NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY (company_id) REFERENCES drs_company(id),
    FOREIGN KEY (rank_id) REFERENCES drs_rank(id)
);

CREATE TABLE IF NOT EXISTS drs_asset_type (
    id int AUTO_INCREMENT,
    type_name varchar(255),
    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS drs_asset (
    id int AUTO_INCREMENT,
    name varchar(255),
    type_id int,
    PRIMARY KEY(id),
    FOREIGN KEY(type_id) REFERENCES drs_asset_type(id)
);

CREATE TABLE IF NOT EXISTS drs_reservation (
    id int AUTO_INCREMENT,
    begin_datetime timestamp NOT NULL,
    end_datetime timestamp NOT NULL,
    amount_people int NOT NULL,
    user_id int NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(user_id) REFERENCES drs_user(id)
);

CREATE TABLE IF NOT EXISTS drs_reservation_asset_collection (
    reservation_id int,
    asset_id int,
    PRIMARY KEY(reservation_id, asset_id),
    FOREIGN KEY(reservation_id) REFERENCES drs_reservation(id),
    FOREIGN KEY(asset_id) REFERENCES drs_asset(id)
);