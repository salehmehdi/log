@extends('layou.app')
@section('title')Anasayfa @endsection
@section('content')
<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
        <h2 class="fw-normal">Heading</h2>
        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        <p><a class="btn btn-secondary" href="#">View details »</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
        <h2 class="fw-normal">Heading</h2>
        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
        <p><a class="btn btn-secondary" href="#">View details »</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
        <h2 class="fw-normal">Heading</h2>
        <p>And lastly this, the third column of representative placeholder content.</p>
        <p><a class="btn btn-secondary" href="#">View details »</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Php . <span class="text-body-secondary">Programlama dili .</span></h2>
        <p class="lead">suan laravel ile eszamanli olarak php alaninda kendimi gelistirmeye calisiyorum .</p>
        <p class="">Daha cok calismam gerektiginin farkindayim php ve Laravel hakkinda surekli olarak calismam gerekiyor ve guncel gelismelerden haberdar olmam gerekli .</p>
      </div>
      <div class="col-md-5">
        <img src="https://images.unsplash.com/photo-1599507593499-a3f7d7d97667?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cGhwfGVufDB8fDB8fHww&w=1000&q=80https://cgud.b-cdn.net/wp-content/uploads/Dini-1-1024x683.jpg.webp" width="450" height="300" alt="">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Laravel. <span class="text-body-secondary">Php framework.</span></h2>
        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRx2mL7pxWerwBEiaGh7kOFfB2p4BHN_UtepA&usqp=CAU" width="450" height="300" alt="">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Php ve Laravel. <span class="text-body-secondary">daha hizli proje gelistirme</span></h2>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
      <div class="col-md-5">
        <img src="data:image/png;base64,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" width="450" height="300" alt="">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div>

@endsection