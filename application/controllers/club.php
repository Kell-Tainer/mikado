<?php
 
class Club extends CI_Controller
{
    public function __construct()
    {
        //  Obligatoire
        parent::__construct();
         
        //  Maintenant, ce code sera exécuté chaque fois que ce contrôleur sera appelé.
        $this->titre_defaut = 'Mikado';
        
    }
    
    public function index()
    {
        $this->accueil();
    }
    
    public function le_club()
    {
        $this->load->model('activite');
        $data = array();
        $data['activites'] = $this->activite->liste_activite();
        $data['nb_activites'] = $this->activite->count();
        
        $this->load->library('layout');
        $this->layout->view('club', $data);
    }
}