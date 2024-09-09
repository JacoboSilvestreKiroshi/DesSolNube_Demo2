<?php
	function conexion(){

	$host = "host=dpg-cr6g053v2p9s7392u7d0-a.oregon-postgres.render.com";
	$port = "port=5432";
	$dbname = "dbname=dbcprueba;
	$user = "user=dbcprueba_user";
	$password = "password=vdq9GRJvwMoYRNYU4CBddZgwQyNyas2q";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>
