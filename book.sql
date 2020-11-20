CREATE TABLE catalogs(
    isbn CHAR(13),
    author VARCHAR(128),
    title VARCHAR(128),
    price DECIMAL(18,2), 
    PRIMARY KEY (isbn)
);

