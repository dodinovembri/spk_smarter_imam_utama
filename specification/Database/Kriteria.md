# Kriteria
```sql
CREATE TABLE `kriteria` (
	`id` INT NOT NULL AUTO_INCREMENT,
    `kode_kriteria` VARCHAR(50) NOT NULL,
	`nama_kriteria` VARCHAR(255) NULL,
    `prioritas` INT NULL,
    `bobot` DOUBLE(18,8) NULL,
    `status` TINYINT NULL,
	PRIMARY KEY (`id`)
);
```