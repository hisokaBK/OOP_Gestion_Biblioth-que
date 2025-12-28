<section class="container mx-auto py-16">

  <div class="max-w-6xl mx-auto p-8 shadow-lg rounded-lg"
       style="background-color:#f8f5f0;">

    <div class="flex justify-between items-center mb-6">
      <h2 class="text-3xl font-bold" style="color:#2f5d50;">
        Users Dashboard
      </h2>

      <h2 class="text-3xl font-bold" style="color:#2f5d50;">
        <span class="border px-3 rounded-full font-semibold"
              style="border-color:#2f5d50; color:#2f5d50;">
          <?php echo count($_SESSION['users'])?>
        </span>
      </h2>
    </div>

    <div class="flex gap-6">
      <img src="assets/images/dachbor.gif" alt="Dashboard Illustration"
           class="w-48 h-48 rounded-lg shadow-md border"
           style="border-color:#2f5d50;">

      <table class="w-full border-collapse rounded-lg overflow-hidden shadow-md">
        <thead>
          <tr style="background-color:#2f5d50; color:#f8f5f0;" class="text-left">
            <th class="px-4 py-2">ID</th>
            <th class="px-4 py-2">Name</th>
            <th class="px-4 py-2">Email</th>
            <th class="px-4 py-2">Created At</th>
            <th class="px-4 py-2">Role</th>
          </tr>
        </thead>
        <tbody>
                
          <?php if (count($_SESSION['users']) > 0) : ?>
              <?php foreach ($_SESSION['users'] as $user): ?>
                  <tr class="hover:bg-[#fffdf8]">
                      <td class="border px-4 py-2"><?php echo $user->getId(); ?></td>
                      <td class="border px-4 py-2"><?php echo $user->getFirstName() . " ". $user->getLastName(); ?></td>
                      <td class="border px-4 py-2"><?php echo $user->getEmail(); ?></td>
                      <td class="border px-4 py-2"><?php echo $user->getCreated_at(); ?></td>
                      <td class="border px-4 py-2"><?php echo $user->getRole(); ?></td>
                  </tr>
              <?php endforeach; ?>
          <?php else: ?>
              <tr>
                  <td colspan="5" class="text-center py-4 text-gray-500">
                      No users found
                  </td>
              </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>

</section>
