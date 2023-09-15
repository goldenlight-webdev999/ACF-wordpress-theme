<!DOCTYPE html>
<html lang="en">

<?php
  $title = get_the_title();
?>

<head>
  <meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
    href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri()?>/assets/images/favicon.svg" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <title><?php echo $title;?></title>
	<meta name="description" content="mla <?php echo $title;?>">
	<meta name="keywords" content="mla <?php echo $title;?>">
	<meta name="robots" content="index, follow">
</head>

<body>
  <div class="overflow-hidden">
    <header class="max-w-[1300px] lg:px-[30px] px-5 mx-auto lg:py-[32px] py-3">
      <nav class="navbar">
        <div class="flex flex-wrap lg:justify-start justify-between items-center mx-auto">
          <a href="index.html" class="flex items-center">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/brand.svg" alt="" />
          </a>
          <button data-collapse-toggle="mega-menu-full" type="button"
            class="inline-flex items-center p-2 lg:w-10 w-12 lg:h-10 h-11 justify-center text-sm text-black-1000 rounded-lg lg:hidden bg-pink-1000 hover:bg-blue-1000 hover:text-white focus:outline-none "
            aria-controls="mega-menu-full" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="xl:w-5 xl:h-5 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M1 1h15M1 7h15M1 13h15" />
            </svg>
          </button>
          <div id="mega-menu-full"
            class="lg:ml-[52px] ml-0 items-center justify-between font-medium hidden w-full lg:flex lg:w-auto lg:order-1 lg:bg-transparent bg-gray-1200 lg:static lg:top-0 lg:left-0 lg:border-0 absolute top-[68px] left-0  z-[1000]">
            <ul class="lg:flex items-center flex-col  md:p-0 md:flex-row text-base font-medium font-inter">
              <li class="lg:mr-[29px] hover:underline">
                <a href="#" class="block text-nav-clr lg:py-0 py-2.5 lg:px-0 px-[15px]"
                  aria-current="page">Home</a>
              </li>
              <li class="lg:mr-[29px] hover:underline">
                <a href="#" class="block text-nav-clr lg:py-0 py-2.5 lg:px-0 px-[15px] ">Feature</a>
              </li>
              <li
                class="menu lg:mr-[29px] cursor-pointer hover:underline hover:after:opacity-100 relative after:content-[''] after:bg-transparent after:opacity-0 after:w-full after:h-9 after:absolute after:-bottom-8 after:left-0">
                <button id="pages-btn"
                  class="flex items-center justify-between text-nav-clr lg:py-0 py-2.5 lg:px-0 px-[15px]"
                  aria-expanded="false">Pages
                  <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="2" d="m1 1 4 4 4-4"></path>
                  </svg>
                </button>
                <div
                  class="lg:w-[611px] w-full overflow-hidden menu-box transition-all border border-gray-1300 duration-500 ease-in-out rounded-[7px] lg:absolute mx-auto z-[9999] p-[30px] lg:left-1/2 lg:translate-x-[-50%] bg-bg-cards lg:top-[90px] lg:opacity-0 lg:invisible text-gray-900 dark:text-white  lg:px-6">
                  <div class="overflow-hidden">
                    <div
                      class="grid sm:grid-cols-3 gap-10 overflow-hidden grid-cols-2 relative z-[9999]">
                      <div>
                        <h6 class="text-2xl text-black font-plus-jakarta font-bold mb-2.5">Pages
                        </h6>
                        <ul>
                          <li>
                            <a href="#"
                              class="font-inter text-black text-base hover:underline block py-[6px]">Home</a>
                          </li>
                          <li>
                            <a href="#"
                              class="font-inter text-black text-base hover:underline block py-[6px]">Home
                              2</a>
                          </li>
                          <li>
                            <a href="#"
                              class="font-inter text-black text-base hover:underline block py-[6px]">Home
                              3</a>
                          </li>
                          <li>
                            <a href="#"
                              class="font-inter text-black text-base hover:underline block py-[6px]">Feature</a>
                          </li>
                          <li>
                            <a href="#"
                              class="font-inter text-black text-base hover:underline block py-[6px]">Pricing</a>
                          </li>
                          <li>
                            <a href="#"
                              class="font-inter text-black text-base hover:underline block py-[6px]">Pricing
                              (Ecom)</a>
                          </li>
                          <li>
                            <a href="#"
                              class="font-inter text-black text-base hover:underline block py-[6px]">Integrations</a>
                          </li>
                          <li>
                            <a href="#"
                              class="font-inter text-black text-base hover:underline block py-[6px]">Request
                              a
                              Demo</a>
                          </li>
                          <li>
                            <a href="#"
                              class="font-inter text-black text-base hover:underline block py-[6px]">About
                              Us</a>
                          </li>

                          <li>
                            <a href="#"
                              class="font-inter text-black text-base hover:underline block py-[6px]">Services</a>
                          </li>
                          <li>
                            <a href="#"
                              class="font-inter text-black text-base hover:underline block py-[6px]">Careers</a>
                          </li>
                        </ul>
                      </div>
                      <div>
                        <h6
                          class="text-2xl text-black opacity-0 font-plus-jakarta font-bold mb-2.5">
                          Blog
                        </h6>
                        <ul>
                          <li>
                            <a href="#"
                              class="font-inter text-black text-base hover:underline block py-[6px]">
                              Team</a>
                          </li>
                          <li>
                            <a href="#"
                              class="font-inter text-black text-base hover:underline block py-[6px]">
                              Customers Reviews</a>
                          </li>
                          <li>
                            <a href="#"
                              class="font-inter text-black text-base hover:underline block py-[6px]">
                              Contact</a>
                          </li>
                          <li>
                            <a href="#"
                              class="font-inter text-black text-base hover:underline block py-[6px]">Feature</a>
                          </li>
                          <li>
                            <a href="#"
                              class="font-inter text-black text-base hover:underline block py-[6px]">
                              FAQs</a>
                          </li>
                          <li>
                            <a href="#"
                              class="font-inter text-black text-base hover:underline block py-[6px]">
                              Coming Soon</a>
                          </li>
                          <li>
                            <a href="#"
                              class="font-inter text-black text-base hover:underline block py-[6px]">
                              Link In Bio</a>
                          </li>
                          <li>
                            <a href="#"
                              class="font-inter text-black text-base hover:underline block py-[6px]">
                              Error 404</a>
                          </li>
                          <li>
                            <a href="#"
                              class="font-inter text-black text-base hover:underline block py-[6px]">
                              Password Protected</a>
                          </li>

                          <li>
                            <a href="#"
                              class="font-inter text-black text-base hover:underline block py-[6px]">
                              Privacy Policy</a>
                          </li>
                          <li>
                            <a href="#"
                              class="font-inter text-black text-base hover:underline block py-[6px]">Terms
                              & Conditions</a>
                          </li>
                        </ul>
                      </div>
                      <div>
                        <h6 class="text-2xl text-black font-plus-jakarta font-bold mb-2.5">
                            User Pages
                        </h6>
                        <ul>
                          <li>
                            <a href="#"
                              class="font-inter text-black text-base hover:underline block py-[6px]">Log
                              In
                            </a>
                          </li>
                          <li>
                            <a href="#"
                              class="font-inter text-black text-base hover:underline block py-[6px]">
                              Sign Up
                            </a>
                          </li>
                          <li>
                            <a href="#"
                              class="font-inter text-black text-base hover:underline block py-[6px]">
                              Reset Password</a>
                          </li>
                          <li>
                            <a href="#"
                              class="font-inter text-black text-base hover:underline block py-[6px]">
                              Update Password</a>
                          </li>
                          <li>
                            <a href="#"
                              class="font-inter text-black text-base hover:underline block py-[6px]">Email
                              Conformation</a>
                          </li>
                        </ul>
                        <h6 class="text-2xl text-black mt-7 font-plus-jakarta font-bold mb-2.5">
                          Utility Pages
                        </h6>
                        <ul>
                          <li>
                            <a href="#"
                              class="font-inter text-black text-base hover:underline block py-[6px]">Style
                              Guide
                            </a>
                          </li>
                          <li>
                            <a href="#"
                              class="font-inter text-black text-base hover:underline block py-[6px]">
                              Instructions
                            </a>
                          </li>
                          <li>
                            <a href="#"
                              class="font-inter text-black text-base hover:underline block py-[6px]">
                              Licenses
                            </a>
                          </li>
                          <li>
                            <a href="#"
                              class="font-inter text-black text-base hover:underline block py-[6px]">
                              Changelog</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div
                      class="bg-menu-bg blur-[120px] absolute opacity-[0.5] rounded-tl-[50%] rounded-bl-[50%] rounded-br-[50%] bottom-0 left-0 right-0 top-[16%] rotate-[-40deg] md:w-[580px] w-[88%] h-[280px]">
                    </div>
                  </div>
                </div>
              </li>
              <li class="lg:mr-[29px] hover:underline">
                <a href="#" class="block text-nav-clr  lg:py-0 py-2.5 lg:px-0 px-[15px]">Pricing</a>
              </li>
              <li class="hover:underline">
                <a href="#" class="block text-nav-clr lg:py-0 py-2.5 lg:px-0 px-[15px]">Integrations</a>
              </li>
            </ul>
          </div>
          <div class="nav-btn order-2 ml-auto lg:block hidden">
            <a href="#"
              class="inline-flex hover:bg-purple hover:text-white bg-sky-blue rounded-[7px] text-base font-inter font-medium text-d-black px-[25px] py-2">Sign
              up</a>
          </div>
        </div>
      </nav>
    </header>