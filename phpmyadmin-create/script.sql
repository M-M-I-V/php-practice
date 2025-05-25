CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(25) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,  -- Using bcrypt hash (60 chars)
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users (username, password) VALUES
('admin', '$2y$10$e0N5Q1Z5J6Y8g3z4v7x1Oe9q1a1a1a1a1a1a1a1a1a1a1a'),  -- password: admin123
('user', '$2y$10$f1B2C3D4E5F6G7H8I9J0K.uvwxyzABCDEFGHIJKLMNOPQRST'),  -- password: user456
('john', '$2y$10$k9L8M7N6P5Q4R3S2T1U0V.abcdefghijklmnopqrstuvwxyz'),  -- password: john789
('alice', '$2y$10$w2X3Y4Z5A6B7C8D9E0F1G.HIJKLMNOPQRSTUVWXYZ123456'),  -- password: alice321
('bob', '$2y$10$p9Q8R7S6T5U4V3W2X1Y0Z.987654321abcdefghijklmnopq');   -- password: bob654