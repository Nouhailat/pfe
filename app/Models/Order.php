<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    use HasFactory;

    protected $fillable = ['client_id', 'article_id', 'price', 'quantity'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function article()
    {
        return $this->belongsTo(Article::class);
        }
}
