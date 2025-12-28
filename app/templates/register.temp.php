<div class="bg-gray-100 flex flex-col items-center justify-center min-h-screen"> 
    <?php echo isset($_SESSION['error']) ? "<p class='bg-red-100 text-red-700 border border-red-300 rounded-md p-3 mb-4'>{$_SESSION['error']}</p>" : ''; ?>
  <section class="w-full max-w-md"> 
    <form method="POST" action="" class="p-6 rounded-lg shadow-lg" style="background-color:#f8f5f0;">

       <div class="mb-4"> 
         <label class="block text-sm font-semibold text-gray-800">First Name</label> 
           <input type="text" name="firstName" class="mt-1 w-full rounded-md border border-gray-300 shadow-sm focus:border-[#2f5d50] focus:ring-[#2f5d50]" style="background-color:#fffdf8;" required> 
        </div> 

        <div class="mb-4">
               <label class="block text-sm font-semibold text-gray-800">Last Name</label> 
               <input type="text" name="lastName" class="mt-1 w-full rounded-md border border-gray-300 shadow-sm focus:border-[#2f5d50] focus:ring-[#2f5d50]" style="background-color:#fffdf8;" required>
         </div> 

        <div class="mb-4"> 
            <label class="block text-sm font-semibold text-gray-800">Email</label> 
            <input type="email" name="email" class="mt-1 w-full rounded-md border border-gray-300 shadow-sm focus:border-[#2f5d50] focus:ring-[#2f5d50]" style="background-color:#fffdf8;" required>
        </div> 

        <div class="mb-4"> 
          <label class="block text-sm font-semibold text-gray-800">Password</label>
          <input type="password" name="password" class="mt-1 w-full rounded-md border border-gray-300 shadow-sm focus:border-[#2f5d50] focus:ring-[#2f5d50]" style="background-color:#fffdf8;" required minlength="6"> 
        </div> 

        <button type="submit" class="w-full font-semibold py-2 px-4 rounded-md transition hover:opacity-90" style="background-color:#2f5d50; color:#f8f5f0;"> Register </button> 
  </form> 

 </section> 
</div>