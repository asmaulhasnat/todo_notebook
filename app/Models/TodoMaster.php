<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class TodoMaster extends Model
    {
        use HasFactory;

        protected $fillable = ['name'];

        public function TodoDetail()
        {
            return $this->hasMany(TodoDetail::class);
        }
    }
