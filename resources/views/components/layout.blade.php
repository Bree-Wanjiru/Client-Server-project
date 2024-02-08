<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Client-Server-Project</title>
</head>
<body>
  <div class="w-full min-h-screen font-sans text-gray-900">
    <div class="bg-gradient-to-b from-[#FEE6F7] to-white">
      <img src="images/background.svg" alt="" class="absolute top-0 right-0 pointer-events-none"/>
        <div class="px-6 mx-auto max-w-6xl">
          <div class="flex justify-between items-center py-5">
            <a href="/" class="font-bold text-3xl ">
              Wor<span class="text-pink-300">dyWi</span>zards
            </a>
                  {{-- navbar --}}
            <nav class="hidden md:flex md:items-center md:space-x-10">
              @auth
              <span>
                Welcome {{auth()->user()->name}}
                <i class="fa-solid fa-user "></i>
              </span>
              <form class="inline" method="get" action="/users">
                @csrf
              <button type="submit" class="hover:text-red-400 mx-auto lg:mx-0 hover:underline  gradient  font-bold rounded-full my-6 py-2 px-3 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    View Users<i class="fa-solid fa-user"></i>
                </button>
                </form>
              <form class="inline" method="POST" action="/logout">
                @csrf
                <button type="submit" class="hover:text-red-400 mx-auto lg:mx-0 hover:underline  gradient  font-bold rounded-full my-6 py-2 px-3 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    <i class="fa-solid fa-power-off"></i>Logout
                </button>
                </form>
              @else
              <a href="/" class="text-lg text-gray-700 hover:text-gray-950">
                Home
              </a>
              <a href="#" class="text-lg text-gray-700 hover:text-gray-950">
                About us
              </a>
              <a href="#" class="text-lg text-gray-700 hover:text-gray-950">
                Reviews
              </a>
              <a href="" class="text-lg text-gray-700 hover:text-gray-950">
                Contact Us
              </a>
              @endauth
            </nav>
                 
          </div>
        </div>
    </div>
    <main>
        {{$slot}}
    </main>
             
    <footer class=" bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-black h-20 mt-24 opacity-90 md:justify-center">
        <p class="ml-2"> &copy; WordyWizards2023</p>
   
        <div class=" ml-36 mr-28">
        <i class="fa-brands fa-square-instagram" ></i>
        <i class="fa-brands fa-github" ></i>
        <i class="fa-brands fa-square-facebook" ></i>
        <i class="fa-brands fa-square-twitter" ></i>
        </div>

        <div>
            <p>Contact Us: <i class="fa-solid fa-envelope"></i>wordywizards@gmail.com or <i class="fa-solid fa-phone"></i> 0712345678</p>
        </div>
        
     </footer> 

      {{-- flash message --}}
      <x-flash-message/>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script> 
    
</body>
</html>
