use table pegawai_pt

create table pegawai(
nip_pegawai varchar(10) not null,
nama_pegawai varchar(50) not null,
alamat_pegawai varchar(50) not null,
tempat_lahir varchar(50) not null,
tanggal_lahir date not null,
jenis_kelamin enum('Laki-laki','Perempuan') not null,
primary key (nip_pegawai)
);

create table jabatan(
no_jabatan varchar(10) not null,
nip_pegawai varchar(10) not null,
nama_jabatan varchar(50) not null,
gaji int(11) not null,
jam_kerja int(11) not null,
primary key (no_jabatan),
foreign key (nip_pegawai) references pegawai(nip_pegawai)
);

-- Insert table pegawai

insert into pegawai (nip_pegawai, nama_pegawai, alamat_pegawai, tempat_lahir, tanggal_lahir, jenis_kelamin) values ('1234567890','Galih Previand','Singosari','Malang','2002-03-23','Laki-laki');

-- Insert table jabatan

insert into jabatan (no_jabatan, nip_pegawai, nama_jabatan, gaji, jam_kerja) values ('123451321','1234567890','Karyawan','1000000','8');

