<?php
    require_once"blocks/head.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>NewsUa - новини України</title>
    <link rel="stylesheet" href="css/main.css" type="text/css" charset="UTF-8">
    <link rel="stylesheet" href="css/main_page.css" type="text/css" charset="UTF-8">
    <link rel="stylesheet" href="css/aside.css" type="text/css" charset ="UTF-8">
    <meta name="description" content="Сайт новин України.">
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
                    <h2 class="heading">Термінові новини</h2>
                    <div style="clear: both"><br></div>

                    <!-- Статті -->

                    <?php
                        for ($i = 0; $i < 6; $i++)
                        echo '
                        <div class="article">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/60/Tinga_2012_05_20_1105_%287407646954%29.jpg/1200px-Tinga_2012_05_20_1105_%287407646954%29.jpg"
                        alt="Test" title="Test">
                        <span>гіпопотам гіпопота гіпопотам гіпопотам, гопопотам. Гіпопотам? - гіпопотам.</span>
                    </div>
                        ';
                    ?>
                    
                    <a href="" title="Переглянути більше статей">
                        <div class="btn">
                            Переглянути більше
                        </div>
                    </a>
                
                
                
                </div>
            </div>
            <?php
                require_once "blocks/aside.php";
            ?>

            <div style="clear: both"><br></div>

            <div id="subscribe">
                <span>Інші новинні ресурси</span>
                <div style="clear: both"><br></div>
                <!-- facebook -->
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fukrpravda%2F&tabs=timeline&width=350&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                    width="350" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                    allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftsn.ua&tabs=timeline&width=350&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" 
                    width="350" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                    allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    
            </div>

            <div id="sub_to_project">
                <span class="heading">Підписатись на проект</span>
                <div style="clear: both"><br></div>
                <p>Щоб отримати доступ до всіх функцій сайту, оформіть передплату на проект</p>
                <a href="" title="Переглянути інформацію про передплату на проект">
                        <div class="btn">
                        Дізнатись детальніше про передплату
                        </div>
                    </a>
                    <div style="clear: both"><br></div>

            </div>
            <div style="clear: both"><br></div>

            <div id="web_news">
                <span>Хочете запропонувати новину?</span>
                <a href="" title="Запропонувати новину">
                        <div class="btn">
                        Запропонувати новину
                        </div>
                    </a>

            </div>



        </div>

        <?php
            require_once "blocks/footer.php";
    
        ?>

        
    </div>

        <?php
            require_once "blocks/JS_scripts.php";
    
        ?>


</body>

</html>