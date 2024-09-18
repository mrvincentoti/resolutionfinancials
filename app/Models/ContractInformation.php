<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractInformation extends Model
{
    use HasFactory;
    protected $fillable = ['status_id', 'fname', 'mname','lname','mobile','email','state', 'lga', 'house_number','gender','street','account_statement','passport','work_id','application_form','utility_bill','employment_letter'];
}
