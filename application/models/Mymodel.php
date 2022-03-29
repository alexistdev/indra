<?php 

class Mymodel extends CI_Model {

    public function speaker() {


        $result = []; // data produk setelah dikluster
        $test = []; //kumpulan jumlah data klaster
        $idMerk = []; //kumpulan idproduk
        $clusterType = [];
        $idProduk = [];

        $getMerk = $this->db->get('merk')->result_array();
        $numMerk = $this->db->get('merk')->num_rows();
        $getProduk = $this->db->get('produk')->result_array();
        $numProduk = $this->db->get('produk')->num_rows();

    
        for($i = 0; $i < (int) $numMerk; $i++) {
            $data = $this->db->get_where('penjualan', ['kategoriId' => 5, 'merkId' => $getMerk[$i]['id']])->result_array();

         array_push($test, sizeof($data));
        }

        // jumlah data terbanyak 
        $max = max($test);
        
        // cari posisi data di array berdasarkan hasil cluster 
        $findData = array_search($max, $test);

        // ambil id prosuk letakan pada variabel idproduk
        for($j = 0; $j < (int) $numMerk; $j++) {
            array_push($idMerk, $getMerk[$j]['id']);
        }


        for($k = 0; $k < (int) $numProduk; $k++) {
            $data = $this->db->get_where('penjualan', ['kategoriId' => 5, 'merkId' => $idMerk[$findData], 'produkId' => $getProduk[$k]['id']])->result_array();

         array_push($clusterType, sizeof($data));
        }

        $maxType = max($clusterType);

        $findDataType = array_search($maxType, $clusterType);

        for($l = 0; $l < (int) $numProduk; $l++) {
            array_push($idProduk, $getProduk[$l]['id']);
        }


        // param to query
        // var_dump($idProduk[$findDataType]); die;

        // ambil data produk berdasarkan idproduk
        $this->merk = "merk";
        $this->produk = "produk";
        $this->db->join("merk", "$this->merk.id = $this->produk.merkId");

        $this->db->where("$this->produk.id", $idProduk[$findDataType]);

        return $this->db->get('produk')->row_array();
        // $hasClaster =  $this->db->get_where('produk', ['id' => $idProduk[$findDataType]])->row_array();

        // array_push($result, $hasClaster);

        // return $result;

        // return $this->speaker();
}

    public function mesinCuci() {
        $result = []; // data produk setelah dikluster
        $test = []; //kumpulan jumlah data klaster
        $idMerk = []; //kumpulan idproduk
        $clusterType = [];
        $idProduk = [];

        $getMerk = $this->db->get('merk')->result_array();
        $numMerk = $this->db->get('merk')->num_rows();
        $getProduk = $this->db->get('produk')->result_array();
        $numProduk = $this->db->get('produk')->num_rows();

    
        for($i = 0; $i < (int) $numMerk; $i++) {
            $data = $this->db->get_where('penjualan', ['kategoriId' => 6, 'merkId' => $getMerk[$i]['id']])->result_array();

         array_push($test, sizeof($data));
        }

        // jumlah data terbanyak 
        $max = max($test);
        
        // cari posisi data di array berdasarkan hasil cluster 
        $findData = array_search($max, $test);

        // ambil id prosuk letakan pada variabel idproduk
        for($j = 0; $j < (int) $numMerk; $j++) {
            array_push($idMerk, $getMerk[$j]['id']);
        }


        for($k = 0; $k < (int) $numProduk; $k++) {
            $data = $this->db->get_where('penjualan', ['kategoriId' => 6, 'merkId' => $idMerk[$findData], 'produkId' => $getProduk[$k]['id']])->result_array();

         array_push($clusterType, sizeof($data));
        }

        $maxType = max($clusterType);

        $findDataType = array_search($maxType, $clusterType);

        for($l = 0; $l < (int) $numProduk; $l++) {
            array_push($idProduk, $getProduk[$l]['id']);
        }


        // param to query
        // var_dump($idProduk[$findDataType]); die;

        // ambil data produk berdasarkan idproduk
        $this->merk = "merk";
        $this->produk = "produk";
        $this->db->join("merk", "$this->merk.id = $this->produk.merkId");

        $this->db->where("$this->produk.id", $idProduk[$findDataType]);

        return $this->db->get('produk')->row_array();
    }

