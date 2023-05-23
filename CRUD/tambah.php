<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <!-- Nav -->
    <div>
        <nav class="navbar navbar-light bg-light fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="img/img1.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    Modul
                </a>
            </div>
        </nav>
    </div>
    <!-- Judul -->
    <p class="h2 text-center m-5">Tambah Data</p>
    <!-- form -->
    <div class="container">
        <div class="mb-3">
            <label for="id" class="form-label">Id Film</label>
            <input type="text" class="form-control" id="id" placeholder="Id Film">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Judul Film">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <input type="text" class="form-control" id="content" placeholder="Konten Film">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text" class="form-control" id="category" placeholder="Category">
        </div>
        <div class="mb-3">
            <label for="thumbnail" class="form-label">Thumbnail</label>
            <input class="form-control" type="file" id="thumbnail">
        </div>
        <button type="button" class="btn btn-success btn-sm float-end m-3" style="width: 75px;">Tambah</button>
        <a href="index.html"><button type="button" class="btn btn-danger btn-sm float-end m-3"
                style="width: 75px;">Kembali</button></a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>

</html>