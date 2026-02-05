<?php

namespace App\Models;

use CodeIgniter\Model;

class DoctorModel extends Model
{
    protected $table            = 'doctors';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;

    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;

    protected $allowedFields = [
        'slug',
        'full_name',
        'role_title',
        'image_path',
        'studies',
        'titles',
        'teaching_activity',
        'teaching_category',
        'clinical_research',
        'patents',
        'presentations',
        'publications',
        'courses_received',
        'courses_taught',
        'abroad_stays',
        'positions_held',
        'professional_experience',
        'scholarships_research_groups',
        'other_studies',
        'notes',
        'sort_order',
        'is_active',
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules = [
        'slug'      => 'required|min_length[3]|max_length[140]|is_unique[doctors.slug,id,{id}]',
        'full_name' => 'required|min_length[3]|max_length[180]',
    ];
}
