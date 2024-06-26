
  @vite('resources/css/app.css')
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"
  />


<div class="bg-red-100">
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
          ml-3">Castware CRM</h1>
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

