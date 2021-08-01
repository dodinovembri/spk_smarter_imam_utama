# Alternatif
```sql
CREATE TABLE `alternatif` (
	`id` INT NOT NULL AUTO_INCREMENT,
    `kode_alternatif` VARCHAR(50) NOT NULL,
	`nama_alternatif` VARCHAR(255) NULL,
    `keterangan` TEXT NULL,
    `status` TINYINT NULL,
	PRIMARY KEY (`id`)
);
```