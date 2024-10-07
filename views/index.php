<body class="bg-gray-100">
    <?php include_once('admin/function.php'); ?>
    <?php include_once('../views/layouts/header.php'); ?>

    <div class="container mx-auto mb-8 px-4">
        <!-- Table selection -->
        <div class="mb-4">
            <label for="table-select" class="block text-sm font-medium text-gray-700">Select Table:</label>
            <select id="table-select" onchange="window.location.href='?table=' + this.value"
                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <?php foreach ($tables as $table): ?>
                <option value="<?= htmlspecialchars($table) ?>" <?= $table == $selectedTable ? 'selected' : '' ?>>
                    <?= htmlspecialchars($table) ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>

        <!-- Create form -->
        <h2 class="text-2xl font-bold mt-8 mb-4">Create New Record</h2>
        <form method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <input type="hidden" name="action" value="create">
            <?php foreach ($columns as $column): ?>
            <?php if ($column != 'id'): ?>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="<?= $column ?>">
                    <?= ucfirst($column) ?>
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="<?= $column ?>" name="<?= $column ?>" type="text">
            </div>
            <?php endif; ?>
            <?php endforeach; ?>
            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">Create Record</button>
            </div>
        </form>

        <!-- Data table -->
        <h2 class="text-2xl font-bold mt-8 mb-4">Records</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white sm">
                <thead>
                    <tr>
                        <?php foreach ($columns as $column): ?>
                        <th
                            class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            <?= ucfirst($column) ?>
                        </th>
                        <?php endforeach; ?>
                        <th
                            class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row): ?>
                    <tr>
                        <?php foreach ($columns as $column): ?>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                            <?= htmlspecialchars($row[$column]) ?>
                        </td>
                        <?php endforeach; ?>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                            <button onclick="showEditForm(<?= htmlspecialchars(json_encode($row)) ?>)"
                                class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded mr-2">Edit</button>
                            <form method="POST" class="inline">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                <button type="submit"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded"
                                    onclick="return confirm('Are you sure you want to delete this record?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

   <!-- Edit form (hidden by default) -->
<div id="editForm" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
    <div class="flex items-center justify-center h-full">
        <div class="bg-white rounded-lg shadow-lg max-w-md w-full p-6">
            <h3 class="text-lg font-medium leading-6 text-gray-900 mb-4">Edit Record</h3>
            <form method="POST">
                <input type="hidden" name="action" value="update">
                <input type="hidden" name="id" id="edit-id">
                <?php foreach ($columns as $column): ?>
                <?php if ($column != 'id'): ?>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="edit-<?= $column ?>">
                        <?= ucfirst($column) ?>
                    </label>
                    <input
                        class="shadow-sm border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                        id="edit-<?= $column ?>" name="<?= $column ?>" type="text">
                </div>
                <?php endif; ?>
                <?php endforeach; ?>
                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">Update Record</button>
                    <button type="button" onclick="hideEditForm()"
                        class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>


    </div>

    <?php include_once('../views/layouts/footer.php'); ?>

    <script>
        function showEditForm(row) {
            document.getElementById('editForm').style.display = 'block';
            document.getElementById('edit-id').value = row.id;
            <?php foreach ($columns as $column): ?>
            <?php if ($column != 'id'): ?>
            document.getElementById('edit-<?= $column ?>').value = row.<?= $column ?>;
            <?php endif; ?>
            <?php endforeach; ?>
        }

        function hideEditForm() {
            document.getElementById('editForm').style.display = 'none';
        }
    </script>
</body>
</html>
