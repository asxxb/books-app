<!DOCTYPE html>
<html>
<head>
    <title>Create Book</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 20px;">

    <h1 style="text-align: center; color: #333;">Create Book</h1>

    <form action="{{ route('BookStore') }}" method="POST" style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        @csrf

        <div style="margin-bottom: 15px;">
            <label for="title" style="display: block; font-weight: bold; margin-bottom: 5px;">Title:</label>
            <input type="text" id="title" name="title" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="author" style="display: block; font-weight: bold; margin-bottom: 5px;">Author:</label>
            <input type="text" id="author" name="author" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="description" style="display: block; font-weight: bold; margin-bottom: 5px;">Description:</label>
            <textarea id="description" name="description" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; min-height: 100px;"></textarea>
        </div>

        <button type="submit" style="background-color: #4CAF50; color: white; border: none; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin-top: 10px; cursor: pointer; border-radius: 4px;">
            Create
        </button>
    </form>

</body>
</html>
