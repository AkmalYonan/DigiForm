-- Schema for Supabase PostgreSQL
CREATE SCHEMA IF NOT EXISTS digiform;
SET search_path TO digiform;

CREATE TABLE admins (
  id BIGSERIAL PRIMARY KEY,
  "emailAdmin" VARCHAR(255) NOT NULL,
  "noHp" VARCHAR(255) NOT NULL,
  created_at TIMESTAMP NULL DEFAULT NULL,
  updated_at TIMESTAMP NULL DEFAULT NULL
);

CREATE TABLE pesan (
  id SERIAL PRIMARY KEY,
  id_template INT NOT NULL,
  id_user INT NOT NULL,
  updated_at TIMESTAMP NULL DEFAULT NULL,
  created_at TIMESTAMP NULL DEFAULT NULL
);

CREATE TABLE data (
  id_pesan INT NOT NULL,
  salam_pembuka TEXT,
  lokasi_acara VARCHAR(255) NOT NULL,
  tgl_akad VARCHAR(20) NOT NULL,
  tgl_resepsi VARCHAR(20) NOT NULL,
  jam_acara VARCHAR(20) NOT NULL,
  email VARCHAR(255) NOT NULL,
  no_wa VARCHAR(20) NOT NULL,
  nama_panggilan VARCHAR(25) NOT NULL,
  created_at TIMESTAMP NULL DEFAULT NULL,
  updated_at TIMESTAMP NULL DEFAULT NULL,
  CONSTRAINT data_ibfk_1 FOREIGN KEY (id_pesan) REFERENCES pesan (id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE fitur (
  id SERIAL PRIMARY KEY,
  nama VARCHAR(99) NOT NULL
);

CREATE TABLE detail_fitur (
  id_pesan INT NOT NULL,
  id_fitur INT NOT NULL,
  updated_at TIMESTAMP NULL DEFAULT NULL,
  created_at TIMESTAMP NULL DEFAULT NULL,
  CONSTRAINT detail_fitur_ibfk_2 FOREIGN KEY (id_fitur) REFERENCES fitur (id) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT detail_fitur_ibfk_3 FOREIGN KEY (id_pesan) REFERENCES pesan (id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE paket (
  id SERIAL PRIMARY KEY,
  nama VARCHAR(99) NOT NULL,
  harga INT NOT NULL
);

CREATE TABLE detail_paket_fitur (
  id SERIAL PRIMARY KEY,
  paket_id INT NOT NULL,
  fitur_id INT NOT NULL,
  CONSTRAINT detail_paket_fitur_ibfk_1 FOREIGN KEY (fitur_id) REFERENCES fitur (id) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT detail_paket_fitur_ibfk_2 FOREIGN KEY (paket_id) REFERENCES paket (id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE template (
  id SERIAL PRIMARY KEY,
  nama VARCHAR(99) NOT NULL
);

CREATE TABLE detail_paket_template (
  id SERIAL PRIMARY KEY,
  paket_id INT NOT NULL,
  template_id INT NOT NULL,
  CONSTRAINT detail_paket_template_ibfk_1 FOREIGN KEY (paket_id) REFERENCES paket (id) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT detail_paket_template_ibfk_2 FOREIGN KEY (template_id) REFERENCES template (id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE failed_jobs (
  id BIGSERIAL PRIMARY KEY,
  uuid VARCHAR(255) UNIQUE NOT NULL,
  connection TEXT NOT NULL,
  queue TEXT NOT NULL,
  payload TEXT NOT NULL,
  exception TEXT NOT NULL,
  failed_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE level (
  id INT,
  kelas VARCHAR(50),
  updated_at TIMESTAMP NULL DEFAULT NULL,
  created_at TIMESTAMP NULL DEFAULT NULL
);

CREATE TABLE mempelai_pria (
  id_pesan INT NOT NULL,
  nama_pria VARCHAR(50) NOT NULL,
  anak_ke INT NOT NULL,
  nama_ayah VARCHAR(60) NOT NULL,
  nama_ibu VARCHAR(50) NOT NULL,
  username_ig VARCHAR(30) NOT NULL,
  updated_at TIMESTAMP NULL DEFAULT NULL,
  created_at TIMESTAMP NULL DEFAULT NULL,
  CONSTRAINT mempelai_pria_ibfk_1 FOREIGN KEY (id_pesan) REFERENCES pesan (id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE mempelai_wanita (
  id_pesan INT NOT NULL,
  nama_wanita VARCHAR(100) NOT NULL,
  anak_ke INT NOT NULL,
  nama_ayah VARCHAR(100) NOT NULL,
  nama_ibu VARCHAR(100) NOT NULL,
  username_ig VARCHAR(100) NOT NULL,
  updated_at TIMESTAMP NULL DEFAULT NULL,
  created_at TIMESTAMP NULL DEFAULT NULL,
  CONSTRAINT mempelai_wanita_ibfk_1 FOREIGN KEY (id_pesan) REFERENCES pesan (id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE migrations (
  id SERIAL PRIMARY KEY,
  migration VARCHAR(255) NOT NULL,
  batch INT NOT NULL
);

CREATE TABLE password_resets (
  email VARCHAR(255) NOT NULL,
  token VARCHAR(255) NOT NULL,
  created_at TIMESTAMP NULL DEFAULT NULL
);
CREATE INDEX password_resets_email_index ON password_resets(email);

CREATE TABLE password_reset_tokens (
  email VARCHAR(255) PRIMARY KEY,
  token VARCHAR(255) NOT NULL,
  created_at TIMESTAMP NULL DEFAULT NULL
);

CREATE TABLE personal_access_tokens (
  id BIGSERIAL PRIMARY KEY,
  tokenable_type VARCHAR(255) NOT NULL,
  tokenable_id BIGINT NOT NULL,
  name VARCHAR(255) NOT NULL,
  token VARCHAR(64) UNIQUE NOT NULL,
  abilities TEXT,
  last_used_at TIMESTAMP NULL DEFAULT NULL,
  expires_at TIMESTAMP NULL DEFAULT NULL,
  created_at TIMESTAMP NULL DEFAULT NULL,
  updated_at TIMESTAMP NULL DEFAULT NULL
);
CREATE INDEX personal_access_tokens_tokenable_type_tokenable_id_index ON personal_access_tokens(tokenable_type, tokenable_id);

CREATE TABLE users (
  id BIGSERIAL PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) UNIQUE NOT NULL,
  is_activated BOOLEAN NOT NULL DEFAULT FALSE,
  email_verified_at TIMESTAMP NULL DEFAULT NULL,
  password VARCHAR(255) NOT NULL,
  paket_id INT NOT NULL DEFAULT 1,
  level VARCHAR(50) NOT NULL DEFAULT '0',
  remember_token VARCHAR(100) DEFAULT NULL,
  created_at TIMESTAMP NULL DEFAULT NULL,
  updated_at TIMESTAMP NULL DEFAULT NULL,
  gender VARCHAR(50) NOT NULL,
  birthdate DATE NOT NULL,
  CONSTRAINT users_ibfk_1 FOREIGN KEY (paket_id) REFERENCES paket (id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE verifytokens (
  id BIGSERIAL PRIMARY KEY,
  token VARCHAR(255) NOT NULL,
  email VARCHAR(255) DEFAULT NULL,
  is_activated BOOLEAN NOT NULL DEFAULT FALSE,
  created_at TIMESTAMP NULL DEFAULT NULL,
  updated_at TIMESTAMP NULL DEFAULT NULL,
  expires_at TIMESTAMP NULL DEFAULT NULL
);

-- Data
INSERT INTO admins (id, "emailAdmin", "noHp", created_at, updated_at) VALUES (1, 'akmalyonanda@gmail.com', '+62881025433363', NULL, '2023-07-25 02:18:45');
SELECT setval('admins_id_seq', (SELECT MAX(id) FROM admins));

INSERT INTO fitur (id, nama) VALUES
(1, 'Pembukaan'), (2, 'Nama Pengantin'), (3, 'Hari/Tgl Resepsi'), (4, 'Hari/Tgl Akad'), (5, 'Lokasi Acara (Non Maps)'),
(6, 'Lokasi Acara (Maps)'), (7, 'Resposive Mobile'), (8, 'Countdown'), (9, 'Galeri'), (10, 'Backsound(No Request)'),
(11, 'Backsound(Request)'), (12, 'Buku Tamu'), (13, 'Animasi');
SELECT setval('fitur_id_seq', (SELECT MAX(id) FROM fitur));

INSERT INTO paket (id, nama, harga) VALUES
(1, 'Bronze', 0), (2, 'Silver', 100000), (3, 'Gold', 200000);
SELECT setval('paket_id_seq', (SELECT MAX(id) FROM paket));

INSERT INTO detail_paket_fitur (id, paket_id, fitur_id) VALUES
(1, 1, 1), (2, 1, 2), (3, 1, 3), (4, 1, 4), (5, 1, 5), (6, 1, 7),
(7, 2, 1), (8, 2, 2), (9, 2, 3), (10, 2, 4), (11, 2, 6), (12, 2, 7), (13, 2, 8), (14, 2, 9), (15, 2, 10), (16, 2, 13),
(17, 3, 1), (18, 3, 2), (19, 3, 3), (20, 3, 4), (21, 3, 6), (22, 3, 7), (23, 3, 8), (24, 3, 9), (25, 3, 11), (26, 3, 12), (27, 3, 13);
SELECT setval('detail_paket_fitur_id_seq', (SELECT MAX(id) FROM detail_paket_fitur));

INSERT INTO template (id, nama) VALUES
(1, 'Satya'), (2, 'Amartha'), (3, 'Prima'), (4, 'Arta'), (5, 'Yonans'), (6, 'Dawa'), (7, 'Emim'), (8, 'Kirei');
SELECT setval('template_id_seq', (SELECT MAX(id) FROM template));

INSERT INTO detail_paket_template (id, paket_id, template_id) VALUES
(19, 1, 1), (20, 1, 2), (21, 1, 3),
(22, 2, 1), (23, 2, 2), (24, 2, 3), (25, 2, 4), (26, 2, 5), (27, 2, 6),
(28, 3, 1), (29, 3, 2), (30, 3, 3), (31, 3, 4), (32, 3, 5), (33, 3, 6), (34, 3, 7), (35, 3, 8);
SELECT setval('detail_paket_template_id_seq', (SELECT MAX(id) FROM detail_paket_template));

INSERT INTO level (id, kelas, updated_at, created_at) VALUES (1, 'Admin', '2026-02-25 18:17:28', '2026-02-25 18:17:28');

INSERT INTO password_reset_tokens (email, token, created_at) VALUES ('akmalyonanda@gmail.com', '$2y$10$esGim0GXSqd6jg.M.dBw0OKFTgTGUx6lg51AqFWMHceqve5pZ6Nka', '2026-02-25 18:22:34');

INSERT INTO users (id, name, email, is_activated, email_verified_at, password, paket_id, level, remember_token, created_at, updated_at, gender, birthdate) VALUES
(2, 'Admin', 'akmalyonanda@gmail.com', TRUE, NULL, '$2y$10$O.Kyy6rJkpmyyFZ8ZtNpWOa8pgD6ikfO1vEMxnGp0OMC./xwApOHS', 2, '2', 'G88jcn9U4NR0KaZN4MFqvdccxzbePPMotq17oLWHvgGP1rWYNSvDLXgTiDDb', '2023-07-18 01:39:12', '2026-02-25 15:29:50', 'laki', '2023-07-18'),
(3, 'admin', 'admin@gmail.com', TRUE, NULL, '$2y$10$O4mdPk1uIFoZ4pZkNkoJMu3RcJzV6Q7sMW5hnz2ogFHKJDpdWKpCq', 3, '1', NULL, '2023-07-25 00:55:08', '2023-07-25 00:55:34', 'laki', '2023-07-25'),
(4, 'user', 'user@gmail.com', FALSE, NULL, '$2y$10$Y0t1x3DiRp4LlyZXzdg2I.ZvQ/sQWLuIObm3auUmPIomkn/oy5qEG', 1, '0', NULL, '2023-07-25 02:27:22', '2023-07-25 02:27:22', 'laki', '2023-07-25');
SELECT setval('users_id_seq', (SELECT MAX(id) FROM users));

INSERT INTO verifytokens (id, token, email, is_activated, created_at, updated_at, expires_at) VALUES
(6, '109579', 'user@gmail.com', FALSE, '2023-07-25 02:27:22', '2023-07-25 19:41:38', NULL);
SELECT setval('verifytokens_id_seq', (SELECT MAX(id) FROM verifytokens));
