<?php

namespace App\Imports;

use App\Models\Aprendice;
use App\Models\Ficha;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class AprendicesImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading, WithValidation
{
    private $fichas;

    public function __construct()
    {
        $this->fichas = Ficha::pluck('id','ficha');
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Aprendice([
            'cc' => $row['documento'],
            'nombre' => $row['nombres'],
            'apellido' => $row['apellidos'],
            'genero' => $row['genero'],
            'desayuno' => 'Si',
            'almuerzo' => 'Si',
            'cena' => 'Si',
            'observaciones' => $row['observaciones'],
            'estado' => 'Activo',
            'fecha_inicial' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['fecha_de_ingreso']),
            'fecha_final' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['fecha_de_salida']),
            'aprendiz_ficha' => $this->fichas[$row['ficha']],
            'habitacion' => 'No',
        ]);
    }

    public function batchSize(): int
    {
        return 1000;
    }

    public function chunkSize(): int
    {
        return 1000;
    }

    public function rules(): array
    {
        return [
             '*.nombres' => [
                'required',
             ],
             '*.apellidos' => [
                'required',
             ],
             '*.genero' => [
                'required',
             ],
             '*.observaciones' => [
                'required',
             ],
             '*.ficha' => [
                'required',
             ],
             '*.fecha_de_ingreso' => [
                'required',
             ],
             '*.fecha_de_salida' => [
                'required',
             ],

        ];
    }
}
