<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <script src="https://cdn.tailwindcss.com"></script>

    <title>BFABIEN99</title>
    <style type="text/tailwindcss">
        @layer components {
            .btn-primary 
            {
                @apply py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75;
            }
        }
    </style>
</head>

<body class="bg-gray-900 text-white text-center">
    <header class="p-3 flex flex-col">
        <div class="banner flex justify-center p-2 text-2xl"><i class="bi bi-github"></i><h2>BFABIEN99</h2></div>
        <nav class="flex justify-center list-none">
            <li class="p-2 hover:text-blue-400"><a  href=""><i class="bi bi-house px-1"></i><span>Home</span></a></li>
            <li class="p-2 hover:text-blue-400"><a  href=""><i class="bi bi-book px-1"></i><span>About Me</span></a></li>
            <li class="p-2 hover:text-blue-400"><a  href=""><i class="bi bi-briefcase px-1"></i><span>My Works</span></a></li>
            <li class="p-2 hover:text-blue-400"><a  href=""><i class="bi bi-chat-right px-1"></i><span>Contacts</span></a></li>
        </nav>
    </header>

    <div class="container max-w-screen-2xl my-0 mx-auto">
        <?= $content ?>
    </div>

    <footer>
        <p>@copyright 2022 - bfabien99 portfolio</p>
    </footer>
</body>
</html>