<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <style>
        body{
            background-color:#e8e8e8;
        }
    </style>
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container">
    <div class="row  p-5">
    <div class="col-md-8 offset-md-2">
        <ul>
            @foreach ($bcs_questions as $bquestion)
            <div class="card question-div mt-2">
                <div class="card-body">
                    <h5 class="card-title">{{ $bquestion->{'Question text*'} }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Choose the correct answer: </h6>
                    
                    <ul class="list-group">
                        <li class="list-group-item"> <input type="radio" name="question_option{{ $bquestion->id }}"> {{ $bquestion->{'Option #1'} }}</li>
                        <li class="list-group-item"> <input type="radio" name="question_option{{ $bquestion->id }}"> {{  $bquestion->{'Option #2'} }}</li>
                        <li class="list-group-item"> <input type="radio" name="question_option{{ $bquestion->id }}"> {{  $bquestion->{'Option #3'} }}</li>
                        <li class="list-group-item"> <input type="radio" name="question_option{{ $bquestion->id }}"> {{  $bquestion->{'Option #4'} }}</li>
                    </ul>

                    <div class="mt-2">
                        <button type="button" class="btn btn-secondary">Check answer</button>
                    </div>
                    
                </div>
            </div>

            @endforeach
        </ul>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>