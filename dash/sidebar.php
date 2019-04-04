    <div class="col-12 my-3 p-3 bg-white rounded shadow-sm">   
      <h6 class="border-bottom border-gray pb-2 mb-0">New Users</h6>
       

      <?php 
try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, fname, lname, image, username FROM users"); 
    $stmt->execute();
    $result = $stmt->fetchAll();

    foreach( $result as $row ) {
        ?>

        <div class="media text-muted pt-3">
          <?php if ($row['image'] == "") { ?>

              <img class="bd-placeholder-img mr-2 rounded" width="32" src="https://api.adorable.io/avatars/32/<?php echo $row['id']; ?>.png">

              <?php } else { ?>

                <img  class="bd-placeholder-img mr-2 rounded" width="32" src="../uploads/<?php echo $row['id']; ?>.<?php echo $row['image']; ?>">

            <?php } ?>

            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
              <div class="d-flex justify-content-between align-items-center w-100">
                <strong class="text-gray-dark"><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></strong>
                <a href="#">Follow</a>
              </div>
              <span class="d-block">@<?php echo $row['username']; ?></span>
            </div>
          </div> 

        <?
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>



        <small class="d-block text-right mt-3">
          <a href="#">All suggestions</a>
        </small>
      </div>
      
      <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-0">Recent updates</h6>
          <div class="media text-muted pt-3">
            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
              <strong class="d-block text-gray-dark">@username</strong>
              Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
            </p>
          </div>
          <div class="media text-muted pt-3">
            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#e83e8c"></rect><text x="50%" y="50%" fill="#e83e8c" dy=".3em">32x32</text></svg>
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
              <strong class="d-block text-gray-dark">@username</strong>
              Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
            </p>
          </div>
          <div class="media text-muted pt-3">
            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#6f42c1"></rect><text x="50%" y="50%" fill="#6f42c1" dy=".3em">32x32</text></svg>
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
              <strong class="d-block text-gray-dark">@username</strong>
              Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
            </p>
          </div>
          <small class="d-block text-right mt-3">
            <a href="#">All updates</a>
          </small>
      </div>