<nav class="sticky top-0 relative z-50 bg-orange-50 border-gray-200  border-b-2 border-solid border-orange-300">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-center mx-auto p-4">

    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
      <ul class="flex flex-col font-medium md:flex-row md:space-x-8 ">
        <li>
          <a href="/" class="block py-2 pl-3 pr-4 md:p-0 hover:text-orange-500 hover:underline hover:text-decoration-orange-500" aria-current="page">Home</a>
        </li>
        <li>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full hover:text-orange-500 hover:underline hover:text-decoration-orange-500 {{ $active == 'hobby' ? 'text-orange-500' : ''}}">Hobbies<svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
        </li>
        <li>
          <a href="/achievements" class="block py-2 pl-3 pr-4 text-gray-900 md:p-0 hover:text-orange-500 hover:underline hover:text-decoration-orange-500 {{ $active == 'achievement' ? 'text-orange-500' : ''}}">Achievements</a>
        </li>
      </ul>
    </div>
    </div>

    <!-- Dropdown menu -->
    <div id="dropdownNavbar" class="z-10 hidden absolute top-10 right-2/4 font-normal bg-white divide-y divide-gray-100 rounded-lg shadow">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
          <li class="my-1">
            <a href="/hobbies#Cook">
                <span class="px-2 py-1 text-sm font-semibold hover:text-red-600">
                    Cook
                </span>
            </a>
          </li>
          <li class="my-1">
            <a href="/hobbies#Crochet">
                <span class="px-2 py-1 text-sm font-semibold hover:text-green-600">
                    Crochet
                </span>
            </a>
          </li>
          <li class="my-1">
            <a href="/hobbies#Travel">
                <span class="px-2 py-1 text-sm font-semibold hover:text-orange-500">
                    Travel
                </span>
            </a>
          </li>
        </ul>

    </div>
  </nav>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
    $("#dropdownNavbarLink").click(function(){
      $("#dropdownNavbar").toggle();
    });
  });
  </script>
