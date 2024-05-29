<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milk Tea Storage Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f9fc;
            color: #333;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        .login-container, .dashboard, .inventory-management, .modal {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }

        .login-container {
            max-width: 400px;
            margin: 100px auto;
        }

        h1, h2, h3 {
            color: #4CAF50;
        }

        input[type="text"], input[type="password"], input[type="number"], input[type="date"], select, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th, .table td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .table th {
            background-color: #f2f2f2;
            color: #333;
        }

        .actions {
            display: flex;
            justify-content: space-between;
        }

        .actions button {
            margin-right: 10px;
        }

        .modal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000;
            width: 400px;
        }

        .modal.show {
            display: block;
        }

        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        .overlay.show {
            display: block;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h1>Login</h1>
    <input type="text" placeholder="Username">
    <input type="password" placeholder="Password">
    <button>Login</button>
</div>

<div class="container dashboard">
    <h2>Dashboard</h2>
    <div class="actions">
        <button onclick="showAddItemModal()">Add New Item</button>
        <button>Import Inventory</button>
        <button>Export Inventory</button>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>Item Name</th>
            <th>Category</th>
            <th>Quantity</th>
            <th>Unit</th>
            <th>Purchased Date</th>
            <th>Expiration Date</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <!-- Inventory items will be populated here -->
        </tbody>
    </table>
</div>

<div class="modal" id="addItemModal">
    <h3>Add/Edit Item</h3>
    <input type="text" placeholder="Item Name">
    <select>
        <option value="tea">Tea</option>
        <option value="milk">Milk</option>
        <option value="toppings">Toppings</option>
        <option value="sweeteners">Sweeteners</option>
    </select>
    <input type="number" placeholder="Quantity">
    <select>
        <option value="liters">Liters</option>
        <option value="grams">Grams</option>
        <option value="pieces">Pieces</option>
    </select>
    <input type="date" placeholder="Purchase Date">
    <input type="date" placeholder="Expiration Date">
    <textarea placeholder="Notes"></textarea>
    <button>Save</button>
    <button onclick="hideAddItemModal()">Cancel</button>
</div>

<div class="overlay" id="overlay" onclick="hideAddItemModal()"></div>

<script>
    function showAddItemModal() {
        document.getElementById('addItemModal').classList.add('show');
        document.getElementById('overlay').classList.add('show');
    }

    function hideAddItemModal() {
        document.getElementById('addItemModal').classList.remove('show');
        document.getElementById('overlay').classList.remove('show');
    }
</script>

</body>
</html>