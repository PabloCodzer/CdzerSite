<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;
use App\Models\produtos;
use DB;
use App\Http\Controllers\Validador;

use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class ExemplosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contato = array(); 
        $contato['WhatsaApp'] = '(51) 98255-7103';
        $contato['email'] = 'pablo.cozer@gmail.com'; 

        // $prod = DB::table('produtos_lista')->select('nome')->get(); 
        $prod = produtos::all();
        $contato['podrutos'] = $prod;  
        return view('exemplo', $contato);
    }

    public Function DataTablesSimples()
    {
        $contato = array(); 
        $contato['WhatsaApp'] = '(51) 98255-7103';
        $contato['email'] = 'pablo.cozer@gmail.com'; 

        return view('dtsimples', $contato);

    }

    public Function DataTableAjax( Request $request)
    {
        $contato = array();
        $produtos = produtos::all(); 
        
        foreach( $produtos as $produto )
        {
            $contato [] = [ 
            'id'            =>  $produto->id,
            'nome'          =>  $produto->nome,
            'codigo'        =>  $produto->codigo,
            'descricao'     =>  $produto->descricao,
            'valor'         =>  $produto->valor,
            'data_criado'   =>  $produto->data_criado,
            'foto'          =>  $produto->foto,
            'action'        => ' '];
        }
          $response = array(
            "draw" => 1,
            "iTotalRecords" => 2,
            "iTotalDisplayRecords" => 2,
            "aaData" =>  $contato,
         );
         
        if ( $request->ajax() ) 
        {
            return json_encode(  $response  );
            // return json_encode(  $request->all()  );
        }
        $teste['teste'] =  $contato;
        return view('dtajax', $teste);
    }

    public Function CadastroAjax( Request $request)
    {   
        $produtos = $request->all() ;
        $id = array();
        foreach($produtos as $i=>$p)
        {
            if( $i == 'id' )
            {
                $id =  $p;
            }
        } 
        $campos_para_validacao = [
            'nome' => 'required',
            'codigo' => 'required',
            'descricao' => 'required',
            'valor' => 'required',
            // 'foto'  => 'required|mines:jpeg,png,jpg,gif,svg|max:2048',
        ];

        if ( $request->ajax() ) 
        {
            $validator = \Validator::make($request->all(), $campos_para_validacao, 
            [
                'nome.required' => 'nome',
                'codigo.required' => 'codigo',
                'descricao.required' => 'descricao',
                'valor.required' => 'valor',
                // 'foto.required' => 'foto',
            ]);

           if ($validator->fails())
           {
               return response()->json(['errors'=>$validator->errors()->all()]);
           }
           if( $id == NULL )
            {    
                // $path = $request->file('foto')->store('fotocadastro'); 
               $produto_criado =  produtos::create( $produtos );
                return response()->json(['success'=>'Produto adicionado com sucesso!!', 'id'=>$validator]);
            }
            else
            {
                $update = produtos::find($id );
                $update->update($request->all());
                return response()->json(['success'=>'Produto alterado com sucesso!!', 'id'=> $id]);
            }
            
        }
    }

    public function EditaCadastroAjax( Request $request)
    {
        $id = $request->all();
        $produto =  produtos::find( $id );
        if( $produto ){
            return response()->json( ['success'=> $produto] );
        }
        else
        {
            return response()->json(['errors'=> 'Não encontrado']);
        }
       
    }

    public function DeletaCadastroAjax( Request $request )
    {
        $produtos = $request->all() ;
        $id = array();
        foreach($produtos as $i=>$p)
        {
            if( $i == 'id' )
            {
                $id =  $p;
            }
        } 
        if ( $request->ajax() ) 
        {
            $delete = produtos::find( $id );
            $delete->delete($request->all());
            return response()->json(['success'=>'Produto excluido com sucesso!!', 'id'=> $id]);
        }
    }
}
