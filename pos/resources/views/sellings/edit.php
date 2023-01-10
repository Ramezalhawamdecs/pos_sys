

<form action="/selling/update" method="POST" class="mx-auto col-lg-6 col-md-10 col-sm-12 col-xs-12 shadow border border-4 p-5 bg-white rounded">
<div class="d-flex justify-content-center mb-3">
<legend> <h1 class="text-center">Edit selling</h1></legend>
</div>
<hr class="pt-0 pb-2">

<input type="hidden" name="id" value="<?= $data->item->id ?>">
    <div class="mb-3">
        <label for="item-name" class="form-label">item Name</label>
        <input type="text" class="form-control" id="item-name" name="item_name" value="<?= $data->item->item_name ?>">
    </div>
    <div class="mb-3">
        <label for="user-email" class="form-label">price</label>
        <input type="price" class="form-control" id="user-price" name="selling_price" value="<?= $data->item->selling_price ?>">
    </div>
    <div class="mb-3">
        <label for="user-username" class="form-label">quantity</label>
        <input type="text" class="form-control" id="quantity-email" name="quantity" value="<?= $data->item->quantity ?>">
    </div>
    <div class="mb-3">
        <label for="user-username" class="form-label">total</label>
        <input type="text" class="form-control" readonly disabled id="quantity-email" name="total" value="<?= $data->item->total ?>">
    </div>
    
    
    <button type="submit" class="btn btn-warning mt-4">Update</button>
   

</form>