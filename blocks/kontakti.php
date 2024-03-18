<?php
    require_once"blocks/head.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Зворотній зв'язок / NewsUA</title>
    <link rel="stylesheet" href="css/main.css" type="text/css" charset="UTF-8">
    <link rel="stylesheet" href="css/main_page.css" type="text/css" charset="UTF-8">
    <link rel="stylesheet" href="css/aside.css" type="text/css" charset ="UTF-8">
    <link rel="stylesheet" href="css/form.css" type="text/css" charset ="UTF-8">
    <meta name="description" content="Зворотній зв'язок">
    <meta name="keywords" content="Новини, NewsUA, Україна">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="img/news.ico" rel="shortcut icon" type="image/x-icon">
    <script src="https://kit.fontawesome.com/f991f98279.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="wrapper">
        <div id="content">
        <?php
                require_once "blocks/header.php";

            ?>

            <div id="main">
                <div id="news">
                    <h2 class="heading">Зворотній зв'язок</h2>
                    <div style="clear: both"><br></div>

                    <div class="block">
                        Щоб надіслати нам ваше повідомлення, просто заповніть форму та надішліть нам
                        <form>
                            <div>
                                <input type="text" id="name" placeholder="Ваше ім'я" onclick="$(this).css ('border-color', '#ccc')">
                                <br>
                                <input type="email" id="email" placeholder="Email.." onclick="$(this).css ('border-color', '#ccc')">
                            </div>
                            <div>
                                <textarea id="message" placeholder="Введіть ваше повідомлення" onclick="$(this).css ('border-color', '#ccc')"></textarea>
                            </div>
                            <input type="button" id="send" class="btn" value="Надіслати">

                        </form>
                    </div>

                    
                
                
                
                </div>
            </div>
            <?php
                require_once "blocks/aside.php";
    
            ?>
            <div style="clear: both"><br></div>



        </div>

        <?php
            require_once "blocks/footer.php";

        ?>


    </div>

    <?php
        require_once "blocks/JS_scripts.php";
    
    ?>

<script>
$('#send').click (function () {
	var email = $('#email').val ();
	var name = $('#name').val ();
	var message = $('#message').val ();
	$.ajax({
		url:    	'ajax/kontakti.php',
		type:		'POST',
		cache: 		false,
		data:   	{'name':name, 'email':email, 'message':message},
		dataType:	'html',
		beforeSend: function () {
			$('#send').attr ("disabled", "disabled");
		},
		success: function(data) {
			if (data == true) {
				$('#name').val ("");
				$('#email').val ("");
				$('#message').val ("");
				$('#send').text ("Повідомлення надіслано");
				$('#email').css ("border-color", "#60fc8c");
				$('#name').css ("border-color", "#60fc8c");
				$('#message').css ("border-color", "#60fc8c");
			} else {
				if (data == false)				
					alert ("Щось пішло не так! Повідомлення не надіслано");
				else {					
					switch (data) {
					case "Ім'я не вказано":
					$('#name').css ("border-color", "#f7b4b4");
					break;
					case "Повідомлення не вказано":
					$('#message').css ("border-color", "#f7b4b4");
					break;
					case "Неправильний e-mail":
					$('#email').css ("border-color", "#f7b4b4");
					break;
					default:
					$('#email').css ("border-color", "#f7b4b4");
					$('#message').css ("border-color", "#f7b4b4");
					$('#name').css ("border-color", "#f7b4b4");
					}
				}
			}
			$('#send').removeAttr ("disabled");				
		}
	});
});
</script>

</body>

</html>