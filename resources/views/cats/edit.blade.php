<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <h1>Edit Cat {{ $cat->name }} </h1>

    <form action="{{ route('cats.update', $cat->id) }}" method="post">
    @csrf
        @method('PUT')
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $cat->name }}">
        <br>
        <label for="breed">Breed</label>
        <input type="text" name="breed" id="breed" value="{{ $cat->breed }}">
        <br>
        <label for="age">Age</label>
        <input type="number" name="age" id="age" value="{{ $cat->age }}">
        <br>
        <label for="color">Color</label>
        <input type="text" name="color" id="color" value="{{ $cat->color }}">
        <br>
        <label for="image_url">Image URL</label>
        <input type="text" name="image_url" id="image_url" value="{{ $cat->image_url }}">
        <br>
        <button type="submit">Update</button>

        </form>
</body>
</html>