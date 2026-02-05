<?php

namespace App\Controllers;
use App\Models\CourseDateModel;
use App\Models\CourseModel;
use App\Models\AuxiliaryCourseModel;
use \App\Models\DoctorModel;
use \App\Models\LocalModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('inicio/head')
             . view('inicio/header')
             . view('inicio/index')
             . view('inicio/footer');
    }


    public function contacto()
    {
        return view('inicio/head')
             . view('inicio/header')
             . view('contacto/index')
             . view('inicio/footer');
    }

    public function docentes()
    {
        $doctorModel = new DoctorModel();
        $localModel = new LocalModel();
    
        $data['doctors'] = $doctorModel
            ->where('is_active', 1)
            ->orderBy('sort_order', 'ASC')
            ->findAll();

        $data['locals'] = $localModel
            ->findAll();
        
        return view('inicio/head')
            . view('inicio/header')
            . view('docentes/index', $data)
            . view('inicio/footer');
    }

    public function cursos()
    {
        $CourseModel = new CourseModel();

        $courses = $CourseModel->getActiveCourses();

        return view('inicio/head')
             . view('inicio/header')
             . view('cursos/index', ['courses' => $courses])
             . view('inicio/footer');
    }

    public function cursoDetalle(string $slug): string
    {
        $courseModel = new CourseModel();
        $course = $courseModel->getCourseWithDetails($slug);

        if (!$course) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Obtener curso de auxiliares
        $auxiliaryModel = new AuxiliaryCourseModel();
        $auxiliaryCourse = $auxiliaryModel->getActiveCourse();

        // Obtener fechas del curso agrupadas por ubicación
        $courseDateModel = new CourseDateModel();
        $courseDates = $courseDateModel->getDatesGroupedByLocation($course['id']);

        return view('inicio/head')
             . view('inicio/header')
             . view('cursos/single', ['course' => $course,'auxiliaryCourse' => $auxiliaryCourse,'courseDates' => $courseDates])
             . view('inicio/footer');
    }

    public function docente($slug)
    {
        $doctorModel = new DoctorModel();   

        $doctor = $doctorModel
            ->where('slug', $slug)
            ->where('is_active', 1)
            ->first();
        
        if (!$doctor) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        
        $data['doctor'] = $doctor;
        
        return view('inicio/head')
            . view('inicio/header')
            . view('docentes/single', $data)
            . view('inicio/footer');
    }
}
