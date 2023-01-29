<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="./styles/style.css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>php-dischi-json</title>

</head>
    <body>
        <div id="app">

            <header class="container-fluid px-5">
                <div class="d-flex align-items-center h-100 px-5">
                    <img src="./img/Spotify_logo_without_text.svg.png" alt="">
                </div>
            </header>


            <main class="container-fluid">
                <div class="container py-5">
                    <div class="row g-5">
                        <div class="col-4" v-for="disc in dataFromServer" :key="disc.title">
                            <div class="my-card text-center p-4 pb-5">
                                <img :src="disc.poster" alt="poster">
                                <h3 class="mt-4 mb-2">
                                    {{ disc.title }}
                                </h3>
                                <p class="my-2">
                                    {{ disc.author }} 
                                </p>
                                <span> {{ disc.year }}  </span>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>



            </main>



        
            <!-- <div v-for="disc in dataFromServer" :key="disc.title">
                {{ disc.title}}
            </div> -->
        </div>

        <script src="./script.js"></script>
    </body>
</html>