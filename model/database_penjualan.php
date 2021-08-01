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
        $data = mysqli_query($this->con, "select * from penjualan");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function input($id,$idp,$idc,$jumlah,$total,$tanggal){
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "insert into penjualan 
        values('$id','$idp','$idc','$jumlah','$total','$tanggal')");
    }

    function hapus($id){
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "delete from penjualan 
        where id_penjualan='$id'");
    }

    function edit($id){
        $data = mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "select * 
        from penjualan where id_penjualan='$id'");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function update($id,$idp,$idc,$jumlah,$total,$tanggal){
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "update penjualan set 
        id_produk='$idp', id_customer='$idc', jumlah='$jumlah', total_harga='$total', tanggal_transaksi='$tanggal' where id_penjualan='$id'");
    }
}
?>