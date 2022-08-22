<?php

namespace App\Imports;

use App\Models\Aprendice;
use App\Models\Ficha;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AprendicesImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading
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
            'cc' => $row['cc'],
            'nombre' => $row['nombres'],
            'apellido' => $row['apellidos'],
            'edad' => $row['edad'],
            'genero' => $row['genero'],
            'desayuno' => $row['desayuno'],
            'almuerzo' => $row['almuerzo'],
            'cena' => $row['cena'],
            'observaciones' => $row['observaciones'],
            'fecha_inicial' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['fecha_de_ingreso']),
            'fecha_final' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['fecha_de_salida']),
            'aprendiz_ficha' => $this->fichas[$row['ficha']],
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
}
