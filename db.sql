CREATE DATABASE radioactive;
CREATE TABLE packages (
    packagename text NOT NULL UNIQUE,
    creator text NOT NULL,
    content text NOT NULL UNIQUE,
    gitRepo text NOT NULL UNIQUE
);