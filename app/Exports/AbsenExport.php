<?php

namespace App\Exports;

use App\Models\ExsportAbsen;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AbsenExport implements FromCollection ,WithHeadings
{

    public function headings():array
	 {
    	return[
    		'no',
            'nim',
    		'nama_lengkap',
    		'prodi',
    		'tanggal',
    		'matkul',
            'materi'
    	];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //return ExsportAbsen::all();
        return collect(ExsportAbsen::getAbsen());
    }
}
