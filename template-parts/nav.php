<header>

  <div class="bg-slate-700 p-2 px-8 text-white">
    <div class="lg:flex lg:justify-between lg:items-center py-2">
      <div class="flex justify-between items-center space-x-8 font-serif cursor-pointer w-full">
        <div class="flex-grow uppercase"><a href="/"><?php echo get_bloginfo( 'name' ); ?></a></div>

        <div class="hidden group lg:block relative cursor-pointer py-2">
          <div class="flex items-center justify-between space-x-3 my-2">
            <a class="text-white" onClick="">
              The Team
            </a>
            <span class="group-hover:rotate-180">
              <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
              </svg>
            </span>
          </div>
          <div
            class="invisible absolute z-50 flex w-40 flex-col bg-gray-100 py-1 px-4 text-gray-800 shadow-xl group-hover:visible">
            <a href="/bio"
              class="my-2 block border-b border-gray-100 py-1 font-semibold text-gray-500 hover:text-black md:mx-2">
              Bio
            </a>
            <a href="/testimonials"
              class="my-2 block border-b border-gray-100 py-1 font-semibold text-gray-500 hover:text-black md:mx-2">
              Testimonials
            </a>
            <a onclick="connect_modal.showModal()"
              class="my-2 block border-b border-gray-100 py-1 font-semibold text-gray-500 hover:text-black md:mx-2">
              Contact
            </a>
          </div>
        </div>

        <div class="hidden lg:block border-b-2 border-transparent hover:border-white"><a href="/listings">Listings</a>
        </div>
        <div class="hidden lg:block border-b-2 border-transparent hover:border-white"><a
            href="/testimonials">Testimonials</a></div>
        <div class="hidden lg:block border-b-2 border-transparent hover:border-white"><a href="/sellers">Sellers</a>
        </div>
        <div class="hidden lg:block border-b-2 border-transparent hover:border-white"><a href="/buyers">Buyers</a>
        </div>
        <div class="hidden lg:block border-b-2 border-transparent hover:border-white"><a onclick="connect_modal.showModal()">Contact</a>
        </div>


        <div class="lg:hidden">
          <div class="group cursor-pointer py-2">
            <div class="flex items-center justify-between space-x-3 my-2">
              <svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <g stroke="none" stroke-width="1" fill="white" fill-rule="evenodd">
                  <g id="icon-shape">
                    <path
                      d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
                      id="Combined-Shape"></path>
                  </g>
                </g>
              </svg>

            </div>
            <div
              class="invisible absolute z-50 flex w-40 right-6 flex-col bg-gray-100 py-1 px-4 text-gray-800 shadow-xl group-hover:visible">
              <a href="/bio"
                class="my-2 block border-b border-gray-100 py-1 font-semibold text-gray-500 hover:text-black md:mx-2">
                Bio
              </a>
              <a href="/testimonials"
                class="my-2 block border-b border-gray-100 py-1 font-semibold text-gray-500 hover:text-black md:mx-2">
                Testimonials
              </a>
              <a href="/listings"
                class="my-2 block border-b border-gray-100 py-1 font-semibold text-gray-500 hover:text-black md:mx-2">
                Listings
              </a>
              <a href="/buyers"
                class="my-2 block border-b border-gray-100 py-1 font-semibold text-gray-500 hover:text-black md:mx-2">
                Buyers
              </a>
              <a href="/sellers"
                class="my-2 block border-b border-gray-100 py-1 font-semibold text-gray-500 hover:text-black md:mx-2">
                Sellers
              </a>
              <a onclick="connect_modal.showModal()"
                class="my-2 block border-b border-gray-100 py-1 font-semibold text-gray-500 hover:text-black md:mx-2">
                Contact
              </a>

            </div>
          </div>
        </div>
      </div>

      <?php
      // wp_nav_menu(
      //   array(
      //     'container_id' => 'primary-menu',
      //     'container_class' => 'hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
      //     'menu_class' => 'lg:flex lg:-mx-4',
      //     'theme_location' => 'primary',
      //     'li_class' => 'lg:mx-4',
      //     'fallback_cb' => false,
      //   )
      // );
      ?>
    </div>
  </div>
</header>