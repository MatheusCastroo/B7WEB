<?php
interface DBConnection {
    public function connect();
}
class MySQLConnection implements DBConnection {
    public function connect() {

    }
}
class OracleConnection implements DBConnection {
    public function connect() {

    }
}
class UsuarioDao {
    private $db;
    public function __construct(DBConnection $dbCon)
    {
        $this->db = new MySQLConnection();
    }
}

$dbCon = new MySQLConnection( );
//$dbCon = new OracleConnection( );
$usuarioDao = new UsuarioDao( $dbCon );
$usuario2Dao = new UsuarioDao( $dbCon );
?>