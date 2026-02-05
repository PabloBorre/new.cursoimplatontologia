<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\ResponseInterface;

class CalendarController extends Controller
{
    /**
     * Get course dates for calendar (JSON)
     * 
     * @return ResponseInterface
     */
    public function getEvents(): ResponseInterface
    {
        try {
            $db = \Config\Database::connect();
            
            // Query directa para evitar problemas con modelos
            $builder = $db->table('course_dates');
            $builder->select('course_dates.*, courses.title, courses.slug, courses.short_description');
            $builder->join('courses', 'courses.id = course_dates.course_id');
            $builder->where('course_dates.is_available', 1);
            $builder->where('courses.is_active', 1);
            $builder->where('course_dates.start_date >=', date('Y-m-d'));
            $builder->orderBy('course_dates.start_date', 'ASC');
            
            $results = $builder->get()->getResultArray();

            // Format for FullCalendar
            $events = [];
            foreach ($results as $date) {
                // Determinar clase de color según ubicación
                $locationClass = (stripos($date['location'], 'Peru') !== false || stripos($date['location'], 'Perú') !== false) 
                    ? 'calendar-event--peru' 
                    : 'calendar-event--default';
                
                $events[] = [
                    'id'          => $date['id'],
                    'title'       => $date['title'],
                    'start'       => $date['start_date'],
                    'end'         => date('Y-m-d', strtotime($date['end_date'] . ' +1 day')),
                    'url'         => base_url('cursos/' . $date['slug']),
                    'extendedProps' => [
                        'location'    => $date['location'],
                        'spots'       => $date['spots_available'],
                        'description' => $date['short_description'] ?? ''
                    ],
                    'className'   => $locationClass,
                    'display'     => 'block'
                ];
            }

            return $this->response->setJSON($events);
            
        } catch (\Exception $e) {
            return $this->response->setJSON([
                'error' => true,
                'message' => $e->getMessage()
            ])->setStatusCode(500);
        }
    }

    /**
     * Get locations for filter
     * 
     * @return ResponseInterface
     */
    public function getLocations(): ResponseInterface
    {
        try {
            $db = \Config\Database::connect();
            
            $locations = $db->table('course_dates')
                           ->select('location')
                           ->where('is_available', 1)
                           ->groupBy('location')
                           ->get()
                           ->getResultArray();
            
            return $this->response->setJSON($locations);
            
        } catch (\Exception $e) {
            return $this->response->setJSON([
                'error' => true,
                'message' => $e->getMessage()
            ])->setStatusCode(500);
        }
    }
}