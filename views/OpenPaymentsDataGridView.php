<table border=1>
    <tr>
        <?php foreach($headers as $header) {
           echo "<td>$header->name</td>";
           } ?>
    </tr>
    <tr>
        <?php foreach($rows as $row) {
                echo "<tr>";
                foreach($row as $field) {
                    echo "<td>$field</td>";
                }
                echo "</tr>";
           } ?>
    </tr>
</table>