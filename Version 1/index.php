<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <title>PHP - AJAX - Dischi</title>
</head>

<body>

    <?php
    include __DIR__  . '/database.php';
    ?>

    <div class="header">
        <img class="w-logo p-3" src="../spotify-1.svg" alt="">
    </div>

    <div class="d-flex gap flex-wrap m-auto mt-5">

        <?php

        foreach ($dischi as $song) {
            echo "<div>";
            include __DIR__ . "./compSong.php";
            echo "</div>";
        }

        ?>
    </div>


    <!--bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!--vue 2-->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>
    <!-- axios 1.1.3 -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.min.js' integrity='sha512-0qU9M9jfqPw6FKkPafM3gy2CBAvUWnYVOfNPDYKVuRTel1PrciTj+a9P3loJB+j0QmN2Y0JYQmkBBS8W+mbezg==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
</body>

</html>


<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        height: 100vh;
        background-color: rgb(30, 45, 59);
    }

    .gap {
        gap: 15px;
    }

    .w-logo {
        width: 15rem;
    }

    .header {
        background-color: #2E3A46;
        height: 11vh;
    }
</style>