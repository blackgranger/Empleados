<html>
<head>
    <title>Programa de Arreglos Asociativos</title>
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</head>
<body>
    <?php
    if (isset($_POST['btn']) && $_POST['btn'] == 'Enviar') {
        
            $empleados = [
                "empleado1" => [
                    $_POST['nombre1'],
                    $_POST['apellido1'],
                    $_POST['cedula1'],
                    $_POST['sueldo1'],
                    $_POST['departamento1'],
                    $_POST['lugartrabajo1']
                ],
                "empleado2" => [
                    $_POST['nombre2'],
                    $_POST['apellido2'],
                    $_POST['cedula2'],
                    $_POST['sueldo2'],
                    $_POST['departamento2'],
                    $_POST['lugartrabajo2']
                ],
                "empleado3" => [
                    $_POST['nombre3'],
                    $_POST['apellido3'],
                    $_POST['cedula3'],
                    $_POST['sueldo3'],
                    $_POST['departamento3'],
                    $_POST['lugartrabajo3']
                ]
                ];
            
                print
                "<table>
                <thead>
                  <tr>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Cedula</th>
                      <th>Sueldo</th>
                      <th>Departamento</th>
                      <th>Lugar de Trabajo</th>
                  </tr>
                </thead> ";
               
                    print "<tr>";
                foreach($empleados as $key => $value){

                    for($i = 0; $i < count($value); $i++){
                        print "<td>{$value[$i]}</td>";
                    }
                    print "</tr>";
                }
                print 
                "</table>";
        }
            print "<a href='index.html' align='center'>Ingresar nuevos datos</a>";   
    ?>
</body>
</html>