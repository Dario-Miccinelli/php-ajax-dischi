<div class="song-container">


    <div id="container-card">
        <div class="card mt-1">
            <img src="<?= $song['poster'] ?>" alt="<?= $song['title'] ?>" />

            <h2 class="fs-6 ms-2 mt-3"><?= $song['title'] ?></h2>

            <p class="ms-2"><?= $song['year'] ?></p>

            <p class="ms-2"><?= $song['author'] ?></p>
        </div>
    </div>



</div>


<style>

    .fs-6 {
        text-transform: uppercase;
        
    }

   #container-card {
    width: 30%;
    margin: auto;
    gap: 15px;
   }

    .card {
        display: flex;
        color: white;
        width: 320px;
        height: 330px;
        background-color: #2E3A46;
        flex-wrap: wrap;
        

    }

    img {
        width: 55%;
        align-self: center;

    }

   
</style>