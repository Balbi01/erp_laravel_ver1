{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barra Lateral</title>--}}
    <head>
      @vite('resources/css/app.css')
      <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"
      />
    </head>

{{-- </head> --}}

<body class="bg-red-100">
    <span
      class="absolute text-white text-4xl top-5 left-4 cursor-pointer"
      onclick="openSidebar()"
    >
      <i class="bi bi-filter-left px-2 bg-gray-900 rounded-md"></i>
  </span>
  <div
    class="sidebar fixed top-0 bottom-0 lg:left-0 p-2 w-[300px]
    overflow-y-auto text-center bg-gray-900"
    >
      <div class="text-gray-100 text-xl">
        <div class="p-2.5 mt-1 flex items-center">
          <i class="bi bi-app-indicator px-2 py-1 rounded-md
          bg-red-600"></i>
          <h1 class="font-bold text-gray-200 text-[15px]
          ml-3">Castware</h1>
          <i
            class="bi bi-x cursor-pointer ml-28 lg:hidden"
            onclick="openSidebar()"
          ></i>
      </div>
      <div class="my-2 bg-gray-600 h-[1px]"></div>
    </div>
    <div
      class="p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-gray-700 text-white"
    >
      <i class="bi bi-search text-sm"></i>
        <input
          type="text"
          placeholder="Buscar"
          class="text-[15px] ml-4 w-full bg-transparent
          focus:outline-none"
        />
    </div>
    <div
      class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600 text-white"
    >
      <i class="bi bi-house-door-fill"></i>
      <span class="text-[15px] ml-4 text-gray-200 font-bold">Inicio</span>
    </div>
    <div
      class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600 text-white"
    >
      <i class="bi bi-people-fill"></i>
      <span
        href="{{ route('users.index')}}"
        class="text-[15px] ml-4 text-gray-200 font-bold"
        onclick="logFunction()"
        >
        Usuarios
      </span>
    </div>
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600 text-white"
    >
      <i class="bi bi-gear-fill"></i>
      <span class="text-[15px] ml-4 text-gray-200 font-bold">Cuenta</span>
    </div>
    <div class="my-4 bg-gray-600 h-[1px]"></div>
    <div
      class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600 text-white"
      onclick="dropdown()"
    >
      <i class="bi bi-chat-left-text-fill"></i>
      <div class="flex justify-between w-full items-center">
        <span class="text-[15px] ml-4 text-gray-200 font-bold">Chatbox</span>
        <span class="text-sm rotate-180" id="arrow">
          <i class="bi bi-chevron-down"></i>
        </span>
      </div>
    </div>
    <div
      class="text-left text-sm mt-2 w-4/5 mx-auto text-gray font-bold"
      id="submenu"
        >
        <h1 class="cursor-pointer p-2 hover:bg-red-600 text-white rounded-md mt-1">
        Social
        </h1>
        <h1 class="cursor-pointer p-2 hover:bg-red-600 text-white rounded-md mt-1">
        Personal
      </h1>
    </div>
    <div
    class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600 text-white"
    >
    <i class="bi bi-box-arrow-in-right"></i>
    <span class="text-[15px] ml-4 text-gray-200 font-bold">Salir</span>
    </div>
  </div>

  <script type="text/javascript">
    function dropdown() {
      document.querySelector("#submenu").classList.toggle("hidden");
      document.querySelector("#arrow").classList.toggle("rotate-0");
    }
    dropdown();

    function openSidebar() {
      document.querySelector(".sidebar").classList.toggle("hidden");
    }

    function logFunction() {
      console.log('Hola mundo');
      window.location="{{route('users.index')}}"

    }
  </script>

</body>

</html>

{{-- SIDERBAR ORIGINAL --}}
{{-- <style>
    .sidebar-hidden {
        transform: translateX(-100%);
        transition: transform 0.2s ease-out;
    }

    .sidebar-visible {
        transform: translateX(0);
        transition: transform 0.2s ease-out;
    }

    .overlay-hidden {
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.2s ease-out;
    }

    .overlay-visible {
        opacity: 1;
        pointer-events: auto;
        transition: opacity 0.2s ease-out;
    }
</style>
</head>
<body>
<div class="bg-white py-3 fixed top-0 left-0 right-0 shadow-md">
    <button id="toggleSidebar" class="ml-4">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
            <path fill-rule="evenodd" d="M2 4.75A.75.75 0 0 1 2.75 4h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75
             0 0 1 2 4.75ZM2 10a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 10Zm0
             5.25a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
        </svg>
    </button>

    <div id="overlay" class="bg-red-200 min-h-screen w-full fixed
    top-0 left-0 right-0 backdrop-blur-sm overlay-hidden"></div>

    <div id="sidebar" class="bg-red-800 min-h-screen w-80 fixed top-0 left-0 sidebar-hidden">

        <div class="pt-3 flex-col">
            <div class="bg-red-100 shadow-md">
                <button id="closeSidebar" class="ml-4 text-white mb-8 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75
                        0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75
                        0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                    </svg>
                    <div id="systemname" class="text-red-700 text-xl pl-5">CASTWARE</div>
                </button>
            </div>

            <div class="">
                <div class="text-left pl-8 text-white text-xl hover:bg-red-500 cursor-pointer mb-4 drop-shadow-xl">
                    USUARIOS
                </div>
                <div class="text-left pl-8 text-white text-xl hover:bg-red-500 cursor-pointer mb-4">
                    PROSPECTOS
                </div>
                <div class="text-left pl-8 text-white text-xl hover:bg-red-500 cursor-pointer mb-4">
                    CLIENTES
                </div>
                <div class="text-left pl-8 text-white text-xl hover:bg-red-500 cursor-pointer mb-4">
                    SISTEMA
                </div>
                <div class="text-left pl-8 text-white text-xl hover:bg-red-500 cursor-pointer mb-4">
                    INICIO
                </div>
            </div>
        </div>
    </div>
</div>

<script>
        const toggleSidebarButton = document.getElementById('toggleSidebar');
        const closeSidebarButton = document.getElementById('closeSidebar');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');

        toggleSidebarButton.addEventListener('click', () => {
            sidebar.classList.toggle('sidebar-hidden');
            sidebar.classList.toggle('sidebar-visible');
            overlay.classList.toggle('overlay-hidden');
            overlay.classList.toggle('overlay-visible');
        });

        closeSidebarButton.addEventListener('click', () => {
            sidebar.classList.add('sidebar-hidden');
            sidebar.classList.remove('sidebar-visible');
            overlay.classList.add('overlay-hidden');
            overlay.classList.remove('overlay-visible');
        });
    </script>
    --}}
