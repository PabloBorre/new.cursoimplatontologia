<?php

namespace App\Models;

use CodeIgniter\Model;

class CourseDateModel extends Model
{
    protected $table            = 'course_dates';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    
    protected $allowedFields = [
        'course_id',
        'location',
        'start_date',
        'end_date',
        'spots_available',
        'is_available'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation
    protected $validationRules = [
        'course_id'  => 'required|integer',
        'location'   => 'required|max_length[50]',
        'start_date' => 'required|valid_date',
        'end_date'   => 'required|valid_date',
    ];

    protected $skipValidation = false;

    // =========================================
    // CUSTOM METHODS
    // =========================================

    /**
     * Get available dates for a course
     */
    public function getAvailableDates(int $courseId): array
    {
        return $this->where('course_id', $courseId)
                    ->where('is_available', 1)
                    ->where('start_date >=', date('Y-m-d'))
                    ->orderBy('start_date', 'ASC')
                    ->findAll();
    }

    /**
     * Get dates by location
     */
    public function getDatesByLocation(string $location): array
    {
        return $this->where('location', $location)
                    ->where('is_available', 1)
                    ->where('start_date >=', date('Y-m-d'))
                    ->orderBy('start_date', 'ASC')
                    ->findAll();
    }

    /**
     * Get dates for a course grouped by location
     */
    public function getDatesGroupedByLocation(int $courseId): array
    {
        $dates = $this->getAvailableDates($courseId);
        
        $grouped = [];
        
        foreach ($dates as $date) {
            $location = $date['location'];
            if (!isset($grouped[$location])) {
                $grouped[$location] = [];
            }
            $grouped[$location][] = $date;
        }
        
        return $grouped;
    }

    /**
     * Get all upcoming dates with course info
     */
    public function getUpcomingDatesWithCourses(): array
    {
        return $this->select('course_dates.*, courses.title, courses.slug, courses.price, courses.currency')
                    ->join('courses', 'courses.id = course_dates.course_id')
                    ->where('course_dates.is_available', 1)
                    ->where('courses.is_active', 1)
                    ->where('course_dates.start_date >=', date('Y-m-d'))
                    ->orderBy('course_dates.start_date', 'ASC')
                    ->findAll();
    }

    /**
     * Get all locations
     */
    public function getLocations(): array
    {
        return $this->select('location')
                    ->where('is_available', 1)
                    ->groupBy('location')
                    ->findAll();
    }

    /**
     * Format date range
     */
    public static function formatDateRange(string $startDate, string $endDate): string
    {
        $start = new \DateTime($startDate);
        $end = new \DateTime($endDate);
        
        // Si es el mismo mes
        if ($start->format('F Y') === $end->format('F Y')) {
            return $start->format('F j') . '-' . $end->format('j, Y');
        }
        
        return $start->format('F j') . ' - ' . $end->format('F j, Y');
    }

    /**
     * Format date short
     */
    public static function formatDateShort(string $startDate, string $endDate): string
    {
        $start = new \DateTime($startDate);
        $end = new \DateTime($endDate);
        
        return $start->format('M j') . '-' . $end->format('j');
    }
}
