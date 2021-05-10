<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plano de Aula</title>
    
    <link rel="stylesheet" href="bootstrap-5/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
</head>
<body>
    <div class="container">
    <center>
    <img class="imagem" src="img/foto.png"  alt="imagem usuario">
</center>
<br>

<center>
        <h2>PLANO DE AULA</h2>
        </br>
        </center>
        <form action="">
        
        <br><label for="docente">DOCENTE</label></br>
            <input type="text" name="docente" id="docente" maxlength="20" required>


<label>CURSOS</label>
<select name="cursos">
  <option value="1">TECNICO ADMINISTRAÇÃO</option>
  <option value="2">TECNICO INFORMATICA</option>
  <option value="3">TECNICO REDE</option>
</select>

<label>UC</label>
<select name="uc">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3"></option>
</select>
         
<br>
          <br><label for="resumodeatividade">RESUMO DE ATIVIDADE</label></br>
          <textarea name="" id="" cols="80" rows="5"></textarea>
           
            <br>
            <fieldset>

            <label class="mt-3 form-check-label" for="adm">RECURSOS</label>
            <div class="d-flex justify-content-center align-items-center">


            <input type="hidden" name="computador" value="Não" class="form-check-input" id="computador">
            <input class="mt-3" type="checkbox" name="computador" value="Sim" class="form-check-input" id="computador">
            <label class="mt-3 form-check-label" for="adm">&nbsp;COMPUTADOR&nbsp;</label>
            
            

<input type="hidden" name="papelaria" value="Não" class="form-check-input" id="papelaria">
            <input class="mt-3" type="checkbox" name="papelaria" value="Sim" class="form-check-input" id="papelaria">
            <label class="mt-3 form-check-label" for="adm">&nbsp;PAPELARIA&nbsp;</label>
            


<input type="hidden" name="datashow" value="Não" class="form-check-input" id="datashow">
            <input class="mt-3" type="checkbox" name="datashow" value="Sim" class="form-check-input" id="datashow">
            <label class="mt-3 form-check-label" for="adm">&nbsp;DATASHOW&nbsp;</label>
        
            <div class="d-flex justify-content-center align-items-center"><input type="hidden" name="kitmake" value="Não" class="form-check-input" id="kitmake">
            <input class="mt-3" type="checkbox" name="kitmake" value="Sim" class="form-check-input" id="kitmake">
            <label class="mt-3 form-check-label" for="adm">&nbsp;KITMAKE&nbsp;</label>

           
        
              
                   
        </fieldset>
        <form>
   <br> DATA DE AULA: <input type="date" name="dataum"id="dataum" placeholder="Dataum">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
   </br>
   
   <center>
   <br><button type="submit" id="btn" class="mt-3 d-block btn btn-primary">RESERVAR</button> </br>
</center>             

</form>
        </form>
    <br>
    <table class="table">
            <thead>
                <tr>    
                    <th>Docente</th>
                    <th>Cursos<th>
                    <th>Uc</th>
                    <th>Resumodeatividade</th>
                    <th>Computador</th>
                    <th>Papelaria</th>
                    <th>Datashow</th>
                    <th>Kitmake</th> 
                    <th>datadeaula</th>
                    
                </tr>
                
            </thead>
            <tbody>

            <?php

                  include "conexao.php";
                  
                $sqlBusca = "SELECT * FROM tb_reservado";
                $reservado = mysqli_query($conexao , $sqlBusca);

                $listaReservas = [];

                while($reserva = mysqli_fetch_assoc ($reservado)){
                   
                    $listaReservas[] = $reserva;
                }
            foreach($listaReservas as $reserva): 
            ?>
                    <tr>
                    
                        <td><?php echo $reserva['docente']; ?></td>
                        <td><?php echo $reserva['cursos']; ?></td>
                        <td><?php echo $reserva['uc']; ?></td>
                        <td><?php echo $reserva['resumodeatividade']; ?></td>
                        <td><?php echo $reserva['computador']; ?></td> 
                        <td><?php echo $reserva['papelaria']; ?></td>
                        <td><?php echo $reserva['datashow']; ?></td>
                        <td><?php echo $reserva['kitmake']; ?></td>
                        <td><?php echo $reserva['dataum']; ?></td>



                        
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
   

    <script src="bootstrp-5/bootstrap.bundle.min.js"></script>

</body>
</html>