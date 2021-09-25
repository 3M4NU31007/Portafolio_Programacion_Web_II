<html>
<head>
  <title>Calificaciones</title>
  <style>
    table{
      border: none;
      color: black;
      font-size: 17px;
      font-family: Arial;
    }

    table th{
      padding: 15px;
      color: white;
      background-color: #008130;
      text-transform: uppercase;
    }

    table tr td{
      padding: 15px;
      background-color: #bfffb1;
      text-align: center;
    }

    .bold{
      font-weight: bold;
    }

    p{
      font-size: 25px;
    }
  </style>
</head>
<body>
  <?php
    $nom = array("Jessica","Oscar","Manuel","Ana","Efren");
    $cal = array();
    $cal_suma = 0; $promedio = 0; $aprobado = 0; $reprobado = 0;

    $texto='<table border = 1><tr>
            <th>Nombre</th>
            <th>Parcial 1</th>
            <th>Parcial 2</th>
            <th>Parcial 3</th>
            <th>Promedio</th>
            </tr>';

      for($i=0; $i<5; $i++)
      {
        $texto.='<tr>';
        $texto.='<td class="bold">'.$nom[$i].'</td>';

        for($j=0; $j<3; $j++)
        {
          $a=rand(300,1000);
          $cal[$i][$j] = sprintf("%.2f", $a*0.01);
          $cal_suma += $cal[$i][$j];
          $texto.='<td>'.$cal[$i][$j].'</td>';
        }
        
        $promedio = promedio($cal_suma);

        if($promedio >= 7)
        {
          $aprobado += 1;
        }
        else
        {
          $reprobado += 1;
        }

        $cal[$i][$j] = sprintf("%.2f", $promedio);
        $texto.='<td class="bold">'.$cal[$i][$j].'</td>';

        $cal_suma = 0;
        $promedio = 0;
      }

      function promedio($cal_suma)
      {
        $promedio = $cal_suma/3;
        return $promedio;
      }

      $texto.='</table>';
      echo $texto."<br>";

      $cont_ap = 20;
      $cont_na = 20;

      echo "<p>Aprobados: <img src='Img/ap.jpg'  height='20px' width='".$cont_ap*$aprobado."'> $aprobado</p>";
      echo "<p>Reprobados: <img src='Img/na.jpg'  height='20px' width='".$cont_na*$reprobado."'> $reprobado</p><br>";
    ?>
<footer>
    <p>Jesús Emanuel López Torres - 176678</p>
</footer>
</body>
</html>
