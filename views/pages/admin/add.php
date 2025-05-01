<?php $view->component("header")?>
    <div class="container">
        <h1>Add New Item</h1>
        <form action="/admin/add" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" id="price" name="price" step="0.01" required>
            </div>
            <div class="form-group">
                <button type="submit">Add Item</button>
            </div>
        </form>
    </div>
<?php $view->component("footer")?>