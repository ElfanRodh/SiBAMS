select k.id_kelas, k.tahun_ajaran, j.nama_jurusan, g.nama_guru, sk.nama_status
FROM kelas k
JOIN tbl_guru g
ON(k.walikelas = g.id_guru)
JOIN status_kelas sk
ON(k.id_status = sk.id_status)
JOIN jurusan j
ON(k.id_jurusan = j.id_jurusan)