

<legend> <h1 class="text-center">All transactions</h1></legend> 
<hr class="pt-2 pb-2">
<table class="table table-hover w-75 m-auto bg-white">
  <thead>
    <tr>
      <th scope="col">user  </th>
      <th scope="col">item name</th>
      <th scope="col">quantity</th>
      <th scope="col">total</th>
      <th scope="col">created at</th>
      <th scope="col">updated at</th>
      <th scope="col">update</th>
      <th scope="col"> delete</th>
    </tr>
  </thead>
  <tbody>
   
  <?php foreach ($data->transaction_info as $transaction) : ?>
      <td><?= $transaction->display_name?></td>
      <td><?= $transaction->item_name?></td>
      <td><?= $transaction->quantity?></td>
      <td><?= $transaction->total?></td>
      <td><?= $transaction->created_at?></td>
      <td><?= $transaction->updated_at?></td>
      <td><a  class="btn btn-warning" href="transaction/edit?id=<?=$transaction->selling_id?>">update</a></td>
      <td><a class="btn btn-danger" href="transaction/delete?id=<?=$transaction->id?>">delete</a></td>
      
      
    </tr>
    <?php endforeach ?>
  </tbody>
</table>