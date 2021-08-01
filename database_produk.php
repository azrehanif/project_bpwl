<?php
class database{
    var $host = "localhost";
    var $uname = "root";
    var $pass = "";
    var $db = "project_bpwl";
    var $con;

    function __construct(){
        $this->con= mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
        mysqli_select_db($this->con,$this->db);
    }

    function tampil_data(){
        $data = mysqli_query($this->con, "select * from produk");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function input($id,$nama,$kategori,$harga,$stok){
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "insert into produk 
        values('$id','$nama','$kategori','$harga','$stok')");
    }

    function hapus($id){
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "delete from produk 
        where id_produk='$id'");
    }

    function edit($id){
        $data = mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "select * 
        from produk where id_produk='$id'");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function update($id,$nama,$kategori,$harga,$stok){
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "update produk set 
        nama_produk='$nama', kategori_produk='$kategori', harga='$harga', stok='$stok' where id_produk='$id'");
    }
}
?>