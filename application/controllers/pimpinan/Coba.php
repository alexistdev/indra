<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coba extends CI_Controller {

    public function index() {
         $getProduk = $this->db->get('produk')->result_array();
         $getPenjualan = $this->db->get('penjualan')->result_array();

         $sizeProduk = $this->db->get('produk')->num_rows();
         $sizePenjualan = $this->db->get('penjualan')->num_rows();

         for($i = 0;  $i < (int) $sizeProduk; $i++) {
             for($j = 0; $j < (int) $sizePenjualan; $j++) {
                 if($getProduk[$i]['id'] == $getPenjualan[$j]['produkId']) {
                     if(
                         $getPenjualan[$j]['produkId'] == 25 && 
                         $getPenjualan[$j]['kategoriId'] == 5 
                     ) {
                         var_dump($getPenjualan[$j]['produkId']);
                    }
                }
             }
         }
        //  var_dump($sizeProduk);
    }
}