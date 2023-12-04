<!DOCTYPE html>
<html>
<head>
    <title>جدول اطلاعات</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 15px;
            text-align: left;
        }
    </style>
</head>
<body>

    <table>
    <?php $__env->slot('headings'); ?>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>userName</th>
            <th>password</th>
            <th>created_at</th>
            <th>updated_at</th>
        </tr>
    <?php $__env->endSlot(); ?>

    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($row->id); ?></td>
            <td><?php echo e($row->name); ?></td>
            <td><?php echo e($row->userName); ?></td>
            <td><?php echo e($row->password); ?></td>
            
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<ul>
    <li><a href="/">back to home</a></li>
</ul>
</body>
</html>


<?php /**PATH C:\Users\homan\Desktop\myProjectTamrin1\tamrin1\resources\views/showTable.blade.php ENDPATH**/ ?>