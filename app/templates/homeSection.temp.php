

 <?php if (isset($_SESSION['user'])): ?>
                <span class="text-gray-700">
                    Welcome <b><?= $_SESSION['user']->getFirstName(); ?></b>
                </span>

<?php endif ?>
<section class="min-h-[70%] bg-gray-100 flex flex-col py-16">


    <div class="flex-1 flex items-center justify-center">
        <div class="text-center max-w-2xl px-6">

            <div class="text-center py-14"> <h2 class="text-4xl font-bold mb-4" style="color:#2f5d50;">Welcome to BibLioXt</h2> <p class="text-gray-700 max-w-2xl mx-auto"> Your modern library platform — browse, borrow, and manage books with ease.
                
                This platform allows users to explore books, manage borrowing,
                and helps administrators organize the library efficiently.
                Simple, fast, and user-friendly.
            </p>
        </div>

            <div class="flex justify-center gap-4">
                <a href="/books"
                   class="bg-[#2f5d50] text-white px-6 py-3 rounded-lg text-lg hover:opacity-90">
                    Get your Book
                </a>

                <a href="/about"
                   class="border border-[#2f5d50] text-[#2f5d50] px-6 py-3 rounded-lg text-lg">
                    Learn More
                </a>
            </div>

        </div>
    </div>

  

</section>
