<?php
      require_once 'include/db.php';
      ?>

     <!DOCTYPE html>
     <html lang="en">
     <head>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
               integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
         <meta charset="UTF-8">
         <link rel="stylesheet" href="assets/css/style.css">
         <title></title>
         <style>

         button {
         font-size: 100px;
         position: relative;
         left: 50%;
         transform: translate(-50%, 0);
         }
             body {
                 background-image: url("assets/images/background74.jpg");
             }
         table {
             width: 500px; /* Ширина таблицы */
             margin-top: 110px;
             font-family: "Times New Roman", sans-serif ;
            }


            th {
            	font-weight: bold;
            	padding: 5px;
            	background: gold;
            	border: none;
            	border-bottom: 5px solid gold;
            }
            td {
            	padding: 7px;
            	border: none;
            	border-top: 3px solid gold;
            	border-bottom: 3px solid gold;
            	font-size: 15px;
            }
         </style>
         <link rel="stylesheet" href="style.css">
     </head>
     <body>

     <header class="header">
         <div class="container">
             <div class="header__inner">
                 <div class="header1__logo">Auto-trance</div>

                 <nav class="nav2">
                     <a class="nav2__link" id = "1" href="Главная.html">ABOUT</a>
                     <a class="nav2__link" id = "2" href="Price Calculation.html">Price Calculation</a>
                     <a class="nav2__link" id = "3"  href="http://site">Auto-trance</a>
                     <a class="nav2__link" id = "4" href="Objects.html">Our objects</a>
                 </nav>
             </div>
         </div>
     </header>
            <table class = "table">
                <tr>
                <th> ID </th>
                 <th> Город </th>
                  <th> Организация </th>
                   <th> Машина </th>
                   <th> Категория </th>
                    <th> Цена доставки </th>
                </tr>
                <?php
                $perevozki = mysqli_query($connect, "SELECT * FROM `perevozki`");
                $perevozki = mysqli_fetch_all($perevozki);
                foreach($perevozki as $perevozki) {
                ?>
                   <tr>
                   <td><?= $perevozki[0] ?> </td>

                   <td><?= mysqli_fetch_all(mysqli_query($connect, "SELECT name FROM goroda where id_goroda = ".$perevozki[1].";"))[0][0] ?> </td>
                   <td><?= mysqli_fetch_all(mysqli_query($connect, "SELECT name FROM organizacii where id_organizacii = ".$perevozki[2].";"))[0][0] ?> </td>
                   <td><?= mysqli_fetch_all(mysqli_query($connect, "SELECT gruzpod FROM mashini where id_mashini = ".$perevozki[3].";"))[0][0] ?> </td>
                   <td><?= mysqli_fetch_all(mysqli_query($connect, "SELECT name FROM gruz_kat where id_kategorii = ".$perevozki[3].";"))[0][0] ?> </td>
                   <td><?= $perevozki[5] ?> </td>
                    <?php
                }
               ?>

                 </table>
                  <body>
                                     <form action="Trance.php" method="get" target="_blank">
                                       <button  class="btn" type="submit">Сделать заказ</button>
                                     </form>
                                   </body>
        </body>
        </html>
