<!DOCTYPE html>
<html>
<head>
<title>practica</title>
</head>
<body>
<h1>blog</h1>

<?php

$alumnos = array(
/*0*/array(
      'id' => '1',
      'fecha' => '30/15/12',
      'autor' => 'Juan Perez',
      'contenido' =>'fpgorygfy',
      'retewts' => '2'
    ),
 /*0*/array(
      'id' => '1',
       'fecha' => '1/02/12',
       'autor' => 'pedro Perez',
       'contenido' =>'fpgorygfy',
       'retewts' => '2'
    ),
       /*0*/array(
      'id' => '1',
      'fecha' => 'omar juarez',
      'autor' => 'Juan Perez',
      'contenido' =>'fpgorygfy',
      'retewts' => '2'
    ),
 /*0*/array(
      'id' => '1',
      'fecha' => 'azucena montes',
      'autor' => 'Juan Perez',
      'contenido' =>'fpgorygfy',
      'retewts' => '2'
   ),
 /*0*/array(
      'id' => '1',
      'fecha' => '13/09/13',
      'autor' => 'Diego Rodrigez',
      'contenido' =>'fpgorygfy',
      'retewts' => '2'
   ),
 /*0*/array(
      'id' => '1',
      'fecha' => '24/11/09',
      'autor' => 'ernesto martinez',
      'contenido' =>'fpgorygfy',
      'retewts' => '2'
   ),
  /*0*/array(
      'id' => '1',
      'fecha' => '23/08/06',
      'autor' => 'juan alvarez',
      'contenido' =>'fpgorygfy',
      'retewts' => '2'
   ),
 /*0*/array(
      'id' => '1',
     'fecha' => '25/07/15',
     'autor' => 'arturo enriquez',
     'contenido' =>'fpgorygfy',
     'retewts' => '2'
   )
);
   echo '<label>'.$alumnos[2]['nombre'].'</label>';
   echo '<br><br>';
?>
<br>


<br>
   <div>
       <div>
              <?php foreach ($alumnos as $alumno) { ?>
                
                <fieldset>
                
                 <legend><span style="color: red;"><?php echo $alumno['autor'];?                                                                           ></span></legend> 
                 
                  <p><td>id: <?php echo $alumno['id']; ?></td></p>
                  
                  <p>Contenido: <?php echo $alumno['contenido']; ?></p>
                   <p>fecha :<?php echo $alumno['fecha']; ?></p>
                  <p>retewts : <?php echo $alumno['retewts']; ?></p>
                                         
                </fieldset>
                  <?php } ?>
 
       <div>
   </div>

</body>
</html>