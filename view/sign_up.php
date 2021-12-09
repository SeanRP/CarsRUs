<?php 
include($_SERVER['DOCUMENT_ROOT'].'/carsRUS/view/header.php');
require($_SERVER['DOCUMENT_ROOT'].'/carsRUS/auth/signup.php');
?>


<div class="container">
    <main id="content">
        <h2 class="text-center">Sign Up</h2>
        <div class="container">
            <form id ="signup-form" class="form" action="" method="post">
                <div class="form-row">
                    <div class="form-group col">
                        <label for="userName">User name</label>
                        <input type="text" class="form-control" name="userName" id="userName">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="text" class="form-control" name="password" id="inputPassword4" placeholder="Password">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="confirm"">Confirm Password</label>
                        <input type="text"class="form-control" name="passwordMatch" placeholder="Confirm Password">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label for="inputEmail4">Email</label>
                        <input type="text" class="form-control" name="email" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="form-group col">
                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Address 2</label>
                    <input type="text" class="form-control" name="address2" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" name="inputCity">
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
                        <input type="text" class="form-control" name="inputPostalCode">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                    </div>
                </div>
                <button type="submit" name="submit" value="submit" class="btn btn-primary">Create Account</button>
            </form>
        </div>
    </main>
</div>


<?php include($_SERVER['DOCUMENT_ROOT'].'/carsRUS/view/footer.php')?>