<!DOCTYPE html>
<html>
<head>
    <title>Book Details</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 20px;">

    <h1 style="color: #333; text-align: center; margin-bottom: 20px;">{{ $book->title }}</h1>

    <p style="font-size: 18px; color: #555; margin-bottom: 10px;">Author: {{ $book->author }}</p>

    <p style="font-size: 16px; color: #666;">{{ $book->description }}</p>

    <a href="{{ route('BooksIndex') }}" style="display: inline-block; margin-top: 20px; padding: 10px 20px; background-color: #007BFF; color: white; text-align: center; text-decoration: none; font-size: 16px; border-radius: 4px;">Back to List</a>

</body>
</html>
