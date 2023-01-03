<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Ремонт под ключ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <link rel="stylesheet" href="fonts/ico-moon/style.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css">
    <link rel="stylesheet" href="css/style.css?v=1.3">

    <link rel="shortcut icon" href="img/logo.png" type="image/png">
  <style>
    .thanks{
    width: 100%;
    min-height: 100vh;
    position: static;
    background-image: url(img/back1.jpg);
    /*background-color: grey;*/
    background-position: center center;
    background-size: cover;
    box-shadow: 0 0 0 9999px rgba(0,0,0,0.65) inset;
    top: 0;
}
.thanks__logotext{
  color: #fff;
}
.thanks.flex{
  display: flex;
  flex-wrap: wrap;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.thanks h2{
  font: 700 55px "Montserrat", sans-serif;
  color: #fff;
  margin-top: 40px;
  margin-bottom: 40px;
  text-align: center;
}
.thanks h3{
  font: 700 35px "Montserrat", sans-serif;
  color: #fff;
  margin-bottom: 50px;
  text-align: center;
}
.thanks a{
  font: 400 30px "Montserrat", sans-serif;
  color: #058fd1;
}
@media (max-width: 767px){
  .thanks{
    height: auto;
    min-height: 100vh;
  }
  .thanks-footer{
    padding: 20px 0 100px;
  }
  .thanks-footer .footer12{
    justify-content: center;
  }
  .thanks h2{
    font-size: 25px;
    margin: 20px 0;
  }
  .thanks h3{
    font-size: 25px;
    margin-bottom: 30px;
  }
}
  </style>

</head>
<body class="loaded">

	<?php 
		$yourPhone = $_POST['yourPhone'];
    $yourName = $_POST['yourName'];
    $name = $_POST['name'];
		
    $ques1 = $_POST['nertype'];
    $ques2 = $_POST['ques2'];
    $ques3 = $_POST['ques3'];
    $ques4 = $_POST['ques4'];
    $ques5 = $_POST['ques5'];
    $ques6 = $_POST['ques6'];
    $ques7 = $_POST['ques7'];
    $ques8 = $_POST['ques8'];

    $sidea = $_POST['sidea'];
    $sideb = $_POST['sideb'];
    $sidec = $_POST['sidec'];
    $option = $_POST['option'];
    $option0 = $_POST['option0'];
    $height = $_POST['height'];


    $title = 'Küchen';

    //в переменную $token нужно вставить токен, который нам прислал @botFather
    $token = "5609559469:AAEj9w5uIHpGvwTUUd9Bolxq-EhXa6ocHiE";

    //нужна вставить chat_id (Как получить chad id, читайте ниже)
    $chat_id = "-882975057";

    $arr = array(
      'Titel: ' => $title,
      'Ihr Name: ' => $yourName,
      'Telefon: ' => $yourPhone,
      'Wählen Sie Ihr Küchenlayout: ' => $ques1,
      'Typ auswählen: ' => $ques3,
      'Wählen Sie das Material der Fassade: ' => $ques4,
      'Wählen Sie einen Stil: ' => $ques5,
      'Material der Arbeitsplatte auswählen: ' => $ques6,
      'Art der Beschläge auswählen: ' => $ques7,
      'Podarunok: ' => $ques8,
      'Seite A: ' => $sidea,
      'Seite B: ' => $sideb,
      'Seite C: ' => $sidec,
      'Höhe: ' => $height,
      'Optionale Extras: ' => $option,
      'Zusätzliche konstruktion: ' => $option0,


    );
    $arr2 = array(
      'Titel: ' => $title,
      'Telefon: ' => $yourPhone,
    );
    $arr3 = array(
      'Name: ' => $title,
      'Ihr Name: ' => $name,
      'Telefon: ' => $yourPhone,
    );

    //При помощи цикла перебираем массив и помещаем переменную $txt текст из массива $arr
    foreach($arr as $key => $value) {
      $txt .= "<b>".$key."</b> ".$value."%0A";
    };
    foreach($arr2 as $key2 => $value2) {
      $txt2 .= "<b>".$key2."</b> ".$value2."%0A";
    };
    foreach($arr3 as $key3 => $value3) {
      $txt3 .= "<b>".$key3."</b> ".$value3."%0A";
    };

    // $mailto = "oleh123091973@gmail.com";
    $mailto = "";
    $headers = "Content-Type: text/html; charset=UTF-8";
     

    if( isset($_POST['sendForm1'])){
    	// mail($mailto, 'Заявка с сайта "Кухни"', "Телефон: ".$yourPhone.". \r\nВаше имя: ".$yourName.". \r\nТип недвижимости: ".$nertype.". \r\nТип обьекта: ".$roofType.". \r\nПлощадь: ".$polzunok.". \r\Количество комнат: ".$orderRoof.". \r\nТип ремонта: ".$construction.". \r\nДизайн проект: ".$orderRoof22.". \r\nКогда приступать?: ".$orderRoof33.". \r\nПодарок: ".$qn7, $headers);
      $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
    }

    if( isset($_POST['sendForm2'])){
      mail($mailto, 'Заявка с сайта "Кухни"', "Телефон: ".$yourPhone, $headers);
      $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt2}","r");
    }

    if( isset($_POST['sendForm3'])){
      mail($mailto, 'Заявка с сайта "Кухни"', "Телефон: ".$yourPhone.". \r\nИмя: ".$name, $headers);
      $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt3}","r");
    }

	?>

	<div class="thanks flex">
		<h2>Vielen Dank, Ihre Bewerbung ist angenommen worden.</h2>
		<h3>Wir werden Sie in Kürze kontaktieren</h3>
    <a href="/" style="font-size: 15px;font-family: Montserrat;padding: 12px 35px;background: #058fd1;color: #fff;">Startseite</a>
	</div>
</body>
</html>