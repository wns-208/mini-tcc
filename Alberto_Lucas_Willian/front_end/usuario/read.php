<?php 
include '../../config/connection.php';

$stmt = $pdo->query('SELECT * FROM usuario');
$usuarios = $stmt->fetchAll();

  if( isset($_GET['id']) ){
    $id = $_GET['id'];
    echo "o id $id foi removido!!!";
  } 

// echo"<pre>";
// echo var_dump($usuarios);

?>

<?php foreach ($usuarios as $indice => $user) { ?>
    <p>
    <p><strong>Nome de Heroina:</stong><?php echo $user['username']; ?></p>
    <a href="http://localhost/PWII/PDO_CRUD/public/usuario/delete.php?id=<?php echo $user['id']; ?>">remover</a>
    <a href="http://localhost/PWII/PDO_CRUD/public/usuario/update.php?id=<?php echo $user['id']; ?>">atualizar</a>
   </p>
   <hr>
<?php } ?>