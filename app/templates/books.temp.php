<section class="bg-gray-100">

<nav class="bg-gray-50 shadow p-4 flex justify-around">
    <h1 class="text-xl font-bold"> Library </h1>

    <?php if (isset($_SESSION['user'])): ?>
        <div class="text-gray-700">
            Welcome, <b><?= $_SESSION['user']->getFirstName() ?></b>
        </div>
    <?php endif; ?>
</nav>

<div class="max-w-6xl mx-auto mt-8">
    <h2 class="text-2xl font-bold mb-6">Available Books</h2>

    <?php if (count($_SESSION['books'])==0): ?>
        <p class="text-gray-500">No books found.</p>
    <?php else: ?>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-20">
            <?php foreach ($_SESSION['books'] as $book): ?>
                
                  <div class="flex bg-white rounded-xl shadow p-5 min-w-[400px]">
                    <div>
                      <h3 class="text-lg font-semibold text-gray-800">
                          <?= htmlspecialchars($book->getTitle()) ?>
                      </h3>
  
                      <p class="text-gray-600 mt-1">
                          Author: <?= htmlspecialchars($book->getAuthor()) ?>
                      </p>
  
                      <p class="text-sm text-gray-500">
                          Year: <?= $book->getYear() ?>
                      </p>
  
                      <p class="text-sm text-gray-500">
                          Created_at: <?= $book->getCreated_at()?>
                      </p>
  
                      <div class="mt-4">
                              <span class="<?php echo $book->getStatus()=='available'?'text-green-600':'text-red-600'?> font-semibold"><?=$book->getStatus()?></span>
                      </div>
  
                      <div class="mt-4 flex justify-around w-[100%]">
                          
                              <a href="/oneBook?id=<?= $book->getId() ?>"
                                 class=" min-w-[120px] inline-block bg-[#2f5d50] text-white px-4 py-2 rounded hover:opacity-90">
                                  More info
                              </a>

                          <?php if (isset($_SESSION['user']) && $_SESSION['user']->getRole() === 'admin'): ?>
                         
                              <a href="editBook?id=<?= $book->getId() ?>"
                                 class=" min-w-[20px] inline-block border hover:bg-yellow-500 text-black px-4 py-2 rounded">
                                  Edit
                              </a>
                              <a href="/delete?id=<?= $book->getId() ?>"
                                 class=" min-w-[20px] inline-block border hover:bg-red-600 text-black px-4 py-2 rounded">
                                  Delete
                              </a>
                          <?php endif; ?>
                          
                      </div>
                  </div>
                  <div>
                      <a class="block" href="/oneBook?id=<?= $book->getId() ?>"> 
                        <img src="/public\assets\images\foter.gif" alt="ndfjxnkmsdkl">
                      </a>
                  </div>
                </div>
            
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>
</section>
