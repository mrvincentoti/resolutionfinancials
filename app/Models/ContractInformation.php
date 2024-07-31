<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractInformation extends Model
{
    use HasFactory;
    protected $fillable = ['redacted_ppp_agreement', 'financial_structure', 'risk','government_support','tariff','termination_provisions','renegotiations', 'project_id'];
}
