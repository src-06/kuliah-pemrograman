-- sqlit:history
-- connection: SQL Server

-------------| SQL Server Pertemuan 3 |----------------

-- SELECT nama, COUNT(id)
-- FROM T_Jurusan
-- GROUP BY nama

-- SELECT * FROM T_Mahasiswa WHERE nama LIKE '%a%'

-- ALTER TABLE T_Mahasiswa
-- ADD Score INTEGER

-- SELECT * FROM T_Mahasiswa

-- UPDATE T_Mahasiswa
-- SET Score = 100
-- WHERE name = "Budi";

-- SELECT COUNT(*) FROM T_Mahasiswa
-- SELECT Sum(Score) FROM T_Mahasiswa
-- SELECT AVG(Score) FROM T_Mahasiswa
-- SELECT MIN(Score) FROM T_Mahasiswa
-- SELECT MAX(Score) FROM T_Mahasiswa

-- ROW_NUMBER(), RANK(), DENSE_RANK()
-- SELECT
	-- ROW_NUMBER() OVER(ORDER BY Score DESC,nama DESC) AS Peringkat,
	-- nim,
	-- nama,
	-- Score
-- FROM T_Mahasiswa

SELECT
	ROW_NUMBER() OVER(ORDER BY J.nama DESC) AS no,
	M.nim,
	M.nama,
	M.Score,
	J.nama AS Jurusan
FROM T_Mahasiswa AS M
INNER JOIN T_Jurusan AS J
ON M.id_jurusan = J.id
