<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gigguide extends Model
{
    protected $table = 'gigguide';
     protected $fillable = [
    'gig_artis',
    'gig_lokasi',
    'gig_waktu',
    'gig_keterangan',
	'gig_photo'];
}
