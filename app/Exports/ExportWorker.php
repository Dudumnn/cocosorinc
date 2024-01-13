<?php

namespace App\Exports;

use App\Models\Worker;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ExportWorker implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Worker::select(
            'name', 
            'extension_name', 
            'birthdate', 
            'age', 
            'gender', 
            'status', 
            'position', 
            'date_of_employment',
            'address',
            'shift',
            'employment_status'
        )->get();
    }
    public function headings(): array
    {
        return [
            'Name',
            'Extension Name',
            'Birthdate',
            'Age',
            'Gender',
            'Status',
            'Position',
            'Date of Employment',
            'Address',
            'Shift',
            'Employment Status',
        ];
    }

    public function map($row): array
    {
        $row['date_of_employment'] = \Carbon\Carbon::parse($row['date_of_employment'])->format('F d, Y');
        $row['birthdate'] = \Carbon\Carbon::parse($row['birthdate'])->format('F d, Y');

        return [
            $row['name'],
            $row['extension_name'],
            $row['birthdate'],
            $row['age'],
            $row['gender'],
            $row['status'],
            $row['position'],
            $row['date_of_employment'],
            $row['address'],
            $row['shift'],
            $row['employment_status'],
        ];
    }
}
