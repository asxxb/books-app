<!DOCTYPE html>
<html>
<head>
    <title>Book Manager</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 20px;">

    <h1 style="text-align: center; color: #333;">Books</h1>

    <a href="{{ route('BooksCreate') }}" style="display: block; width: 200px; margin: 0 auto; padding: 10px; background-color: #4CAF50; color: white; text-align: center; text-decoration: none; font-size: 16px; border-radius: 4px;">Add New Book</a>

    <ul style="list-style-type: none; padding: 0; margin: 20px 0;">
        @foreach ($books as $book)
            <li style="margin-bottom: 10px; padding: 10px; border: 1px solid #ddd; border-radius: 4px; display: flex; align-items: center; justify-content: space-between;">
                <a href="{{ route('BooksShow', $book) }}" style="text-decoration: none; color: #007BFF; font-size: 16px;">{{ $book->title }}</a>
                
                <div style="display: flex; gap: 10px;">
                    <a href="{{ route('BooksEdit', $book) }}" style="text-decoration: none; color: #FFC107; font-size: 16px;">Edit</a>
                    
                    <form action="{{ route('BooksDestroy', $book) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background-color: #f44336; color: white; border: none; padding: 5px 10px; text-align: center; text-decoration: none; display: inline-block; font-size: 14px; cursor: pointer; border-radius: 4px;">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>

</body>
</html>
