# Sub Kriteria
```sql
CREATE TABLE `sub_kriteria` (
	`id` INT NOT NULL AUTO_INCREMENT,
    `id_kriteria` INT NOT NULL,
	`nama_sub_kriteria` VARCHAR(255) NULL,
    `prioritas` INT NULL,
    `bobot` DOUBLE(18,8) NULL,
    `status` TINYINT NULL,
	PRIMARY KEY (`id`)
);
```