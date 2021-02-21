<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <div style="height:50vh" class="d-flex justify-content-center flex-wrap text-center vh-75 bg-success p-2 text-white ">
        <h1 style="font-size:60px ;font-weight: 700;" class="my-5">Maximum and Minimum Finder</h1>
        <ul class="shadow w-75" style="font-size:25px ;font-weight: 600">
            <?php

            $numbers = [800, 6, 700, 100, 15, 489, 2154, 41, 18];
            $max = $numbers[0];
            $min = $numbers[0];
            for ($i = 1; $i < count($numbers); $i++) {
                if ($max < $numbers[$i]) {
                    $max = $numbers[$i];
                } else if ($min > $numbers[$i]) {
                    $min = $numbers[$i];
                }
            } ?>
            <li class="my-3">The Maximum: <?= $max ?></li>
            <li class="my-3">The Minimum: <?= $min ?></li>
        </ul>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#198754" fill-opacity="1" d="M0,160L48,186.7C96,213,192,267,288,245.3C384,224,480,128,576,117.3C672,107,768,181,864,218.7C960,256,1056,256,1152,229.3C1248,203,1344,149,1392,122.7L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
    </svg>

</body>

</html>