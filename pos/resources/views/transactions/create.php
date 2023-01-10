

<form action="/items/store" method="POST" class="mx-auto col-lg-6 col-md-10 col-sm-12 col-xs-12 shadow border border-4 p-5 bg-white rounded">

<legend> <h1 class="text-center">Create item</h1></legend> 
<hr class="pt-0 pb-2">
    <div class="mb-3">
        <label for="item-title" class="form-label">item name</label>
        <input type="text" class="form-control" id="item-title" name="item_name">
    </div>
    <div class="mb-3">
        <label for="item-title" class="form-label">item cost</label>
        <input type="text" class="form-control" id="item-title" name="cost">
    </div>
    <div class="mb-3">
        <label for="item-title" class="form-label">item price</label>
        <input type="text" class="form-control" id="item-title" name="selling_price">
    </div>
    <div class="mb-3">
        <label for="item-title" class="form-label">item quantity</label>
        <input type="text" class="form-control" id="item-title" name="quantity">
    </div>
    
    
    <button type="submit" class="btn btn-success mt-4">Create</button>
</form>

