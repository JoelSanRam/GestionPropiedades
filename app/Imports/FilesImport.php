<?php

namespace App\Imports;

use App\File;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class FilesImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new File([
            'propiedad_id' => $row['propiedad_id'],
            'pdf' => $row['pdf'] . '.pdf',
            'dwg' => $row['dwg'] . '.dwg',
        ]);
    }
}
