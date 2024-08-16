<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture</title>
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- bootstrap link -->

    <!-- icons -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- icons -->


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
                <a class="nav-link" href="/home">  صفحة الموقع</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

     <section style="background-color: #800000; padding: 5px;" id="services">

        <div class="container" style="padding: 5px;">
        <h3 class="text-center" style="padding-top: 30px; color:#FF9100">خدماتنا</h3>

        <div class="row" style="margin-top: 50px;">
            @foreach ($serv as $serr)
            <div class="col-md-5 py-3 py-md-0">

                <div class="card" style="background-color:#FF9100; color: #fffcfc;">


                        <h5 class=" text-center"> {{$serr->title}} </h5>
                        <img src="../{{$serr->img}}" alt="" class="card image-top" height="200px">
                        <p class="text-center">{{$serr->description}} </p>

                        <a href="/ed/{{$serr->id}}" class="btn btn-primary">تعديل</a>

                        <form action="/delete/{{$serr->id}}" method="post">
                            @csrf
                            @method('delete')
                        <button class="btn btn-primary"> حذف</button>
                        </form>

                </div>

            </div>
            @endforeach
        </div>

    </div>

</section>




    <!-- card3 -->
    <section style="background-color:#FF9100; padding: 5px;" id="costmer">
        <div class="container" style="padding: 5px;">
            <h3 class="text-center" style="padding-top: 30px; color:#800000">عملائنا</h3>
            <div class="row" style="margin-top: 50px;">
                @foreach ($cli as $cl)
                <div class="col-md-6 py-3 py-md-0">
                    <div class="card" style="background-color:#800000; color: #fffcfc;">


                            <h5 class=" text-center"> {{$cl->title}} </h5>
                            <img src="../{{$cl->img}}" alt="" class="card image-top" height="200px">
                            <p class="text-center">{{$cl->description}} </p>

                            <a href="/edd/{{$cl->id}}" class="btn btn-primary">تعديل</a>

                            <form action="/delete_client/{{$cl->id}}" method="post">
                                @csrf
                                @method('delete')
                            <button class="btn btn-primary"> حذف</button>
                            </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


</body>
</html>
