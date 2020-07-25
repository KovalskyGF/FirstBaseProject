<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <title>Утепление фасадов</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap grid CSS -->
    <link href="css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Slick Slider -->
    <link href="slick/slick.css" rel="stylesheet">
    <link href="slick/slick-theme.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="slick/slick.min.js"></script>
    <script type="text/javascript">
        $(document).on('ready', function () {
            $(".direction-blocks").slick({
            	  arrow: false,
                dots: true,
                slidesToShow: 4,
                slidesToScroll: 1
            });
        });
    </script>
    <link href="css/main.css" rel="stylesheet">
    <!-- Fonts Roboto -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=cyrillic" rel="stylesheet">
  </head>
  <body>
  	 <div class="container">
         <div class="top-nav">
  	          <div class="row justify-content-between align-items-center">
  	 	           <div class="col-md-auto">
  	 	                <div class="logo">
  	                       <img src="img/logo.png" alt="Что-то">
  	                  </div>
  	             </div><!-- /.col-md-->
  	             <div class="col-md-auto">
  	                 <ul class="top-nav_menu">
  	                    <li><a href="index.php">Главная</a></li>
  	                    <li><a href="about.php">О компании</a></li>
  	                    <li><a href="1.php">Наши услуги</a></li></a></li>
  	                    <li><a href="ipoteka.php">Ипотека</a></li>
                        <li><a href="calc.php">Калькулятор</a></li>
  	  	                <li><a href="contacts.php">Контакты</a></li>
  	                 </ul>
  	             </div>
  	                 <!-- /.col-md-->
  	             </div> <!-- /.row-->     
  	     </div><!-- /.top-nav-->
   <div class="row">
   	  <div class="col-md-4">
   		   <div class="left-sidebar">
   			    <ul class="left-sidebar_menu">
              <li><a href="1.php" style="background-color: #0086e1; color: white;">Утепление фасадов</a></li>
              <li><a href="2.php">Кровельные работы</a></li>
              <li><a href="3.php">Электромонтаж</a></li>
              <li><a href="4.php">Реконструкция зданий</a></li>
              <li><a href="5.php">Демонтажные работы</a></li>
              <li><a href="6.php">Капитальный ремонт помещений</a></li>
   			    </ul>
            <div class="left-sidebar_object">
                 <img src="img/objects/1.png" alt="Картинка 1">
                              <div class="left-sidebar_object-description">
                                  <h3>Жилой комплекс в г. Москва</h3>
                                  <p>190-квартирный 12-этажный жилой дом № 88 по ул. Ленина в микрорайоне Центральный</p>
                                  <a href="#"><u>Узнать подробнее »</u></a>
                              </div>
            </div>
             <div class="left-sidebar_object">
                  <img src="img/objects/2.png" alt="Картинка 2">
                        <div class="left-sidebar_object-description">
                             <h3>Жилой комплекс в г. Москва</h3>
                             <p>190-квартирный 12-этажный жилой дом № 88 по ул. Ленина в микрорайоне Центральный</p>
                             <a href="#">Узнать подробнее »</a>
                        </div>
             </div>
          </div> <!-- ./left-sidebar -->
      </div><!-- ./col-md-4 -->
   	<div class="col-md-8">
       <div class="content">
         <?php
           $mysqli = new mysqli("localhost", "root", "", "kursach");
           $mysqli->query("SET NAMES utf8");
           /* проверка соединения */
           if ($mysqli->connect_errno) {
             printf("Соединение не удалось: %s\n", $mysqli->connect_error);
             exit();
           }
           $query = "SELECT tittle, text FROM article WHERE id=1";
           if ($result = $mysqli->query($query)) {
             /* извлечение ассоциативного массива */
             while ($row = $result->fetch_assoc()) 
             {
               printf ("<h2>%s</h2> <br>%s", $row["tittle"], $row["text"]);
             }
             /* удаление выборки */
             $result->free();
             }
           /* закрытие соединения */
           $mysqli->close();
         ?>
       </div><!-- ./content -->      
    </div><!-- ./col-md-8 -->
   </div><!-- ./row -->
    </div><!-- /.container-->
    <footer class="footer">
      <div class="container">
       <div class="row">
        <div class="col-md-4">
         <div class="copy">
          <p>Copyright @ 2018</p>
          <a class="footer-policy-link" href="#">Полика конфиденциальности</a>
          <small>Использование материалов сайта, размещенных на ней статей, материалов без согласия администрации и авторов размещенных материалов не допускается.</small>
         </div><!-- ./copy -->
        </div><!-- ./col-md -->
        <div class="col-md-2">
          <ul class="footer_menu">
                        <li><a href="index.php">Главная</a></li>
                        <li><a href="about.php">О компании</a></li>
                        <li><a href="services.php">Наши услуги</a></li></a></li>
                        <li><a href="ipoteka.php">Ипотека</a></li>
                        <li><a href="calc.php">Калькулятор</a></li>
                        <li><a href="contacts.php">Контакты</a></li>
                     </ul>
        </div>
        <div class="col-md">
          <ul class="footer_menu">
              <li><a href="1.php">Утепление фасадов</a></li>
              <li><a href="2.php">Кровельные работы</a></li>
              <li><a href="3.php">Электромонтаж</a></li>
              <li><a href="4.php">Реконструкция зданий</a></li>
              <li><a href="5.php">Демонтажные работы</a></li>
              <li><a href="6.php">Капитальный ремонт помещений</a></li>
            </ul>
        </div>
        <div class="col-md">
          <div class="footer-contacts">
            <p class="footer-contacts_phone">8 (800) 850-50-50</p>
            <p class="footer-contacts_address">г. Москва, ул. Морозова, д.12, 3 этаж</p>
            <p class="footer-contacts_address">г. Москва, ул. Ленина, д. 23, офис 2</p>
            <p class="footer-contacts_email">invest@mail.ru</p>
          </div>
          <div class="footer-social-links">
            <ul>
              <li><a href="http://vk.com" target="_blank"><i class="icon-vk"></i></a></li>
              <li><a href="http://facebook.com" target="_blank"><i class="icon-facebook"></i></a></li>
              <li><a href="http://instagram.com" target="_blank"><i class="icon-instagram"></i></a></li>
            </ul>
          </div>
       </div><!-- .row -->
      </div><!-- .container -->
    </footer>
   <script type="text/javascript" src="js/bootstrap.min.js"></script>
   </body>
</html>