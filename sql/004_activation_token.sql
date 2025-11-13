CREATE TABLE activation_token
(
    id      INT PRIMARY KEY,
    user_id INT UNIQUE,
    token   VARCHAR(510),
    FOREIGN KEY (user_id) REFERENCES user (id)
);