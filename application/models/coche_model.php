<?php

class Coche_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function muestra_Todos() {
        $ssql = "select * from coche";
        return mysql_query($ssql);
    }

}
