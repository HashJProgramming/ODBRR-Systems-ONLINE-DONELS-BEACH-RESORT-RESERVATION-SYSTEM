<?php
function user_list(){
    // Connect to the database
    $db = new PDO('mysql:host=localhost;dbname=db_hashys', 'root', '');

    // Get all data from the products table
    $sql = 'SELECT * FROM users WHERE type = 1 ORDER BY id ASC';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();

    // Loop through the results and add them to the table 
    foreach ($results as $row) {
    ?>
        <tr>
            <td class="border-0" scope="row">
                <div class="p-2">
                    <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"><a href="#" class="text-dark d-inline-block align-middle"> Room ID: <?php echo $row['id']?></a></h5>
                        <span class="text-muted font-weight-normal font-italic d-block"> ODBRR - Systems</span>
                    </div>
                </div>
            </td>

            <td class="border-0 align-middle">
                <a href="#" class="text-dark" style="margin-left: 10px;" data-id="<?php echo $row['id']?>" data-username="<?php echo $row['username']?>"  data-firstname="<?php echo $row['firstname']?>"  data-lastname="<?php echo $row['lastname']?>" data-email="<?php echo $row['email']?>" data-address="<?php echo $row['address']?>" data-phone="<?php echo $row['phone']?>" data-bs-target="#update-user" data-bs-toggle="modal"><i class="far fa-edit"></i></a>
                <a href="#" class="text-dark" style="margin-left: 10px;" data-id="<?php echo $row['id']?>" data-bs-target="#confrim-user" data-bs-toggle="modal"><i class="far fa-trash-alt"></i></a>
            </td>
            <td class="border-0 align-middle"><strong><?php echo $row['username']?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['firstname']?> <?php echo $row['lastname']?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['email']?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['phone']?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['address']?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['created']?></strong></td>
        </tr>
    <?php
    }
}

function room_list(){
    // Connect to the database
    $db = new PDO('mysql:host=localhost;dbname=db_hashys', 'root', '');

    // Get all data from the products table
    $sql = 'SELECT * FROM lists WHERE type = "room" ORDER BY id ASC';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();

    // Loop through the results and add them to the table
    foreach ($results as $row) {
    ?>
        <tr>
            <td class="border-0" scope="row">
                <div class="p-2">
                    <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"><a href="#" class="text-dark d-inline-block align-middle"> Room ID: <?php echo $row['id']?></a></h5>
                        <span class="text-muted font-weight-normal font-italic d-block"> ODBRR - Systems</span>
                    </div>
                </div>
            </td>

            <td class="border-0 align-middle">
                <a href="#" class="text-dark" style="margin-left: 10px;" data-id="<?php echo $row['id']?>" data-name="<?php echo $row['name']?>" data-descriptions="<?php echo $row['descriptions']?>" data-pax="<?php echo $row['pax']?>" data-price="<?php echo $row['price']?>"  data-bs-target="#update-room" data-bs-toggle="modal"><i class="far fa-edit"></i></a>
                <a href="#" class="text-dark" style="margin-left: 10px;" data-id="<?php echo $row['id']?>" data-bs-target="#confrim-room" data-bs-toggle="modal"><i class="far fa-trash-alt"></i></a>
            </td>
            <td class="border-0 align-middle"><strong><?php echo $row['name']?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['descriptions']?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo strtoupper($row['type'])?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['pax']?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['price']?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['created']?></strong></td>
        </tr>
    <?php
    }
}

function cottage_list(){
    // Connect to the database
    $db = new PDO('mysql:host=localhost;dbname=db_hashys', 'root', '');

    // Get all data from the products table
    $sql = 'SELECT * FROM lists WHERE type = "cottage" ORDER BY id ASC';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();

    // Loop through the results and add them to the table
    foreach ($results as $row) {
    ?>
        <tr>
            <td class="border-0" scope="row">
                <div class="p-2">
                    <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"><a href="#" class="text-dark d-inline-block align-middle"> cottage ID: <?php echo $row['id']?></a></h5>
                        <span class="text-muted font-weight-normal font-italic d-block"> ODBRR - Systems</span>
                    </div>
                </div>
            </td>

            <td class="border-0 align-middle">
                <a href="#" class="text-dark" style="margin-left: 10px;" data-id="<?php echo $row['id']?>" data-name="<?php echo $row['name']?>" data-descriptions="<?php echo $row['descriptions']?>" data-pax="<?php echo $row['pax']?>" data-price="<?php echo $row['price']?>"  data-bs-target="#update-room" data-bs-toggle="modal"><i class="far fa-edit"></i></a>
                <a href="#" class="text-dark" style="margin-left: 10px;" data-id="<?php echo $row['id']?>" data-bs-target="#confrim-room" data-bs-toggle="modal"><i class="far fa-trash-alt"></i></a>
            </td>
            <td class="border-0 align-middle"><strong><?php echo $row['name']?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['descriptions']?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo strtoupper($row['type'])?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['pax']?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['price']?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['created']?></strong></td>
        </tr>
    <?php
    }
}

?>
