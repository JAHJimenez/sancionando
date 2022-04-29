<?php

namespace App\Controllers;

use App\Models\FileModel;
use App\Models\ReportModel;
use App\Controllers\BaseController;

class Reporte extends BaseController
{
     
    public function index()
    {
        $this->_loadDefaultView([],'index');
    }
    public function new()
    {
        $validation = \Config\Services::validation();
        $this->_loadDefaultView(['validation' => $validation],'new');
    }

    public function create(){ 
        $report = new ReportModel;
        
        if($this->validate('reports')){
            $id = $report->insert([

            'date' => $this->request->getPost('date'),
            'description' => $this->request->getPost('description'),
            
            
            ]);

            $this->_uploadfile($id);
            return redirect()->back()->with('message','Denuncia Enviada con Exito');
        }
        return redirect()->back();
        $this->_loadDefaultView([],'new');
    }

    private function _uploadfile($reportId)
    {

        $file = new FileModel();

        if ($evidencia = $this->request->getFile('file')) {

            if ($evidencia->isValid() && !$evidencia->hasMoved()) {
                $name = $evidencia->getName();
                $evidencia->move( WRITEPATH . 'uploads/files/', $name);

                $file->save(
                    [
                        'report_id' => $reportId,
                        'file' => $name
                    ]
                );
            }
        }
    }

    private function _loadDefaultView($data,$view){
        echo view('sancionando/templates/header');
        echo view("sancionando/$view",$data);
        echo view('sancionando/templates/footer');

    }

    
}
