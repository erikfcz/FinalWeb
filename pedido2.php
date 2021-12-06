<?php 


$conex = mysqli_connect("localhost","root","","registros"); 
//if ($conex = false){
//    echo "Sin conexion a la base";
//}
//else{
//  echo "Conexion realizada de manera exitosa";
//} 


if (isset($_POST['RegistrarP'])) 
{
    if (
    	strlen($_POST['tipo_pastel']) >= 1 && 
        strlen($_POST['sel_pastel']) >= 1 && 
        strlen($_POST['dia']) >=1 &&
        strlen($_POST['mes']) >=1 &&
        strlen($_POST['ano']) >=1 &&
        strlen($_POST['hora']) >=1 &&
        strlen($_POST['precio']) >=1 &&
        strlen($_POST['pago']) >=1 &&
        strlen($_POST['persona']) >=1 &&
        strlen($_POST['estado']) >=1 &&
        strlen($_POST['calle']) >=1 &&
        strlen($_POST['numero']) >=1 &&
        strlen($_POST['colonia']) >=1 &&
        strlen($_POST['CP']) >=1 &&
        strlen($_POST['municipio']) >=1
    	) 
    {
        $tipo_pastel = trim($_POST['tipo_pastel']);
        $sel_pastel = trim($_POST['sel_pastel']);
        $dia = trim($_POST['dia']);
        $mes = trim($_POST['mes']);
        $ano = trim($_POST['ano']);
        $hora = trim($_POST['hora']);
        $precio = trim($_POST['precio']);
        $pago = trim($_POST['pago']);
        $persona = trim($_POST['persona']);
        $estado = trim($_POST['estado']);
        $calle = trim($_POST['calle']);
        $numero = trim($_POST['numero']);
        $colonia = trim($_POST['colonia']);
        $CP = trim($_POST['CP']);
        $municipio = trim($_POST['municipio']);

	$consulta = "INSERT INTO pedidos VALUES ('$tipo_pastel','$sel_pastel','$dia','$mes','$ano','$hora','$precio','$pago','$persona','$estado','$calle','$numero','$colonia','$CP','$municipio')";
		
        if ($resultado = mysqli_query($conex,$consulta))
        {
            ?> 
                    <script>
                        alert('¡Se ha registrado de manera exitosa su pedido!');
                    </script>
            <?php
        }
        else
        {
            
            ?> 
                    <script>
                        alert('¡Error al ingresar la informacion!');
                    </script>
            <?php
        }
    }   
    else 
    {
            ?> 
            <script>
                    alert('¡LLene los campos de manera completa por favor!');
                </script>
           <?php
    }
}

?>