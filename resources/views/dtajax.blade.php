@include('header.header')
@include('modals.cadastro_produto')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.css" rel="stylesheet" type="text/css">
<body>
    <div class="d-flex justify-content-end mr-2 mt-2"> 
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Cadastro </button>&nbsp
        <a href="/exemplos" class="btn btn-success mr-2"><i class="fa-solid fa-arrow-left"></i> VOLTAR </a>
    </div>
<div class="row">
    <div class="col-sm-10 container mt-5" style="background-color: white">
        <h2 class="col-sm-9 my-2"> Tabela de cadastros Ajax. </h2>
    <table id="example" class="display nowrap" cellspacing='10'  style="width:100%">
        <thead> 
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Código</th>
                <th>Descrição</th>
                <th>Valor</th>
                <th>Data</th>
                <th>Foto</th>
                <th> </th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Código</th>
                <th>Descrição</th>
                <th>Valor</th>
                <th>Data</th>
                <th>Foto</th>
                <th> </th>
            </tr>
        </tfoot>
    </table>
    <br>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.js"></script>

</body>
@include('header.footer')

<script>
$(document).ready(function () {
    $('#example').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: '/datablesajax',
        },
         columns: [
            { data: 'id',  visible: true },
            { data: 'nome' },
            { data: 'codigo' },
            { data: 'descricao' },
            { data: 'valor' },
            { data: 'data_criado' },
            { data: 'foto', visible: false},
            { data: 'action',  visible: true },
         ],
         columnDefs: [
           {
            "targets": 5,
            "render": function(data){
                if( data )
                {
                    var dataFormatada = data.replace(/(\d*)-(\d*)-(\d*).*/, '$3/$2/$1');
                    return dataFormatada;
                }
                else
                {
                    return " - ";
                }
                
            }
        },
        {
            "targets": 7, //"Número referente a coluna, startando no 0"
            "render": function (data, type, row) {
                //Aqui tem um callback onde pode retornar o botão
                //row - aqui você possui todos os atributos da sua linha
                //Basta criar seu botão e como string e retornar;

                var deleteBtn = '<a type="button" class="btn btn-danger excluirProduto" data-id="'+row.id+'" >DELETAR</a>';  
                var editaBtn  = '<a type="button" class="btn btn-warning editarProduto" data-id="'+row.id+'" " > EDITAR </a>';   
                return editaBtn+" "+deleteBtn;
            },
        }
        ],
        language: {
            info: "Mostrando de _START_ a _END_ de _TOTAL_ registros",
            infoEmpty: "Sem registros",
            emptyTable: "Nenhum registro avaliado na tabela",
            infoFiltered: "Filtrados de _MAX_ registros",
            zeroRecords: "Nenhum registro encontrado para a busca",
            lengthMenu: "Mostrando _MENU_ registros",
            search: "Procurar",
            paginate: {
                first: '<<',
                last: '>>',
                previous: '<',
                next: '>'
        }
        },
         responsive: true,
    });
});


$('body').on('click', '.editarProduto', function () {
    var id = $(this).data('id');
    $.ajax({
        'processing': true, 
        'serverSide': true,
        type: "GET",
        data:{ id: id },
        url: "/editaporajax",
        datatype: "json",
          success: function(evento) {
                jQuery.each(evento.success, function(key,value){
                    // alert('funciona: '+value.data_criado);
                    $('#exampleModal').modal('toggle');
                    // $('#myModal').modal('show');
                    // $('#myModal').modal('hide');
                    $('#id').val( value.id );
                    $('#nome').val( value.nome );
                    $('#codigo').val( value.codigo );
                    $('#descricao').val( value.descricao );
                    $('#valor').val( value.valor );
                    var data_formatada = value.data_criado;
                    $('#datepicker').val( data_formatada.replace(/(\d*)-(\d*)-(\d*).*/, '$3/$2/$1') );
                    $('#foto').val( value.foto );
                });
                
        },
        error:    function(evento) {

        }     
    });
});

$('body').on('click', '.excluirProduto', function () {
    var id = $(this).data('id');
    $.ajax({
            'processing': true, 
            'serverSide': true,
            type: "GET",
            data:{ id: id },
            url: "/deletaporajax",
            datatype: "json",
            success: function(evento) {
                Swal.fire({
                        title: 'Produto Excluido !',
                        type: 'error',
                        // showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'OK',
                        cancelButtonText: 'Não'
                        }).then((result) => {
                       
                          location.reload();
                        
            });
            },
            error:    function(evento) {}     
        });
});

</script>