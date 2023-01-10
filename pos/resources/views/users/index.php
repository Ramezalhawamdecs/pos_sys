<h1 class=" d-flex  justify-content-around mb-3">Users List (<?= $data->users_count ?>)</h1>
<hr class="w-75 m-auto mb-3">
<div class="row m-5">
    <table class="table table-hover w-75 m-auto bg-white">
        <thead class="thead-light">
            <tr>
                <th scope="col">Display Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data->users as $user) : ?>
                <tr>
                    <td><?= $user->display_name ?></td>
                    <td><a href="./user?id=<?= $user->id ?>" class="btn btn-primary">Check User</a></td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>

</div>
