
<?php
class Buku_model_2511500079 {
    private $table = 'buku';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllBuku()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }

    public function getBukuById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id = :id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataBuku($data)
    {
        $query = "INSERT INTO buku (judul, penulis, penerbit, tahun)
                  VALUES (:judul, :penulis, :penerbit, :tahun)";

        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('penulis', $data['penulis']);
        $this->db->bind('penerbit', $data['penerbit']);
        $this->db->bind('tahun', $data['tahun']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataBuku($id)
    {
        $query = "DELETE FROM buku WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }
}