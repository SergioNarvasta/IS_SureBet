<?php 
include("conexion.php") ;
$sql = "Select * from bet";
$data=mysqli_query($cn,$sql);
?>
<head>	
    <meta charset="UTF-8">
	<title>Panel Control - SureBet Platform</title> 
	<link href="css/control.css" rel="stylesheet" type="text/css">
    <link href="css/footer.css" rel="stylesheet" type="text/css">
</head>  
<body>  
<div id="main">
    <div id="header">
      <div class="boxhead">
        <div class="logo"><a href="index.php"><img class="Logo" src="img/logo.png" width="80" height="80"></a></div>
        <div class="title"><h1>Panel Control - Administrador</h1> <h2>¡ Slogan !</h2></div>
      </div>
    </div>
</div>
  <br> 
<div id="registro">
    <div></div>
    <form class="registro-bet"  action="p_control.php" method="post">
       <!--  <fieldset> <legend>Datos Apuesta</legend>  </fieldset> -->
        <table align="center" class="table">
            <tr>
                <td>Deporte</td>
                <td>Evento</td>   
            </tr>
            <tr>
                <td><select name="Deporte">
                    <option value="Futbol">Futbol</option>
                    <option value="Futbol Americano">Futbol Americano</option>
                    <option value="Tennis">Tennis</option>
                    <option value="Baloncesto">Baloncesto</option>
                    <option value="Beisbol">Beisbol</option>
                    </select> </td>  
                 <td><input type="text" name="Evento" required="true"></td>
            </tr>
            <tr>
                <td>Mercado</td>
                <td>Competicion</td>
            <tr>
                <td><input type="text" name="Mercado" autocomplete="on" required="true" ></td>
                <td><input type="text" name="Competicion" autocomplete="on" required="true" ></td>
               
            <tr>
                <td>Cuota</td>
                <td>Beneficio</td>
            </tr>
            <tr>
                <td><input type="text" name="Cuota" autocomplete="on" required="true" ></td>
                <td><input type="text" name="Beneficio" autocomplete="on" required="true" ></td>
            </tr>
            <tr>
                <td>Casa Apuesta</td>
                <td>Fecha de Evento</td>
            </tr>
            <tr>
                <td><select name="Casa">
                    <option value="BET365">BET365</option>
                    <option value="Pinnacle">Pinnacle</option>
                     </select>
                </td>
                <td><input type="date" name="FechaEv"></td>
            </tr>
            <tr>
                <td>Limite</td>
                <td>Fecha de Registro</td>
            </tr>
            <tr>
                <td><input type="text" name="Limite" autocomplete="on" required="true" ></td>
                <td><input type="date" name="FechaReg"></td>
            </tr>
        </table>  
        <br>
            <input class="btnregistrar" type="submit" value="Registrar">              
 
    </form>
</div>
<br><br>
<div id="BoxList">
   <?php   while($r = mysqli_fetch_array($data)) {   ?>   
    <div class="BetList">
        <div class="Cab"> 
          <div><img src="img/soccer.png" alt="Football" height="30" width="30"> </div>    
          <div><?php echo $r["Competicion"] ?></div>
          <div><?php echo $r["Evento"] ?></div>
          <div><?php echo $r["FechaEv"] ?> </div>
        </div>

        <div class="Det">           
          <div><?php echo $r["CasaApuesta"] ?></div>
          <div class="Res">Resultado Final <?php echo $r["Mercado"] ?></div>
          <div><?php echo $r["Cuota"] ?> </div>
       </div>
       
       <div class="Beneficio"> 
          <p><?php echo $r["Beneficio"] ?>% GARANTIZADO BENEFICIO</p>
          <p>Editar</p>
          <p>Eliminar</p>
        </div>
    </div>
    <?php }  ?>
    <div class="actions">
        
    </div>
</div>    
</body>
<?php 
   include("footer.php");
?>

