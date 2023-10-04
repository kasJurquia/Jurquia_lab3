<?= view('/admin/top'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIFT SHOP</title>
    <link rel="stylesheet" href="your-css-styles.css"> <!-- Include your CSS styles here -->
</head>
<body style="background-color: lightpink;">
    <header>
        <nav>
            <ul>
                <li><a href="/logout"><i class="material-icons">&#xE879;</i> Log Out</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <h1>GIFT <span class="shop-text">SHOP</span></h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Item Name</th>
                    <th>Item Description</th>
                    <th>Item Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($items)):
                    foreach ($items as $item): ?>
                        <tr>
                            <td><img src="/uploads/<?= $item['image']; ?>" alt="<?= $item['name']; ?>" width="100"></td>
                            <td><?= $item['name']; ?></td>
                            <td><?= $item['description']; ?></td>
                            <td><?= $item['price']; ?></td>
                            <td>
                                <a href="/edit/<?= $item['id'] ?>" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                <a href="/delete/<?= $item['id'] ?>" class="delete"><i data-toggle="tooltip" class="material-icons" title="Delete">&#xE872;</i></a>
                            </td>
                        </tr>
                    <?php endforeach; else: ?>
                    <tr>
                        <td colspan="4">No items found</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <div id="addEmployeeModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: lightpink;">
                    <h2 style="color: white;">GIFTOS PRODUCTS</h2>
                </div>
                <div class="modal-body">
                    <form method="post" action="/save" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= isset($pro['id']) ? $pro['id'] : '' ?>">
                        <div class="form-group">
                            <label for="image">Item Image</label>
                            <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required value="<?= isset($pro['name']) ? $pro['name'] : '' ?>">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required><?= isset($pro['description']) ? $pro['description'] : '' ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" id="price" name="price" required value="<?= isset($pro['price']) ? $pro['price'] : '' ?>">
                        </div>
                </div>
                <div class="modal-footer">
                    <a href="/admin" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>