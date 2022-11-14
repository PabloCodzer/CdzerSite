<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.css" rel="stylesheet" type="text/css">
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Produto:</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            {{-- <div class="alert alert-danger" style="display:none"></div> --}}
            <form id="cadastro" enctype="multipart/form-data">
              <meta name="csrf-token" content="{{ csrf_token() }}">
                <input type="hidden" name="id" id="id" class="form-control"></br>
                <label class="nome">Nome</label></br>
                <input type="text" name="nome" id="nome" class="form-control"></br>
                <label class="codigo">Código</label></br>
                <input type="text" name="codigo" id="codigo" class="form-control"></br>
                <label class="descricao">Descricao</label></br>
                <input type="text" name="descricao" id="descricao" class="form-control"></br>
                <label class="valor">Valor</label></br>
                <input type="text" name="valor" id="valor" class="form-control"></br>
                <label>Data</label></br>
                <input type="text" name="data_criado" id="datepicker" class="form-control"></br>
                {{-- <label>Foto</label></br>
                <input type="file"  name="foto" id="foto" class="form-control"></br> --}}
            </form> 


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Cadastrar</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.js"></script>
<script>


$( ".btn-primary" ).click(function(e){
    const id        = $('input[name="id"]').val();
    const nome      = $('input[name="nome"]').val();
    const cod       = $('input[name="codigo"]').val();
    const descricao = $('input[name="descricao"]').val();
    const valor     = $('input[name="valor"]').val();
    const data      = $('input[name="data_criado"]').val();
    // var data_alterada = data.replace(/(\d*)-(\d*)-(\d*).*/, '$3/$2/$1');
    const foto      = $('input[name="foto"]').val();


   $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });

    $.ajax({
        'processing': true, 
        'serverSide': true,
          type: "POST",
          data: { id:id, nome: nome, codigo: cod, descricao: descricao,  valor:valor, data_criado: data, foto:'0000'},
          url: "/cadastroajax",
          datatype: "json",
          success: function(evento) 
          {
            if(evento.errors)
            {
               jQuery.each(evento.errors, function(key, value){
            
                    switch( value )
                    {   
                        case 'nome':    
                                    $('.nome').css('color', 'red');
                                    $('#nome').css('border', '1px solid red');
                                    break;
                        case 'codigo':    
                                    $('.codigo').css('color', 'red');
                                    $('#codigo').css('border', '1px solid red');
                                    break;   
                        case 'descricao':    
                                    $('.descricao').css('color', 'red');
                                    $('#descricao').css('border', '1px solid red');
                                    break;
                        case 'valor':    
                                    $('.valor').css('color', 'red');
                                    $('#valor').css('border', '1px solid red');
                                    break;  
                        // case 'foto':    
                        //             $('.foto').css('color', 'red');
                        //             $('#foto').css('border', '1px solid red');
                        //             break;      
                    }
           
                });
            }
            else
            {
              Swal.fire({
                        title: 'Produto Registrado!',
                        type: 'success',
                      
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'OK',
                        cancelButtonText: 'Não'
                        }).then((result) => {
                       
                          location.reload();
                        
            });

            }
          },
          error:  function(evento) {
            alert('erro ao cadastrar');
          },
    });
});


    $( "#datepicker" ).datepicker({
     
        dateFormat: "dd/mm/yy",
    });


    $( "#nome" ).click(function(e){ $('#nome').css('border', ''); $('.nome').css('color', '')  });
    $( "#codigo" ).click(function(e){ $('#codigo').css('border', ''); $('.codigo').css('color', '')  });
    $( "#descricao" ).click(function(e){ $('#descricao').css('border', ''); $('.descricao').css('color', '') });
    $( "#valor" ).click(function(e){ $('#valor').css('border', ''); $('.valor').css('color', ''); });
    $( "#foto" ).click(function(e){ $('#foto').css('border', ''); $('.foto').css('color', ''); });
</script>