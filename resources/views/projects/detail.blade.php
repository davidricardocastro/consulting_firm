<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Projects</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> 
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/scrolling-nav.css') }}" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Best consultancy agency</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="bg-primary text-white">
      <div class="container text-center">
        <h1>{{$project->project_name}}</h1>
        
        <p class="lead">{{$project->project_country}}, {{$project->project_area}} </p>
      </div>
    </header>

    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
          
            <h2>{{$project->project_description}} </h2>
            
            <img class="img-fluid" src="{{url('/img/'.$project->project_img1)}}" alt="">
           
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum corporis consequatur, quaerat dolorum illum, magnam neque veritatis, iure architecto ullam at sint. Quas voluptate reprehenderit, amet laboriosam natus est recusandae suscipit porro in expedita nobis ad vitae officia magnam voluptates voluptatum laborum. Nobis deserunt sint ex officiis? Fuga, iure blanditiis nihil non culpa officiis, delectus nisi consequuntur voluptate iusto unde fugiat deserunt, magni libero omnis minima. Iure sapiente inventore, velit deserunt modi quis numquam, illo quisquam molestias dolore aliquid eos. Quaerat eligendi possimus magni deserunt, cum porro voluptatem autem quas quo illum commodi numquam aperiam veritatis architecto nostrum dignissimos dicta alias tempore. Numquam a veniam iure esse vitae deleniti magni, dolorum est laudantium blanditiis unde perspiciatis iusto ad vel ullam debitis pariatur voluptatibus et ipsum eum nesciunt rem, officia corrupti. Incidunt enim veniam ad! Deleniti vitae incidunt adipisci autem deserunt! Ipsam consequuntur voluptates dolore architecto excepturi atque fuga aliquam eum soluta! Aut, vero dolore odio possimus impedit dolor atque aliquid tenetur ipsa porro quia culpa illum sit est nesciunt aliquam placeat. Optio, porro. Explicabo, nemo perspiciatis nam molestias possimus facere cumque error cupiditate, repudiandae voluptate aliquam neque a voluptatem facilis, voluptatibus incidunt at laboriosam omnis similique soluta tempore fugit iste?
            
            
           
            
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!--   <h2>Projects</h2>   -->
            <a href="{{ action('ProjectController@listing') }}"><h2>Projects list</h2></a>

  






             </div>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Contact us</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor, provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa exercitationem, in, quo totam.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }} "></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }} "></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }} "></script>

    <!-- Custom JavaScript for this theme -->
    <script src="{{ asset('js/scrolling-nav.js') }}"></script>

  </body>

</html>