<?php

// Class pegawai (CRUD pegawai)
class pegawai{

     // Property
     var $db;
     var $con;
     var $query;
     var $data;
     var $result;

    
    // Method untuk mengambil semua data dari table
    function GetData_All (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from pegawai");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

     // Method untuk mengambil semua data Pegawai Laki-Laki dari table
     function GetData_L (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from pegawai where jns_kel='L'");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

    // Method untuk mengambil semua data Pegawai yang sudah menikah dari table
    function GetData_M (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from pegawai where status='M'");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

     // Method untuk mengambil semua data Pegawai yang belum menikah dari table
     function GetData_BM (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from pegawai where status='B'");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

    // Method untuk mengambil semua data Pegawai usia 20-30 dari table
    function GetData_U1 (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from pegawai WHERE YEAR(CURDATE()) - YEAR(tgl_lahir) BETWEEN 20 and 30");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

     // Method untuk mengambil semua data Pegawai usia 30-45 dari table
     function GetData_U2 (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from pegawai WHERE YEAR(CURDATE()) - YEAR(tgl_lahir) BETWEEN 30 and 45");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

     // Method untuk mengambil semua data Pegawai masa kerja 1-5 dari table
     function GetData_M1 (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from pegawai WHERE YEAR(CURDATE()) - YEAR(mulai_kerja) BETWEEN 1 and 5");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

    // Method untuk mengambil semua data Pegawai masa kerja 6-10 dari table
    function GetData_M2 (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from pegawai WHERE YEAR(CURDATE()) - YEAR(mulai_kerja) BETWEEN 6 and 10");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

     // Method untuk mengambil semua data Pegawai masa kerja 11-25 dari table
     function GetData_M3 (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con," select * from pegawai WHERE YEAR(CURDATE()) - YEAR(mulai_kerja) BETWEEN 11 and 25");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

}


?>