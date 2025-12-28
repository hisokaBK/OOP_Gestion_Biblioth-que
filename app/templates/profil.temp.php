<div class="bg-gray-100 flex items-center justify-center min-h-screen"> 
    <section class="w-full max-w-sm"> 
        <div class="bg-white p-6 rounded-lg shadow-lg space-y-4 text-center">
             <div class="flex justify-center"> 
                <img src="https://via.placeholder.com/100" alt="User Avatar" class="w-24 h-24 rounded-full border-4 border-[#2f5d50] shadow-md"> 
            </div>
             <h2 class="text-xl font-bold text-gray-800"><?php echo $_SESSION['user']->getFirstName() ." " .$_SESSION['user']->getLastName() ?></h2>
              <p class="text-gray-600"><?php echo $_SESSION['user']->getEmail() ?></p> 
            <div class="space-y-2 text-left"> 
                <p><span class="font-semibold text-gray-700">First Name:</span> <?php echo $_SESSION['user']->getFirstName() ?></p>
                <p><span class="font-semibold text-gray-700">Last Name:</span> <?php echo $_SESSION['user']->getLastName() ?></p>
                <p><span class="font-semibold text-gray-700">Role:</span> <?php echo $_SESSION['user']->getRole() ?></p>
            </div>
            
            <a href="/logout"><button class="w-full bg-[#2f5d50] text-[#f8f5f0] font-semibold py-2 px-4 rounded-md hover:opacity-90 transition"> Sign out </button></a> 
        </div>
    </section>
</div>