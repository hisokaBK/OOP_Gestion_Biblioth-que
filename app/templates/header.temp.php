<section class="flex justify-center mt-2">
<header class="bg-stone-900 shadow-md fixed w-[90%] rounded-full">
    <nav class="container mx-auto flex justify-between items-center py-3 px-[5%]">

      <h1 class="text-2xl font-bold text-emerald-500">
        BibLio<span class="text-amber-400 font-thin">Xt</span>
      </h1>

      <ul class="flex space-x-6">
        <li><a href="/home"
               class="<?php echo $_SERVER['REQUEST_URI']=='/home' || $_SERVER['REQUEST_URI']=='/' 
               ?'text-emerald-500 font-medium'
               :'hover:text-emerald-400 text-stone-200' ?>">Home</a>
       </li>

        <li><a href="/books"
              class="<?php echo $_SERVER['REQUEST_URI']=='/books'
              ?'text-emerald-500 font-medium'
              :'hover:text-emerald-400 text-stone-200' ?>">books</a>
        </li>

        <li><a href="/about"
             class="<?php echo $_SERVER['REQUEST_URI']=='/about'
             ?'text-emerald-500 font-medium'
             :'hover:text-emerald-400 text-stone-200' ?>">À propos</a>
        </li>

        <li class="<?php echo isset($_SESSION['user']) && $_SESSION['user']['role']=='admin'?'':'hidden'?>">
          <a href="/dashboard"
             class="<?php echo $_SERVER['REQUEST_URI']!='/dashboard'
             ?'text-stone-200 hover:text-emerald-400'
             :'text-emerald-500 font-medium' ?>">Dashboard</a>
        </li>
      </ul>

      <ul class="flex space-x-6">
          <li class="<?php echo isset($_SESSION['user'])?'hidden':''?>">
            <a href="/login"
             class="<?php echo $_SERVER['REQUEST_URI']!='/login'
             ?'text-stone-200 hover:text-emerald-400'
             :'text-emerald-500 font-medium' ?>">Sign in</a>
          </li>

          <li class="<?php echo isset($_SESSION['user'])?'hidden':''?>">
            <a href="/register"
             class="<?php echo $_SERVER['REQUEST_URI']!='/register'
             ?'text-stone-200 border border-amber-400 px-2 py-[2px] rounded-xl hover:text-amber-400 hover:border-emerald-400'
             :'text-emerald-500 font-medium' ?>">Sign up</a>
          </li>

          <li class="<?php echo !isset($_SESSION['user'])?'hidden':'text-stone-200 hover:text-emerald-400'?>">
            <a href="/logout">Sign out</a>
          </li>

          <li class="<?php echo !isset($_SESSION['user'])?'hidden':''?>">
            <a href="/profil">
              <img src="assets/images/prof.png" alt="profil"
                   class="rounded-full h-[31px] w-[31px] border border-amber-400">
            </a>
          </li>
      </ul>

    </nav>
</header>
</section>
<div class="h-10"></div>
