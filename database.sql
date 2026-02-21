-- =========================================
-- Skema Database: ujian-lab-riskhan
-- Database: ukk
-- =========================================

CREATE DATABASE IF NOT EXISTS ukk CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE ukk;

CREATE TABLE IF NOT EXISTS produk (
    id              INT(11) NOT NULL AUTO_INCREMENT,
    nama_produk     VARCHAR(100) NOT NULL,
    deskripsi       TEXT,
    harga_beli      DECIMAL(15, 2) NOT NULL DEFAULT 0.00,
    harga_jual      DECIMAL(15, 2) NOT NULL DEFAULT 0.00,
    gambar_produk   VARCHAR(255) DEFAULT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Contoh data untuk pengujian (opsional)
-- INSERT INTO produk (nama_produk, deskripsi, harga_beli, harga_jual) VALUES
-- ('Produk Contoh', 'Deskripsi produk contoh', 50000, 75000);
