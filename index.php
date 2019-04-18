<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 18/04/19
 * Time: 10:38
 */
include_once "class/Student.php";

$student = new Student();
$students = $student->getAll();
?>

<table>
    <tr>
        <td>Name</td>
    </tr>
    <?php foreach ($students as $item):?>
    <tr>
        <td><?php echo $item['student_name'];?></td>
    </tr>
    <?php endforeach;?>
</table>
