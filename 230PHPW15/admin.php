<?php
    require "includes/head.php";
    require "includes/db_connect.php";
?>
    <main>
        <h3>Administration</h3>
        <table>
            <tr>
                <th>story_id</th>
                <th>headline</th>
                <th>author</th>
                <th>content</th>
                <th>date</th>
                <th>view</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
            <?php
            $sql = "SELECT * FROM stories";
            $result= $db->query($sql);
            while(list($story_id,$headline,$author,$content,$date)=$result->fetch_row() ) {
                echo "<tr>";
                echo "<td>$story_id</td>";
                echo "<td>$headline</td>";
                echo "<td>$author</td>";
                echo "<td>$content</td>";
                echo "<td>$date</td>";
                echo "<td>story_show.php</td>";
                echo "<td>story_edit.php</td>";
                echo "<td>story_delete.php</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </main>
<?php
require "includes/footer.php";
?>