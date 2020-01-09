$usuario = $_POST['usuario'];
$senha = $_POST['senha'];


$sql = "select id, usuario from usuarios where
 usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = $conexao->execute($sql);
$conexao->numRows();
$resu = $conexao->result();
echo $sql;
foreach ($resu as $key => $value) {
    echo $value;
}
print_r($result);