    public function tv() {
        $result = []; // data produk setelah dikluster
        $test = []; //kumpulan jumlah data klaster
        $idMerk = []; //kumpulan idproduk
        $clusterType = [];
        $idProduk = [];

        $getMerk = $this->db->get('merk')->result_array();
        $numMerk = $this->db->get('merk')->num_rows();
        $getProduk = $this->db->get('produk')->result_array();
        $numProduk = $this->db->get('produk')->num_rows();

    
        for($i = 0; $i < (int) $numMerk; $i++) {
            $data = $this->db->get_where('penjualan', ['kategoriId' => 7, 'merkId' => $getMerk[$i]['id']])->result_array();

         array_push($test, sizeof($data));
        }

        // jumlah data terbanyak 
        $max = max($test);
        
        // cari posisi data di array berdasarkan hasil cluster 
        $findData = array_search($max, $test);

        // ambil id prosuk letakan pada variabel idproduk
        for($j = 0; $j < (int) $numMerk; $j++) {
            array_push($idMerk, $getMerk[$j]['id']);
        }


        for($k = 0; $k < (int) $numProduk; $k++) {
            $data = $this->db->get_where('penjualan', ['kategoriId' => 7, 'merkId' => $idMerk[$findData], 'produkId' => $getProduk[$k]['id']])->result_array();

         array_push($clusterType, sizeof($data));
        }

        $maxType = max($clusterType);

        $findDataType = array_search($maxType, $clusterType);

        for($l = 0; $l < (int) $numProduk; $l++) {
            array_push($idProduk, $getProduk[$l]['id']);
        }


        // param to query
        // var_dump($idProduk[$findDataType]); die;

        // ambil data produk berdasarkan idproduk
         $this->merk = "merk";
        $this->produk = "produk";
        $this->db->join("merk", "$this->merk.id = $this->produk.merkId");

        $this->db->where("$this->produk.id", $idProduk[$findDataType]);

        return $this->db->get('produk')->row_array();
    }

    public function kulkas() {
        $result = []; // data produk setelah dikluster
        $test = []; //kumpulan jumlah data klaster
        $idMerk = []; //kumpulan idproduk
        $clusterType = [];
        $idProduk = [];

        $getMerk = $this->db->get('merk')->result_array();
        $numMerk = $this->db->get('merk')->num_rows();
        $getProduk = $this->db->get('produk')->result_array();
        $numProduk = $this->db->get('produk')->num_rows();

    
        for($i = 0; $i < (int) $numMerk; $i++) {
            $data = $this->db->get_where('penjualan', ['kategoriId' => 8, 'merkId' => $getMerk[$i]['id']])->result_array();

         array_push($test, sizeof($data));
        }

        // jumlah data terbanyak 
        $max = max($test);
        
        // cari posisi data di array berdasarkan hasil cluster 
        $findData = array_search($max, $test);

        // ambil id prosuk letakan pada variabel idproduk
        for($j = 0; $j < (int) $numMerk; $j++) {
            array_push($idMerk, $getMerk[$j]['id']);
        }


        for($k = 0; $k < (int) $numProduk; $k++) {
            $data = $this->db->get_where('penjualan', ['kategoriId' => 8, 'merkId' => $idMerk[$findData], 'produkId' => $getProduk[$k]['id']])->result_array();

         array_push($clusterType, sizeof($data));
        }

        $maxType = max($clusterType);

        $findDataType = array_search($maxType, $clusterType);

        for($l = 0; $l < (int) $numProduk; $l++) {
            array_push($idProduk, $getProduk[$l]['id']);
        }


        // param to query
        // var_dump($idProduk[$findDataType]); die;

        // ambil data produk berdasarkan idproduk
         $this->merk = "merk";
        $this->produk = "produk";
        $this->db->join("merk", "$this->merk.id = $this->produk.merkId");

        $this->db->where("$this->produk.id", $idProduk[$findDataType]);

        return $this->db->get('produk')->row_array();
    }

    public function setrika() {
        $result = []; // data produk setelah dikluster
        $test = []; //kumpulan jumlah data klaster
        $idMerk = []; //kumpulan idproduk
        $clusterType = [];
        $idProduk = [];

        $getMerk = $this->db->get('merk')->result_array();
        $numMerk = $this->db->get('merk')->num_rows();
        $getProduk = $this->db->get('produk')->result_array();
        $numProduk = $this->db->get('produk')->num_rows();

    
        for($i = 0; $i < (int) $numMerk; $i++) {
            $data = $this->db->get_where('penjualan', ['kategoriId' => 9, 'merkId' => $getMerk[$i]['id']])->result_array();

         array_push($test, sizeof($data));
        }

        // jumlah data terbanyak 
        $max = max($test);
        
        // cari posisi data di array berdasarkan hasil cluster 
        $findData = array_search($max, $test);

        // ambil id prosuk letakan pada variabel idproduk
        for($j = 0; $j < (int) $numMerk; $j++) {
            array_push($idMerk, $getMerk[$j]['id']);
        }


        for($k = 0; $k < (int) $numProduk; $k++) {
            $data = $this->db->get_where('penjualan', ['kategoriId' => 9, 'merkId' => $idMerk[$findData], 'produkId' => $getProduk[$k]['id']])->result_array();

         array_push($clusterType, sizeof($data));
        }

        $maxType = max($clusterType);

        $findDataType = array_search($maxType, $clusterType);

        for($l = 0; $l < (int) $numProduk; $l++) {
            array_push($idProduk, $getProduk[$l]['id']);
        }


        // param to query
        // var_dump($idProduk[$findDataType]); die;

        // ambil data produk berdasarkan idproduk
         $this->merk = "merk";
        $this->produk = "produk";
        $this->db->join("merk", "$this->merk.id = $this->produk.merkId");

        $this->db->where("$this->produk.id", $idProduk[$findDataType]);

        return $this->db->get('produk')->row_array();
    }

