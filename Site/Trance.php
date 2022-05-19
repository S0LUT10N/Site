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
      <link rel="stylesheet" href="style.css">
          </head>
          <body>
          <style>

          form {
          padding: 50px;
            position: fixed; top: 55%; left: 50%;
           -webkit-transform: translate(-50%, -50%);
           -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
          }
           body {
                            background-image: url("assets/images/background74.jpg");
                        }
                        </style>
          <header class="header">
              <div class="container">
                  <div class="header__inner">
                      <div class="header1__logo">Auto-trance</div>

                      <nav class="nav2">
                          <a class="nav2__link" id = "1" href="Главная.html">ABOUT</a>
                          <a class="nav2__link" id = "2" href="Price Calculation.html">Price Calculation</a>
                          <a class="nav2__link" id = "3"  href="CarsSelection.html">Auto-trance</a>
                          <a class="nav2__link" id = "4" href="Objects.html">Our objects</a>
                      </nav>
                  </div>
              </div>
          </header>
          <form action="create.php" method="post">
          <p>Имя</p>
          <input type="text" name="name", size = 30>
          <p>Фамилия</p>
          <input type="text" name="secondname", size = 30>
          <p>Отчество</p>
          <input type="text" name="surname", size = 30>
          <p>Пасспортные данные</p>
          <input type="text" name="passortdata", size = 30>
           <p>Номер телефона</p>
           <input type="text" name="numberphone", size = 30>
           <br>
           <br>
           <button class = "btn" type = "submit" >Отправить данные</button>
           </form>
          </body>
         </html>