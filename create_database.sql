-- 创建数据库
-- CREATE DATABASE basketball_system;

-- 使用数据库
-- USE basketball_system;

-- 创建用户表
-- CREATE TABLE users (
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     username VARCHAR(50) NOT NULL UNIQUE,
--     password VARCHAR(255) NOT NULL
-- );

-- 插入测试用户
INSERT INTO users (username, password) VALUES ('admin', '22201076');

CREATE TABLE procurement (
    purchase_date DATE NOT NULL PRIMARY KEY,
    buyer VARCHAR(255) NOT NULL,
    asset_category VARCHAR(255),
    asset_name VARCHAR(255),
    asset_status VARCHAR(255),
    amount DECIMAL(10, 2),
    contact_number VARCHAR(20)
);

INSERT INTO procurement (purchase_date, buyer, asset_category, asset_name, asset_status, amount, contact_number)
VALUES ('2023-01-01', '张三', '电子设备', '电脑', '新购', 5000, '13800138000');

-- 第二行数据
INSERT INTO procurement (purchase_date, buyer, asset_category, asset_name, asset_status, amount, contact_number)
VALUES ('2023-01-02', '李四', '办公用品', '打印机', '已使用', 2000, '13900139000');

-- 第三行数据
INSERT INTO procurement (purchase_date, buyer, asset_category, asset_name, asset_status, amount, contact_number)
VALUES ('2023-01-03', '王五', '家具', '办公桌', '全新', 1500, '13700137000');

-- 第四行数据
INSERT INTO procurement (purchase_date, buyer, asset_category, asset_name, asset_status, amount, contact_number)
VALUES ('2023-01-04', '赵六', '电子产品', '笔记本电脑', '二手', 3000, '13600136000');

