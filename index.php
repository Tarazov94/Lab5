<!DOCTYPE html>
<html>
    <head>
    <title>Видео блог ИТАСа</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles/123.css">
        
        <script src="jquery-latest.js"></script>
        <script src="jav.js"></script>
        <script>
            var db = openDatabase('notes', '1.0', 'Заметки', 5 * 1024 * 1024);
            
            db.transaction(function (tx) {
                // tx.executeSql('DROP TABLE IF EXISTS Mess');
            });
            db.transaction(function (tx) {
                tx.executeSql('CREATE TABLE IF NOT EXISTS Mess(id integer primary key autoincrement, message TEXT)');
             });
             function AddNote() {
                var inputMessage = document.getElementById("msg").value;
                db.transaction(function(tx) {
                    tx.executeSql('INSERT INTO Mess (message) VALUES (?)',[inputMessage], null, null);
                });
                  
                
           db.transaction(function(tx) {
            tx.executeSql("SELECT * FROM Mess", [], function(tx, result) {   
            for(var i = 0; i < result.rows.length; i++) {
                if(i+1==result.rows.length){
                    var c = document.getElementById('azx');
                    var d = document.createElement('DIV');
                    var e = document.createElement('p');
                    e.className = 'soo';
                    d.className = 'soob';
                    var txt = document.createTextNode(result.rows.item(i)['message']);
                    e.appendChild(txt);
                    d.appendChild(e);
                    c.appendChild(d);
                    document.getElementById("msg").value = '';
                }
            }
            }, null)});
            } ;  
        db.transaction(function(tx) {
            tx.executeSql("SELECT * FROM Mess", [], function(tx, result) {
                
            for(var i = 0; i < result.rows.length; i++) {
                    var c = document.getElementById('azx');
                    var d = document.createElement('DIV');
                    var e = document.createElement('p');
                    e.className = 'soo';
                    d.className = 'soob';
                    var txt = document.createTextNode(result.rows.item(i)['message']);
                    e.appendChild(txt);
                    d.appendChild(e);
                    c.appendChild(d);
            }
        }, null)});
        </script>
    </head>

    <body>
    <div id="food-menu" class="menu">
    <div class="add-fon">
<div id="ooo" class="okno">
        <div class="knop2" onclick="foodMenu.close()">
        <div class="lin3"></div>
        <div class="lin4"></div>
        </div>
        <div class="foot">
        <h6>
        Регистрация
        </h6>
        
        
        <div class="reg2">
        <div class="reg_">
            <form method="GET" action="prav.php">
            <?php
                if($_GET["ADD_not"]==1){
                    echo '<div style="color: red;" >Пользователь с таким логином уже существует</div>';
                }
                if($_GET["ADD_not"]==2){
                    echo '<div style="color: red;" >Пользователь с таким e-mail уже существует</div>';
                }
                if($_GET["ADD_not"]==3){
                    echo '<div style="color: red;" >Пользователь с таким логином и e-mail уже существует</div>';
                }
            ?>
                <br>Логин<input class="reg_inp" type="text" required pattern="^[A-Za-z0-9_]{1,32}$" name="Login_"/><br><br>
                E-mail<input class="reg_inp" type="email" name="E_mail_" required /><br><br>
                Фамилия<input class="reg_inp" type="text" pattern="[A-Za-zА-Яа-яЁё]" name="Last_name_" /><br><br>
                Имя<input class="reg_inp" type="text" pattern="[A-Za-zА-Яа-яЁё]" name="First_name_" /><br><br>
                Пароль<input class="reg_inp" type="text" required pattern="[A-Za-z0-9]{6,}" name="Pass_"  /><br><br>
                Повторите пароль<input class="reg_inp" type="text" required pattern="[A-Za-z0-9]{6,}" name="Pass2_" /><br><br>
                Пол <br><br><br>Телефон
                <div class="pol">
                <p ><input type="radio" name="Gender_" value="men" required/>Мужской<br>
                <input type="radio" name="Gender_" value="women" required />Женский</p>
                <input class="re5" type="tel" required  pattern="8[0-9]{10}" maxlength="11" name="Tel_" />
                
                <input class="knop" type="submit" name="go" value="Зарегистрироваться" /></div>
                     
            </form>
        </div>
        </div></div>
</div>
</div>
</div>
    <header>
        <h1>Видео блог ИТАСа</h1>
    </header>
    
    <nav id="nav1">
        <h2> Меню </h2>
        <ul>
            <li> <a href="http://vk.com">Вконтакте</a></li>
            <li> <a href="http://yandex.ru">Яндекс</a></li>
        </ul>
            

    
    <br>
    
    <nav id="nav2">
            <h2>Войти</h2>
            <form method="GET" action="index.php">
                   E-mail:   <input  type="email" required name="Name_"><br><br>
                   Пароль: <input type="password" required name="Pass_" /><br>
                <input  type="hidden" name="vv_not" value=1/>
                
                
            </form>
            <br />
            <input class="knop" type="button" name="go" value="Регистрация" onclick="foodMenu.open()">
            <input class="knop" type="submit" name="go" value="Войти">
            <br><br>
            <?php
            if($_GET["ADD_OK"]==1){
                    echo '<div style="color: red;" >Регистрация прошла успешно</div>';
                }
            ?>
    </nav>
    <div class="zamet">
        <h2 style="position: relative; top: -20px;">Заметки</h2>
        <div id="azx" class="z_okno">
        </div>
        <input id="msg" type="text"  style="position: relative; width: 200px; left: 10px; top: -28px; margin-right: 10px;;" />
        <button style="top: -28px; left: 5px; position: relative;" onclick="AddNote()">Добавить</button>
    </div>
    </nav>
    <section>
        <h2> Первый видео блок </h2>
         <article>
            <h2> Видео 1 </h2>
        <?php   // <iframe width="560" height="315" src="https://www.youtube.com/embed/09R8_2nJtjg"  allowfullscreen></iframe> ?>
         </article>
         <article>
            <h2> Видео 2 </h2>
          <?php   //  <iframe width="560" height="315" src="https://www.youtube.com/embed/OZ_BIp8Yvsk" allowfullscreen></iframe>   ?>
         </article>
         
    </section>
    
    <section>
        <h2> Второй видео блок </h2>
         <article>
            <h2> Видео 3 </h2>
          <?php   // <iframe width="560" height="315" src="http://www.youtube.com/embed/RzFmWjavzYM" allowfullscreen></iframe>   ?>
         </article>
         <article>
            <h2> Видео 4 </h2>
          <?php   //  <iframe width="560" height="315" src="http://www.youtube.com/embed/89X2y9nGGzY" allowfullscreen></iframe>  ?>
         </article>
         
    </section>
<script>
var foodMenu = new Menu({ 
  elem: $('#food-menu')
});
</script>


<footer>
        <h1>2015 ИТАС Видео блог</h1>
</footer>
</body>



</html>
