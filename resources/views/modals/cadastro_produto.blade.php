<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            {{-- <div class="alert alert-danger" style="display:none"></div> --}}
            <form action="/cadastroajax" method="post" id="cadastro">
                @csrf
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
                <label>Foto</label></br>
                <input type="text" name="foto" id="foto" class="form-control"></br>
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
<script>

$( ".btn-primary" ).click(function(e){
    const nome = $('input[name="nome"]').val();
    const cod = $('input[name="codigo"]').val();
    const descricao = $('input[name="descricao"]').val();
    const valor = $('input[name="valor"]').val();
    const data      = $('input[name="data_criado"]').val();
    const foto      = $('input[name="foto"]').val();
   
    $.ajax({
        'processing': true, 
        'serverSide': true,
          type: "GET",
          data: {nome:nome,  codigo:cod, descricao:descricao, valor:valor, data_criado:data, foto: foto },
          url: "/cadastroajax",
          datatype: "json",
          success: function(evento) {
            // alert('funciona '+evento);
            // location.reload();
            if(evento.errors){
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
                    }
           
                });
            }
            else{
                location.reload();
            }
          },
          error:  function(evento) {
            alert('não funciona');
          },
    });
});


    $( "#datepicker" ).datepicker();

    $( "#nome" ).click(function(e){ $('#nome').css('border', ''); $('.nome').css('color', '')  });
    $( "#codigo" ).click(function(e){ $('#codigo').css('border', ''); $('.codigo').css('color', '')  });
    $( "#descricao" ).click(function(e){ $('#descricao').css('border', ''); $('.descricao').css('color', '') });
    $( "#valor" ).click(function(e){ $('#valor').css('border', ''); $('.valor').css('color', ''); });
</script>