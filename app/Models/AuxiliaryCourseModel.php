<?php

namespace App\Models;

use CodeIgniter\Model;

class AuxiliaryCourseModel extends Model
{
    protected $table            = 'auxiliary_courses';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    
    protected $allowedFields    = [
        'slug',
        'title',
        'description',
        'price',
        'currency',
        'is_active'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    /**
     * Obtener curso de auxiliares activo
     */
    public function getActiveCourse()
    {
        return $this->where('is_active', 1)
                    ->first();
    }

    /**
     * Obtener curso por slug
     */
    public function getCourseBySlug(string $slug)
    {
        return $this->where('slug', $slug)
                    ->where('is_active', 1)
                    ->first();
    }
}
