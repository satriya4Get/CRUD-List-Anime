@extends('layouts.app')

@section('content')
<style>
    /* button */
    #tambah-data-button {
        background-color: #004cff;
        color: #ffffff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-left: 45%;
        margin-bottom: 20px;
    }

    #tambah-data-button:hover {
        background-color: rgb(0, 128, 255);
    }

    /* Add some basic styling to make the form look good */
    form {
        max-width: 500px;
        margin: 40px auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 10px;
    }

    input,
    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
    }

    button {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #3e8e41;
    }
</style>

<body>
    <form action="{{ route('animes.update', $anime->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- Method PUT untuk update data -->
        <h2>Edit Anime</h2>

        <label for="image">Image:</label>
        <input type="file" id="image" name="image">

        <label for="name">Name:</label>
        <input type="text" id="title" name="title" value="{{ $anime->title }}">

        <label for="name">Rating:</label>
        <input type="text" id="rating" name="rating" value="{{ $anime->rating }}">

        <label for="genre">Genre:</label>
        <input type="text" id="genre" name="genre" value="{{ $anime->genre }}">

        <label for="description">Description:</label>
        <textarea id="description" name="description">{{ $anime->description }}</textarea>

        <button type="submit">Update Anime</button>
    </form>
</body>
@endsection
