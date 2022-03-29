<?php 

class Mmodel extends CI_Model {

	public function updatePassword($id,$data){
		$this->db->where('id',$id);
		$this->db->update('users',$data);
	}

	public function cekToken($token){
		$this->db->where('token',$token);
		return $this->db->get('users');
	}

	public function addToken($id,$token){
		$this->db->where('id',$id);
		$this->db->update('users',['token' => $token]);
	}
	public function cekEmail($email){
		$this->db->where('email',$email);
		return $this->db->get('users');
	}

    // merk
    public function getMerk() {
        return $this->db->get("merk")->result_array();
    }

    public function addMerk($data) {
        $this->db->insert('merk', $data);
    }

    public function deleteMerk($id) {
        $this->db->delete("merk", ['id' => $id]);
    }

    public function getMerkById($id) {
        $this->db->where(['id' => $id]);
        return $this->db->get("merk")->row_array();
    }

    public function actionEditMerk($id, $data) {
        $this->db->where(['id' => $id]);
        $this->db->update("merk", $data);
    }


    // kategori
    public function getKategori(){
        return $this->db->get("kategori")->result_array();
    }

    public function addKategori($data) {
        $this->db->insert("kategori", $data);
    }

    public function deleteKategori($id) {
        $this->db->delete("kategori", ['id' => $id]);
    }

    public function getKategoriById($id) {
        $this->db->where(['id' => $id]);
        return $this->db->get("kategori")->row_array();
    }

    public function actionEditKategori($id, $data) {
        $this->db->where(['id' => $id]);
        $this->db->update('kategori', $data);
    }


    // size
    public function getSize() {
        return $this->db->get('size')->result_array();
    }

    public function addSize($data) {
        $this->db->insert('size', $data);
    }

    public function deleteSize($id) {
        $this->db->where(['id' => $id]);
        $this->db->delete('size');
    }

    public function getSizeById($id) {
        $this->db->where(['id' => $id]);
        return $this->db->get('size')->row_array();
    }

    public function actionEditSize($id, $data) {
        $this->db->where(['id' => $id]);
        $this->db->update('size', $data);
    }


    // produk
    public function getProduk() {
        $this->kategori = "kategori";
        $this->size = "size";
        $this->merk = "merk";
        $this->produk = "produk";

        $this->db->select("$this->produk.id, 
                        $this->produk.kode_produk, 
                        $this->produk.type, 
                        $this->produk.harga, 
                        $this->produk.stok, 
                        $this->kategori.kategori, 
                        $this->size.size, 
                        $this->merk.merk, 
                        ");
        $this->db->join("kategori", "$this->kategori.id = $this->produk.kategoriId");
        $this->db->join("size", "$this->size.id = $this->produk.sizeId");
        $this->db->join("merk", "$this->merk.id = $this->produk.merkId");
        return $this->db->get('produk')->result_array();
    }

    public function addProduk($data) {
        $this->db->insert("produk", $data);
    }

    public function deleteProduk($id) {
        $this->db->where(['id' => $id]);
        $this->db->delete('produk');
    }

    public function getProdukById($id) {
        $this->db->where(['id' => $id]);
        return $this->db->get('produk')->row_array();
    }

    public function actionEditProduk($id, $data) {
        $this->db->where(['id' => $id]);
        $this->db->update("produk", $data);
    }


    // users
    public function getUserByUsername($username){
        $this->db->where(['username' => $username]);
        return $this->db->get("users")->row_array();
    }

    public function updateUser($username, $dataUpdate) {
        $this->db->where(['username' => $username]);
        $this->db->update("users", $dataUpdate);
    }


    // penjualan
    public function addPenjualan($data) {
        $this->db->insert("penjualan", $data);
    }

    public function getPenjualan() {
        $this->produk = "produk";
        $this->merk = "merk";
        $this->kategori = "kategori";
        $this->penjualan = "penjualan";
        $this->size = "size";

        $this->db->select("
            $this->penjualan.id,
            $this->penjualan.tgl_penjualan,
            $this->merk.merk,
            $this->kategori.kategori,
            $this->size.size,
            $this->produk.type,
            $this->produk.harga,
            ");
            

        $this->db->join("kategori", "$this->kategori.id = $this->penjualan.kategoriId");
        $this->db->join("merk", "$this->merk.id = $this->penjualan.merkId");
        $this->db->join("produk", "$this->produk.id = $this->penjualan.produkId");
        $this->db->join("size", "$this->size.id = $this->penjualan.sizeId");

        return $this->db->get("penjualan")->result_array();
    }

    public function deleteRiwayat($id) {
        $this->db->where("id", $id);
        $this->db->delete("penjualan");
    }

    public function getRiwayatById($id) {
        $this->db->where(['id' => $id]);
        return $this->db->get("penjualan")->row_array();
    }

    public function actionEditRiwayat($id, $data) {
        $this->db->where(['id' => $id]);
        $this->db->update("penjualan", $data);
    }

    public function updateProdukByStok($id, $stok) {
        $this->db->where(['id' => $id]);
        $this->db->update("produk", $stok);
    }

}
