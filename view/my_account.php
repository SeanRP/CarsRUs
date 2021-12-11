<?php 
include($_SERVER['DOCUMENT_ROOT'].'/carsRUS/view/header.php');
session_start();
?>

<div class="container">
    <main id="content">
        <h2 class="text-center">My Account</h2>
        <div class="container">
            <form id ="signup-form" class="form" action="" method="post">
                <div class="form-row">
                    <div class="form-group col">
                        <label for="userName">User name</label>
                        <input type="text" class="form-control" value='<?php echo $_SESSION['userName']; ?>' name="userName" id="userName">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label for="inputEmail4">Email</label>
                        <input type="text" class="form-control" value='<?php echo $_SESSION['email'];?>' name="email" id="inputEmail4">
                    </div>
                    <div class="form-group col">
                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control" value='<?php echo $_SESSION['phone'];?>' name="phone" id="phone">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control"  value='<?php echo $_SESSION['address'];?>' name="address" id="inputAddress">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control"  value='<?php echo $_SESSION['city'];?>' name="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputProvince">Province</label>
                        <select id="inputProvince" class="form-control" name="inputProvince">
                            <option selected>Choose...</option>
                            <option>British Columbia</option>
                            <option>Alberta</option>
                            <option>Manitoba</option>
                            <option>Sasketchewan</option>
                            <option>Prince Edward Island</option>
                            <option>Ontario</option>
                            <option>Newfoundland and Labrador</option>
                            <option>Nova Scotia</option>
                            <option>Quebec</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputPostalCode">Postal Code</label>
                        <input type="text" class="form-control" value='<?php echo $_SESSION['postalCode'];?>' name="inputPostalCode">
                    </div>
                </div>
            </form>
        </div>
    </main>
</div>


<?php include($_SERVER['DOCUMENT_ROOT'].'/carsRUS/view/footer.php')?>