<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ZAgreementReminderSetting extends Model
{
   protected $table = 'z_agreement_reminder_settings';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $guarded = [];
}
