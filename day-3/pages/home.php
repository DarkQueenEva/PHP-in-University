<table border="1" align="center" width="800">
    <tr>
        <th>CourseTitle</th>
        <th>Course-code</th>
        <th>Grade</th>
    </tr>
    <?php foreach ($students as $student) { ?>
        <tr>
            <td><?php echo $student['CourseTitle']; ?></td>
            <td><?php echo $student['Course-Code']; ?></td>
            <td><?php echo $student['Grade']; ?></td>
        </tr>
    <?php } ?>
</table>
