<?php
    
    // echo "Hello";
    use Pegawai\Field\PegawaiField;
    use Youshido\GraphQL\Execution\Processor;
    use Youshido\GraphQL\Schema\Schema;
    use Youshido\GraphQL\Type\Object\ObjectType;
 
    // require_once 'Pegawai/Field/PegawaiField.php';
    require_once 'vendor/autoload.php';
 
    // class database{
    //     var $host = "localhost";
    //     var $uname = "root";
    //     var $pass = "root";
    //     var $db = "graph";
 
    //     function __construct(){
    //         $koneksi = mysqli_connect($this->host, $this->uname, $this->pass);
    //         mysqli_select_db($koneksi, $this->db);
    
    //         // if($koneksi){
    //         // 	echo "Koneksi database mysql dan php berhasil.";
    //         // }else{
    //         // 	echo "Koneksi database mysql dan php GAGAL !";
    //         // }
    //     }
    //     function tampil_data(){
    //         $koneksi = mysqli_connect($this->host, $this->uname, $this->pass);
    //         $data = mysqli_query($koneksi, "SELECT * FROM graph.pegawais");
    //         $d = mysqli_fetch_all($data, MYSQLI_ASSOC);
               
    //         // json_encode($hasil);
    //         print_r($d);
    //         return json_encode($d);
    //     }
    // }
    
    // $db = new database();
    // print_r($db->tampil_data());
    // $tampil = $db->tampil_data();
    
    $processor = new Processor(new Schema([
        'query' => new ObjectType([
            'name' => 'RootQueryType',
            'fields' => [
                new PegawaiField()
            ]
        ]),
    ]));
 
    $processor->processPayload('{ pegawai(id:1){id,nama} }');
 
    echo '<pre>';
    echo json_encode($processor->getResponseData()) . "\n";
    echo '<pre>';