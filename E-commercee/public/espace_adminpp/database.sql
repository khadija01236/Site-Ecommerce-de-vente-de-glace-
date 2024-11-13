CREATE DATABASE IF NOT EXISTS Yumi;
USE Yumi;

-- Table pour les administrateurs
CREATE TABLE IF NOT EXISTS admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Insérer l'administrateur par défaut
INSERT INTO admin (username, password) VALUES 
('admin', 'admin2004');

-- Table pour les utilisateurs
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL
);

-- Insérer des utilisateurs par défaut
INSERT INTO users (username, password, email) VALUES 
('Ameziane', 'Admin2005', 'ameziane@example.com'),
('Salimata', 'Admin2005', 'salimata@example.com'),
('Khadija', 'Admin2005', 'khadija@example.com'),
('Marouane', 'Admin2005', 'marouane@example.com');

-- Table pour les types de produits
CREATE TABLE IF NOT EXISTS product_types (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);

-- Insérer des types de produits par défaut
INSERT INTO product_types (name) VALUES 
('Glaces'),
('Sorbets plein fruits'),
('Glaces bio');

-- Table pour les saveurs
CREATE TABLE IF NOT EXISTS flavors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);

-- Insérer des saveurs par défaut
INSERT INTO flavors (name) VALUES 
('Vanille'),
('Chocolat'),
('Fraise'),
('Menthe'),
('Café'),
('Noix de coco'),
('Mangue'),
('Pistache'),
('Citron'),
('Caramel'),
('Framboise');

-- Table pour les tailles
CREATE TABLE IF NOT EXISTS sizes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);

-- Insérer des tailles par défaut
INSERT INTO sizes (name) VALUES 
('Petite'),
('Moyenne'),
('Grande');

-- Table pour les produits
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    image VARCHAR(255),
    type_id INT,
    flavor_id INT,
    size_id INT,
    FOREIGN KEY (type_id) REFERENCES product_types(id),
    FOREIGN KEY (flavor_id) REFERENCES flavors(id),
    FOREIGN KEY (size_id) REFERENCES sizes(id)
);

-- Insérer des produits par défaut
INSERT INTO products (name, description, price, image, type_id, flavor_id, size_id) VALUES
-- Glaces
('Vanilla Ice Cream - Small', 'Delicious vanilla ice cream', 2.99, 'https://example.com/vanilla_small.jpg', 1, 1, 1),
('Vanilla Ice Cream - Medium', 'Delicious vanilla ice cream', 3.99, 'https://example.com/vanilla_medium.jpg', 1, 1, 2),
('Vanilla Ice Cream - Large', 'Delicious vanilla ice cream', 4.99, 'https://example.com/vanilla_large.jpg', 1, 1, 3),
('Chocolate Ice Cream - Small', 'Rich chocolate ice cream', 2.99, 'https://example.com/chocolate_small.jpg', 1, 2, 1),
('Chocolate Ice Cream - Medium', 'Rich chocolate ice cream', 3.99, 'https://example.com/chocolate_medium.jpg', 1, 2, 2),
('Chocolate Ice Cream - Large', 'Rich chocolate ice cream', 4.99, 'https://example.com/chocolate_large.jpg', 1, 2, 3),
('Coconut Ice Cream - Small', 'Tropical coconut ice cream', 2.99, 'https://example.com/coconut_small.jpg', 1, 6, 1),
('Coconut Ice Cream - Medium', 'Tropical coconut ice cream', 3.99, 'https://example.com/coconut_medium.jpg', 1, 6, 2),
('Coconut Ice Cream - Large', 'Tropical coconut ice cream', 4.99, 'https://example.com/coconut_large.jpg', 1, 6, 3),
('Citron Ice Cream - Small', 'Refreshing citron ice cream', 2.99, 'https://example.com/citron_small.jpg', 1, 9, 1),
('Citron Ice Cream - Medium', 'Refreshing citron ice cream', 3.99, 'https://example.com/citron_medium.jpg', 1, 9, 2),
('Citron Ice Cream - Large', 'Refreshing citron ice cream', 4.99, 'https://example.com/citron_large.jpg', 1, 9, 3),
('Caramel Ice Cream - Small', 'Sweet caramel ice cream', 2.99, 'https://example.com/caramel_small.jpg', 1, 10, 1),
('Caramel Ice Cream - Medium', 'Sweet caramel ice cream', 3.99, 'https://example.com/caramel_medium.jpg', 1, 10, 2),
('Caramel Ice Cream - Large', 'Sweet caramel ice cream', 4.99, 'https://example.com/caramel_large.jpg', 1, 10, 3),
('Framboise Ice Cream - Small', 'Tasty framboise ice cream', 2.99, 'https://example.com/framboise_small.jpg', 1, 11, 1),
('Framboise Ice Cream - Medium', 'Tasty framboise ice cream', 3.99, 'https://example.com/framboise_medium.jpg', 1, 11, 2),
('Framboise Ice Cream - Large', 'Tasty framboise ice cream', 4.99, 'https://example.com/framboise_large.jpg', 1, 11, 3),

