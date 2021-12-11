<?php 
include($_SERVER['DOCUMENT_ROOT'].'/carsRUS/view/header.php');
require($_SERVER['DOCUMENT_ROOT'].'/carsRUS/auth/signup.php');
?>


<div class="container">
    <main id="content">
        <h2 class="text-center">Sign Up</h2>
        <p class="text-center font-italic">(Defaulted values for quick testing)</p>
        <div class="container">
            <form id ="signup-form" class="form" action="" method="post">
                <div class="form-row">
                    <div class="form-group col">
                        <label>User Name</label>
                        <input type="text" class="form-control" value="Team4" name="userName">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" name="passwordMatch" placeholder="Confirm Password">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label>Email</label>
                        <input type="email" class="form-control" value="php@php.net" name="email"  placeholder="Email">
                    </div>
                    <div class="form-group col">
                        <label>Phone Number</label>
                        <input type="tel" class="form-control" value="555-555-5555" name="phone"  placeholder="Phone Number">
                    </div>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" value="1234 main st" name="address" placeholder="1234 Main St">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>City</label>
                        <input type="text" class="form-control" value="Surrey" name="city">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Province</label>
                        <select class="form-control" name="province">
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
                        <input type="text" class="form-control" value="V5r-2X2" name="postalcode">
                    </div>
                </div>
                <button type="submit" name="submit" value="submit" class="btn btn-primary">Create Account</button>
            </form>
        </div>
    </main>
</div>


<?php include($_SERVER['DOCUMENT_ROOT'].'/carsRUS/view/footer.php')?>