/**
 * Show the create modal and generate dynamic form fields
 */
function showCreateModal() {
  const table = document.getElementById("tableSelect").value;
  fetch(`admin/get_columns.php?table=${table}`)
    .then((response) => response.json())
    .then((data) => {
      const createFields = document.getElementById("createFields");
      createFields.innerHTML = `
                <input type="hidden" name="table" value="${table}">
            `;
      data.forEach((column) => {
        createFields.innerHTML += `
                    <label class="block mb-2">${column}</label>
                    <input type="text" name="${column}" class="border px-4 py-2 mb-4 w-full">
                `;
      });
      document.getElementById("createModal").classList.remove("hidden");
    })
    .catch((error) => console.error("Error:", error));
}

/**
 * Handle form submission for creating a new record
 */
function createRecord() {
  const formData = new FormData(document.getElementById("createForm"));
  fetch("admin/create_record.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.text())
    .then((data) => {
      alert(data);
      closeCreateModal();
      loadTable(); // Reload table to show the new record
    })
    .catch((error) => console.error("Error:", error));
}

/**
 * Close the create modal
 */
function closeCreateModal() {
  document.getElementById("createModal").classList.add("hidden");
}

/**
 * Load data dari database berdasarkan tabel yang dipilih
 * @param {string} table nama tabel yang ingin di-load
 */
function loadTable() {
  const table = document.getElementById("tableSelect").value;
  fetch(`admin/load_table.php?table=${table}`)
    .then((response) => response.text())
    .then((data) => {
      document.getElementById("tableContainer").innerHTML = data;
    })
    .catch((error) => console.error("Error:", error));
}

/**
 * Menampilkan form edit berdasarkan id dan tabel yang dipilih
 * @param {number} id id record yang ingin di-edit
 * @param {string} table nama tabel yang ingin di-edit
 */
function editRecord(id, table) {
  fetch(`admin/fetch_record.php?id=${id}&table=${table}`)
    .then((response) => response.json())
    .then((data) => {
      const editFields = document.getElementById("editFields");
      editFields.innerHTML = `
                    <input type="hidden" name="table" value="${table}">
                    <input type="hidden" name="id" value="${id}">
                `;
      for (const key in data) {
        editFields.innerHTML += `
                        <label class="block mb-2">${key}</label>
                        <input type="text" name="${key}" value="${data[key]}" class="border px-4 py-2 mb-4 w-full">
                    `;
      }
      document.getElementById("editModal").classList.remove("hidden");
    })
    .catch((error) => console.error("Error:", error));
}

/**
 * Simpan perubahan yang telah dilakukan
 */
function saveChanges() {
  const formData = new FormData(document.getElementById("editForm"));
  fetch("admin/update_record.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.text())
    .then((data) => {
      alert(data);
      closeModal();
      loadTable();
    })
    .catch((error) => console.error("Error:", error));
}

/**
 * Tutup modal edit
 */
function closeModal() {
  document.getElementById("editModal").classList.add("hidden");
}

/**
 * Hapus record berdasarkan id dan tabel yang dipilih
 * @param {number} id id record yang ingin dihapus
 * @param {string} table nama tabel yang ingin dihapus
 */
function deleteRecord(id, table) {
  if (confirm("Are you sure you want to delete this record?")) {
    const formData = new FormData();
    formData.append("id", id);
    formData.append("table", table);

    fetch("admin/delete_record.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.text())
      .then((data) => {
        alert(data);
        loadTable();
      })
      .catch((error) => console.error("Error:", error));
  }
}
