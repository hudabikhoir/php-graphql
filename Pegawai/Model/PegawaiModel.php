<?php
namespace Pegawai\Model;
 
class PegawaiModel
{
    public static function tampil_data(){
        $koneksi = mysqli_connect("localhost", "root", "root");
        $data = mysqli_query($koneksi, "SELECT * FROM graph.pegawais");
        $d = mysqli_fetch_all($data, MYSQLI_ASSOC);
            // echo(json_encode($d));
        return $d;
    }
        
    public static function findAll(){
        return [
            [
                'id' => 1,
                'nama' => 'Nur Huda',
                'alamat' => 'Kertosono',
                'created' => new \DateTime('2017-02-24 11:20:10'),
                'id_jabatan' => 1,
            ],
            [
                'id' => 2,
                'nama' => 'Septian',
                'alamat' => 'Nganjuk',
                'created' => new \DateTime('2017-02-24 11:20:10'),
                'id_jabatan' => 2,
            ]
        ];
    }
}