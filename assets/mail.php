<?php

if (isset($_POST['submit'])) {
    $ToEmail = "johney2pwesh@gmail.com";
    $EmailSubject = "Form Filled by New User";
    $mailheader = "From: " . $_POST["email"] . "\r\n";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $countrycode = $_POST['countrycode'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $dob = $_POST['dob'];
    $amount = $_POST['amount'];
    $transaction = $_POST['transaction'];
    $device = $_POST['device'];
    $description = $_POST['description'];
    $sname = $_POST['sname'];
    $website = $_POST['website'];
    $semail = $_POST['semail'];
    $scountrycode = $_POST['scountrycode'];
    $sphone = $_POST['sphone'];
    $sign = $_POST['ack'];
    $msg = "name: $name , email: $email, country code: $countrycode, phone number: $phone, country: $country, dob: $dob, amount: $amount, transaction type: $transaction, hacked device: $device, details: $description, subject name: $sname, subject website: $website, subject email: $semail, subject country code: $scountrycode, subject phone number: $sphone, sign: $sign";


    $msg = wordwrap($msg, 70);

    if (mail($ToEmail, $EmailSubject, $msg, $mailheader)) {
        echo "<html>

    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #071e39;
          font-family: 'Nunito Sans', 'Helvetica Neue', sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: 'Nunito Sans', 'Helvetica Neue', sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #071e39;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>
    <body>
      <div class='card'>
      <div style='border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;'>
        <i class='checkmark'>✓</i>
      </div>
        <h1>Success</h1> 
        <p>We received your complaint;<br/> we'll be in touch shortly!</p>
      </div>
    </body>
";
    } else {
        echo "<script>alert('Mail was not sent. Please try again later');</script>";
    }
}
