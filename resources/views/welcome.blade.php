<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>


<div class="container">
    <h1>Create :</h1>
    <form method="post" action="">
        <div class="row">
            <div class="col-lg-6">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="col-lg-6">
                <label class="form-label">Price</label>
                <input type="number" class="form-control" name="price">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <label class="form-label">Description</label>
                <input type="text" class="form-control" name="description">
            </div>
            <div class="col-lg-6">
                <label class="form-label">Category</label>
                <input type="text" class="form-control" name="category">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <button class="btn btn-success mt-2" type="submit">Create</button>
            </div>
        </div>
    </form>
</div>
<div class="container mt-4">
    <h1>Update :</h1>
    <form method="post" action="">
        <div class="row">
            <div class="col-lg-6">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="col-lg-6">
                <label class="form-label">Price</label>
                <input type="number" class="form-control" name="price">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <label class="form-label">Description</label>
                <input type="text" class="form-control" name="description">
            </div>
            <div class="col-lg-6">
                <label class="form-label">Category</label>
                <input type="text" class="form-control" name="category">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <button class="btn btn-success mt-2" type="submit">Create</button>
            </div>
        </div>
    </form>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
