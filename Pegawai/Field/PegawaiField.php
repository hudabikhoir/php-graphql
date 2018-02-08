<?php
 
namespace Pegawai\Field;
  
use Pegawai\Model\PegawaiModel;
use Pegawai\Type\PegawaiType;
use Youshido\GraphQL\Config\Field\FieldConfig;
use Youshido\GraphQL\Execution\ResolveInfo;
use Youshido\GraphQL\Field\AbstractField;
use Youshido\GraphQL\Type\Scalar\IntType;
 
class PegawaiField extends AbstractField
{
    public function getType()
    {
        return new PegawaiType();
    }
 
    public function build(FieldConfig $config)
    {
        $config->addArgument('id', new IntType());
    }
 
    public function resolve($value, array $args, ResolveInfo $info)
    {
        $all = PegawaiModel::tampil_data();
        if(is_array($all) || is_object($all)){
            foreach ($all[0] as $single) {
                if ($single['id'] == $args['id']) {
                    return $single;
                }
            }
        }
        // print_r($single);exit;
 
        return null;
    }
}