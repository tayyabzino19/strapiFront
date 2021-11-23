<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    use HasFactory;


    protected $fillable = ['FirstName',
                        'LastName',
                        'created_by',
                        'updated_by',
                        'CompanyName',
                        'Email',
                        'Phone',
                        'ZipCode',
                        'HeliumHotspot',
                        'Access',
                        'HotSpots',
                        'DeployIndoors',
                        'ReservationID',
                        'PaymentStatus',
                        'UniqueIdentifier',
                        'OrderInline',
                        'AdditionalNotes',
                        'Batch',
                        'UserID',
                        'EntryKey',
                        'published_at'];


}
