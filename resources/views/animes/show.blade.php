i
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Show Data CRUD</title>
</head>

<body>
    <div class="container mt-4">
        <table class="table">
            <thead>
                <h4>Show Data Anime</h4>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Tahun Terbit</th>
                    <th scope="col">Gambar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $anime->id }}</td>
                    <td>{{ $anime->title }}</td>
                    <td>{{ $anime->genre }}</td>
                    <td>{{ $anime->release_year }}</td>
                    <td>
                        <div>
                            @if ($anime->image)
                                <img src="{{ asset('storage/' . $anime->image) }}" class="img img-responsive"
                                    style="height: 75px; width: 75px; object-fit:cover" />
                            @else
                                <img src="https://source.unsplash.com/200x400?" {{ $anime->image }}
                                    class="img img-responsive" style="height: 75px; width: 75px; object-fit:cover" />
                            @endif
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('animes.index') }}" class="btn btn-primary shadow mb-1">Back to List</a>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
