<?php
 include("conexion.php");
session_start();

$permiso_s =$_SESSION['permiso_id'];


?>
<html>
  <head>
  <link rel="shortcut icon" href="cabecera.jpg">
  <title>Medicals Monterrey</title>
  </head>

   <style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #000000;
}

li {
    float: center;
    text-align: center;
}

li a {
  width: 70%;
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
  color:  white;
  background-color:  rgb(255, 3, 234);
}

</style>
  </head>
   <body background="fondo1.jpg"> 
    <table width="100%">
    
      <tr>
        <td></td>
          <td align="center"><img src="cabecera.jpg" height = "250"></td>
          <td></td>
      </tr>
      <tr>
          <td></td>
          <td align="center" width="70%" height="100%"><marquee bgcolor="white" behavior="alternate" direction= "right"> <font color= "black" size="35" face= "monospace"><b>"Salvando Regios"</b></td>
          <td></td>
      </tr>
      <tr>
          <td></td>
          <?php
          
        
        if ($permiso_s== 1) {
          echo '
          <td><table><tr><td><ul class="nav">
				        
                                <li><a href="citas/index_citas.php">Citas</a></li>
                                <li><a href="sucursal/index_sucursal.php">Sucursales</a>
                                <li><a href="consultorio/index_consultorio.php">Consultorios</a>
		                    <li><a href="doctores/index_doctor.php">Doctores</a>
				        <li><a href="empleado/index_emp.php">Empleados</a></li>
                                <li><a href="paciente/index_paciente.php">Pacientes</a></li>
                                <li><a href="permisos/index_t_permisos.php">Privilegios</a></li>
					  <li><a href="pruebas_lab/index_prueba_lab.php">Pruebras De Laboratorio</a></li>
					  <li><a href="receta/index_recetas.php">Recetas</a></li>
					  <li><a href="recibo/index_recibos.php">Recibos</a></li>
            <li><a href="cerrarSesion.php">Cerrar Sesion</a></li>
		</td>
		<td width="100%" bgcolor="20F7BC" align="center"><font color="black" size="6"> Salvando </font><font color="blue" size="6"> Regios</font><br>
			
		</td>
 </table> ';
          } elseif($permiso_s==2 || $permiso_s==3 ) { // doctor /// Secretaria

            echo "
          <td>
          <table>
          <tr>
          <td>
           <ul class='nav'>
				        
                   <li><a href='citas/index_citas.php'>Citas</a></li>                          
                     <li><a href='paciente/index_paciente.php'>Pacientes</a></li>
                     <li><a href='doctores/index_doctor.php'>Doctores</a>
					           <li><a href='receta/index_recetas.php'>Recetas</a></li>
					           <li><a href='recibo/index_recibos.php'>Recibos</a></li> 
                    <li><a href='cerrarSesion.php'>Cerrar Sesion</a></li>
                    </td>
		<td width='100%' bgcolor='20F7BC' align='center'><font color='black' size='6'> Salvando </font><font color='blue' size='6'> Regios</font><br>
			
		</td>
    </tr>
 </table> "; 
          }
          
          
          
          ?>
   </body>

   
</html>
