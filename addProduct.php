

<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product List</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
  </head>

  <body>
    <form action="./index.php" method="POST"  class="w-75 m-auto" >
    <div class="container">
        <div class="my-5">
            <div class="row justify-content-between">

                <h2 class="fw-semi-bold col-6 my-3">Add Product</h2>
    
                <div class="col-4 row justify-content-evenly">
    
                    <button type="submit" name="addProduct" class="btn btn-primary my-3 col-lg-4 col-md-5 col-sm-5">Save</button>
                    <button type="reset" onclick="location.href='./index.php';" class="my-3 btn btn-secondary col-lg-4 col-md-5 col-sm-5">Cancel</button>
    
                </div>
            </div>
    
            <hr>    
        <div class="my-3">
            <label for="sku">Enter SKU</label>
            <input type="text" class="form-control" required name="SKU" id="sku">
        </div>
        
        <div class="my-3">
            <label for="name">Enter Product Name</label>
            <input type="text" class="form-control" required name="name">
        </div>
        
        <div class="my-3">
            <label for="price">Enter Price</label>
            <input type="number" class="form-control" required name="price">
        </div>

        <div class="my-3">
            <select name="type" id="type" required class="form-select" onchange="displayInputs(this.value)">
                <option selected disabled>Select product type</option>
                <option value="Book">Book</option>
                <option value="DVD">DVD</option>
                <option value="Furniture">Furniture</option>
            </select>
        </div>
        <div class="my-3" id="Book" class="type" style="display: none;">
            <label for="price">Enter Book Weight (Kg)</label>
            <input type="number" step="0.05" class="form-control extra BookInput detailInput" name="weight">
        </div>

        <div class="my-3" id="DVD" class="type" style="display: none;">
            <label for="price">Enter DVD Size (MB)</label>
            <input type="number" class="form-control extra DVDInput detailInput" name="size">
        </div>
        
        <div id="Furniture" class="type" style="display: none;">
        <div class="my-3">
            <label for="price">Enter Height (CM)</label>
            <input type="number" step="0.05" class="form-control extra FurnitureInput detailInput" name="height">
        </div>
        
        <div class="my-3">
            <label for="price">Enter Width (CM)</label>
            <input type="number" step="0.05" class="form-control extra FurnitureInput detailInput" name="width">
        </div>
        
        <div class="my-3">
            <label for="price">Enter length (CM)</label>
            <input type="number" step="0.05" class="form-control extra FurnitureInput detailInput" name="length">
        </div>
    </div>
</form>
</div>
</div>

  
<script src="./src/Classes/js/test.js"></script>
</body>
</html>