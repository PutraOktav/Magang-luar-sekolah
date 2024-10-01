<!-- crud.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Karir - Nokt Tech</title>
    <link rel="shortcut icon" href="../public/images/logo/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <?php include_once('../views/layouts/header.php'); ?>

    <main class="mt-10">
        <h1 class="text-4xl font-bold text-center mb-6 text-white">Manage Data</h1>

        <section class="container mx-auto px-4">
            <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
                <h2 class="text-3xl font-semibold mb-4 text-gray-800">Select Table to Manage</h2>
                <select id="tableSelect" class="border px-4 py-2">
                    <option value="users">User</option>
                    <option value="program">Program</option>
                    <option value="agenda">Agenda</option>
                    <option value="berita">Berita</option>
                    <option value="galeri">Galeri</option>
                    <option value="karir">Karir</option>
                    <option value="pelatih">Pelatih</option>
                    <option value="peserta">Peserta</option>
                </select>
                <button onclick="loadTable()" class="bg-blue-500 text-white px-4 py-2 rounded">Load Table</button>
                <button onclick="showCreateModal()" class="bg-green-500 text-white px-4 py-2 rounded">Create New</button>
            </div>

            <div id="tableContainer" class="bg-white p-6 rounded-lg shadow-lg"></div>
        </section>

        <!-- Create Modal -->
        <div id="createModal" class="hidden fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-center justify-center min-h-screen">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-bold mb-4">Create New Record</h2>
                    <form id="createForm">
                        <!-- Dynamic form fields will be inserted here -->
                        <div id="createFields"></div>
                        <button type="button" onclick="createRecord()" class="bg-green-500 text-white px-4 py-2 rounded">Create</button>
                        <button type="button" onclick="closeCreateModal()" class="bg-gray-500 text-white px-4 py-2 rounded">Cancel</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Edit Modal -->
        <div id="editModal" class="hidden fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-center justify-center min-h-screen">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-bold mb-4">Edit Record</h2>
                    <form id="editForm">
                        <!-- Dynamic form fields will be inserted here -->
                        <div id="editFields"></div>
                        <button type="button" onclick="saveChanges()" class="bg-green-500 text-white px-4 py-2 rounded">Simpan</button>
                        <button type="button" onclick="closeModal()" class="bg-gray-500 text-white px-4 py-2 rounded">Batalkan</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php include_once('../views/layouts/footer.php'); ?>

    <script src="../public/js/crud.js"></script>
</body>

</html>