CREATE DATABASE perpustakaan_19220658;

USE perpustakaan_19220658;

CREATE TABLE tb_penggunaa(
id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
email VARCHAR(255) NOT NULL,
nama_lengkap VARCHAR(50) NOT NULL,
katasandi VARCHAR(64),
UNIQUE(email)
)ENGINE=INNODB;

CREATE TABLE tb_anggotaa(
id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
nama_lengkap VARCHAR(255) NOT NULL,
alamat VARCHAR(512),
kota VARCHAR(70),
notelp VARCHAR(18),
email VARCHAR(255)
)ENGINE=INNODB;

CREATE TABLE tb_penerbitt(
id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
penerbit VARCHAR(255) NOT NULL,
kota VARCHAR(80)
)ENGINE=INNODB;

CREATE TABLE tb_kategorii(
id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
kategori VARCHAR(255),
kode_ddc VARCHAR(10)
)ENGINE=INNODB;

CREATE TABLE tb_buku(
id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
tb_kategorii_id INT UNSIGNED,
tb_penerbitt_id INT UNSIGNED,
judul VARCHAR(512) NOT NULL,
edisi VARCHAR(10),
cetakan VARCHAR(10),
sinopsis TEXT,
halaman VARCHAR(20),
penulis VARCHAR(100),
tahun YEAR,
cover_file VARCHAR(512),
FOREIGN KEY(tb_kategorii_id) REFERENCES tb_kategorii(id)
	ON UPDATE CASCADE,
FOREIGN KEY(tb_penerbitt_id) REFERENCES tb_penerbitt(id)
	ON UPDATE CASCADE
)ENGINE=INNODB;

CREATE TABLE tb_koleksibuku(
id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
tb_buku_id INT UNSIGNED,
nomor_koleksi INT,
status_koleksi ENUM('A','P','H','R') DEFAULT 'A',
FOREIGN KEY(tb_buku_id) REFERENCES tb_buku(id) ON UPDATE CASCADE ON DELETE CASCADE
)ENGINE=INNODB;

CREATE TABLE tb_peminjaman(
id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
tgl_peminjaman DATETIME NOT NULL,
tgl_pengembalian DATETIME NULL,
tb_penggunaa_id_peminjaman INT UNSIGNED NOT NULL,
tb_penggunaa_id_pengembalian INT UNSIGNED NULL,
tb_anggotaa_id INT UNSIGNED NOT NULL,
tb_koleksibuku_id INT UNSIGNED,
tb_buku_id INT UNSIGNED,
denda DECIMAL(10,2),
FOREIGN KEY(tb_penggunaa_id_peminjaman) REFERENCES tb_penggunaa(id)
	ON UPDATE CASCADE,
FOREIGN KEY(tb_penggunaa_id_pengembalian)REFERENCES tb_penggunaa(id)
	ON UPDATE CASCADE,
FOREIGN KEY(tb_anggotaa_id) REFERENCES tb_anggotaa(id)
	ON UPDATE CASCADE,
FOREIGN KEY(tb_koleksibuku_id) REFERENCES tb_koleksibuku(id)
	ON UPDATE CASCADE
FOREIGN KEY(tb_buku_id) REFERENCES tb_buku_id(id)
	ON UPDATE CASCADE
)ENGINE=INNODB;