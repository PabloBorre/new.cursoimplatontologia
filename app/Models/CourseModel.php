<?php

namespace App\Models;

use CodeIgniter\Model;

class CourseModel extends Model
{
    protected $table            = 'courses';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    
    protected $allowedFields = [
        'slug',
        'level',
        'title',
        'subtitle',
        'short_description',
        'hero_image',
        'content_image',
        'price',
        'currency',
        'duration_days',
        'features',
        'requirements',
        'includes',
        'meta_title',
        'meta_description',
        'is_active',
        'sort_order'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation
    protected $validationRules = [
        'slug'  => 'required|max_length[100]|is_unique[courses.slug,id,{id}]',
        'level' => 'required|in_list[1,2,3]',
        'title' => 'required|max_length[150]',
        'price' => 'required|decimal',
    ];

    protected $validationMessages = [
        'slug' => [
            'is_unique' => 'This course slug already exists.',
        ],
    ];

    protected $skipValidation = false;

    // =========================================
    // CUSTOM METHODS
    // =========================================

    /**
     * Get all active courses
     */
    public function getActiveCourses(): array
    {
        return $this->where('is_active', 1)
                    ->orderBy('sort_order', 'ASC')
                    ->findAll();
    }

    /**
     * Get courses by level
     */
    public function getCoursesByLevel(int $level): array
    {
        return $this->where('is_active', 1)
                    ->where('level', $level)
                    ->orderBy('sort_order', 'ASC')
                    ->findAll();
    }

    /**
     * Get course by slug
     */
    public function getCourseBySlug(string $slug): ?array
    {
        return $this->where('slug', $slug)
                    ->where('is_active', 1)
                    ->first();
    }

    /**
     * Get course with decoded JSON fields
     */
    public function getCourseWithDetails(string $slug): ?array
    {
        $course = $this->getCourseBySlug($slug);
        
        if ($course) {
            $course['features_array'] = json_decode($course['features'], true) ?? [];
            $course['requirements_array'] = json_decode($course['requirements'], true) ?? [];
            $course['includes_array'] = json_decode($course['includes'], true) ?? [];
        }
        
        return $course;
    }

    /**
     * Get all courses grouped by level
     */
    public function getCoursesGroupedByLevel(): array
    {
        $courses = $this->getActiveCourses();
        
        $grouped = [
            1 => [],
            2 => [],
            3 => []
        ];
        
        foreach ($courses as $course) {
            $grouped[$course['level']][] = $course;
        }
        
        return $grouped;
    }

    /**
     * Get level name
     */
    public static function getLevelName(int $level): string
    {
        $levels = [
            1 => 'Level 1 - Foundation',
            2 => 'Level 2 - Intermediate',
            3 => 'Level 3 - Advanced'
        ];
        
        return $levels[$level] ?? 'Unknown Level';
    }

    /**
     * Format price with currency
     */
    public static function formatPrice(float $price, string $currency = 'EUR'): string
    {
        $symbols = [
            'EUR' => '€',
            'USD' => '$',
            'GBP' => '£'
        ];
        
        $symbol = $symbols[$currency] ?? $currency;
        
        return $symbol . number_format($price, 0, ',', '.');
    }
}