    public function mic() {
        $result = []; // data produk setelah dikluster
        $test = []; //kumpulan jumlah data klaster
        $idMerk = []; //kumpulan idproduk
        $clusterType = [];
        $idProduk = [];

        $getMerk = $this->db->get('merk')->result_array();
        $numMerk = $this->db->get('merk')->num_rows();
        $getProduk = $this->db->get('produk')->result_array();
        $numProduk = $this->db->get('produk')->num_rows();

    
        for($i = 0; $i < (int) $numMerk; $i++) {
            $data = $this->db->get_where('penjualan', ['kategoriId' => 10, 'merkId' => $getMerk[$i]['id']])->result_array();

         array_push($test, sizeof($data));
        }

        // jumlah data terbanyak 
        $max = max($test);
        
        // cari posisi data di array berdasarkan hasil cluster 
        $findData = array_search($max, $test);

        // ambil id prosuk letakan pada variabel idproduk
        for($j = 0; $j < (int) $numMerk; $j++) {
            array_push($idMerk, $getMerk[$j]['id']);
        }


        for($k = 0; $k < (int) $numProduk; $k++) {
            $data = $this->db->get_where('penjualan', ['kategoriId' => 10, 'merkId' => $idMerk[$findData], 'produkId' => $getProduk[$k]['id']])->result_array();

         array_push($clusterType, sizeof($data));
        }

        $maxType = max($clusterType);

        $findDataType = array_search($maxType, $clusterType);

        for($l = 0; $l < (int) $numProduk; $l++) {
            array_push($idProduk, $getProduk[$l]['id']);
        }


        // param to query
        // var_dump($idProduk[$findDataType]); die;

        // ambil data produk berdasarkan idproduk
         $this->merk = "merk";
        $this->produk = "produk";
        $this->db->join("merk", "$this->merk.id = $this->produk.merkId");

        $this->db->where("$this->produk.id", $idProduk[$findDataType]);

        return $this->db->get('produk')->row_array();
    }

    public function kipasAngin() {
        $result = []; // data produk setelah dikluster
        $test = []; //kumpulan jumlah data klaster
        $idMerk = []; //kumpulan idproduk
        $clusterType = [];
        $idProduk = [];

        $getMerk = $this->db->get('merk')->result_array();
        $numMerk = $this->db->get('merk')->num_rows();
        $getProduk = $this->db->get('produk')->result_array();
        $numProduk = $this->db->get('produk')->num_rows();

    
        for($i = 0; $i < (int) $numMerk; $i++) {
            $data = $this->db->get_where('penjualan', ['kategoriId' => 11, 'merkId' => $getMerk[$i]['id']])->result_array();

         array_push($test, sizeof($data));
        }

        // jumlah data terbanyak 
        $max = max($test);
        
        // cari posisi data di array berdasarkan hasil cluster 
        $findData = array_search($max, $test);

        // ambil id prosuk letakan pada variabel idproduk
        for($j = 0; $j < (int) $numMerk; $j++) {
            array_push($idMerk, $getMerk[$j]['id']);
        }


        for($k = 0; $k < (int) $numProduk; $k++) {
            $data = $this->db->get_where('penjualan', ['kategoriId' => 11, 'merkId' => $idMerk[$findData], 'produkId' => $getProduk[$k]['id']])->result_array();

         array_push($clusterType, sizeof($data));
        }

        $maxType = max($clusterType);

        $findDataType = array_search($maxType, $clusterType);

        for($l = 0; $l < (int) $numProduk; $l++) {
            array_push($idProduk, $getProduk[$l]['id']);
        }


        // param to query
        // var_dump($idProduk[$findDataType]); die;

        // ambil data produk berdasarkan idproduk
         $this->merk = "merk";
        $this->produk = "produk";
        $this->db->join("merk", "$this->merk.id = $this->produk.merkId");

        $this->db->where("$this->produk.id", $idProduk[$findDataType]);

        return $this->db->get('produk')->row_array();
    }

