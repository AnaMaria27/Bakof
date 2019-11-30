<?php
    
    $query = "SELECT * FROM produtos"
?>
<html>
<body>
    <table>
        <rt>
            <td>nome</td>
            <td>descrição</td>
            <td>qnt</td>
        </rt>
        <?php while($dado = $sql->fetch_array()){?>
        <rt>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["descricao"]; ?></td>
            <td><?php echo $dado["qnt"]; ?></td>
        </rt>
        <?php }?>
</body>
</html>