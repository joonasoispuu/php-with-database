<?php
/**
 * Function to display all the users
 */

 try {
    require "config.php";
    $connection = new PDO($dsn, $username, $password, $options);

    $sql = "SELECT * 
    FROM movie";

    $statement = $connection->prepare($sql);
    $statement->execute();

    $result = $statement->fetchAll();

 } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
 }
?>
<h2>Movies</h2>
<?php 
    if ($result && $statement->rowCount() > 0) { ?>
    
    <table>
        <thead>
            <tr>
                <th>title</th>
                <th>primary_director</th>
                <th>year_released</th>
                <th>genre</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $row) { ?>
            <tr>
                <td><?php echo $row["title"]; ?></td>
                <td><?php echo $row["primary_director"]; ?></td>
                <td><?php echo $row["year_released"]; ?></td>
                <td><?php echo $row["genre"]; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <?php } else { ?>
        <p>No users found. Please add one first</p>
    <?php }

?>
