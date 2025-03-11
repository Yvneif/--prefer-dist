<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/thesisdesign.css') }}" rel="stylesheet">
    <style>
        .fade-in {
            animation: fadeIn 1.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .glow-button {
            box-shadow: 0 0 10px #22c55e, 0 0 20px #22c55e;
            transition: all 0.3s ease-in-out;
        }

        .glow-button:hover {
            box-shadow: 0 0 20px #16a34a, 0 0 40px #16a34a;
        }
    </style>
</head>
<body class="relative flex flex-col items-center justify-center min-h-screen bg-cover bg-center text-white" 
    style="background-image: url('https://scontent.fcrk1-4.fna.fbcdn.net/v/t39.30808-6/463016522_9011482772203863_7854206505027192352_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=cf85f3&_nc_ohc=lb1jOpaeTE0Q7kNvgEgkdSi&_nc_oc=AdiFMTs27NTPkk4_X0Qviui71UipWaWUeyUoLmAJRxXWQn56kQzB0OsNcTriXD_uOHM&_nc_zt=23&_nc_ht=scontent.fcrk1-4.fna&_nc_gid=ARu51yQT9aotnAVchvNdQap&oh=00_AYHQYHJFDBf_j_frwXly3zMZ5Fs89J-Rs3MHagaVUUzTOg&oe=67D5511D');">
    
    <div class="absolute inset-0 bg-black opacity-50"></div>

    <!-- Logo placed separately on top -->
    <img src="https://media.discordapp.net/attachments/1100307617441660998/1348846417656938607/logo-removebg-preview.png?ex=67d0f29e&is=67cfa11e&hm=402a0fe70d0376620f1b983e8bcf506e1bed5d455898ce19222a85595637e5bf&=&format=webp&quality=lossless&width=1000&height=1000" alt="Thesis Archive Logo" class="relative w-28 h-28 mb-6 fade-in">

    <!-- Content Box with fade-in effect -->
    <div class="relative flex flex-col items-center text-center p-10 bg-black bg-opacity-70 rounded-lg shadow-xl backdrop-blur-md fade-in">
        <h1 class="text-5xl font-extrabold text-gray-200 mb-4">Thesis Archive</h1>

        <div class="flex space-x-6">
            <a href="{{ route('register') }}" class="bg-green-600 hover:bg-green-800 text-white font-bold py-3 px-8 rounded-xl shadow-lg transition duration-300">
                Get started
            </a>
        </div>
    </div>

</body>
</html>
