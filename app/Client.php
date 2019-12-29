<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Client extends Model
{
    use Sortable;

    public $sortable = [
        'company_name',
        'primary_contact_first',
        'primary_contact_last'
    ];

    protected $guarded = [];
}