    public function komporGas() {
        $result = []; // data produk setelah dikluster
        $test = []; //kumpulan jumlah data klaster
        $idMerk = []; //kumpulan idproduk
        $clusterType = [];
        $idProduk = [];

        $getMerk = $this->db->get('merk')->result_array();
        $numMerk = $this->db->get('merk')->num_rows();
        $getProduk = $this->db->get('produk')->result_array();
        $numProduk = $this->db->get('produk')->num_rows();

    
        for($i = 0; $i < (int) $numMerk; $i++) {
            $data = $this->db->get_where('penjualan', ['kategoriId' => 12, 'merkId' => $getMerk[$i]['id']])->result_array();

         array_push($test, sizeof($data));
        }

        // jumlah data terbanyak 
        $max = max($test);
        
        // cari posisi data di array berdasarkan hasil cluster 
        $findData = array_search($max, $test);

        // ambil id prosuk letakan pada variabel idproduk
        for($j = 0; $j < (int) $numMerk; $j++) {
            array_push($idMerk, $getMerk[$j]['id']);
        }


        for($k = 0; $k < (int) $numProduk; $k++) {
            $data = $this->db->get_where('penjualan', ['kategoriId' => 12, 'merkId' => $idMerk[$findData], 'produkId' => $getProduk[$k]['id']])->result_array();

         array_push($clusterType, sizeof($data));
        }

        $maxType = max($clusterType);

        $findDataType = array_search($maxType, $clusterType);

        for($l = 0; $l < (int) $numProduk; $l++) {
            array_push($idProduk, $getProduk[$l]['id']);
        }


        // param to query
        // var_dump($idProduk[$findDataType]); die;

        // ambil data produk berdasarkan idproduk
         $this->merk = "merk";
        $this->produk = "produk";
        $this->db->join("merk", "$this->merk.id = $this->produk.merkId");

        $this->db->where("$this->produk.id", $idProduk[$findDataType]);

        return $this->db->get('produk')->row_array();
    }

    public function speakerAktif() {
        $result = []; // data produk setelah dikluster
        $test = []; //kumpulan jumlah data klaster
        $idMerk = []; //kumpulan idproduk
        $clusterType = [];
        $idProduk = [];

        $getMerk = $this->db->get('merk')->result_array();
        $numMerk = $this->db->get('merk')->num_rows();
        $getProduk = $this->db->get('produk')->result_array();
        $numProduk = $this->db->get('produk')->num_rows();

    
        for($i = 0; $i < (int) $numMerk; $i++) {
            $data = $this->db->get_where('penjualan', ['kategoriId' => 13, 'merkId' => $getMerk[$i]['id']])->result_array();

         array_push($test, sizeof($data));
        }

        // jumlah data terbanyak 
        $max = max($test);
        
        // cari posisi data di array berdasarkan hasil cluster 
        $findData = array_search($max, $test);

        // ambil id prosuk letakan pada variabel idproduk
        for($j = 0; $j < (int) $numMerk; $j++) {
            array_push($idMerk, $getMerk[$j]['id']);
        }


        for($k = 0; $k < (int) $numProduk; $k++) {
            $data = $this->db->get_where('penjualan', ['kategoriId' => 13, 'merkId' => $idMerk[$findData], 'produkId' => $getProduk[$k]['id']])->result_array();

         array_push($clusterType, sizeof($data));
        }

        $maxType = max($clusterType);

        $findDataType = array_search($maxType, $clusterType);

        for($l = 0; $l < (int) $numProduk; $l++) {
            array_push($idProduk, $getProduk[$l]['id']);
        }


        // param to query
        // var_dump($idProduk[$findDataType]); die;

        // ambil data produk berdasarkan idproduk
         $this->merk = "merk";
        $this->produk = "produk";
        $this->db->join("merk", "$this->merk.id = $this->produk.merkId");

        $this->db->where("$this->produk.id", $idProduk[$findDataType]);

        return $this->db->get('produk')->row_array();
    }

    public function cekStok() {

        $data = $this->db->get('produk')->result_array();
        $num = $this->db->get('produk')->num_rows();

        $ar = [];

        for($i = 0; $i < (int) $num; $i++) {
            
            if($data[$i]['stok'] < 10) {
                
               $this->db->where("stok", $data[$i]['stok']);

                $this->merk = "merk";
                $this->produk = "produk";
                $this->kategori = "kategori";
                $this->db->join("kategori", "$this->kategori.id = $this->produk.kategoriId");
                $this->db->join("merk", "$this->merk.id = $this->produk.merkId");
                
                array_push($ar, $this->db->get('produk')->row_array());
            //    var_dump( $this->db->get('produk')->row_array());
            }

        }

        return $ar;
    }
}