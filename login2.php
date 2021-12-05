<?php 


$conex = mysqli_connect("localhost","root","","registros"); 
//if ($conex = false){
//    echo "Sin conexion a la base";
//}
//else{
//  echo "Conexion realizada de manera exitosa";
//} 


if (isset($_POST['Login'])) {
    if (
        strlen($_POST['correo']) >=1 &&
        strlen($_POST['pass']) >=1) 
    {
        $correo = trim($_POST['correo']);
        $pass = trim($_POST['pass']);
        
$consulta="SELECT name FROM datos WHERE email='$correo' and password='$pass'";
        
        if ($resultado = mysqli_query($conex,$consulta))
        {
        	while ($row=mysqli_fetch_array($resultado)) 
        	{
            ?> 
                    <script>
                        alert('<?php echo "!HOLA  " ;
        				echo $row['name'];
        				echo " !"; ?>');
                    </script>
            <?php
            }
        }
        else
        {
            ?> 
                    <script>
                        alert('¡Ingrese sus datos  de manera correcta por favor!');
                    </script>
            <?php
        }
    }   
    else 
    {
            ?> 
            <script>
                    alert('¡Favor de ingresar a su cuenta!');
                </script>
           <?php
    }
   
}
?>