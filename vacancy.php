<?php
/*
Template Name: Вакансии
*/
?>

<?php get_header(); ?>


<div class="vacancyPage-bg"></div>
<div class="vacancyPage grid">

   <div class="vacancyPage-container">
      <div class="vacancyPage-preview">
         <h1 class="title">
            Работа <br>в&nbsp;агентстве
         </h1>
         <div class="description">
            Наша команда открыта для<br>профессионалов разного уровня<br>и специализации.
         </div>
      </div>

      <div class="vacancyPage-content">
         <img class="img-responsive main-img" src="<?php echo get_template_directory_uri()?>/img/bg_agency2.jpg" alt="">
         <div class="vacancyPage-text">

            <div class="vacancyPage-reason__items">



               <div class="vacancyPage-reason__item">
                  <div class="headline_wrapper">
                     <h3>КОМФОРТ-ОФИСЫ</h3>
                  </div>
                  <p>Мы стремимся создать комфортные условия для работы всех сотрудников. Главный офис агентства
                     работает в центре Тюмени, второй — в центре Москвы.</p>
               </div>
               <div class="vacancyPage-reason__item">
                  <div class="headline_wrapper">
                     <h3>РАЗНЫЕ УРОВНИ</h3>
                  </div>
                  <p>В агентстве работают специалисты трех уровней: <span
                        class="red"><br><br>Senior<br>Middle<br>Junior<br><br></span> На каждом
                     из уровней мы готовы
                     предложить конкурентную оплату.</p>
               </div>
               <div class="vacancyPage-reason__item">
                  <div class="headline_wrapper">
                     <h3>ПОСТОЯННОЕ РАЗВИТИЕ</h3>
                  </div>
                  <p><span class="red">— </span>Каждый новый сотрудник проходит процесс интеграции: на первых этапах
                     работы с ним активно
                     взаимодействует куратор и HR-менеджер.
                     <br>
                     <span class="red">— </span>У каждого сотрудника есть индивидуальный план развития.<br>
                     <span class="red">— </span>В агентстве есть возможность проходить обучение.</p>
               </div>


            </div>
            <div class="vacancyPage-text-block">
               <div class="title">
                  Рассматриваем <br>все резюме
               </div>
               <div class="content">
                  <div class="left">
                     <p>Посмотрите вакансии</p>
                     <a href="/">Headhunter</a>
                  </div>

                  <div class="right">
                     <p>Отправьте резюме</p>
                     <a href="mailto:hr@lovemarketig.ru ">hr@lovemarketig.ru </a>
                  </div>
               </div>
            </div>
            <div class="vacancyPage-text-block">
               <div class="title">
                  Приглашаем <br>на&nbsp;стажировку
               </div>
               <div class="content">
                  <div class="left">
                     <p>Начинающим специалистам мы можем предложить пройти стажировку в агентстве.</p>

                  </div>

                  <div class="right">
                     <p>По вопросам прохождения стажировки напишите на почту</p>
                     <a href="mailto:hr@lovemarketig.ru ">hr@lovemarketig.ru </a>
                  </div>
               </div>
            </div>
            <div class="vacancyPage-text-block">
               <div class="title">
                  Отвечаем на вопросы <br>по трудоустройству
               </div>
               <div class="content">
                  <div class="left">
                     <p>Вы можете позвонить HR-менеджеру и задать вопрос по устройству на работу или стажировке в
                        агентстве</p>
                  </div>

                  <div class="right">
                     <p>Отправьте резюме</p>
                     <a href="tel:+79581110667">+7 958 111-06-67 </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="vacancyPage-photo">
            <figure>
               <p><img class="img-responsive" src="<?php echo get_template_directory_uri()?>/img/v1.jpg" alt=""></p>
               <figcaption>Тюмень</figcaption>
            </figure>

            <figure>
               <p><img class="img-responsive" src="<?php echo get_template_directory_uri()?>/img/v2.jpg" alt=""></p>
               <figcaption>Москва — CABINET LOUNGE</figcaption>
            </figure>

            <figure>
               <p><img class="img-responsive" src="<?php echo get_template_directory_uri()?>/img/v3.jpg" alt=""></p>

            </figure>

            <figure>
               <p><img class="img-responsive" src="<?php echo get_template_directory_uri()?>/img/v4.jpg" alt=""></p>

            </figure>

         </div>
      </div>


   </div>


</div>


<?php get_footer(); ?>