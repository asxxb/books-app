<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 20px;">

    <h1 style="text-align: center; color: #333;">Edit Book</h1>

    <form action="{{ route('BooksUpdate', $book->id) }}" method="POST" style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        @csrf
        @method('PUT')

        <div style="margin-bottom: 15px;">
            <label for="title" style="display: block; font-weight: bold; margin-bottom: 5px;">Title:</label>
            <input type="text" id="title" name="title" value="{{ $book->title }}" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="author" style="display: block; font-weight: bold; margin-bottom: 5px;">Author:</label>
            <input type="text" id="author" name="author" value="{{ $book->author }}" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="description" style="display: block; font-weight: bold; margin-bottom: 5px;">Description:</label>
            <textarea id="description" name="description" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; min-height: 100px;">{{ $book->description }}</textarea>
        </div>

        <button type="submit" style="background-color: #4CAF50; color: white; border: none; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin-top: 10px; cursor: pointer; border-radius: 4px;">
            Update
        </button>
    </form>

    <a href="{{ route('BooksIndex') }}" style="display: block; margin-top: 20px; text-align: center; color: #007BFF; text-decoration: none; font-size: 16px;">Back to List</a>

</body>
</html>