-- Sorbets plein fruits
('Strawberry Sorbet - Small', 'Refreshing strawberry sorbet', 2.99, 'https://example.com/strawberry_small.jpg', 2, 3, 1),
('Strawberry Sorbet - Medium', 'Refreshing strawberry sorbet', 3.99, 'https://example.com/strawberry_medium.jpg', 2, 3, 2),
('Strawberry Sorbet - Large', 'Refreshing strawberry sorbet', 4.99, 'https://example.com/strawberry_large.jpg', 2, 3, 3),
('Mint Sorbet - Small', 'Cool mint sorbet', 2.99, 'https://example.com/mint_small.jpg', 2, 4, 1),
('Mint Sorbet - Medium', 'Cool mint sorbet', 3.99, 'https://example.com/mint_medium.jpg', 2, 4, 2),
('Mint Sorbet - Large', 'Cool mint sorbet', 4.99, 'https://example.com/mint_large.jpg', 2, 4, 3),
('Mango Sorbet - Small', 'Refreshing mango sorbet', 2.99, 'https://example.com/mango_small.jpg', 2, 7, 1),
('Mango Sorbet - Medium', 'Refreshing mango sorbet', 3.99, 'https://example.com/mango_medium.jpg', 2, 7, 2),
('Mango Sorbet - Large', 'Refreshing mango sorbet', 4.99, 'https://example.com/mango_large.jpg', 2, 7, 3),
('Citron Sorbet - Small', 'Refreshing citron sorbet', 2.99, 'https://example.com/citron_sorbet_small.jpg', 2, 9, 1),
('Citron Sorbet - Medium', 'Refreshing citron sorbet', 3.99, 'https://example.com/citron_sorbet_medium.jpg', 2, 9, 2),
('Citron Sorbet - Large', 'Refreshing citron sorbet', 4.99, 'https://example.com/citron_sorbet_large.jpg', 2, 9, 3),
('Caramel Sorbet - Small', 'Sweet caramel sorbet', 2.99, 'https://example.com/caramel_sorbet_small.jpg', 2, 10, 1),
('Caramel Sorbet - Medium', 'Sweet caramel sorbet', 3.99, 'https://example.com/caramel_sorbet_medium.jpg', 2, 10, 2),
('Caramel Sorbet - Large', 'Sweet caramel sorbet', 4.99, 'https://example.com/caramel_sorbet_large.jpg', 2, 10, 3),
('Framboise Sorbet - Small', 'Tasty framboise sorbet', 2.99, 'https://example.com/framboise_sorbet_small.jpg', 2, 11, 1),
('Framboise Sorbet - Medium', 'Tasty framboise sorbet', 3.99, 'https://example.com/framboise_sorbet_medium.jpg', 2, 11, 2),
('Framboise Sorbet - Large', 'Tasty framboise sorbet', 4.99, 'https://example.com/framboise_sorbet_large.jpg', 2, 11, 3),

-- Glaces bio
('Organic Vanilla Ice Cream - Small', 'Organic vanilla ice cream', 3.99, 'https://example.com/organic_vanilla_small.jpg', 3, 1, 1),
('Organic Vanilla Ice Cream - Medium', 'Organic vanilla ice cream', 4.99, 'https://example.com/organic_vanilla_medium.jpg', 3, 1, 2),
('Organic Vanilla Ice Cream - Large', 'Organic vanilla ice cream', 5.99, 'https://example.com/organic_vanilla_large.jpg', 3, 1, 3),
('Organic Chocolate Ice Cream - Small', 'Organic chocolate ice cream', 3.99, 'https://example.com/organic_chocolate_small.jpg', 3, 2, 1),
('Organic Chocolate Ice Cream - Medium', 'Organic chocolate ice cream', 4.99, 'https://example.com/organic_chocolate_medium.jpg', 3, 2, 2),
('Organic Chocolate Ice Cream - Large', 'Organic chocolate ice cream', 5.99, 'https://example.com/organic_chocolate_large.jpg', 3, 2, 3),
('Pistachio Bio Ice Cream - Small', 'Organic pistachio ice cream', 3.99, 'https://example.com/pistachio_small.jpg', 3, 8, 1),
('Pistachio Bio Ice Cream - Medium', 'Organic pistachio ice cream', 4.99, 'https://example.com/pistachio_medium.jpg', 3, 8, 2),
('Pistachio Bio Ice Cream - Large', 'Organic pistachio ice cream', 5.99, 'https://example.com/pistachio_large.jpg', 3, 8, 3),
('Citron Bio Ice Cream - Small', 'Organic citron ice cream', 3.99, 'https://example.com/organic_citron_small.jpg', 3, 9, 1),
('Citron Bio Ice Cream - Medium', 'Organic citron ice cream', 4.99, 'https://example.com/organic_citron_medium.jpg', 3, 9, 2),
('Citron Bio Ice Cream - Large', 'Organic citron ice cream', 5.99, 'https://example.com/organic_citron_large.jpg', 3, 9, 3),
('Caramel Bio Ice Cream - Small', 'Organic caramel ice cream', 3.99, 'https://example.com/organic_caramel_small.jpg', 3, 10, 1),
('Caramel Bio Ice Cream - Medium', 'Organic caramel ice cream', 4.99, 'https://example.com/organic_caramel_medium.jpg', 3, 10, 2),
('Caramel Bio Ice Cream - Large', 'Organic caramel ice cream', 5.99, 'https://example.com/organic_caramel_large.jpg', 3, 10, 3),
('Framboise Bio Ice Cream - Small', 'Organic framboise ice cream', 3.99, 'https://example.com/organic_framboise_small.jpg', 3, 11, 1),
('Framboise Bio Ice Cream - Medium', 'Organic framboise ice cream', 4.99, 'https://example.com/organic_framboise_medium.jpg', 3, 11, 2),
('Framboise Bio Ice Cream - Large', 'Organic framboise ice cream', 5.99, 'https://example.com/organic_framboise_large.jpg', 3, 11, 3);
```

Ce script SQL comprend toutes les tables et les données nécessaires pour les administrateurs, les utilisateurs, les types de produits, les saveurs, les tailles et les produits. Vous pouvez exécuter ce script dans votre interface phpMyAdmin ou tout autre outil de gestion de base de données que vous utilisez pour configurer votre base de données `Yumi`.

Si vous avez besoin de quelque chose de plus spécifique ou d'une autre partie du code, faites-le moi savoir.    