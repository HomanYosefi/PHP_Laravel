<!DOCTYPE html>
<html>
<head>
    <title>فرم اپدیت اطلاعات</title>
</head>
<body>
    <h2>توجه داشته باشید حتما باید ایدی را برای اپدیت اطلاعات وارد کنید نیازی به پر کردن تمام فیلد ها ندارید </h2>
    <form action="/update" method="post">
        @csrf
        <input type="text" name="id" placeholder="Enter ID to update">
        <input type="text" name="name" placeholder="Enter new name">
        <input type="text" name="username" placeholder="Enter new username">
        <input type="password" name="password" placeholder="Enter new password">
        <input type="submit" value="Submit">
    </form>    
</body>
</html>
