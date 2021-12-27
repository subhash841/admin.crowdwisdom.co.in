<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Dashboard extends Base_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Election_model');
    }

    function index() {
        $data = array();
        $page_title['page_title'] = "Dashboard";
        $data['states'] = $this->Election_model->get_states_list();
        $data['parties'] = $this->Election_model->get_parties_list();
        $data['election_period'] = $this->Election_model->get_election_periods_list();
        $this->load->view('template/header', $page_title);
        //$this->load->view('dashboard');
        $this->load->view('expo_deleteforecast', $data);
        $this->load->view('template/footer');
    }

    function deleteForecastByMax() {
        $inputs = $this->input->post();
        $this->Election_model->deleteForecastByMax_Mod($inputs);
    }

    function getCurrentForecastingList($election_period_id, $state_id) {
        $this->Election_model->current_userforecasting($election_period_id, $state_id);
    }

    function detail() {
        $data['dash_data'] = get_dashboard_counts();
        $page_title['page_title'] = "Dashboard";
        $this->load->view('template/header', $page_title);
        $this->load->view('dashboard', $data);
        $this->load->view('template/footer');
    }

}
