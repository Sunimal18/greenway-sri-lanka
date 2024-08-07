<!DOCTYPE HTML>
<html>

<head>
    <title>Green Way Sri Lanka.LK | Yala National Park | Article_21</title>


    <!-- Bootstrap -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.userfront.com/core.js"></script>
</head>

<body>
    <!--start-main-->
    <div class="row">
        <div class="container-fluid col-sm-6 col-lg-6 col-md-6 div-1 my-3 border border-warning border-3 rounded">
                <h1 class="text-center div-3">Add New Booking</h1>
                <hr>
                <div class="container mt-8 col-sm-8 col-lg-8">
                    <div class="bg-white rounded p-3">
                        <form action="sql/add_booking.php" class="form-control" method="POST" enctype="multipart/form-data">
                            <input type="hidden" value="<?php $id=$_REQUEST ['id']; echo $id;?>" name="id">
                            <div class="form-floating mb-3">
                                 <input type="text" class="form-control" placeholder="name" name="name" required>
                                <label>Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                 <input type="text" class="form-control" placeholder="nic" name="nic" required>
                                <label>NIC/Passport Number</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="country" name="contry" required>
                                <label>Contry</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="telephone" name="tel" required>
                                <label>Telephone</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" placeholder="date" name="date" required>
                                <label>Date</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="num_of_mem" placeholder="Number of Members" required>
                                <label>Number of Members</label>
                            </div>
                            <div class="text-end mt-5 ms-0">
                                <a href="index.php" class="btn btn-dark text-warning" role="button">Cancel</a>
                                <input type="Submit" class="btn btn-success" value="Book Now">
                            </div>
                        </form>
                    </div> 
                </div> 
                
        </div>  
    </div>

    <!-- Main area End-->



</body>
</html>