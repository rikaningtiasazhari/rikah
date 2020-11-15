<?php

namespace App\Database\Seeds;

class ProdukSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_produk' => 'Kacamata',
                'deskripsi_produk'    => 'Kaca Mata Model'
            ],
            [
                'nama_produk' => 'Lensa',
                'deskripsi_produk'    => 'Lensa Mata Minus'
            ],

        ];

        // Simple Queries
        // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :e_mail:)",
        //        $data
        //);

        // Using Query Builder
        $this->db->table('produk')->insertBatch($data);
    }
}