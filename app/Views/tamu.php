<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <h1>Form Buku tamu</h1><br>
    <table class="table table-primary table-striped">
  <thead>
    <tr>
      <th scope="col">Tanggal berkunjung</th>
      <th scope="col">Nama </th>
      <th scope="col">alamat</th>
      <th scope="col">No telp</th>
      <th scope="col">keperluan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
        <?php foreach ($all_data_tamu as $tamu ): ?>
            <tr>
                <td><?= $tamu->tgl_berkunjung?></td>
                <td><?= $tamu->nama_tamu?></td>
                <td><?= $tamu->alamat?></td>
                <td><?= $tamu->no_telepon?></td>
                <td><?= $tamu->keperluan?></td>
                <td>
                    <a href="<?= ('edit_data_tamu').'/'.$tamu->id?>" class="btn btn-success">Edit</a>
                    <a href="<?= ('delete_data_tamu').'/'.$tamu->id?>" class="btn btn-danger">Delete</a>
            </td>
            </tr>
        <?php endforeach ?>
        
  </tbody>
</table>
    <br>
    <a href="<?= ('add_data_tamu')?>" class="btn btn-primary">+ Tambah data tamu</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>