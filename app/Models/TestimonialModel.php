<?php

namespace App\Models;

use CodeIgniter\Model;

class TestimonialModel extends Model
{
    protected $table            = 'testimonials';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;

    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;

    protected $allowedFields = [
        'name',
        'country',
        'image_path',
        'video_path',
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules = [
        'name'       => 'required|min_length[3]|max_length[120]',
        'country'    => 'required|min_length[2]|max_length[80]',
        'image_path' => 'required',
        'video_path' => 'required',
    ];

    /**
     * Get all active testimonials ordered by creation date
     *
     * @param int|null $limit Number of testimonials to retrieve (null for all)
     * @return array
     */
    public function getActiveTestimonials(?int $limit = null): array
    {
        $builder = $this->orderBy('created_at', 'DESC');
        
        if ($limit !== null) {
            $builder->limit($limit);
        }
        
        return $builder->findAll();
    }

    /**
     * Get testimonials for homepage (limited)
     *
     * @param int $limit
     * @return array
     */
    public function getHomepageTestimonials(int $limit = 6): array
    {
        return $this->getActiveTestimonials($limit);
    }
}