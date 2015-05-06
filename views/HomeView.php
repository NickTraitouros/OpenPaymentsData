<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/search.js"></script>

<table>
    <tr>
        <td valign=top>
            <form>
            <?php
                foreach($headers as $header) {
                   include 'views/FormFieldView.php';
                }
            ?>
            </form>
        </td>
        <td valign=top>
            <form method="POST" id="export" action="export.php"><input type="submit" id="export_submit" disabled="disabled" value="export to excel">
            </form>
            <div id="results">
            </div>
        </td>
    </tr>
</table>