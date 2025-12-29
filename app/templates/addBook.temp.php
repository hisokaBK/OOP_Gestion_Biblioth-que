
<section class="min-h-screen bg-gray-100 flex items-center justify-center">

    <div class="bg-white w-full max-w-lg rounded-xl shadow-lg p-8">

        <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">
            Add New Book
        </h2>

        <?php if (isset($_SESSION['success'])): ?>
            <div class="mb-4 p-3 rounded bg-green-100 text-green-700">
                <?= $_SESSION['success']; unset($_SESSION['success']); ?>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION['error'])): ?>
            <div class="mb-4 p-3 rounded bg-red-100 text-red-700">
                <?= $_SESSION['error']; unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>

        <form action="/addBook" method="POST" class="space-y-4">

            <div>
                <label class="block text-gray-700 mb-1">Title</label>
                <input type="text" name="title"
                       class="w-full border rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#2f5d50]"
                       required>
            </div>

            <div>
                <label class="block text-gray-700 mb-1">Author</label>
                <input type="text" name="author"
                       class="w-full border rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#2f5d50]"
                       required>
            </div>

            <div>
                <label class="block text-gray-700 mb-1">Year</label>
                <input type="number" name="year"
                       class="w-full border rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#2f5d50]"
                       required>
            </div>

            <div>
                <label class="block text-gray-700 mb-1">Image</label>
                <input type="text" name="image"
                       placeholder="/public/assets/images/book.jpg"
                       class="w-full border rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#2f5d50]"
                       required>
            </div>

            <div>
                <label class="block text-gray-700 mb-1">Description</label>
                <textarea name="description" rows="4"
                          class="w-full border rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#2f5d50]"
                          required></textarea>
            </div>

            <div class="text-center pt-4">
                <button type="submit"
                        class="bg-[#2f5d50] text-white px-6 py-2 rounded-lg hover:opacity-90 transition">
                    Add Book
                </button>
            </div>

        </form>

    </div>

</section>
