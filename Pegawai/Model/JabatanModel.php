<?php
namespace Pegawai\Model;
 
class JabatanModel
{
    public static function findAll()
    {
        return [
            [
                'id' => 1,
                'nm_jabatan' => 'Front End',
            ],
            [
                'id' => 2,
                'nm_jabatan' => 'Back End',
            ]

        ];
    }
}