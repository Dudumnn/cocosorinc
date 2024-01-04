<?php

namespace App\Imports;

use App\Models\Performance;
use Maatwebsite\Excel\Concerns\ToModel;


class OutputImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Performance([
            'name' => $row['0'],
            'groupID' => $row['1'],
            'day1_day' => $row['2'],
            'day1_night' => $row['3'],
            'day2_day' => $row['4'],
            'day2_night' => $row['5'],
            'day3_day' => $row['6'],
            'day3_night' => $row['7'],
            'day4_day' => $row['8'],
            'day4_night' => $row['9'],
            'day5_day' => $row['10'],
            'day5_night' => $row['11'],
            'day6_day' => $row['12'],
            'day6_night' => $row['13'],
            'day7_day' => $row['14'],
            'day7_night' => $row['15'],
            'total' => $row['16'],
            'count' => $row['17']
        ]);
    }
}
