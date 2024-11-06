<?php include "header.php"; ?>
        <form action = "submitForm.inc.php" method="post">

            <fieldset id = "request">
                <legend>Request Form</legend>
                <!-- this will allow the worker to choose which article of clothing-->
                <label for="clothingType">Which article of clothing are you requesting?</label><br>
                <label for="shirt">Shirt</label>
                <input type="radio" id="shirt" name="clothingType" value="shirt" required><br>
                <label for="skirt">Skirt</label>
                <input type="radio" id="skirt" name="clothingType" value="skirt" required><br>
                <label for="dress">Dress</label>
                <input type="radio" id="dress" name="clothingType" value="dress" required><br>

                <!--this drop down pulls id numbers from a database based on hte above selection.-->
                <label for="clothingID">Select the item ID number</label>
                <select name="clothingID" id="clothingID" required>
                <?php
                        require('dbh.inc.php');

                        // TODO: add code that will dynamically get the radio selection and then only show the ids for that item type
                        $query = 'select clothingId from clothing_data';
                        $result = mysqli_query($conn, $query);

                        if ($result) { // Check if the query was successful
                            $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
                            mysqli_free_result($result);
                
                            foreach ($posts as $post) {
                                echo "<option value='" . $post['clothingId'] . "'>" . $post['clothingId'] . "</option>";
                            }
                        } else {
                            echo "Error: Could not retrieve clothing data."; // Handle query errors
                        }
                        
                        mysqli_close($conn);
                    ?>
                </select> <br>

                <!--TODO: dynamically load the available sizes from the database - based on the user's selection of an ID-->
                <label for="sizeSelect">Select a Size</label>
                <select name="sizeSelect" id="sizeSelect" required>

                <?php
                    // TODO: send the request id so that it can display on the success page
                    // $query = "SELECT * FROM `clothing_inventory`";
                    // $result = $conn->query($query);
                    // $fields = $result->fetch_fields();

                    // foreach ($fields as $field) {
                    //     echo "<option value = '" . $field->name . "'>" . $field->name . "</option>";
                    // } ?>

                    <option value="x-small">Extra Small</option>
                    <option value="small">Small</option>
                    <option value="medium">Medium</option>
                    <option value="large">Large</option>
                    <option value="x-large">Extra Large</option>

                </select><br>

                <!-- select if the need is immediate -->
                <label for="urgency">Is this needed immediately?</label>
                <input type="checkbox" name="urgency" id="urgency" value="needed urgently"> <br>

                <label for="otherInformation">Any other information or requests?</label><br>
                <textarea id="otherInformation" name="otherInformation"></textarea><br>

                <!-- submit or cancel buttons-->
                <button type="submit" value="submit">Submit Request</button>
                <button type="cancel" value="cancel">Cancel</button>

            </fieldset>

        </form>


<?php include "footer.php"; ?>
