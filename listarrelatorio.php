<?php  
            //Conexão ao banco de dados 
          $dbc = mysqli_connect('localhost', 'root', '', 'bakof') or die ('Erro ao conectar ao servidor MySQL');
   //instrução a ser executada no banco de dados
    $query = "SELECT * FROM devolucao";
    //execução da instrução no banco de dados
    $result = mysqli_query($dbc, $query) or die ('Erro ao executar o comando SQL');
   
  
    //exibe os dados em uma tabela
    echo "<table class='table table-striped'>";
    echo "<thead><tr> <th scope='col'>Cliente</th><th scope='col'>falha</th><th scope='col'>Produto</th> foto</th></tr></thead>";
    while ($row = mysqli_fetch_array($result)) { 
        // Display the score data
      
        echo '<tbody><tr><th scope="row">' . $row['nome'] . '</th>';
        echo '<td>' . $row['falha'] . '</td>';
        echo '<td>' . $row['produto'] . '</td>';
        echo '<td><img src="foto/'.$row["foto"].'" height="200" width="200" </td>';
       
        echo '</tr></tbody>';
    }
    echo '</table>';
    
         ?>
