<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/favicon.icon"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
              extend: {
                colors: {
                  laravel: '#ef3b2d',
                },
              },
            },
          }
      </script>
    <title>Task Management</title>
</head>
<body class="mb-48" style="background-color: #FFDC9F ">
    <nav class="flex justify-between items-center mb-2" style="background-color: #ED7458 ">
        <a href="/"><img class="w-16" src="{{asset('images/apple-touch-icon.png')}}" alt="" class="logo"/></a>
        <ul class="flex space-x-3 mr-4">
            <!-- Admin -->
            <li>
                <a href="/admin" class="hover:test-laravel"><i class="fa-solid fa-user-tie"></i> Admin</a>
            </li>
            <li>
                <span class="font-bold uppercase text-lg">
                    Welcome
                </span>
            </li>
            <li>
                <a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
            <li>
            <li>
                <a href="/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
            </li>
        </ul>
    </nav>

    <main>
        {{$slot}}
    </main>

    <footer class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold text-black h-24 mt-24 md:justify-center" style="background-color:#ED7458 ">
        <p class="ml-2">Copyright &copy; 2023, All Rigths reserved</p>
    </footer>
</body>
</html> 