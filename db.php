<?php

use Symfony\Component\Yaml\Yaml;

$dbConf = Yaml::parseFile("./database.yaml");

function db_connect(){
    global $dbConf;
    try{

        $dsn = "mysql:host={$dbConf["host"]};dbname={$dbConf["name"]}";
        //echo "Connecting to database: $dsn\n";
        $dbh = new PDO($dsn, $dbConf["user"], $dbConf["password"]);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    } catch (PDOException $e){
        echo $e->getMessage();
    }
    return $dbh;

}

function checa_matricula(string $matricula){
    $dbh = db_connect();
    $stmt = $dbh->prepare("SELECT * FROM estudiantes WHERE matricula = '$matricula' LIMIT 1");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    $result = $stmt->fetch();
    // while ($row = $stmt->fetch()){
    //     echo "Nombre: {$row["nombre"]} <br>";
    //     echo "Matricula: {$row["matricula"]} <br><br>";
    // }
    $dbh = null;
    return $result;
    
}
function checa_codigo(string $codigo){
    $dbh = db_connect();
    $stmt = $dbh->prepare("SELECT * FROM estudiantes INNER JOIN certificados ON estudiantes.matricula  = certificados.matricula_estudiante
     WHERE certificados.codigo = '$codigo'");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    $result = $stmt->fetch();
    // while ($row = $stmt->fetch()){
    //     echo "Nombre: {$row["nombre"]} <br>";
    //     echo "Codigo: {$row["codigo"]} <br><br>";
    // }
    $dbh = null;
    return $result;
}


//checa_matricula("miti0006");