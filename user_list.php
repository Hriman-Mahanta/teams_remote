<?php
$con= mysqli_connect("localhost", "id17610880_mydb", "i#){vK(de54@}LQ@", "id17610880_user") or die(mysqli_error($con));
$all_select_query="SELECT * FROM users_details";
$all_select_query_result= mysqli_query($con, $all_select_query) or die(mysqli_error($con));
$number_of_rows_all=mysqli_num_rows($all_select_query_result);
if (!isset ($_GET['page']) ) {
    $page = 1;
} else {
    $page = $_GET['page'];
}
$results_per_page=3;
$page_first_result = ($page-1) * $results_per_page;
$number_of_page = ceil ($number_of_rows_all / $results_per_page);
$select_query="SELECT * FROM users_details LIMIT $page_first_result, $results_per_page";
$select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
$number_of_rows=mysqli_num_rows($select_query_result);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/jquery.twbsPagination.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
      <div class="container">
        <h2>Registered Users</h2>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>id</th>
              <th>name</th>
              <th>email</th>
              <th>mobile</th>
              <th>password</th>
            </tr>
          </thead>
          <tbody>
          <?php
          for($i=1;$i<=$number_of_rows;$i++)
          { ?>
            <tr>
              <?php
              $row=mysqli_fetch_array($select_query_result);
              ?>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['mobile']?></td>
                <td><?php echo $row['password']?></td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
        </div>
        <div id="data-container"></div>
        <div id="pagination-container"></div>
        <div class="container">
        <nav aria-label="Page navigation">
          <ul class="pagination active" id="pagination">
          </ul>
        </nav>
        </div>
        <script type="text/javascript">
        $(function () {
          window.pagObj = $('#pagination').twbsPagination({
          startPage: <?php echo $page;?>,
          totalPages: <?php echo $number_of_page;?>,
          visiblePages: <?php echo $number_of_page;?>,
          onPageClick: function (event, page) {}
            }).on('page', function (event, page) {
              window.open("user_list.php?page="+page, "_self")
            });
          });
        </script>
        <a style="margin-left: 70px;" href="signup_page.php">Go Back to Sign Up Page</a>
    </body>
</html>
