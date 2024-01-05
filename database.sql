CREATE DATABASE IF NOT EXISTS todo;

USE todo;

CREATE TABLE IF NOT EXISTS card
(
    id          int(10) unsigned not null auto_increment,
    title       varchar(80)      not null,
    description varchar(80)      not null,
    lane        char             not null,
    complete    bool default 0,

    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS user
(
    id       int(10) unsigned not null auto_increment,
    email    varchar(80)      not null,
    password varchar(80)      not null,

    PRIMARY KEY (id)
);