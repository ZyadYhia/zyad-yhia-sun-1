<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>

    <?php
    //this is Associative Arrayhave many arrays inside. each array contain some keys and values
    $developer = [
        [
            'name' => 'ahmed hamdy',
            'job' => 'front-end',
            'experience' => 3
        ],
        [
            'name' => 'mohammed shaker',
            'job' => 'back-end',
            'experience' => 2
        ],
        [
            'name' => 'ali hasan',
            'job' => 'full-stack',
            'experience' => 4
        ],
        [
            'name' => 'zyad yhia',
            'job' => 'iot-developer',
            'experience' => 1.5
        ],
    ];
    ?>
    <!--the next 3 lines for the page layout using bootstrap and css -->

    <div style="height: 45vh;" class="bg-success text-center">
        <h1 style="font-size: 60px; font-weight: 700;" class="text-white">Personal Cards</h1>
        <div class="d-flex justify-content-center bg-success">


            <!-- for loop insert a new card for each developer automatically -->

            <?php for ($i = 0; $i < count($developer); $i++) { ?>
                <div class="card shadow" style="width: 18rem; margin:45px 45px;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $developer[$i]['name']; ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $developer[$i]['job']; ?></h6>
                        <p class="card-text"><?= $developer[$i]['experience']; ?> years of experience</p>
                    </div>
                </div>
            <?php } ?>
        </div>


        <!-- this is SVG for page layout -->

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#198754" fill-opacity="1" d="M0,160L48,186.7C96,213,192,267,288,245.3C384,224,480,128,576,117.3C672,107,768,181,864,218.7C960,256,1056,256,1152,229.3C1248,203,1344,149,1392,122.7L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
        </svg>
    </div>

</body>

</html>