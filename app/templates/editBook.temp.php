<form action="/editBook" method="POST" 
      class="bg-[#f8f5f0] p-6 rounded-lg shadow-md space-y-4 max-w-lg mx-auto">

  <!-- Hidden ID -->
  <input type="hidden" name="id" value="<?= $_SESSION['oneBooks']->getId() ?>">

  <!-- Title -->
  <div>
    <label class="block text-sm font-semibold text-gray-700">Title</label>
    <input type="text" name="title" 
           value="<?= htmlspecialchars($_SESSION['oneBooks']->getTitle()) ?>"
           class="mt-1 w-full rounded-md border border-gray-300 shadow-sm focus:border-[#2f5d50] focus:ring-[#2f5d50] bg-[#fffdf8] p-2"
           required>
  </div>

  <!-- Author -->
  <div>
    <label class="block text-sm font-semibold text-gray-700">Author</label>
    <input type="text" name="author" 
           value="<?= htmlspecialchars($_SESSION['oneBooks']->getAuthor()) ?>"
           class="mt-1 w-full rounded-md border border-gray-300 shadow-sm focus:border-[#2f5d50] focus:ring-[#2f5d50] bg-[#fffdf8] p-2"
           required>
  </div>

  <!-- Year -->
  <div>
    <label class="block text-sm font-semibold text-gray-700">Year</label>
    <input type="number" name="year" 
           value="<?= $_SESSION['oneBooks']->getYear() ?>"
           class="mt-1 w-full rounded-md border border-gray-300 shadow-sm focus:border-[#2f5d50] focus:ring-[#2f5d50] bg-[#fffdf8] p-2"
           required>
  </div>

  <div>
    <label class="block text-sm font-semibold text-gray-700">Image URL</label>
    <input type="text" name="image" 
           value="<?= $_SESSION['oneBooks']->getImage() ?>"
           class="mt-1 w-full rounded-md border border-gray-300 shadow-sm focus:border-[#2f5d50] focus:ring-[#2f5d50] bg-[#fffdf8] p-2">
  </div>

  <div>
    <label class="block text-sm font-semibold text-gray-700">Description</label>
    <textarea name="description"
              class="mt-1 w-full rounded-md border border-gray-300 shadow-sm focus:border-[#2f5d50] focus:ring-[#2f5d50] bg-[#fffdf8] p-2 h-24"><?= htmlspecialchars($_SESSION['oneBooks']->getDescription()) ?></textarea>
  </div>

  <div>
    <label class="block text-sm font-semibold text-gray-700">Status</label>
    <select name="status"
            class="mt-1 w-full rounded-md border border-gray-300 shadow-sm focus:border-[#2f5d50] focus:ring-[#2f5d50] bg-[#fffdf8] p-2">
      <option value="available" <?= $_SESSION['oneBooks']->getStatus() === 'available' ? 'selected' : '' ?>>Available</option>
      <option value="borrowed" <?= $_SESSION['oneBooks']->getStatus() === 'borrowed' ? 'selected' : '' ?>>Borrowed</option>
    </select>
  </div>

  <button type="submit"
          class="w-full bg-[#2f5d50] text-[#f8f5f0] font-semibold py-2 px-4 rounded-md hover:opacity-90 transition">
    Update
  </button>
</form>
