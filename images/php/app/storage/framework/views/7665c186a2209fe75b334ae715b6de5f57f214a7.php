<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Billing</title>
    <link rel="stylesheet" href="dist/app.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body class="bg-light text-dark">

  <div class="container">
    <form action="/billings" enctype="multipart/form-data" method="post">

        <a class="navbar-brand d-flex pt-4  text-center">
           <div><img src="/svg/logo.svg" style="height:40px; border-right:2px solid #333;" class="pr-3 pl-5"></div>
           <div class="h2 pl-3 pr-4 justify-content-start">MyFlix</div>
        </a>
        <a class="navbar-brand d-flex">
           <div class="h5 pr-5 d-flex justify-content-end"><a href="/">Home</a></div>

        </a>
          <div class="col-5 offset-3">
            <div class="h1 p-1 text-center">Payment Method</div>

            <div class="text-center">
                <label for="card_type" class="col-form-label">Card Type</label>
                <input id="card_type"
                       type="text"
                       class="form-control"
                       style="border-radius:10px;"
                       name="card_type"
                       required autocomplete="card_type">
            </div>
            <div class="text-center">
                <label for="name" class="col-form-label">Card Holder's Name</label>
                <input id="name"
                       type="text"
                       class="form-control"
                       style="border-radius:10px;"
                       name="name"
                       required autocomplete="name">
            </div>
            <div class="text-center">
                <label for="number_16" class="col-form-label">Card Number</label>
                <input id="number_16"
                       type="number"
                       class="form-control"
                       style="border-radius:10px;"
                       name="number_16"
                       required autocomplete="number_16">
            </div>
            <div class="text-center">
                <label for="number_3" class="col-form-label">Security Number</label>
                <input id="number_3"
                       type="number"
                       class="form-control"
                       style="border-radius:10px;"
                       name="number_3"
                       required autocomplete="number_3">
            </div>

            <div class="pt-3 text-center">
                 <button class="btn btn-primary">Confirm</button>
            </div>

       </div>
    </form>
  </div>
   <script src="dist/app.js"></script>
</body>
</html>
