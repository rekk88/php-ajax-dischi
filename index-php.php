<?php
include "db/db.php";
// var_dump($data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php ajax dischi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"> <!--link my css-->

</head>

<body>
   <div id="app">
   <header class="fixed-top d-flex align-items-center">
       <div class="logo fs-4 text-uppercase">
        Dischi
       </div>
   </header>
   <main>
       <div class="d-flex justify-content-center align-items-center">
        <div class="row row-cols-5 g-2 justify-content-center align-content-center card_wrap">
        <?php foreach ($data["response"] as $k => $element) {?>
               <div class="col text-center">
                   <div class="">
                       <img src="<?php echo $element["poster"] ?>" alt="immagine disco">
                   </div>
                   <div class="text">
                     <?php foreach ($element as $k=>$value) {?>
                          <div> <?php if($k != "poster"){echo $value;} ?> </div>  
                     <?php } ?>
                   </div>
               </div>
        <?php } ?>                  
        </div>
       </div>
   </main>
   </div>


</body>
</html>