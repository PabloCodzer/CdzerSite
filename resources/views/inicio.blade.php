@include('header.header')

<style>
    body {
    font-family: 'Nunito', sans-serif;
    }
</style>
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="col  shadow-sm card-img-top d-block w-100" src="itens/f_telas.png"  style="max-height: 780px; width: auto">
        <div class="container">
          <div class="carousel-caption text-start d-none d-md-block">
            <h1 class="text-nowrap bd-highlight" >Sites responsivos para todas as plataformas</h1>
            {{-- <p>Todos os sites desenvolvidos são responsívos e adaptativos a varios tamanhos de tela. 
              <br> Utilizamos os mais modernos recursos como Boostratp 5.  </p> --}}
            <!-- <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p> -->
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="col shadow-sm card-img-top d-block w-100" src="itens/e-comerce.png"  style="max-height: 780px;">

        <div class="container">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="text-nowrap bd-highlight" >Ecomerce e Loja virtual para o seu negócio.</h1>
            {{-- <p>Tenha sua loja virtual completa com sistema de cadastro de clientes, cadastro de produtos e pagamento integrado</p> --}}
            <!-- <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p> -->
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="col shadow-sm card-img-top d-block w-100" src="itens/site.png"  style="max-height: 780px;">

        <div class="container">
          <div class="carousel-caption text-end d-none d-md-block">
            <h1 class="text-nowrap bd-highlight">Sites institucionais para seu negócio.</h1>
            {{-- <p>Paginas para direcionamento do seu perfil de instagram ou empresa.<br> Ideal para campanhas, sorteio ou informações.</p> --}}
            <!-- <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p> -->
            
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  
    <body>

        <div class="container card-header shadow-lg">
          <div class="col text-center"> <h1 class="text-nowrap bd-highlight"> Serviços que oferecemos: </h1> </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <img class="col gad shadow-sm card-img-top" src="itens/1.png">  
                        <p class="text-nowrap card-body text-center">Sites customizados</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img class="col gad shadow-sm card-img-top" src="itens/2.png">  
                        <p class="text-nowrap card-body text-center">Sites de comercio</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img class="col gad shadow-sm card-img-top" src="itens/3.png">  
                        <p class="text-nowrap card-body text-center ">Landing Pages</p>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-12 card mb-2 mt-4">
                  <strong class="text-nowrap bd-highlight">Como funciona:</strong> 
                  <p>Todos os sites são desenvolvidos utilizando HTML5,  CSS3, Bootstrap 5.<br>
                  Outros Frameworks de Front também podem ser utilizados.</p>
                </div>
                
                <div class="col-sm-12 card mb-2"> 
                  <strong class="text-nowrap bd-highlight"> Sites Institucionais: </strong>
                  <p> Melhore a comunicação da sua marca com seu público. Ofereça e mostre seus serviços.</p> 
                </div>

                <div class="col-sm-12 card mb-2"> 
                  <strong> Sites para comercio: </strong> 
                  <p> Serviços de e-comerce como shopify ou mesmo customizado. 
                      Há integração com meios de pagamento e painel para administrar suas vendas.
                  </p> 
                </div>
                <div class="col-sm-12 card mb-2"> 
                  <strong class="text-nowrap bd-highlight"> Landing pages: </strong>
                  <p> 
                    Landing page pode ser uma entrada de prospecção de novas parcerias e vendas. 
                    Além de fortalecer a perpetuação de uma marca.
                  </p> 
                </div>
       
        </div>
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
    @include('header.footer')
    <script>
        // console.log('salame');
        // alert('salame');
    </script>