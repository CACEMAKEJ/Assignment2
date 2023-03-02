<?php
require_once('database.php');

// Get hotels
$queryHotels = 'SELECT * FROM hotel';
$statement = $db->prepare($queryHotels);
$statement->execute();
$hotels = $statement->fetchAll();
$statement->closeCursor();


?>

<h1>Hotels</h1>
    <section>
        <table class="table table-striped">
            <thead class="table-dark">
                <th>Code</th>
                <th>Name</th>
                <th>Price</th>
            </thead>

            <?php foreach ($hotels as $hotel) : ?>
            <tr>
                <td><?php echo $hotel['hotel_name']; ?></td>
                <td><?php echo $hotel['city']; ?></td>
                <td class="right"><?php echo $hotel['star_rating']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </section>
