<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <title>
        {{-- Webflix - @yield('title') --}}
        @section('title') Webflix @show
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 font-[Nunito]">
    <nav class="bg-white flex  border-gray-200 px-2 sm:px-4 py-2.5 light:bg-gray-900 shadow ">
        <div class="flex">
          <a href="/" class=" w-[10%] mr-10 flex items-center">
              <span class=" text-2xl self-center font-semibold whitespace-nowrap dark:text-black">WebFlix</span>
          </a>
        </div>
          <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
          </button>
          <div class=" flex justify-between w-[90%]">
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
              <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white light:bg-gray-800 md:light:bg-gray-900 dark:border-gray-700">
                <li>
                  <a href="#" class="block text-l py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-blue-600 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-blue dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Accueil</a>
                </li>
                <li>
                  <a href="#" class="block text-l py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-blue dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Categorie</a>
                </li>
                <li>
                  <a href="#" class="block text-l py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-blue dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Films</a>
                </li>
                <li>
                  <a href="#" class="block text-l py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-blue dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Acteurs</a>
                </li>
                <li>
                  <a href="#" class="block text-l py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-blue dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                </li>
                <li>
                  <a href="/" class="block text-l py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black-400 md:dark:hover:text-blue dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">A Propos</a>
                </li>
              </ul>
            </div>
            <div class=" hidden w-full md:block md:w-auto" id="navbar-default">
              <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white light:bg-gray-800 md:light:bg-gray-900 dark:border-gray-700">
                <li>
                  <a href="#" class="block text-l py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-blue dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Login</a>
                </li>
                <li>
                  <a href="#" class="block text-l py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-blue dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Register</a>
                </li>
              </ul>
          </div>
        </div>
        
      </nav>



    
 
    @yield('content')  


       <footer class="text-center">
        Copyright &copy; {{ now()->year }}- {{ config('app.name')}}
      </footer>
</body>
</html>