-- 创建数据库
CREATE DATABASE dtyyyy;

-- 使用数据库
USE dtyyyy;

-- 创建用户表
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- 插入测试用户
INSERT INTO users (username, password) VALUES ('admin', 'password123');