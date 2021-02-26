<?php
require "functions.php";

$content = get_content();
$images = get_imagesPacks();

?>

    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <meta charset="UTF-8">
        <title>ZAMUUUUUUUUUUUUUUUUUUUUUUUUUUUUUULA</title>
        <base href="/">
        <link rel="stylesheet" href="public/css/styles.css">
        <script src="/js/jquerry.js"></script>
        <script src="/js/bodyScrollLock.js"></script>
    </head>

    <body>
        <header class="header">
            <div class="wrapper">
                <div class="header__head" id="menu">
                    <img class="header__logo" src="/Resoures/Pictures/logo.png" alt="logo" height="107px" width="247px">
                    <ul class="nav__list">
                        <li class="nav__item"><a class="head__link head__link--photo" href="#cards">Фотографии</a></li>
                        <li class="nav__item"><a class="head__link head__link--sites" href="#cards">Шаблоны сайтов</a></li>
                        <li class="nav__item"><a class="head__link head__link--icons" href="#cards">Иконки</a></li>
                        <li class="nav__item"><a class="head__link head__link--illust" href="#cards">Иллюстрации</a></li>
                    </ul>
                </div>

                <h1>Инструментарий для дизайнера</h1>
                <h4 class="header__title">Иконки, бесплатный софт для дизайна, иллюстрации, фото, готовые макеты</h4>

                <div id="order-btn" class="header__content">
                    <a class="button-modal header__button" href="#order">
                        <p class="button-text header__button-text">Заказать дизайн</p>
                    </a>
                    <img class="header__image" src="/Resoures/Pictures/image 7.png" alt="Иллюстрация" width="291px" height="288px">
                </div>
            </div>
        </header>

        <section class="about-us">
            <div class="wrapper">
                <div class="flex-container">
                    <div class="about-us__text">
                        <h3 class="about-us__title">Почему выбирают нас?</h3>
                        <p class="about-us__content">Умеем предугадать желания и нужды аудитории, что бы как можно точнее воплотить их в жизнь, создать эффективный дизайн сайта, не перегрузив его графикой, сохранить простой и понятный функционал.</p>
                    </div>
                    <div class="advantages">
                        <div class="advantages__item advantages__item--first-row">
                            <img src="/Resoures/Pictures/proj-icons.png" alt="Законченных проектов" class="advantages__icon advantages__icon--projects" width="69px" height="30px">
                            <p class="advantages__text">Законченных проектов</p>
                        </div>
                        <div class="advantages__item advantages__item--first-row">
                            <img src="/Resoures/Pictures/ideas-icon.png" alt="Креативные идеи" class="advantages__icon advantages__icon--ideas" width="61px" height="44px">
                            <p class="advantages__text">Креативные идеи</p>
                        </div>
                        <div class="advantages__item">
                            <img src="/Resoures/Pictures/work-icon.png" alt="Качественная работа" class="advantages__icon advantages__icon--work" width="61px" height="58px">
                            <p class="advantages__text">Качественная работа</p>
                        </div>
                        <div class="advantages__item">
                            <img src="/Resoures/Pictures/clients-icon.png" alt="Довольные клиенты" class="advantages__icon advantages__icon--clients" width="55px" height="39px">
                            <p class="advantages__text">Довольные клиенты</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cards" id="cards">
            <div class="wrapper">
                <div class="cards__buttons-list">
                    <a class="button cards__button cards__button--photo" href="#">
                        <p class="button-text">Фотографии</p>
                    </a>
                    <a class="button cards__button cards__button--sites" href="#">
                        <p class="button-text">Шаблоны сайтов</p>
                    </a>
                    <a class="button cards__button cards__button--icons" href="#">
                        <p class="button-text">Иконки</p>
                    </a>
                    <a class="button cards__button cards__button--illust" href="#">
                        <p class="button-text">Иллюстрации</p>
                    </a>
                </div>
                <!--Вкладка фотографии-->
                <div class="cards__content cards__content--photos division">
                    <a class="cards__link cards__link--peoples JSpeoples" href="#">
                        <div class="cards__peoples cards__photo">
                            <p class="cards__photo-text">Люди</p>
                        </div>
                    </a>
                    <div class="division flex-wrap">
                        <div class="division">
                            <a class="cards__link cards__link--wild JSwild" href="#">
                                <div class="cards__wild cards__photo">
                                    <p class="cards__photo-text">Природа</p>
                                </div>
                            </a>
                            <a class="cards__link cards__link--animals JSanimals" href="#">
                                <div class="cards__animals cards__photo">
                                    <p class="cards__photo-text">Животные</p>
                                </div>
                            </a>
                        </div>
                        <a class="cards__link cards__link--mok JSmok" href="#">
                            <div class="cards__mok cards__photo">
                                <p class="cards__photo-text">Мокапы</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!--Шаблоны сайтов-->
                <div class="cards__content cards__content--sites hidden">
                    <a class="cards__link cards__link--site cards__link--agency JSagency" href="#">
                        <p class="cards__site-text">Agency</p>
                    </a>
                    <a class="cards__link cards__link--site cards__link--boostpolia JSboostpolia" href="#">
                        <p class="cards__site-text">Boostpolia</p>
                    </a>
                    <a class="cards__link cards__link--site cards__link--piroll JSpiroll" href="#">
                        <p class="cards__site-text">Piroll</p>
                    </a>
                </div>

                <!--Социальные иконки-->
                <div class="cards__content cards__content--s-icons hidden">
                    <a class="cards__link cards__link--social cards__link--social1 JSsocial1" href="#">
                        <img class="cards__img-s" src="/Resoures/Pictures/s1.png" alt="Набор иконок" width="200px" height="111px">
                        <p class="cards__name">Social icons</p>
                        <p class="cards__type">black</p>
                    </a>
                    <a class="cards__link cards__link--social cards__link--social2 JSsocial2" href="#">
                        <img class="cards__img-s" src="/Resoures/Pictures/s2.png" alt="Набор иконок" width="200px" height="111px">
                        <p class="cards__name">Social icons</p>
                        <p class="cards__type">color</p>
                    </a>
                    <a class="cards__link cards__link--social cards__link--social3 JSsocial3" href="#">
                        <img class="cards__img-s" src="/Resoures/Pictures/s3.png" alt="Набор иконок" width="200px" height="111px">
                        <p class="cards__name">Arrows</p>
                        <p class="cards__type">black</p>
                    </a>
                    <a class="cards__link cards__link--social cards__link--social4 JSsocial4" href="#">
                        <img class="cards__img-s" src="/Resoures/Pictures/s4.png" alt="Набор иконок" width="200px" height="111px">
                        <p class="cards__name">Communication</p>
                        <p class="cards__type">black</p>
                    </a>
                </div>

                <!--Иллюстрации-->
                <div class="cards__content cards__content--illust hidden">
                    <a class="cards__link cards__link--illust cards__link--illust1 JSillust1" href="#"></a>
                    <a class="cards__link cards__link--illust cards__link--illust2 JSillust2" href="#"></a>
                </div>
            </div>
        </section>

        <section class="order" id="order">
            <div class="wrapper">
                <h3 class="order__title">Как заказть дизайн?</h3>
                <p class="order__title-desc"> Не Стеcняться Обращаться Ко Мне В Любое Время.</p>
                <div class="division">
                    <form class="order__form" method="post" action="form.php">
                        <input class="form__input form__name" type="text" name="name" placeholder="Напиши свое Имя" value="">
                        <input class="form__input form__email" type="email" name="email" placeholder="и еще e-mail" value="">
                        <p class="alert_email hidden">* Email не существует.</p>
                        <textarea class="form__input form__input--rich" name="message" placeholder="а тут опиши идею!" value=""></textarea>
                        <p class="alert hidden">* Не все обязательные поля заполнены.</p>
                        <input class="form__input form__button" type="button" value="Заказать дизайн">

                    </form>
                    <div class="order__contacts">
                        <h5 class="order__contacts-title">Давай поговорим с тобой!</h5>
                        <p class="order__text">Вот мой контактный номер и рабочий e-mail. Я готова помочь тебе в реализации любой твоей идеи!</p>
                        <!--поставить нормальные ссылки-->
                        <a class="order__link order__link--phone" href="tel:+375336957268">+375 (33) 695-72-68</a>
                        <a class="order__link order__link--email" href="mailto:m-zamula@mail.ru">m-zamula@mail.ru</a>
                    </div>
                </div>

            </div>
        </section>

        <section class="reviews">
            <div class="wrapper">
                <h3 class="reviews__header">Что о нас думают?</h3>

                <!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="swiper__avatar" src="/Resoures/Pictures/VP.png" alt="Валентина Павлова" width="182px" height="190px">
                            <div class="swiper__text">
                                <h5 class="swiper__name">Валентина Павлова</h5>
                                <p class="swiper__position">Бухгалтер</p>
                                <p class="swiper__review">Специалисты компании подтвердили свой высокий профессиональный статус и оперативность в решении проблем. Спасибо!</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <img class="swiper__avatar" src="/Resoures/Pictures/AL.png" alt="Анастасия Товкач" width="182px" height="190px">
                            <div class="swiper__text">
                                <h5 class="swiper__name">Анастасия Товкач</h5>
                                <p class="swiper__position">Маркетолог</p>
                                <p class="swiper__review">Оставились только самые благоприятные впечатления. Все задачи, поставленные перед организацией, были успешно осуществлены.</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <img class="swiper__avatar" src="/Resoures/Pictures/DS.png" alt="Дмитрий Смирнов" width="182px" height="190px">
                            <div class="swiper__text">
                                <h5 class="swiper__name">Дмитрий Смирнов</h5>
                                <p class="swiper__position">Предприниматель</p>
                                <p class="swiper__review">Работы были выполнены с хорошим качеством и в сроки, соответствующие договору. Вы лучшие!</p>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="footer__container">
                <p class="footer__text">Designed by Mariya Zamula</p>

                <div class="footer__social">
                    <a class="footer__link" href="https://t.me/nothiiingnesss"><img class="footer__icon" src="/Resoures/Pictures/telegram-icon.png" alt="Telegram" width="34px" height="34px"></a>
                    <a class="footer__link" href="https://www.instagram.com/nothiiingnesss/"><img class="footer__icon" src="/Resoures/Pictures/instagram.png" alt="Instagram" width="34px" height="34px"></a>
                    <a class="footer__link" href="https://vk.com/nothiiiiingness"><img class="footer__icon" src="/Resoures/Pictures/vk-icon.png" alt="VK" width="40px" height="23px"></a>
                </div>
            </div>
        </footer>

        <!--Модалки-->
        <div class="overlay hidden">
            <div class="modal modal-photo JSmodal JSpeoples hidden">
                <h4 class="modal__header">Люди</h4>
                <p class="modal__text">Бесплатно для личного и коммерческого использования с атрибуцией.</p>
                <p class="modal__author">Автор: <a class="modal__link">@wirestock</a></p>
                <div class="division modal__images">
                    <img src="/Resoures/Pictures/peoplesmodal.png" alt="Люди">
                </div>

                <a id="button" class="button-modal modal__button" href="#">
                    <p class="button-text">Скачать</p>
                </a>
            </div>
            <div class="modal modal-photo JSmodal JSwild hidden">
                <h4 class="modal__header">Природа</h4>
                <p class="modal__text">Бесплатно для личного и коммерческого использования с атрибуцией.</p>
                <p class="modal__author">Автор: <a class="modal__link">@wirestock</a></p>
                <div class="division modal__images">
                    <img src="/Resoures/Pictures/wildmodal.png" alt="Природа">
                </div>
                <a id="button" class="button-modal modal__button" href="#">
                    <p class="button-text">Скачать</p>
                </a>
            </div>
            <div class="modal modal-photo JSmodal JSanimals hidden">
                <h4 class="modal__header">Животные</h4>
                <p class="modal__text">Бесплатно для личного и коммерческого использования с атрибуцией.</p>
                <p class="modal__author">Автор: <a class="modal__link">@wirestock</a></p>
                <div class="division modal__images">
                    <img src="/Resoures/Pictures/animalsmodal.png" alt="Животные">
                </div>
                <a id="button" class="button-modal modal__button" href="#">
                    <p class="button-text">Скачать</p>
                </a>
            </div>
            <div class="modal modal-photo JSmodal JSmok hidden">
                <h4 class="modal__header">Мокапы</h4>
                <p class="modal__text">Бесплатно для личного и коммерческого использования с атрибуцией.</p>
                <p class="modal__author">Автор: <a class="modal__link">@wirestock</a></p>
                <div class="division modal__images">
                    <img src="/Resoures/Pictures/mokupsmodal.png" alt="Мокапы">
                </div>
                <a id="button" class="button-modal modal__button" href="#">
                    <p class="button-text">Скачать</p>
                </a>
            </div>
            <div class="modal modal-photo JSmodal JSagency hidden">
                <h4 class="modal__header">Agnecy</h4>
                <p class="modal__text">Бесплатно для личного и коммерческого использования с атрибуцией.</p>
                <p class="modal__author">Автор: <a class="modal__link">@wirestock</a></p>
                <div class="division modal__images">
                    <?php
                        foreach ($images as $i){
                        if ($i->number == 1){?>
                        <img class="modal-site__img" src="/Resoures/ModalsImages/Templates/<?=htmlspecialchars($i->path)?>">
                        <?} }?>
                            <?php ?>
                </div>
                <?php
                foreach ($content as $row){
                    if ($row->link == "agnecy"){
                        $downLink = $row->downloaded;
                    }
                }
                ?>
                    <a id="button" class="button-modal modal__button" href="/Resoures/Download/<?=htmlspecialchars($downLink)?>">
                        <p class="button-text">Скачать</p>
                    </a>
            </div>
            <div class="modal modal-photo JSmodal JSboostpolia hidden">
                <h4 class="modal__header">Boostpolia</h4>
                <p class="modal__text">Бесплатно для личного и коммерческого использования с атрибуцией.</p>
                <p class="modal__author">Автор: <a class="modal__link">@wirestock</a></p>
                <div class="division modal__images">
                    <?php
                foreach ($images as $i){
                    if ($i->number == 2){?>
                        <img class="modal-site__img" src="/Resoures/ModalsImages/Templates/<?=htmlspecialchars($i->path)?>">
                        <?} }?>
                            <?php ?>
                </div>
                <?php
            foreach ($content as $row){
                if ($row->link == "boostpolia"){
                    $downLink = $row->downloaded;
                }
            }
            ?>
                    <a id="button" class="button-modal modal__button" href="/Resoures/Download/<?=htmlspecialchars($downLink)?>">
                        <p class="button-text">Скачать</p>
                    </a>

            </div>
            <div class="modal modal-photo JSmodal JSpiroll hidden">
                <h4 class="modal__header">Piroll</h4>
                <p class="modal__text">Бесплатно для личного и коммерческого использования с атрибуцией.</p>
                <p class="modal__author">Автор: <a class="modal__link">@wirestock</a></p>
                <div class="division modal__images">
                    <?php
                foreach ($images as $i){
                    if ($i->number == 3){?>
                        <img class="modal-site__img" src="/Resoures/ModalsImages/Templates/<?=htmlspecialchars($i->path)?>">
                        <?} }?>
                            <?php ?>
                </div>
                <?php
            foreach ($content as $row){
                if ($row->link == "piroll"){
                    $downLink = $row->downloaded;
                }
            }
            ?>
                    <a id="button" class="button-modal modal__button" href="/Resoures/Download/<?=htmlspecialchars($downLink)?>">
                        <p class="button-text">Скачать</p>
                    </a>
            </div>
            <div class="modal modal-social JSmodal JSsocial1 hidden">
                <h4 class="modal__header">Social Icons <span class="icon-color-light">Black</span></h4>
                <p class="modal__text">Бесплатно для личного и коммерческого использования с атрибуцией.</p>
                <p class="modal__author">Автор: <a class="modal__link">@wirestock</a></p>
                <div class="division modal__images">
                    <?php
                foreach ($images as $i){
                    if ($i->number == 5){?>
                        <img class="modal-icons__img" src="/Resoures/ModalsImages/Icons/<?=htmlspecialchars($i->path)?>">
                        <?} }?>
                            <?php
                foreach ($content as $row){
                    if ($row->link == "icons-black"){
                        $downLink = $row->downloaded;
                    }
                }?>

                </div>
                <a id="button" class="button-modal modal__button" href="/Resoures/Download/<?=htmlspecialchars($row->downloaded)?>">
                    <p class="button-text">Скачать</p>
                </a>
            </div>
            <div class="modal modal-social JSmodal JSsocial2 hidden">
                <h4 class="modal__header">Social Icons <span class="icon-color-light">Color</span></h4>
                <p class="modal__text">Бесплатно для личного и коммерческого использования с атрибуцией.</p>
                <p class="modal__author">Автор: <a class="modal__link">@wirestock</a></p>
                <div class="division modal__images">
                    <?php
                foreach ($images as $i){
                    if ($i->number == 4){?>
                        <img class="modal-icons__img" src="/Resoures/ModalsImages/Icons/<?=htmlspecialchars($i->path)?>">
                        <?} }?>
                            <?php
                foreach ($content as $row){
                    if ($row->link == "icons"){
                        $downLink = $row->downloaded;
                    }
                }?>

                </div>
                <a id="button" class="button-modal modal__button" href="/Resoures/Download/<?=htmlspecialchars($row->downloaded)?>">
                    <p class="button-text">Скачать</p>
                </a>
            </div>
            <div class="modal modal-social JSmodal JSsocial3 hidden">
                <h4 class="modal__header">Arrows <span class="icon-color-light">Black</span></h4>
                <p class="modal__text">Бесплатно для личного и коммерческого использования с атрибуцией.</p>
                <p class="modal__author">Автор: <a class="modal__link">@wirestock</a></p>
                <div class="division modal__images">
                    <?php
                foreach ($images as $i){
                    if ($i->number == 6){?>
                        <img class="modal-icons__img" src="/Resoures/ModalsImages/Icons/<?=htmlspecialchars($i->path)?>">
                        <?} }?>
                            <?php
                foreach ($content as $row){
                    if ($row->link == "arrows"){
                        $downLink = $row->downloaded;
                    }
                }?>
                </div>
                <a id="button" class="button-modal modal__button" href="/Resoures/Download/<?=htmlspecialchars($row->downloaded)?>">
                    <p class="button-text">Скачать</p>
                </a>
            </div>
            <div class="modal modal-social JSmodal JSsocial4 hidden">
                <h4 class="modal__header">Communication <span class="icon-color-light">Black</span></h4>
                <p class="modal__text">Бесплатно для личного и коммерческого использования с атрибуцией.</p>
                <p class="modal__author">Автор: <a class="modal__link">@wirestock</a></p>
                <div class="division modal__images">
                    <?php
                foreach ($images as $i){
                    if ($i->number == 7){?>
                        <img class="modal-icons__img" src="/Resoures/ModalsImages/Icons/<?=htmlspecialchars($i->path)?>">
                        <?} }?>
                            <?php
                foreach ($content as $row){
                    if ($row->link == "communication"){
                        $downLink = $row->downloaded;
                    }
                }?>
                </div>
                <a id="button" class="button-modal modal__button" href="/Resoures/Download/<?=htmlspecialchars($row->downloaded)?>">
                    <p class="button-text">Скачать</p>
                </a>
            </div>
            <div class="modal modal-photo JSmodal JSillust1 hidden">
                <h4 class="modal__header">Жывотные</h4>
                <p class="modal__text">Бесплатно для личного и коммерческого использования с атрибуцией.</p>
                <p class="modal__author">Автор: <a class="modal__link">@wirestock</a></p>
                <div class="division modal__images">
                    <img src="/Resoures/Pictures/illust1modal.png" alt="Иллюстрации">
                </div>
                <a id="button" class="button-modal modal__button" href="#">
                    <p class="button-text">Скачать</p>
                </a>
            </div>
            <div class="modal modal-photo JSmodal JSillust2 hidden">
                <h4 class="modal__header">Илюст</h4>
                <p class="modal__text">Бесплатно для личного и коммерческого использования с атрибуцией.</p>
                <p class="modal__author">Автор: <a class="modal__link">@wirestock</a></p>
                <div class="division modal__images">
                    <img src="/Resoures/Pictures/illust2modal.png" alt="Иллюстрации">
                </div>
                <a id="button" class="button-modal modal__button" href="#">
                    <p class="button-text">Скачать</p>
                </a>
            </div>
        </div>
        <script src="js/scrollOrder.js"></script>
        <script src="js/scrollCards.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="/js/main.js"></script>
    </body>

    </html>