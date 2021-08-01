# Users
```sql
CREATE TABLE `users` (
	`id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NULL,
	`email` VARCHAR(255) NULL,
    `password` VARCHAR(255) NULL,
    `gambar` VARCHAR(50) NULL,
    `alamat` TEXT NULL,
    `no_hp` VARCHAR(30) NULL,
    `jenis_kelamin` TINYINT NULL,
    `role_id` TINYINT NULL,
    `status` TINYINT NULL,
	PRIMARY KEY (`id`)
);
```

## Role
| Code | Name |
| ---- | ---- |
| 0 | Administrator/ Pimpinan |
| 1 | Surveyor |
| 2 | User |