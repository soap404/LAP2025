CREATE TABLE orders
(
    id      INT PRIMARY KEY,
    user_id INT,
    date    DATE,
    status  tinyint(1),
    FOREIGN KEY (user_id) REFERENCES users (id)
);