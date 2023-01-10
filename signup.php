<?php
session_start(); include 'inc/class.php';?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>To Do</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="extstyle.css" rel="stylesheet">
  </head>
  <body style="background-color: #212529;">



<section class="container logincard ">
    <div class="card">
        <div class="card-header text-center">
            <h2>Sign up</h2>
        </div>
        <div class="card-body">
            <form action="login.php" method="post">
                <div class="row">
                    <label class="form-label col-lg-3 mb-3">Name :</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control  mb-3" name="name" required>
                    </div>

                    <label class="form-label col-lg-3  mb-3">Email id :</label>
                    <div class="col-lg-8">
                        <input type="emailid" class="form-control  mb-3" name="emailid" required>
                    </div>

                    <label class="form-label col-lg-3  mb-3">Password :</label>
                    <div class="col-lg-8">
                        <input type="password" class="form-control  mb-3" name="password" required>
                    </div>
                </div>
                <button type="submit" name="signup" class="btn btn-success">Sign Up</button>
            </form>
        </div>
        <div class="card-footer text-end">
            <span>Already User </span><a href="login.php">Sign in Now</a>
        </div>
    </div>
</section>
<?php

 include 'inc/footer.php'; ?>