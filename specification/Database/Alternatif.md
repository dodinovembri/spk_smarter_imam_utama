# Alternatif
```sql
CREATE TABLE `alternatif` (
	`id` INT NOT NULL AUTO_INCREMENT,
    `kode_alternatif` VARCHAR(50) NOT NULL,
	`nama_alternatif` VARCHAR(255) NULL,
    `jarak_dengan_aspal` VARCHAR(100) NULL,
    `harga` DOUBLE (18,2) NULL,
    `jarak_dengan_sarana` VARCHAR(100) NULL,
    `luas_lahan` DOUBLE VARCHAR(100) NULL,
    `tempo_pembayaran` DOUBLE VARCHAR(100) NULL,
    `keterangan` TEXT NULL,
    `status` TINYINT NULL,
	PRIMARY KEY (`id`)
);
```

