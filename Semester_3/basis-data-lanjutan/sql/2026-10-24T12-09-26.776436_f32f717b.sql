-- sqlit:history
-- connection: SQL Server

-------------| SQL Server Pertemuan 4 |-----------------

-- ALTER TABLE T_Mahasiswa
-- ALTER COLUMN id_jurusan INTEGER NULL;

-- EXEC sp_rename 'T_Mahasiswa.Score', 'score', 'COLUMN';

-- UPDATE T_Mahasiswa
-- SET id_jurusan = NULL
-- WHERE id = 3

-- SELECT
	-- M.id,
	-- M.nim,
	-- M.nama,
	-- J.nama AS jurusan,
	-- M.score
-- FROM T_Mahasiswa AS M
-- FULL JOIN T_Jurusan AS J
-- ON J.id = M.id_jurusan

-- SUBQUERY: query (query)
-- SELECT nim, nama, score
-- FROM T_Mahasiswa
-- WHERE score > (
	-- SELECT AVG(score)
	-- FROM T_Mahasiswa
-- )

-- CTE (Common Table Expressions)
WITH MahasiswaLulus AS(
	SELECT nim, nama, score, id_jurusan
	FROM T_Mahasiswa
	WHERE score >= 80
), DataMahasiswaLulus AS(
	SELECT M.nim, M.nama, M.score, J.nama AS jurusan
	FROM MahasiswaLulus AS M
	INNER JOIN T_Jurusan AS J
	ON J.id = M.id_jurusan
)

SELECT * FROM DataMahasiswaLulus
ORDER BY score DESC
