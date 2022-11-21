@include('header.header')
{{-- <link href="/css/style.css" rel="stylesheet"> --}}
<style>
.icon {
  display: flex;
  align-items: center;
  justify-content: center; }
  .icon.icon-box-success {
    width: 40px;
    height: 37px;
    background: rgba(0, 210, 91, 0.11);
    border-radius: 7px;
    color: #00d25b; }
  .icon .icon-item {
    font-size: 20px; }


    .icon {
  display: flex;
  align-items: center;
  justify-content: center; }
  .icon.icon-box-danger {
    width: 40px;
    height: 37px;
    background: rgba(252, 66, 74, 0.11);
    border-radius: 7px;
    color: #fc424a; }
  .icon .icon-item {
    font-size: 20px; }


    .badge-outline-success {
  color: #00d25b;
  border: 1px solid #00d25b; }
  
  </style>
<body>
  <div class="container mt-5">
   <!-- partial -->
      <div class="row">
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0"> 125 </h3>
                    <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success ">
                    <i class="fa-solid fa-arrow-up-right-dots"></i>
                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Peditos Totais</h6>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">R$17.34</h3>
                    <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success">
                    <i class="fa-solid fa-arrow-up-right-dots"></i>
                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Total do dia</h6>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">R$ 12.34</h3>
                    <p class="text-danger ml-2 mb-0 font-weight-medium">-2.4%</p>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-danger">
                    <i class="fa-solid fa-arrow-down-wide-short"></i>
                    <span class="mdi mdi-arrow-bottom-left icon-item "></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Total do mês </h6>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">2</h3>
                    <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success ">
                    <i class="fa-solid fa-arrow-up-right-dots"></i>
                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Esperado ( 200 unid. )</h6>
            </div>
          </div>
        </div>
      </div>
    
      <div class="row ">
        <div class="col-12 grid-margin mt-5">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Order Status</h4>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>
                        <div class="form-check form-check-muted m-0">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                          </label>
                        </div>
                      </th>
                      <th> Cliente </th>
                      <th> Ordem </th>
                      <th> Despachado </th>
                      <th> Origem </th>
                      <th> Valor </th>
                      <th> Aprovado </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="form-check form-check-muted m-0">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                          </label>
                        </div>
                      </td>
                      <td>
                        {{-- <img src="assets/images/faces/face1.jpg" alt="image" /> --}}
                        <span class="pl-2">Cliente Teste</span>
                      </td>
                      <td> 02312 </td>
                      <td> Não </td>
                      <td> Loja </td>
                      <td> 25,50 </td>
                      <td>
                        <div class="badge badge-outline-success">Aprovado</div>
                      </td>
                    </tr>
                    
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
     
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    
    <!-- partial -->
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
@include('header.footer')
<script>
// console.log('salame');
// alert('salame');
</script>