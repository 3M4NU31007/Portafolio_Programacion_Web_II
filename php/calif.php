
<html>
<head>
  <meta charset="UTF-8">
  <title>Calificaciones</title>
  <link rel="stylesheet" type="text/css" href="css/style_portafolio.css">
  <link rel="stylesheet" type="text/css" href="css/style_calif.css">
</head>
<body>
<div class="cuerpo">
      <header>
          <div class="logo"><img src="Img/upslp.png" width="293" height="97"></div>
          <ul class="nav">
              <li><a href="index.html">parcial i</a></li>
              <li class="active"><a href="sub1.html">parcial ii</a></li>
              <li><a href="sub2.html">parcial iii</a></li>
          </ul>
      </header>
      <div class="contenido">
        <?php
          $nom = array("Jessica","Oscar","Manuel","Ana","Efren");
          $cal = array();
          $cal_suma = 0; $promedio = 0; $aprobado = 0; $reprobado = 0;

          $texto='<table class="tabla_calif"><tr>
                  <th>Nombre</th>
                  <th>Parcial 1</th>
                  <th>Parcial 2</th>
                  <th>Parcial 3</th>
                  <th>Promedio</th>
                  </tr>';

            for($i=0; $i<5; $i++)
            {
              $texto.='<tr>';
              $texto.='<td>'.$nom[$i].'</td>';

              for($j=0; $j<3; $j++)
              {
                $a=rand(300,1000);
                $cal[$i][$j] = sprintf("%.2f", $a*0.01);
                $cal_suma += $cal[$i][$j];
                $texto.='<td class="td">'.$cal[$i][$j].'</td>';
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
              $texto.='<td class="td">'.$cal[$i][$j].'</td>';

              $cal_suma = 0;
              $promedio = 0;
            }

            function promedio($cal_suma)
            {
              $promedio = $cal_suma/3;
              return $promedio;
            }

            $texto.='</table>';
            echo $texto;

            $cont_ap = 15;
            $cont_na = 15;

            echo "<div class='resultados'>Aprobados: <img src='Img/ap.jpg'  height='15px' width='".$cont_ap*$aprobado."'> $aprobado<br>Reprobados: <img src='Img/na.jpg'  height='15px' width='".$cont_na*$reprobado."'> $reprobado</div>";
          ?>
          <table class="datos">
              <tr>
                  <td>Nombre: Jesús Emanuel López Torres</td>
              </tr>
              <tr>
                  <td>Matricula: 176678</td>
              </tr>
              <tr>
                  <td>Grupo: T15D</td>
              </tr>
              <tr>
                  <td>Horario: 09:00 - 10:00 a.m.</td>
              </tr>
          </table>
      </div>
  </div>
</div>
</body>
</html>
