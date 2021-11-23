<?php

namespace App\Imports;

use App\Models\Entry;
use Maatwebsite\Excel\Concerns\ToModel;

class EntryImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Entry([
            'FirstName'     => $row[0],
            'LastName'    => $row[1],
            'CompanyName' => $row[2],
            'Email' => $row[3],
            'Phone' => $row[4],
            'ZipCode' => $row[5],
            'HeliumHotspot' => $row[6],
            'Access' => $row[7],
            'HotSpots' => $row[8],
            'DeployIndoors' => $row[9],
            'ReservationID' => $row[10],
            'PaymentStatus' => $row[11],
            'UniqueIdentifier' => $row[12],
            'OrderInline' => $row[13],
            'AdditionalNotes' => $row[14],
            'Batch' => $row[15],
            'UserID' => $row[16],
            'EntryKey' => $row[17],
            'published_at' => $row[18],
            'created_by' => $row[19],
            'updated_by' => $row[20],

        ]);
    }
}
