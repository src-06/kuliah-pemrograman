-- sqlit:history
-- connection: SQL Server

-------------| SQL Server Pertemuan 1-2 |-----------------
-- CREATE DATABASE DB_Kuliah
-- USE DB_Kuliah

-- CREATE TABLE:
-- CREATE TABLE T_Jurusan (
	-- id INT PRIMARY KEY IDENTITY(1,1),
	-- nama VARCHAR(255) UNIQUE NOT NULL
-- )

-- CREATE TABLE T_Mahasiswa (
	-- id INT PRIMARY KEY IDENTITY(1,1),
	-- nim VARCHAR(10) UNIQUE NOT NULL,
	-- nama VARCHAR(255),
	-- id_jurusan INT NOT NULL
-- 
    -- CONSTRAINT FK_id_jurusan
	-- FOREIGN KEY (id_jurusan)
	-- REFERENCES T_Jurusan (id)
-- )

-- INSERT values:
-- INSERT INTO T_Jurusan VALUES ('Teknologi Rekayasa Perangkat Lunak'), ('Bisnis Digital'), ('Logistik Bisnis')
-- INSERT INTO T_Mahasiswa VALUES ('0012500001', 'Renaldi', 1), ('0012500002', 'Budi', 2), ('0012500003', 'Sanjaya', 3), ('0012500004', 'Kendil', 3), ('0012500005', 'Raka', 1), ('0012500006', 'Gordon', 2)

-- SELECT to show data:
-- SELECT * FROM T_Jurusan
-- SELECT * FROM T_Mahasiswa

-- UPDATE row value by id:
-- UPDATE T_Mahasiswa SET nama = 'Diamang' WHERE id = 3
-- UPDATE T_Mahasiswa SET nama = 'Roger' WHERE id = 4

-- DELETE column by id:
-- DELETE FROM T_Mahasiswa WHERE id = 6

-- SELECT and ALIASES:
-- SELECT nim, nama AS [Nama Mahasiswa] FROM T_Mahasiswa
-- SELECT nim, nama [Nama Mahasiswa] FROM T_Mahasiswa
-- SELECT nim, [Nama Mahasiswa] = nama FROM T_Mahasiswa
-- SELECT nim AS [NIM Mahasiswa], nama AS [Nama Mahasiswa] FROM T_Mahasiswa

-- RESET IDENTITY `DBCC CHECKIDENT ('TableName', RESEED, {Set number to reset identity})`:
-- INSERT INTO T_Jurusan VALUES ('Management'), ('Data Analyst')
-- DELETE FROM T_Jurusan WHERE id IN(4,5)
-- INSERT INTO T_Jurusan VALUES ('AI Enginering')
-- DELETE FROM T_Jurusan WHERE id = 6
-- DBCC CHECKIDENT ('T_Jurusan', RESEED, 3)
-- INSERT INTO T_Jurusan VALUES ('AI Enginering') -- id T_Jurusan set to 4

-- Wipe and reset TABLE data values and identity:
-- TRUNCATE TABLE T_Mahasiswa

-- Test SELECT JOIN:
SELECT M.id, M.nim, M.nama, J.nama FROM T_Mahasiswa AS M JOIN T_Jurusan AS J ON M.id_jurusan = J.id

-- DISTINCT with SELECT JOIN
-- SELECT DISTINCT J.nama FROM T_Mahasiswa AS M JOIN T_Jurusan AS J ON M.id_jurusan = J.id
