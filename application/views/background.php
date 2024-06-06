<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
       .background {
        background-image: url("<?php echo base_url('assets/images/smiling-happy-indian-student-with-backpack-pointing-his-finger-wall.jpg'); ?>");
        background-size: cover;
        background-position:center;
        background-repeat: no-repeat;
        height: 100vh;
        width: 100%;
        display: flex;
        align-items: end;
        justify-content: start;
        text-align: center;
    }

    .text {
        margin: 0;
        padding: 0;
        width: 80%;
        max-width: 800px;
        color: white;
    }

    .text h1 {
        font-size: 5vw;
        margin: 0;
    }

    /* Adjust font sizes for smaller screens */
    @media (max-width: 768px) {
        .text h1 {
            font-size: 6vw;
        }
    }

    @media (max-width: 480px) {
        .text h1 {
            font-size: 8vw;
        }
    }
    </style>

</head>

<body>

    <div class="background">
        <div class="text" style="padding-bottom: 8rem;">


            <h1 style="font-size:2.5rem">Welcome to</h1>
            <h1 style="font-size:3rem">Home page, this is the best place</h1>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>