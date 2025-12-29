<div class="bg-gray-100 flex flex-col items-center justify-center min-h-screen"> 
      <?php echo isset($_SESSION['error']) ? "<p class='bg-red-100 text-red-700 border border-red-300 rounded-md p-3 mb-4'>{$_SESSION['error']}</p>" : ''; ?>
     <section class="w-full max-w-md"> 
         <form method="POST" action="" class="bg-white p-6 rounded-lg shadow-lg space-y-4"> 
             <div> 
                 <label class="block text-sm font-semibold text-gray-700">Email</label> 
                 <input type="email" name="email" class="mt-1 w-full rounded-md border border-gray-300 shadow-sm focus:border-green-600 focus:ring-green-600" required> 
             </div>  
             <div> 
                 <label class="block text-sm font-semibold text-gray-700">Password</label> 
                 <input type="password" name="password" class="mt-1 w-full rounded-md border border-gray-300 shadow-sm focus:border-green-600 focus:ring-green-600" required>
             </div> 
             
             <button type="submit" class="w-full text-white font-semibold py-2 px-4 rounded-md hover:bg-green-500 transition" style="background-color:#2f5d50; color:#f8f5f0;"> Login </button> 
             <p class=" pl-3">Don't have account ? <a  class="text-sky-500 hover:text-green-600"  href="/register">Sign up</a></p></a>
          </form> 
           
    </section>
</div>