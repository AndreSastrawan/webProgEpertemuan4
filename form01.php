<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
    <h1>form data mahasiswa</h1>
    <form id="formmhs" onsumbit="tampildata(event)">

      <div class="mb-3">
        <label class="form-label">nama lengkap</label>
        <input type="text" id="nama" class="form-control">
</div>

<div class="mb-3">
        <label class="form-label">NIM</label>
        <input type="text" id="NIM" class="form-control">
</div>

<div class="mb-3">
        <label class="form-label">Prodi</label>
        <input type="text" id="Prodi" class="form-control">
</div>

  <button class="btn btn-info">kirim data</button>
    </form>
    <div class="alert alert-success  mt-4" role="alert">
      <h3 class="alert-heading mb-3"> data berhasil di kirim</h3>
      <p class="mb-1"> nama: <span id="resnama"></span></p>
      <p class="mb-1"> prodi:<span id="resprodi"></span> </p>
</div>
  </body>
</html>
