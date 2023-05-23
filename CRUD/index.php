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
    <!-- Navbar -->
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
    <div class="container">
        <figure>
            <p class="h1 text-center mt-5">Data Film</p>
            <blockquote class="blockquote">
                <p>Data Film di Bioskop.</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                CRUD <cite title="Source Title">Create Read Update Delete</cite>
            </figcaption>
        </figure>
    </div>
    <!-- Table -->
    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Category</th>
                        <th>Thubnail</th>
                        <th><a href="tambah.html"><button type="button" class="btn btn-primary">Tambah</button></a></th>
                    </tr>
                </thead>
                <tbody>
                    <td>f001</td>
                    <td>Dora</td>
                    <td>Pertualangan mencari harta karun</td>
                    <td>Anak-anak</td>
                    <td><img src="img/img3.jpeg" class="img-fluid " alt="..." style="width: 100px;"></td>
                    <td>
                        <a href="update.html"><button type="button" class="btn btn-success btn-sm"
                                style="width: 75px;">Update</button></a>
                        <button type="button" class="btn btn-danger btn-sm" style="width: 75px;">delete</button>
                    </td>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>