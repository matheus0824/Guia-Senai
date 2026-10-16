<?php
$host = "localhost";
$port = 3306;
$dbname = "guia_senai";
$username = "dev";
$password = "123";

try {
$pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Função para inserir um novo registro
function create($pdo, $table, $data)
{
    $fields = implode(", ", array_keys($data));
    $placeholders = ":" . implode(", :", array_keys($data));

    $sql = "INSERT INTO $table ($fields) VALUES ($placeholders)";
    $stmt = $pdo->prepare($sql);

    foreach ($data as $key => $value) {
        $stmt->bindValue(":$key", $value);
    }

    return $stmt->execute();
}

function read($pdo, $table, $where = null, $fields = "*", $order = null, $group = null, $join = null)
{
    $sql = "SELECT $fields FROM $table";

    if ($join) {
        $sql .= " " . $join;
    }

    if ($where) {
        $sql .= " WHERE $where";
    }

    if ($group) {
        $sql .= " GROUP BY $group";
    }

    if ($order) {
        $sql .= " ORDER BY $order";
    }

    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function readOne($pdo, $table, $where = null, $fields = "*")
{
    $sql = "SELECT $fields FROM $table";

    if ($where) {
        $sql .= " WHERE $where";
    }

    $sql .= " LIMIT 1";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function update($pdo, $table, $data, $where)
{
    $fields = [];

    foreach ($data as $key => $value) {
        $fields[] = "$key = :$key";
    }

    $fields = implode(", ", $fields);

    $sql = "UPDATE $table SET $fields WHERE $where";

    $stmt = $pdo->prepare($sql);

    foreach ($data as $key => $value) {
        $stmt->bindValue(":$key", $value);
    }

    return $stmt->execute();
}

function delete($pdo, $table, $where)
{
    $sql = "DELETE FROM $table WHERE $where";

    $stmt = $pdo->prepare($sql);

    return $stmt->execute();
}

} catch (PDOException $e) {
    die("Erro de conexão: " . $e->getMessage());
}




?>