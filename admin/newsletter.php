<?php include "header.php"; ?>
<?php
$mysqli = new mysqli("localhost", "root", "", "artneticmedia");
    // Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 
?>
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Newsletter Subscriber List</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kitchen Sink
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Email</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
<?php 
$sql = "SELECT email FROM newsletter_subscriber";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
    
                                        ?>
                                        <tr>
                                            <td><?php if(isset($row["id"])) { echo $row["id"]; } ?></td>
                                            <td><?php echo $row["email"]; ?></td>
                                           
                                        </tr>
<?php 
}
} else {
    echo "0 results";
}
?>                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
                
            </div>

            </div>
            <!-- /. PAGE INNER  -->
</div>

<?php include 'footer.php'; ?>
