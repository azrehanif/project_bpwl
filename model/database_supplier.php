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
        $data = mysqli_query($this->con, "select * from supplier");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function input($id,$nama,$alamat,$notelp){
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "insert into supplier 
        values('$id','$nama','$alamat','$notelp')");
    }

    function hapus($id){
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "delete from supplier 
        where id_supplier='$id'");
    }

    function edit($id){
        $data = mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "select * 
        from supplier where id_supplier='$id'");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function update($id,$nama,$alamat,$notelp){
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "update supplier set 
        nama_supplier='$nama', alamat_supplier='$alamat', notelp_supplier='$notelp' where id_supplier='$id'");
    }
}
?>