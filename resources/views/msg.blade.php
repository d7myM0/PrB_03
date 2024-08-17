<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body dir="rtl">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">بانوراما</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/add">اضافة خدمات</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/add_client">اضافة عملاء</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/cnt">تعديل وحذف </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/msg"> رسائل الزوار </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/">  صفحة الموقع</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    @foreach ($message as $message )


    <div class="card bg-light mb-3 " style="max-width: 30rem; margin:20px;">
        <div class="card-header">{{$message->name}}</div>
        <div class="card-body">
          <h5 class="card-title">{{$message->email}}</h5>
          <p class="card-text">{{$message->msg}}</p>
        </div>
      </div>
      @endforeach
</body>
</html>
