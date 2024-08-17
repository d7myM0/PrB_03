<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
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
    <form class="p-5 m-5" action="/updateClient/{{$cli->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT');
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">العنوان</label>
          <input type="text" class="form-control" placeholder="{{$cli->title}}" name="tit">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">الصورة</label>
            <input type="file" class="form-control" name="img">
          </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">الوصف</label>
          <input type="text" class="form-control" placeholder="{{$cli->description}}" name="des">
        </div>
        <button type="submit" class="btn btn-primary">تعديل </button>
      </form>
</body>
