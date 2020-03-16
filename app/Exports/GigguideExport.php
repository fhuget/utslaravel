<?php

namespace App\Exports;

use App\Gigguide;
use Maatwebsite\Excel\Concerns\FromCollection;

class GigguideExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Gigguide::all();
    }
}
