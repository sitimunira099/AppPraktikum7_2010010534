<?php
class RiwayatRegistrasiModel
{
    private $table = 'riwayatregistrasi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllRiwayatRegistrasi()
    {
        $query = 'SELECT riwayatregistrasi.*, mahasiswa.MahasiswaID
       FROM riwayatregistrasi
       LEFT JOIN mahasiswa ON riwayatregistrasi.MahasiswaID = mahasiswa.MahasiswaID';

        $this->db->query($query);

        return $this->db->resultSet();
    }

    public function getRiwayatRegistrasiById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE MahasiswaID=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahRiwayatRegistrasi($data)
    {
        $query = "INSERT INTO riwayatregistrasi (RegistrasiID, MahasiswaID, TahunAjaran, Semester, MataKuliahID) VALUES (:RegistrasiID, :MahasiswaID, :TahunAjaran, :Semester, :MataKuliahID)";
        $this->db->query($query);
        $this->db->bind('RegistrasiID', $data['RegistrasiID']);
        $this->db->bind('MahasiswaID', $data['MahasiswaID']);
        $this->db->bind('TahunAjaran', $data['TahunAjaranr']);
        $this->db->bind('Semester', $data['Semester']);
        $this->db->bind('MataKuliahID', $data['MataKuliahID']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateDataRiwayatRegistrasi($data)
    {
        $query = "UPDATE riwayatregistrasi SET MahasiswaID=:MahasiswaID, TahunAjaran=:TahunAjaran, Semester=:Semester, MataKuliahID=:MataKuliahID WHERE RegistrasiID=:id";
        $this->db->query($query);
        $this->db->bind('RegistrasiID', $data['RegistrasiID']);
        $this->db->bind('MahasiswaID', $data['MahasiswaID']);
        $this->db->bind('TahunAjaran', $data['TahunAjaran']);
        $this->db->bind('Semester', $data['Semester']);
        $this->db->bind('MataKuliahID', $data['MataKuliahID']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteMahasiswa($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE MahasiswaID=:id');
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getJumlahMahasiswaPerProgramStudi()
    {
        $query = "SELECT ps.NamaProgram, COUNT(m.MahasiswaID) as JumlahMahasiswa
              FROM programstudi ps
              LEFT JOIN mahasiswa m ON ps.ProgramStudiID = m.ProgramStudiID
              GROUP BY ps.NamaProgram";

        $this->db->query($query);
        return $this->db->resultSet();
    }
}
