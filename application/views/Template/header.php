<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://bootswatch.com/3/united/bootstrap.min.css" >
    <style>

    #myBtn {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 30px;
    }
    </style>
    <script>
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
    </script>

    <title>Welcome to page</title>
  </head>
  <body>
