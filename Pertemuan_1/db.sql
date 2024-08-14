CREATE TABLE 'data_mhs'(
  nim VARCHAR(13) NOT NULL,
  id_mhs int(110 NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nama VARCHAR(40) NOT NULL,
  jenis_kelamin enum("P","L") NOT NULL,
  jurusan VARCHAR(30) NOT NULL,
  alamat TEXT NOT NULL
);
INSERT INTO data_mhs VALUES('TI102132',1,'Komang','L','Sistem Informasi','Depok');