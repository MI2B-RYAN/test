<?php

    class Koneksi 
    {
        $host = "localhost";
        $user = "root";
        $pass = "Team0p123k@m4l4n9";
        $db = "mahasiswa";
        
        function __construct()
        {
            mysql_connect($this->host, $this->user, $this->pass);
		    mysql_select_db($this->db);
        }
    }
    
