
<div class="mt-5 d-flex flex-row-reverse gap-3">
    <a href="\transaction" class="btn btn-success">Back</a>
</div>


<form action="/transaction/update" method="POST" class="mx-auto col-lg-6 col-md-10 col-sm-12 col-xs-12 shadow border border-4 p-5 bg-white rounded">
<div class="d-flex justify-content-center mb-3">
<legend> <h1 class="text-center">Edit transaction</h1></legend> 
</div>
<hr class="pt-0 pb-2">
<input type="hidden" name="id" value="<?= $data->datas->id ?>">
    <div class="mb-3">
        <label for="item-title" class="form-label">item name</label>
        <input type="text" class="form-control" id="item-title" name="item_name" value="<?= $data->datas->item_name ?>">
    </div>
    <div class="mb-3">
        <label for="item-title" class="form-label">item cost</label>
        <input type="text" class="form-control" id="item-title" name="selling_price" value="<?= $data->datas->selling_price ?> JOD">
    </div>
    <div class="mb-3">
        <label for="item-title" class="form-label">Quantity</label>
        <input type="text" class="form-control" id="item-title" name="quantity" value="<?= $data->datas->quantity?>">
    </div>
    <div class="mb-3">
        <label for="item-title" class="form-label">Toatal</label>
        <input type="text" class="form-control" id="item-title" name="total" value="<?= $data->datas->total?> JOD" readonly> 
    </div>
    
    <button type="submit" class="btn btn-warning mt-4">Update</button>
</form>