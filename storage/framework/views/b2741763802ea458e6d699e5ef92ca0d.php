<!DOCTYPE html>
<html>
<head>
    <title>فرم ورود اطلاعات</title>
</head>
<body>
    <form method="POST" action="<?php echo e(route('read')); ?>">
        <?php echo csrf_field(); ?>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="userName">userName:</label><br>
        <input type="text" id="userName" name="userName"><br>
        <label for="password">password:</label><br>
        <input type="text" id="password" name="password"><br>
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>
<?php /**PATH C:\Users\homan\Desktop\myProjectTamrin1\tamrin1\resources\views/createAccont.blade.php ENDPATH**/ ?>