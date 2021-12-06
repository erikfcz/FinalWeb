<?php 

$conex = mysqli_connect("localhost","root","","registros"); 
//if ($conex = false){
//    echo "Sin conexion a la base";
//}
//else{
//  echo "Conexion realizada de manera exitosa";
//} 


if (isset($_POST['Registrar'])) {
    if (strlen($_POST['name']) >= 1 && 
        strlen($_POST['correo']) >= 1 && 
        strlen($_POST['pass']) >=1 &&
        strlen($_POST['pass2']) >=1) 
    {
        $name = trim($_POST['name']);
        $correo = trim($_POST['correo']);
        $pass = trim($_POST['pass']);
        $pass2 = trim($_POST['pass2']);
        
$consulta="INSERT INTO datos VALUES ('$name','$correo','$pass','$pass2')";
        
        if ($resultado = mysqli_query($conex,$consulta))
        

        {
            ?> 
                    <script>
                        alert('¡Se ha registrado de manera exitosa!');
                    </script>
            <?php
        }
        else
        {
            
            ?> 
                    <script>
                        alert('¡Error al ingresar la información!');
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
