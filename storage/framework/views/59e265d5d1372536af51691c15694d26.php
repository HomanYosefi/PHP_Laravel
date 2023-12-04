<!DOCTYPE html>
<html>
<head>
    <title>فرم پاک کردن یوزر از دیتابیس</title>
</head>
<body>
    <form action="/delete" method="post">
        <?php echo csrf_field(); ?>
        <input type="text" name="id" placeholder="Enter ID to delete">
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>

<?php /**PATH C:\Users\homan\Desktop\myProjectTamrin1\tamrin1\resources\views/deleteUser.blade.php ENDPATH**/ ?>