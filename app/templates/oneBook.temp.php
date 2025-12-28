<section class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="flex bg-[#f8f5f0] rounded-xl shadow-md p-6 gap-6 hover:shadow-lg transition max-w-3xl">

    <div class="flex-1">
      <h3 class="text-2xl font-bold text-gray-800">
        <?= htmlspecialchars($_SESSION['oneBooks']->getTitle()) ?>
      </h3>

      <p class="text-gray-700 mt-2">
        Author: <?= htmlspecialchars($_SESSION['oneBooks']->getAuthor()) ?>
      </p>

      <p class="text-sm text-gray-600 mt-1">
        Year: <?= $_SESSION['oneBooks']->getYear() ?>
      </p>

      <p class="text-sm text-gray-600 mt-1">
        Created_at: <?= $_SESSION['oneBooks']->getCreated_at() ?>
      </p>

      <div class="mt-4">
        <span class="font-semibold text-lg" style="color:#2f5d50;">
          <?= $_SESSION['oneBooks']->getStatus() ?>
        </span>
      </div>

      <div class="mt-6 space-x-2">
        <?php if (isset($_SESSION['user']) && $_SESSION['user']->getRole() === 'reader' && $_SESSION['oneBooks']->getStatus()=='available'): ?>
          <a href="/oneBook?id=<?= $_SESSION['oneBooks']->getId() ?>"
             class="inline-block bg-[#2f5d50] text-[#f8f5f0] px-5 py-2 rounded-md hover:opacity-90 transition font-semibold">
            Borrow
          </a>
        <?php endif; ?>

        <?php if (isset($_SESSION['user']) && $_SESSION['user']->getRole() === 'admin'): ?>
          <a href="edit.php?id=<?= $_SESSION['oneBooks']->getId() ?>"
             class="inline-block bg-yellow-500 text-white px-5 py-2 rounded-md hover:bg-yellow-600 transition font-semibold">
            Edit
          </a>
          <a href="delete.php?id=<?= $_SESSION['oneBooks']->getId() ?>"
             class="inline-block bg-red-600 text-white px-5 py-2 rounded-md hover:bg-red-700 transition font-semibold">
            Delete
          </a>
        <?php endif; ?>
      </div>
    </div>

    <div class="flex-shrink-0">
      <img src="/public/assets/images/foter.gif" alt="Book Illustration"
           class="w-40 h-40 object-cover rounded-lg border shadow-md"
           style="border-color:#2f5d50;">
    </div>
  </div>

</section>
