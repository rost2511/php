CREATE TABLE IF NOT EXISTS user
(
    id         INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name       CHAR(100) NOT NULL,
    age        TINYINT UNSIGNED DEFAULT NULL,
    email      CHAR(255) NOT NULL UNIQUE,
    password   CHAR(255) NOT NULL,
    gender     ENUM ('male', 'female'),
    deleted_at TIMESTAMP        DEFAULT NULL,
    created_at TIMESTAMP        DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP        DEFAULT CURRENT_TIMESTAMP
    ) ENGINE InnoDB
    CHARACTER SET utf8;

rename table user to users;

INSERT INTO users (name, age, email, password, gender)
VALUES ('John', '30', 'john@gmail.com', '123123', 'male'),
       ('Julia', '25', 'julian@gmail.com', '321321', 'female'),
       ('Karl', '42', 'karl@ukr.net', '223344', 'male');

INSERT INTO users (name, age, email, password, gender)
VALUES ('TEst', '44', 'test@gmail.com', '123123', 'male');

DELETE
FROM users
WHERE name = 'TEst';

SELECT id, name as user_name, email
FROM users
WHERE age > 27;

SELECT COUNT(id) as males
FROM users
WHERE gender = 'male';

SELECT *
FROM users
WHERE email LIKE '%gmail.com';

SELECT name, email, age
FROM users
WHERE age = (SELECT MIN(age) FROM users);

UPDATE users
SET age = 33
WHERE id = 2;

CREATE TABLE IF NOT EXISTS posts
(
    id         INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    title      CHAR(255)    NOT NULL,
    content    TEXT         NOT NULL,
    user_id    INT UNSIGNED NOT NULL,
    deleted_at TIMESTAMP DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users (id)
    );

INSERT INTO posts (title, content, user_id)
VALUES ('Title 1', 'Content 1', '1'),
       ('Title 2', 'Content 2', '2'),
       ('Title 3', 'Content 3', '3');

SELECT *
FROM posts
WHERE user_id = 3;