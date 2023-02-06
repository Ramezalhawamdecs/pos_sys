<div class="mt-5 d-flex flex-row-reverse gap-3">
    <a href="/users" class="btn btn-success">Back</a>
</div>



<form class="mx-auto col-lg-6 col-md-10 col-sm-12 col-xs-12 shadow border border-4 p-5 bg-white rounded">
    
  <fieldset disabled>
    
  <legend> <h1 class="text-center">Information</h1></legend> 
    <hr class="pt-0 pb-2">
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Display name :</label>
      <input type="text"  class="form-control" placeholder="<?= $data->user->display_name ?>">
    </div>

    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Email :</label>
      <input type="text"  class="form-control" placeholder="<?= $data->user->email ?>">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">User name :</label>
      <input type="text"  class="form-control" placeholder="<?= $data->user->username ?>">
    </div> 
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">User role :</label>
      <input type="text"  class="form-control" placeholder="<?= $data->user->role ?>">
    </div>
     <div class="mb-3">
      <label for="disabledTextInput" class="form-label">User create at :</label>
      <input type="text"  class="form-control" placeholder="<?= $data->user->created_at ?>">
    </div> 
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">User updated_at :</label>
      <input type="text"  class="form-control" placeholder="<?= $data->user->updated_at ?>">
    </div>

     
    
    </fieldset>
    <a href="/users/edit?id=<?= $data->user->id ?>" class="btn btn-warning">Edit</a>
    <a href="/users/delete?id=<?= $data->user->id ?>" class="btn btn-danger">Delete</a>
 
</form>

