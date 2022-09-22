<?php

namespace App\Http\Controllers;

use App\Models\Cupo;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //la funcion index nos muestra una informacion accediendo por medio de la tabla de aprendces
    public function index($id)
    {
        //$cupos almacena una array de las tablas dormitorio, aprendices y cupos por medio de inners joins
        $cupos = DB::select('select cupo_deletes.*,dormitorios.*,aprendices.*,fichas.ficha from cupo_deletes
                                inner join aprendices on aprendices.id = cupo_deletes.fk_estudiantes
                                inner join fichas on fichas.id = aprendices.aprendiz_ficha
                                inner join dormitorios on dormitorios.id = cupo_deletes.fk_dormitorios where cupo_deletes.fk_estudiantes = ?', [$id]);

        //le indicamos que nos retorne la vista index de la carpeta cupos y nos mande la informacion de la varaible por medio del comapct
        return view('cupos.index', compact('cupos'));
    }

    public function dowloadPDF($id)
    {
        $cupos = DB::select('select cupo_deletes.*,dormitorios.*,aprendices.*,fichas.ficha from cupo_deletes
                                        inner join aprendices on aprendices.id = cupo_deletes.fk_estudiantes
                                        inner join fichas on fichas.id = aprendices.aprendiz_ficha
                                        inner join dormitorios on dormitorios.id = cupo_deletes.fk_dormitorios where cupo_deletes.fk_estudiantes = ?',[$id]);

       view()->share('cupos.dowload',$cupos);

        $pdf = PDF::loadView('cupos.dowload', ['cupos' => $cupos]);

        return $pdf->download('Reporte De Las Habitaciones.pdf');
    }

    //la funcion indextodo nos pasa la informacion solo de la tabla cupos
    public function indextodo()
    {
        //la variable cupos nos almacena la array de toda la informacion pero solo de la tabla cupos
        $cupos = Cupo::all();

        //nos devuelve la vista junto con la informacion que tiene la variable
        return view('cupos.indextodo', compact('cupos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //la funcion createcupos es la vista donde se mandara la informacion que se almacenara en la base de datos
    public function createCupo($id)
    {
        //$ficha nos almacena una array con la informacion de la tabla dormitorios
        $ficha = DB::select('select * from dormitorios where id = ?', [$id]);
        //$data es donde se almacena la array y nos la mostrara en la vista de crate en la carpeta cupos
        $data = array('lista_dormitorios' => $ficha);

        //$var se almacena la informacion del campo genero de la tabla dormitorio deonde el id es igual al id selecionado
        //en la vista del index dormitorio
        $var = DB::select('select genero from dormitorios where id = ?', [$id]);

        //el forecah recorre el array que se almacena en la varaible $var y nos traera el dato que solicitamos
        //en formato de texto y la infoirmacion se almacenara el la varaibale $genero
        foreach($var as $ver){
            $genero = $ver->genero;
        };

        //condicional nos dira si el genero en la tabla dormitorio es femenio o masculino y nos mostrara una informacion diferente
        if($genero == "Femenino"){

            //si el genero es feminino nos mostrar todos los aprendices que su genero sea femenino y en el campo habitacion sea igual a no
            $aprendiz = DB::select('select aprendices.*, fichas.ficha from aprendices inner join fichas on fichas.id = aprendices.aprendiz_ficha
                                    where aprendices.genero = "Femenino" and aprendices.habitacion = "No"');
            //$data2 se almacena la informacion de la variable $aprendiz y se la pasaremos a la vista
            $data2 = array('lista_aprendices' => $aprendiz);

        }
        else{

            //esta funcion hace lo mismo que la anterior solo que es cuando el genero sea igual a masculino
            $aprendiz = DB::select('select aprendices.*, fichas.ficha from aprendices inner join fichas on fichas.id = aprendices.aprendiz_ficha
                                    where aprendices.genero = "Masculino" and aprendices.habitacion = "No"');
            $data2 = array('lista_aprendices' => $aprendiz);

        }

        //nos devuelve la vista junto con el array de la tabla dormitorio y la tabla aprendices segun su genero
        return view('cupos.create',$data2, $data);

    }

    //la funcion estore es la funcion para lamacenar la informacion en la base de datos
    public function storeCupo(Request $request)
    {
        //nos aseguramos que sea necesario que los campos sean necesraios y que la llave foranea de aprendiz sea unica
        $request->validate([
            'fecha_ingreso' => 'required',
            'fecha_salida' => 'required', 
            'fk_estudiantes' => 'required|unique:cupos',
            'fk_dormitorios' => 'required'
        ]);

        //accedemos a la base de datos y a la tabla cupos despúes accedemos a la funcion insertar de sentencias sql
        DB::table('cupos')->insert([
            'fecha_ingreso' => $request->fecha_ingreso,
            'fecha_salida' => $request->fecha_salida,
            'fk_estudiantes' => $request->fk_estudiantes,
            'fk_dormitorios' => $request->fk_dormitorios
        ]);

        //una vez almacenada la informacion indicamos que nos rediriga a otra ruta
        return redirect()->route('index.dormitorio')->with('crear','ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cupo  $cupo
     * @return \Illuminate\Http\Response
     */
    public function show(Cupo $cupo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cupo  $cupo
     * @return \Illuminate\Http\Response
     */
    //funcion edit accede a la vista editar para actualizar la informacion
    public function edit($id)
    {
        //$cupo almacena un array donde el id sea igual al id que se selecciono previamente
        $cupo = Cupo::find($id);
        //$gen almacena el array aprendices
        $gen = DB::select('select aprendices.genero from aprendices inner join cupos on cupos.fk_estudiantes = aprendices.id where cupos.id = ?', [$id]);

        //accedmos al datos que queremos y lo tranformamos en texto
        foreach($gen as $ver){
            $genero = $ver->genero;
        };

        //verificamos que el dato que tranformamos se femenino o masculino
        if($genero == "Femenino"){
            //$almacena el array de la tabla dormitorios donde los campos estado y genero sean igual a disponible y femenino
            $dormitorio = DB::select('select * from dormitorios where estado = "disponible" and genero = "Femenino" ');
            //$data almacenamos el array para mostrarlo en la vista
            $data = array('lista_dormitorios' => $dormitorio);
        }else{
            //hace el mismo proceso anterior mencionado solo que el genero debe de ser masculino
            $dormitorio = DB::select('select * from dormitorios where estado = "disponible" and genero = "Masculino" ');
            $data = array('lista_dormitorios' => $dormitorio);
        }

        return view('cupos.edit',compact('cupo') ,$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cupo  $cupo
     * @return \Illuminate\Http\Response
     */
    //funcion update para que se actualice la informacion
    public function update(Request $request, Cupo $cupo)
    {
        //$cupo accede al id seleccionado y accede a la funcion update para actaulizar la informcion
        $cupo->update([
            'fk_dormitorios' => $request->fk_dormitorios
        ]);

        return redirect()->route('indextodo.cupos')->with('actualizar','ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cupo  $cupo
     * @return \Illuminate\Http\Response
     */
    //funcion destroy elimina la informacion de la base de datos
    public function destroy($id)
    {
        //$cupos almacena el id seleccionado previamente
        $cupos = Cupo::findOrFail($id);
        //accede al id seleccionado y elmina la informacion seleccionada
        $cupos->delete();

        return redirect()->back()->with('eliminar','ok');
    }
}
