<?php
namespace Pegawai\Type;
 
 
use Youshido\GraphQL\Type\NonNullType;
use Youshido\GraphQL\Type\Object\AbstractObjectType;
use Youshido\GraphQL\Type\Scalar\DateTimeType;
use Youshido\GraphQL\Type\Scalar\IntType;
use Youshido\GraphQL\Type\Scalar\StringType;
 
class PegawaiType extends AbstractObjectType
{
    public function build($config)
    {
        $config->addFields([
            'id' => new NonNullType(new IntType()),
            'nama' => new StringType(),
            'alamat' => new StringType(),
            'created' => new DateTimeType(),
            'id_jabatan' => new NonNullType(new IntType())
        ]);
    }
 
}