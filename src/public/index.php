<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="./style.css">
  </head>
  
  <body>
    <header>

      <input type="checkbox" class="menu-btn" id="menu-btn">
      <label for="menu-btn" class="menu-icon"><span class="navicon"></span></label>
      <ul class="menu">
        <li class="top"><a href="#home">HOME</a></li>
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#works">WORKS</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>

    </header>
    

  
    <div class="contents" id="home">
      <div class="contents-top">
        <h1>RINA's <br> PORTFOFLIO</h1>
      </div>

      <div class="about" id="about">
        <h2>ABOUT</h2>
        <div class="about-section">
          <div class="about-img">
            <img src="./assets/img/myimg.jpeg" class="my_img"alt="テキストテキスト">
          </div>
            <p class="about-name">Rina Arakawa</p>
            <p class="about-text">勉強中の24歳。<br> 趣味はゴルフ、ネイル、ダンス。</p>
        </div>
      </div>

      <div class="works" id="works">
        <h2>WORKS</h2>

        <ul class="works_li">
          <li>
            <a href="#">
              <img src="./assets/img/contact_img.jpg" class="works_img" alt="Contact Form">
            </a>
            <a href="./assets/PHP-contact-form/src/public/index.php" class="button">お問い合わせフォームへ</a>
          </li>     
          
          <li>
            <a href="#">
              <img src="./assets/img/booking_img.jpg" class="works_img" alt="Booking Form">
            </a>
            <a href="./assets/PHP-bookingform/src/public/index.php" class="button">予約フォームへ</a>
          </li>
          
          <li>
            <a href="#">
              <img src="./assets/img/blog_img.jpg" class="works_img" alt="Blog">
            </a>
            <a href="./assets/PHP-blog/src/public/user/signup.php" class="button">ブログアプリへ</a>
          </li>        


          <li>
            <a href="#">
              <img src="./assets/img/ToDo_img.jpg" class="works_img" alt="ToDo">
            </a>
            <a href="./assets/PHP-ToDo/src/public/user/signup.php" class="button">ToDoアプリへ</a>
          </li>        
        </ul>



      </div>

      <div class="contact" id="contact">
        <h2>CONTACT</h2>
        <p><a href="mailto:info&#64;example.com" class="contact_mail">info&#64;example.com</a></p>
      </div>

      <footer>
        <p>All Rights Reserved 2024 ©︎ Rina Arakawa</p>
      </footer>
      

    </div>
    
  

  </body>

</html>
