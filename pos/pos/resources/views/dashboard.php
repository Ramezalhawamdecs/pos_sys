<br>
<legend> <h1 class="text-center">Dashboard</h1></legend>  
<hr class="pt-0 pb-2">  
</div>

<div class="row my-5">
        <div class="htu-card-wrapper  mb-5 col-12 col-md-6 col-lg-4 col-xl-3" >
            <div class="card w-100">
                <div class="card-body card text-bg-info">
                    <p class="text-center">Total items</p>
                    <h5 class="card-title text-center">
                        <?= $data->items_count ?>
                    </h5>
                    
                </div>
            </div>
        </div>
        <div class="htu-card-wrapper mb-5 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card w-100">
                <div class="card-body card text-bg-danger">
                <p class="text-center"> Total users</p>
                    <h5 class="card-title text-center">
                        <?= $data->users_count ?>
                    </h5>
                    
                </div>
            </div>
        </div>
        <div class="htu-card-wrapper mb-5 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card w-100">
                <div class="card-body card text-bg-warning">
                <p class="text-center"> Total transaction</p>
                    <h5 class="card-title text-center">
                        <?= $data->total_transaction ?> 
                    </h5>
                    
                </div>
            </div>
        </div>
        <div class="htu-card-wrapper mb-5 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card w-100">
                <div class="card-body card text-bg-success">
                <p class="text-center"> Total sales</p>
                    <h5 class="card-title text-center">
                    <?= $data->total_sales ?>  JOD
                    </h5>
                    
                </div>
            </div>
        </div>
</div>

<h3 class="text-center">Top Five Expensive Item</h3>
<hr class="w-75 m-auto mb-3 ">
<table class="table table-hover w-75 m-auto  table-dark">
  <thead class="thead-light">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Item Name</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody >
    <?php foreach($data->top_five as $value): ?> 
    <tr>
        <td><?= $value->id ?></td>
        <td><?= $value->item_name ?></td>
        <td><?= $value->selling_price ?> JOD</td>
    </tr>
        <?php endforeach ?>
  </tbody>
</table>