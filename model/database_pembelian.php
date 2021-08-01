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
        $data = mysqli_query($this->con, "select * from pembelian");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function input($id,$idp,$ids,$jumlah,$tanggal){
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "insert into pembelian 
        values('$id','$idp','$ids','$jumlah','$tanggal')");
    }

    function hapus($id){
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "delete from pembelian 
        where id_pembelian='$id'");
    }

    function edit($id){
        $data = mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "select * 
        from pembelian where id_pembelian='$id'");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function update($id,$idp,$ids,$jumlah,$tanggal){
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "update pembelian set 
        id_produk='$idp', id_supplier='$ids', jumlah='$jumlah', tanggal='$tanggal' where id_pembelian='$id'");
    }
}
?>