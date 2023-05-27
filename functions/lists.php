<?php
function room_list(){
    // Connect to the database
    $db = new PDO('mysql:host=localhost;dbname=db_hash', 'root', '');

    // Get all data from the products table
    $sql = 'SELECT * FROM lists ORDER BY id ASC';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();

    // Loop through the results and add them to the table
    foreach ($results as $row) {
    ?>
        <tr>
            <td class="border-0" scope="row"><div class="p-2"><img src="assets/img/room1.jpg" alt="" width="70" class="img-fluid rounded shadow-sm"><div class="ml-3 d-inline-block align-middle"><h5 class="mb-0"><a href="#" class="text-dark d-inline-block align-middle"> Room #1</a></h5><span class="text-muted font-weight-normal font-italic d-block"> Delux</span></div></div></td>
            <td class="border-0 align-middle">
                <a href="#" class="text-dark" style="margin-left: 10px;" data-id="<?php echo $row['id']?>" data-bs-target="#update-room" data-bs-toggle="modal"><i class="far fa-edit"></i></a>
                <a href="#" class="text-dark" style="margin-left: 10px;" data-id="<?php echo $row['id']?>" data-bs-target="#confrim-room" data-bs-toggle="modal"><i class="far fa-trash-alt"></i></a>
            </td>
            <td class="border-0 align-middle"><strong><?php echo $row['id']?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['descriptions']?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['type']?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['pax']?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['price']?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['created']?></strong></td>
        </tr>
    <?php
    }
}

function catage_list(){
    // Connect to the database
    $db = new PDO('mysql:host=localhost;dbname=db_hash', 'root', '');

    // Get all data from the products table
    $sql = 'SELECT * FROM lists ORDER BY id ASC';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();

    // Loop through the results and add them to the table
    foreach ($results as $row) {
    ?>
        <tr>
            <td class="border-0" scope="row"><div class="p-2"><img src="assets/img/room1.jpg" alt="" width="70" class="img-fluid rounded shadow-sm"><div class="ml-3 d-inline-block align-middle"><h5 class="mb-0"><a href="#" class="text-dark d-inline-block align-middle"> Room #1</a></h5><span class="text-muted font-weight-normal font-italic d-block"> Delux</span></div></div></td>
            <td class="border-0 align-middle">
                <a href="#" class="text-dark" style="margin-left: 10px;" data-id="<?php echo $row['id']?>" data-bs-target="#update-room" data-bs-toggle="modal"><i class="far fa-edit"></i></a>
                <a href="#" class="text-dark" style="margin-left: 10px;" data-id="<?php echo $row['id']?>" data-bs-target="#confrim-room" data-bs-toggle="modal"><i class="far fa-trash-alt"></i></a>
            </td>
            <td class="border-0 align-middle"><strong><?php echo $row['id']?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['descriptions']?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['type']?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['pax']?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['price']?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['created']?></strong></td>
        </tr>
    <?php
    }
}

function hall_list(){
    // Connect to the database
    $db = new PDO('mysql:host=localhost;dbname=db_hash', 'root', '');

    // Get all data from the products table
    $sql = 'SELECT * FROM lists ORDER BY id ASC';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();

    // Loop through the results and add them to the table
    foreach ($results as $row) {
    ?>
        <tr>
            <td class="border-0" scope="row"><div class="p-2"><img src="assets/img/room1.jpg" alt="" width="70" class="img-fluid rounded shadow-sm"><div class="ml-3 d-inline-block align-middle"><h5 class="mb-0"><a href="#" class="text-dark d-inline-block align-middle"> Room #1</a></h5><span class="text-muted font-weight-normal font-italic d-block"> Delux</span></div></div></td>
            <td class="border-0 align-middle">
                <a href="#" class="text-dark" style="margin-left: 10px;" data-id="<?php echo $row['id']?>" data-bs-target="#update-room" data-bs-toggle="modal"><i class="far fa-edit"></i></a>
                <a href="#" class="text-dark" style="margin-left: 10px;" data-id="<?php echo $row['id']?>" data-bs-target="#confrim-room" data-bs-toggle="modal"><i class="far fa-trash-alt"></i></a>
            </td>
            <td class="border-0 align-middle"><strong><?php echo $row['id']?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['descriptions']?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['type']?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['pax']?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['price']?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['created']?></strong></td>
        </tr>
    <?php
    }
}
?>
