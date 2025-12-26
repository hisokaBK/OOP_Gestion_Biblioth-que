<section class="flex justify-center mt-2">
<header class="bg-gray-900 shadow-md fixed w-[90%] rounded-full">
    <nav class="container mx-auto flex justify-between items-center py-3 px-[5%]">
      <h1 class="text-2xl font-bold text-blue-600">D-<span class="text-blue-400 font-thin">Wave</span> </h1>
      <ul class="flex space-x-6">
        <li><a href="/home"
               class="<?php echo $_SERVER['REQUEST_URI']=='/home'?'text-blue-600 font-medium':'hover:text-blue-600 text-white' ?>">home</a></li>

        <li><a href="/services"
              class="<?php echo  $_SERVER['REQUEST_URI']=='/services'?'text-blue-600 font-medium':'hover:text-blue-600 text-white'?>">Services</a></li>

        <li><a href="/about"
             class="<?php echo  $_SERVER['REQUEST_URI']=='/about'?'text-blue-600 font-medium':'hover:text-blue-600 text-white' ?>">À propos</a></li>
             
        <li><a href="/contact"
             class="<?php echo  $_SERVER['REQUEST_URI']!='/contact'?'text-white hover:text-blue-600':'text-blue-600 font-medium' ?>">Contact</a>
        </li>
        <li class="<?php echo isset($_SESSION['role']) && $_SESSION['role']=='admin'?'':'hidden'?>"><a href="/dashboard"
             class="<?php echo  $_SERVER['REQUEST_URI']!='/dashboard'?'text-white hover:text-blue-600':'text-blue-600 font-medium' ?> ">dashboard</a>
        </li>
      </ul>
      <ul class="flex space-x-6">
          <li class="<?php echo isset($_SESSION['logined'])?'hidden':''?>"><a href="/login"
             class="<?php echo  $_SERVER['REQUEST_URI']!='/login'?'text-white hover:text-blue-600':'text-blue-600 font-medium' ?>">Sign in</a>
          </li>
          <li class="<?php echo isset($_SESSION['logined'])?'hidden':''?>"><a href="/register"
             class="<?php echo  $_SERVER['REQUEST_URI']!='/register'?'text-white border border-gray-400 px-2 py-[2px] rounded-xl hover:text-blue-600 hover:border-blue-600':'text-blue-600 font-medium'?>">Sign up</a>
          </li>

          <li class="<?php echo !isset($_SESSION['logined'])?'hidden':'text-white hover:text-blue-600'?>"><a href="/controller_sign_out">Sign out</a>
          </li>
          <li class="<?php echo !isset($_SESSION['logined'])?'hidden':''?>"><a href="/profil"><img src="assets/images/prof.png" alt="profil" class="rounded-full h-[31px] w-[31px]"></a>
          </li>
      </ul>
    </nav>
  </header>
  </section>
  <div class="h-10"></div>
