<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class TodoDetail extends Model
    {
        use HasFactory;

        protected $fillable = ['title', 'body', 'todo_master_id'];

        public function TodoMaster()
        {
            return $this->belongsTo(TodoMaster::class);
        }
    }
