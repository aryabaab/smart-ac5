<?php
if (isset($_POST['company'])) {
  $company_name = $_POST['company'];
}
?>

<!DOCTYPE html>
<html lang="ar">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Banks list</title>
  </head>

    <body>
      <h2> قائمة البنوك </h2>

      
        <ul>
        <?php if($company_name == 'company_a'):?>
            <a href="services.html" >
          <img src="img/riyad-bank.jpg">
              </a>

              <?php elseif($company_name == 'company_a'):?>
               <a href="services.html">
                <img src="img/alrajhi-bank.png">
                </a>
                <p></p>
                
                <?php else:?>
                <a href="services.html">
                <img src="img/alahli-bank.png">
                </a>
                <?php endif?>
                
        </ul>
        
    </body>

</html>