<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <title>Главная</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

  </head>


  <body>
    
   

 <div class="navbar navbar-inverse navbar-fixed-top">
           <div class="container">
               <div class="navbar-header">
                   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                          
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                    </button>
                           <a class="navbar-brand" href="/">Laba7</a>
               </div>

        <div class="collapse navbar-collapse" id="responsive-menu">
             <ul class="nav navbar-nav">
                 <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Кредит<b class="caret"></b> </a>
                                <ul class="dropdown-menu">
                                         <li><a href="#">Оформить</a></li>
                                         <li><a href="#">Оплатить</a></li>
                                         <li><a href="#">Дополнительные сведения</a></li>
                                         
                                </ul>
                </li>
                <li><a href="#">Страховка </a></li>
                
                     <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Выбрать карту <b class="caret"></b> </a>
                                <ul class="dropdown-menu">
                                         <li><a href="#">Студентам</a></li>
                                         <li><a href="#">Пенсионерам</a></li>
                                         <li><a href="#">Временная</a></li>
                                        
                                </ul>
                    </li>
                    <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Еще<b class="caret"></b> </a>
                                <ul class="dropdown-menu">
                                         <li><a href="#">Скидки</a></li>
                                         <li><a href="#">Предложения</a></li>
                                         <li><a href="#">Вакансии</a></li>
                                        
                                </ul>
                                </li>
                                
             </ul>
        </div>  
      </div>
    </div>
 

 
    <div class="row site-content">
       <div class="col-md-8 content">
           <div class="page-header">
                <h1>Главная</h1>      
      </div>
      <div class="lead" >
      	<?php
        	include ($contentPage);
      	?>
      </div>
       
  </div>
 
     <div class="col-md-4 sidebar test">
            <div class="row row-offcanvas row-offcanvas-right">
                <div class="sidebar-offcanvas" id="sidebar" role="navigation">
                    <div class="list-group">
      <div class="col-md-4  sidebar-offcanvas" id="sidebar" ">
    
      <div id="sidebar">
          <div class="list-group">
            <a href="/" class="list-group-item"><li class="active">Главная</li></a>
            <a href="/news" class="list-group-item">Новости</a>
            <a href="#" class="list-group-item">Спонсоры</a>
            <a href="#" class="list-group-item">Персонал</a>
            <a href="#" class="list-group-item">Галерея</a>
            <a href="#" class="list-group-item">Вопросы</a>
          </div>
        </div>
      </div>
 </div>
 
</div>
   </div>



</div>
</div>
  <footer class="footer">
            Карта сайта:<br><a href=""><font color="gray">Кредит</a></font><br> <a href=""><font color="gray">Страховка</a></font><br><a href=""><font color="gray">Вклад</a> </font>       
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="css/bootstrap.js"></script>
  </body>
</html>
 