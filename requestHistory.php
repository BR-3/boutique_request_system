<?php include "header.php"; ?>

<table>
    <thead>
        <tr>
            <th>Request ID</th>
            <th>Clothing ID</th>
            <th>Clothing Type</th>
            <th>Size</th>
            <th>Urgency</th>
            <th>Other Information</th>
            <th>Date and Time of Request</th>
            <th>Fulfilled</th>
        </tr>
    </thead>
    <tbody>
        <?php
        function loadRequests() {
            require('dbh.inc.php');
            $query= 'select * from request_list;';
            $result = mysqli_query($conn, $query);
    
            if($result) {
                $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
                mysqli_free_result($result);
    
                foreach ($posts as $post) {
                    echo "<tr>";
                    echo "<td>" . $post['requestID'] . "</td>";
                    echo "<td>" . $post['clothingID'] . "</td>";
                    echo "<td>" . $post['clothingType'] . "</td>";
                    echo "<td>" . $post['size'] . "</td>";
                    echo '<td>' . ($post['urgency'] == 1 ? 'Urgent' : 'Not urgent') . '</td>';
                    echo "<td>" . $post['additionalInfo'] . "</td>"; 
                    echo "<td>" . $post['requestDateTime'] . "</td>";
                    echo '<td>' . ($post['requestFilled'] == 1 ? 'Yes' : 'No') . '</td>';
                    echo "<tr>";
                } 
            }else {
                echo "Error: could not retrieve request data.";
            }
        }

        loadRequests();
        ?>
    </tbody>

</table>

<form action = "updateRequest.inc.php" method="post">
    <fieldset>
        <legend>Mark request as filled</legend>

        <label for="markFilled">Select a request ID to mark filled</label>

        <select name = 'requestID'>
        <?php
                require('dbh.inc.php');
                $getIDquery = 'select `requestID` from `request_list` where `requestFilled` =0;';
                $IDresult = mysqli_query($conn, $getIDquery);
                if($IDresult) {
                    $posts = mysqli_fetch_all($IDresult, MYSQLI_ASSOC);
                    mysqli_free_result($IDresult);
        
                    foreach ($posts as $post) {
                        echo "<option value = '" . $post['requestID'] ."'>" . $post['requestID'] . "</option>";
                    } 
                    mysqli_close($conn);
                }else {
                    echo "Error: could not retrieve request data.";
                }


            ?>
        </select><br>
        <button type ="submit" value="submit">Submit</button>
    </fieldset>
</form>


<?php include "footer.php"; ?>