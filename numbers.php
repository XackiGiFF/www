<?php
session_start();

?>

<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Гостиница</title>
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Open+Sans:wght@300&display=swap"
      rel="stylesheet">
   <link rel="stylesheet" href="css/main.css">
</head>

<body>
   <header class="header">
      <p class="title">
         "Гостиница Larufo"
         <br>Для вас только комфорт и удобство<br>
      </p>

      <nav>
        <ul>
            <li><a href="index.php">Главная</a></li>
            <li><a href="numbers.php">Номера</a></li>
            <li><a href="about_us.php">О нас</a></li>
            <li><a href="contacts.php">Контакты</a></li>
            <li style="margin-left: auto;">
                <?php if (isset($_SESSION['user'])) : ?>
                    <a href="profile.php"><img width="35" height="35" src="<?= $_SESSION['user']['img_src'] ?>"
                                               alt="Профиль"></a></li>
                <li><a href="logout.php">Выход</a></li>
                <?php else : ?>
                    <a href="profile.php">Вход/Регистрация</a>
                <?php endif; ?>
            </li>
        </ul>
    </nav>

   </header>
   <section class="books1">
      <div class="cvadrat"></div>
      <h2> Номера </h2>
      <div class="container">
         <div class="reveiw_container">
            <img class="comma" src="/img/number3.png" alt="">
            <p>Двухместный номер (24ч)</p>
            <p class="reveiw_p">
               $15.50
            </p>
         </div>
         <div class="reveiw_container">
            <img class="comma" src="/img/number4.png" alt="">
            <p>Двухместный номер (24ч)</p>
            <p class="reveiw_p">
               $20.99
            </p>
         </div>
         <div class="reveiw_container">
            <img class="comma" src="/img/number5.png" alt="">
            <p> Двухместный номер (24ч)</p>
            <p class="reveiw_p">
               $18.99
            </p>
         </div>
      </div>
   </section>
   <section class="books2">
      <div class="container">
         <div class="reveiw_container">
            <img class="comma" src="/img/number6.png" alt="">
            <p>Двухместный номер (24ч)</p>
            <p class="reveiw_p">
               $15.50
            </p>
         </div>
         <div class="reveiw_container">
            <img class="comma" src="/img/number7.png" alt="">
            <p>Двухместный номер (24ч)</p>
            <p class="reveiw_p">
               $20.99
            </p>
         </div>
         <div class="reveiw_container">
            <img class="comma" src="/img/number8.png" alt="">
            <p> Двухместный номер (24ч)</p>
            <p class="reveiw_p">
               $18.99
            </p>
         </div>
      </div>
   </section>
   <footer>
      <div class="container7">
         <h3>
            Подпишитесь на рассылку
         </h3>
         <form action="#">
            <input class="imput" type="text" placeholder="Введите свой email">
            <button class="telegram" type="submit"> Отправить
            </button>
         </form>
      </div>
      <div class="icons_container">
         <img src="/img/youtube.png" alt="">
         <img src="/img/facebook.png" alt="">
         <img src="/img/twitter.png" alt="">
         <img src="/img/instagram.png" alt="">
      </div>
   </footer>

</body>

</html>