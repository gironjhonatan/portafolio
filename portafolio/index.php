<?php

$conn = mysqli_connect('localhost','root','','portafolio') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Portafolio</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- header -->

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Portfolio</a>

   <nav class="navbar">
      <a href="#home" class="active">home</a>
      <a href="#about">sobre</a>
      <a href="#services">servicios</a>
      <a href="#portfolio">portafolio</a>
      <a href="#contact">contacto</a>
   </nav>

   <div class="follow">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="linkedin.com/in/jhonatan-giron-cabrera" class="fab fa-linkedin"></a>
      <a href="https://github.com/gironjhonatan" target="_blank" class="fab fa-github"></a>
   </div>

</header>

<!-- header -->

<!-- home -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/yo.jpg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">Jhonatan Giron Cabrera</h3>
      <span data-aos="fade-up">Desarrollador de Software</span>
      <p data-aos="fade-up">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis labore recusandae minima molestias aliquam nostrum.</p>
      <a data-aos="fade-up" href="#about" class="btn">sobre mí</a>
   </div>

</section>

<!-- home -->

<!-- sobre -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biografía</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis tenetur amet ab optio minus est error libero adipisci numquam ratione.</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>nombre : </span> Jhonatan Giron </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> jhonatan.giron@ucp.edu.co </h3>
         <h3 data-aos="zoom-in"> <span>dirección : </span> Pereira - Colombia </h3>
         <h3 data-aos="zoom-in"> <span>telefono : </span> +57 3217212410 </h3>
         <h3 data-aos="zoom-in"> <span>años : </span> 22 años </h3>
        <!-- <h3 data-aos="zoom-in"> <span>experience : </span> 2+ years </h3> -->
      </div>

      <a href="https://drive.google.com/file/d/1LIYNU641FBw1V_GL-KwwdSw1zZ8bX00W/view?usp=sharing" class="btn" data-aos="fade-up">CV</a>

   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>skills</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>90%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>60%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span>65%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>education y experiencia</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">educación</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2019 - 2020 )</span>
               <h3>web designer</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
            </div>

           <div class="box" data-aos="fade-right">
               <span>( 2021 - 2022 )</span>
               <h3>graphic designer</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
            </div>

         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">experiencia</h3>

            <div class="box" data-aos="fade-left">
               <span>( 2019 - 2020 )</span>
               <h3>front-end developer</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2020 - 2021 )</span>
               <h3>back-end developer</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
            </div>

         </div>

      </div>

   </div>

</section>

<!-- sobre -->

<!-- servicios -->

<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"> <span>servicios</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-code"></i>
         <h3>web development</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-paint-brush"></i>
         <h3>graphic design</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-bootstrap"></i>
         <h3>bootstrap</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

   </div>

</section>

<!-- servicios -->

<!-- portfolio -->

<section class="portfolio" id="portfolio">

   <h1 class="heading" data-aos="fade-up"> <span>portfolio</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <img src="images/img1.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img2.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img3.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2022 )</span>
      </div>

   </div>

</section>

<!-- portfolio -->

<!-- contaco -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contactame</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="nombre" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="email" class="box" required>
      </div>
      <input data-aos="fade-up" min="0" name="number" placeholder="telefono" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="mensaje" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="enviar mensaje" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>telefono</h3>
         <p>+57 3217212410</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>jhonatan.giron@gmail.com</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>pereira - Risaralda</p>
      </div>

   </div>

</section>

<!-- contacto -->

<script src="js/script.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:1000,
      delay:400
   });

</script>
   
</body>
</html>
