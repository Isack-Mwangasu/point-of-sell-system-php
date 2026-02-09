<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap-5.3.7-dist/css/bootstrap.min.css">
    <script src="assets/bootstrap-5.3.7-dist/js/bootstrap.bundle.min.js"></script>
    <title>Point of Sale System</title>
</head>
<body>
    <?php include 'links.php'; ?>

    <div class="container pt-5 mt-4">
        <div class="card">
            <div class="card-header">New Products</div>
            <div class="card-body">
                <form method="post">
                    <div class="mb-3">
                        <label for="productName" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="productName" name="product_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="productCode" class="form-label">Product Code</label>
                        <input type="text" class="form-control" id="productCode" name="product_code" required>
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" min="0" step="1" required>
                    </div>
                    <div class="mb-3">
                        <label for="buyingPrice" class="form-label">Buy Price (KSh)</label>
                        <input type="number" class="form-control" id="buyingPrice" name="buying_price" min="0" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="sellingPrice" class="form-label">Selling Price (KSh)</label>
                        <input type="number" id="sellingPrice" name="selling_price" min="0" step="0.01" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Save Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>