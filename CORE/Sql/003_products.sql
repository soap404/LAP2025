CREATE TABLE products
(
    id          INT PRIMARY KEY,
    name        VARCHAR(255),
    description TEXT NULL,
    stock       INT,
    price       DECIMAL(8, 2),
    image       VARCHAR(510) NULL,
    is_active   tinyint(1)
);