<x-guest-layout>
        <div>
          <div x-data="{ show: true }" x-show="show">
            <div class="bg-[#1E1E1E] text-white p-4 flex">
                <div id="topHeader" class="mx-auto">
                    Follow me on X -> <a href="https://www.x.com/pedrclopes" class="underline">@pedrclopes</a>
                </div>
                <img src="https://uploads-ssl.webflow.com/63c17192dc5a0a695a180ab0/63c17192dc5a0a3fde180b06_icon-cross-circle.svg" loading="lazy" alt="" class="announcement-cross" @click="show = false" />
            </div>
        </div>
        
          <header class="bg-[#131313] border border-b-1 border-[#1E1E1E]">
            <nav
              class="text-white py-4 px-8 flex items-center max-w-7xl mx-auto justify-between"
            >
              <div class="flex items-center mr-4 font-semibold">
                <img src="/images/pcl_profile.png" class="w-[40px] mr-4" alt="" />
                <a href="/index.html"> Pedro Lopes </a>
              </div>
              <div>
                @if (Route::has('login'))
                  <div class="p-6 flex z-10">
                      @auth
                          <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-white dark:hover:text-[#D7EF55] focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                      @else
                          {{-- <a href="{{ route('login') }}" class="flex font-semibold text-gray-600 hover:text-gray-900 dark:text-white dark:hover:text-[#D7EF55] focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            
                            Log in
                          </a> --}}

                          {{-- @if (Route::has('register'))
                              <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-white dark:hover:text-[#D7EF55] focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                          @endif --}}

                          <button onclick="Livewire.emit('buttonClicked')" type="button" class="flex ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-white dark:hover:text-[#D7EF55]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 13.5l3 3m0 0l3-3m-3 3v-6m1.06-4.19l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                            </svg>
                            Download My Resume
                        </button>
                        <livewire:recruiters.form />
                      @endauth
                  </div>
                @endif
              </div>
            </nav>
          </header>
      
          <main id="main" class="bg-[#131313]">
            <div class="h-[500px] flex justify-center items-center">
              <div class="text-white">

                <h1 class="text-center text-3xl md:text-5xl font-bold">
                  Tech news for those who<br />
                  don't have time to read news
                </h1>
                <p
                  class="px-8 md:w-1/2 mx-auto text-center mt-4 text-xl text-[#A5A5A5]"
                >
                  Stay ahead of the curve! Dive into rapid-fire tech updates, trends, and breakthroughs, curated for those who crave knowledge but race against time. Never miss a beat in the thrilling world of technology.
                </p>
                <div class="mt-4 flex justify-center items-center">
                  <iframe
                    src="https://embeds.beehiiv.com/bc2525d7-6e27-4e33-b2bb-451d3f382dfc?slim=true"
                    data-test-id="beehiiv-embed"
                    height="52"
                    frameborder="0"
                    scrolling="no"
                    style="
                      margin: 0;
                      border-radius: 0px !important;
                      background-color: transparent;
                    "
                  ></iframe>
                </div>
                <p class="text-center mt-4 text-[#868686]">
                  1 email every Saturday. Unsubscribe anytime.
                </p>
              </div>
            </div>
            <div
              class="grid grid-cols-1 md:grid-cols-3 gap-4 text-white py-8 max-w-7xl mx-auto px-8"
            >
              <div class="bg-[#1e1e1e] rounded p-12">
                <h1 class="text-2xl font-bold mb-2">Newsletter</h1>
                <p class="text-[#a5a5a5]">
                  Read my previous newsletter issues on how to productize your skill.
                </p>
                <button
                  class="bg-[#272727] hover:bg-[#e7e7e7] px-4 py-2 rounded mt-8 hover:text-[#131313] flex items-center"
                >
                  <span class="relative flex h-3 w-3 mr-4">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#D7EF55] opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-[#D7EF55]"></span>
                  </span>
                  <span>Under development</span>
                </button>
              </div>

              {{-- <div class="bg-[#1e1e1e] rounded p-12">
                <h1 class="text-2xl font-bold mb-2">Resources</h1>
                <p class="text-[#a5a5a5]">
                  Access free resources and discover different opportunities, ideas,
                  and tools.
                </p>
                <button
                  class="bg-[#272727] hover:bg-[#e7e7e7] px-4 py-2 rounded mt-8 hover:text-[#131313] flex items-center"
                >
                  <span class="relative flex h-3 w-3 mr-4">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#D7EF55] opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-[#D7EF55]"></span>
                  </span>
                  <span>Under development</span>
                </button>
              </div> --}}

              <div class="bg-[#1e1e1e] rounded p-12">
                <h1 class="text-2xl font-bold mb-2">Latest Projects</h1>
                <p class="text-[#a5a5a5]">
                  Take a moment to dive into my latest work. I'm eager to share them with you.
                </p>
                <button
                  class="bg-[#272727] hover:bg-[#e7e7e7] px-4 py-2 rounded mt-8 hover:text-[#131313] flex items-center"
                >
                  <span class="relative flex h-3 w-3 mr-4">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#D7EF55] opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-[#D7EF55]"></span>
                  </span>
                  <span>Under development</span>
                </button>
              </div>

              <div class="bg-[#1e1e1e] rounded p-12">
                <h1 class="text-2xl font-bold mb-2">Courses</h1>
                <p class="text-[#a5a5a5]">
                  Access lessons and frameworks that will help you code and productize
                  your skill.
                </p>
                <button
                  class="bg-[#272727] hover:bg-[#e7e7e7] px-4 py-2 rounded mt-8 hover:text-[#131313] flex items-center"
                >
                  <span class="relative flex h-3 w-3 mr-4">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#D7EF55] opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-[#D7EF55]"></span>
                  </span>
                  <span>Under development</span>
                </button>
              </div>
            </div>
          </main>
          <footer
            class="bg-[#131313] border border-b-1 border-[#1E1E1E] py-8 text-[#6B6B6B] px-8"
          >
            <div class="max-w-7xl mx-auto flex justify-between">
              <p>© 2023 Pedro Lopes. All rights reserved.</p>
              <div class="flex">
                <a href="" class="ml-2">
                  <svg
                    width="24"
                    height="24"
                    viewBox="0 0 48 48"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M24 4C12.9543 4 4 12.9543 4 24C4 35.0457 12.9543 44 24 44C35.0457 44 44 35.0457 44 24C44 12.9543 35.0457 4 24 4ZM0 24C0 10.7452 10.7452 0 24 0C37.2548 0 48 10.7452 48 24C48 37.2548 37.2548 48 24 48C10.7452 48 0 37.2548 0 24Z"
                      fill="#333"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M19.1833 45.4716C18.9898 45.2219 18.9898 42.9973 19.1833 38.798C17.1114 38.8696 15.8024 38.7258 15.2563 38.3667C14.437 37.828 13.6169 36.1667 12.8891 34.9959C12.1614 33.8251 10.5463 33.64 9.89405 33.3783C9.24182 33.1165 9.07809 32.0496 11.6913 32.8565C14.3044 33.6634 14.4319 35.8607 15.2563 36.3745C16.0806 36.8883 18.0515 36.6635 18.9448 36.2519C19.8382 35.8403 19.7724 34.3078 19.9317 33.7007C20.1331 33.134 19.4233 33.0083 19.4077 33.0037C18.5355 33.0037 13.9539 32.0073 12.6955 27.5706C11.437 23.134 13.0581 20.2341 13.9229 18.9875C14.4995 18.1564 14.4485 16.3852 13.7699 13.6737C16.2335 13.3589 18.1347 14.1343 19.4734 16.0001C19.4747 16.0108 21.2285 14.9572 24.0003 14.9572C26.772 14.9572 27.7553 15.8154 28.5142 16.0001C29.2731 16.1848 29.88 12.7341 34.5668 13.6737C33.5883 15.5969 32.7689 18.0001 33.3943 18.9875C34.0198 19.9749 36.4745 23.1147 34.9666 27.5706C33.9614 30.5413 31.9853 32.3523 29.0384 33.0037C28.7005 33.1115 28.5315 33.2855 28.5315 33.5255C28.5315 33.8856 28.9884 33.9249 29.6465 35.6117C30.0853 36.7362 30.117 39.948 29.7416 45.247C28.7906 45.4891 28.0508 45.6516 27.5221 45.7347C26.5847 45.882 25.5669 45.9646 24.5669 45.9965C23.5669 46.0284 23.2196 46.0248 21.837 45.8961C20.9154 45.8103 20.0308 45.6688 19.1833 45.4716Z"
                      fill="#333"
                    />
                  </svg>
                </a>
                <a href="" class="ml-2">
                 <svg
                    width="24"
                    height="24"
                    viewBox="0 0 48 48"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                      cx="9"
                      cy="8.00012"
                      r="4"
                      fill="none"
                      stroke="#333"
                      stroke-width="4"
                    />
                    <rect
                      x="5"
                      y="18.0001"
                      width="8"
                      height="25"
                      fill="none"
                      stroke="#333"
                      stroke-width="4"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M21 27.5V43H28V29C28 26.5 29.5 24.5 32 24.5C34.5 24.5 36 27 36 29V43H43V27.5C43 24.5 39.5 18 32 18C24.5 18 21 24.5 21 27.5Z"
                      fill="none"
                      stroke="#333"
                      stroke-width="4"
                      stroke-linejoin="round"
                    />
                  </svg>
                </a>
                <a href="" class="ml-2">
                  <svg
                    width="24"
                    height="24"
                    viewBox="0 0 48 48"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M5 35.7622C6.92886 36.8286 20.8914 44.8773 30.8199 38.674C40.7483 32.4707 40.2006 21.7833 40.2006 16.886C41.1 15.0018 43 14.0439 43 8.9438C41.1337 10.6678 39.2787 11.2544 37.435 10.7036C35.6287 7.94957 33.1435 6.73147 29.9794 7.04934C25.2333 7.52614 23.4969 12.1825 24.0079 18.2067C16.6899 21.9074 10.9515 15.524 7.99418 10.7036C7.00607 14.4999 6.0533 19.0576 7.99418 24.0995C9.2881 27.4607 12.3985 30.3024 17.3254 32.6246C12.3323 35.3308 8.22382 36.3766 5 35.7622Z"
                      fill="none"
                      stroke="#333"
                      stroke-width="4"
                      stroke-linejoin="round"
                    />
                  </svg>
                </a>
                <a href="" class="ml-2">
                 <svg
                    width="24"
                    height="24"
                    viewBox="0 0 48 48"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M11.0637 10.4144C16.6069 10.1381 20.9183 10 23.998 10C27.0781 10 31.3911 10.1382 36.937 10.4145V10.4145C39.9391 10.5641 42.3672 12.9119 42.6176 15.9072C42.8712 18.9412 42.998 21.6134 42.998 23.9238C42.998 26.2626 42.8681 28.972 42.6082 32.0522H42.6082C42.3586 35.0103 39.9833 37.3412 37.021 37.5349C32.2796 37.845 27.9386 38 23.998 38C20.058 38 15.7186 37.845 10.9798 37.5351V37.5351C8.01852 37.3414 5.6437 35.0119 5.39288 32.055C5.12966 28.9518 4.99805 26.2414 4.99805 23.9238C4.99805 21.6341 5.12651 18.961 5.38345 15.9044L5.38346 15.9044C5.63514 12.9103 8.06274 10.564 11.0637 10.4144Z"
                      fill="none"
                      stroke="#333"
                      stroke-width="4"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M21 19.6092V28.406C21 28.8794 21.3838 29.2631 21.8571 29.2631C22.0252 29.2631 22.1896 29.2137 22.3298 29.1211L28.9274 24.7605C29.3223 24.4995 29.4308 23.9677 29.1698 23.5728C29.1074 23.4784 29.0269 23.3973 28.933 23.3341L22.3354 18.8979C21.9426 18.6337 21.41 18.7381 21.1458 19.1309C21.0508 19.2723 21 19.4388 21 19.6092Z"
                      fill="none"
                      stroke="#333"
                      stroke-width="4"
                      stroke-linejoin="round"
                    />
                  </svg>
                </a>
                <a href="#" class="ml-2">
                  <svg
                    width="24"
                    height="24"
                    viewBox="0 0 48 48"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M34 6H14C9.58172 6 6 9.58172 6 14V34C6 38.4183 9.58172 42 14 42H34C38.4183 42 42 38.4183 42 34V14C42 9.58172 38.4183 6 34 6Z"
                      fill="none"
                      stroke="#333"
                      stroke-width="4"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M24 32C28.4183 32 32 28.4183 32 24C32 19.5817 28.4183 16 24 16C19.5817 16 16 19.5817 16 24C16 28.4183 19.5817 32 24 32Z"
                      fill="none"
                      stroke="#333"
                      stroke-width="4"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M35 15C36.1046 15 37 14.1046 37 13C37 11.8954 36.1046 11 35 11C33.8954 11 33 11.8954 33 13C33 14.1046 33.8954 15 35 15Z"
                      fill="#333"
                    />
                  </svg>
                </a>
              </div>
            </div>
          </footer>
        </div>
</x-guest-layout>