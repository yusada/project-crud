<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Anime CRUD</title>
</head>

<body>
    <div class="container mt-4">
        <h6>Create Anime CRUD</h6>
        <form action="{{ route('animes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" name="title" class="form-control" id="title"
                        placeholder="Masukkan Judul" value="{{ old('title') }}">
                    @error('title')
                        <div>{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Genre</label>
                    <input type="text" name="genre" class="form-control" id="genre"
                        placeholder="Masukkan Genre" value="{{ old('genre') }}">
                    @error('genre')
                        <div>{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="release_year" class="form-label">Tahun Terbit</label>
                    <input type="text" name="release_year" class="form-control" id="release_year"
                        placeholder="Masukkan Tahun Terbit" value="{{ old('release_year') }}">
                    @error('release_year')
                        <div>{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <br>
                        <label for="image" class="form-label">Upload Gambar</label>
                        <img class="img-preview img-fluid">
                        <input class="form-control" type="file" id="image" name="image">
                        @error('image')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success shadow">Create</button>
                    <a href="{{ route('animes.index') }}" class="btn btn-primary shadow">Back to List</a>
                </div>
            </div>
            </tbody>
            </table>
        </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const ofReader = new FileReader();
            ofReader.readAsDataURL(img.files[0]);

            ofReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
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
