<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table = 'books';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'author', 'publication_year', 'publisher_id'];

    public function getBooks()
    {
        return $this->findAll();
    }

    public function getBookById($id)
    {
        return $this->find($id);
    }
}
