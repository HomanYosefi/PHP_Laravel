<!DOCTYPE html>
<html>
<head>
    <title>فرم پاک کردن یوزر از دیتابیس</title>
</head>
<body>
    <form action="/delete" method="post">
        @csrf
        <input type="text" name="id" placeholder="Enter ID to delete">
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>

