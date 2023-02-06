<?php

use Core\Helpers\Helper;
?>
<div class="mt-5 d-flex flex-row-reverse gap-3">
    
        <a href="/items/edit?id=<?= $data->item->id ?>" class="btn btn-warning">Edit</a>
    
        <a href="/items/delete?id=<?= $data->item->id ?>" class="btn btn-danger">Delete</a>
  
</div>

<div class="my-5">
    <!-- for admins -->
    <h1 class="text-center">
        <?= $data->item->item_name ?>
    </h1>

    <p>
       cost : <?= $data->item->cost ?>
    </p>
    <p>
        selling price :<?= $data->item->selling_price ?>
    </p>
    <p>
      quantity  : <?= $data->item->quantity ?>
    </p>
    <p>
       created at :  <?= $data->item->created_at?>
    </p>
    <p>
       updated at:  <?= $data->item->updated_at ?>
    </p>
    
        
</div>