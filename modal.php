<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Styled Modal</title>

    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>
        /* Custom styles for the specific button and modal */
        #customButton {
            position:absolute;
            top:40px;
            align:center;
        }

        #customModal {
            background-color: #f9f9f9;
        }

        #customModal .modal-title {
            color: #333;
        }

        #customModal .modal-body {
            color: #555;
        }

        #customModal .modal-footer {
            background-color: #f9f9f9;
        }
        
        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .center-container button {
            margin: 0; /* Remove default margin */
        }
    </style>
</head>
<body>

<!-- Button to trigger the modal -->
<div class="center-container">
    <button type="button" id="customButton" class="btn btn-rounded btn-outline-success shadow btnDownload" data-toggle="modal" data-target="#myModal123">
        Open Modal
    </button>
</div>

<!-- Modal-->
<div class="modal fade" id="myModal123" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><b>Info</b></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <h2>Hello Everyone. My name is Dharshan J. <br>I'm a freelancher. I'm selling websites at the minimum cost. <br><br>For furthur details <a href="https://www.fiverr.com/s/x2daLQ" target="_blank">Click here</a>.</h2>
        </div>
       
      </div>
    </div>
  </div>

<!-- Add Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
