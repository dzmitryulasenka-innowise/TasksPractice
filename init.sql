CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255),
    gender VARCHAR(255),
    status VARCHAR(255)
);

INSERT INTO users SET (name, email, gender, status) VALUE ('dima', 'qwe@gmail.com', 'male', 'active');