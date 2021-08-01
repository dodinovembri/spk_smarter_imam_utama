# Nilai Alternatif
```sql
CREATE TABLE `nilai_alternatif` (
	`id` INT NOT NULL AUTO_INCREMENT,
    `id_alternatif` INT NOT NULL,
	`id_kriteria` INT NOT NULL,
	`id_sub_kriteria` INT NOT NULL,
	PRIMARY KEY (`id`)
);
```