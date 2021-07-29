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
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script> <!--link vue -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
            <div class="card col" v-for="album in albums">
                <!-- {{album}} -->
                <img class="card-img-top" :src="album.poster" alt="poster">
                <div class="card-body">
                    <div class="card-title">{{album.title}}</div>
                    <div class="card-text">
                        <div>{{album.author}}</div>
                        <div>{{album.genre}}</div>
                        <div>{{album.year}}</div>
                    </div>
                </div>
            </div>
        </div>
       </div>
   </main>
   </div>

   <script src="js/script.js"></script>

</body>
</html>