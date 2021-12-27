<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Master extends Base_Controller {

        function __construct() {
                parent::__construct();
                $this -> load -> model( 'Master_model' );
                $this -> load -> model( 'Election_model' );
                $this -> load -> model( 'Topics_model' );
        }

        function states() {
                $page_title[ 'page_title' ] = "Master";
                $data[ 'states' ] = $this -> Election_model -> get_states_list();
                $this -> load -> view( 'template/header', $page_title );
                $this -> load -> view( 'states', $data );
                $this -> load -> view( 'template/footer' );
        }

        function parties() {
                $page_title[ 'page_title' ] = "Master";
                $data[ 'parties' ] = $this -> Election_model -> get_parties_list();
                $this -> load -> view( 'template/header', $page_title );
                $this -> load -> view( 'parties', $data );
                $this -> load -> view( 'template/footer' );
        }

        function addUpdateState() {
                $inputs = $this -> input -> post();
                $this -> Master_model -> addUpdateState_Mod( $inputs );
                $msg = ($inputs[ 'stateid' ] == "0") ? "State added successfully" : "State updated successfully";
                echo json_encode( array ( "status" => TRUE, "message" => $msg ) );
        }

        function addUpdateParty() {
                $inputs = $this -> input -> post();
                $this -> Master_model -> addUpdateParty_Mod( $inputs );
                $msg = ($inputs[ 'party_id' ] == "0") ? "Party added successfully" : "Party updated successfully";
                echo json_encode( array ( "status" => TRUE, "message" => $msg ) );
        }

        function topics() {
                $data = array ();
                $header_data[ 'page_title' ] = "Topics";
                $data[ 'topics' ] = $this -> Topics_model -> get_topics_list();
                $data[ 'blog_category' ] = $this -> Topics_model -> get_blog_category();
                
                $this -> load -> view( 'template/header', $header_data );
                $this -> load -> view( 'topics', $data );
                $this -> load -> view( 'template/footer' );
        }

        function addUpdateTopic() {
                $inputs = $this -> input -> post();
                $this -> Topics_model -> add_update_topic( $inputs );
                $msg = ($inputs[ 'topicid' ] == "0") ? "Topic added successfully" : "Topic updated successfully";
                echo json_encode( array ( "status" => TRUE, "message" => $msg ) );
        }

        function changeActiveTopic() {
                $id = $this -> input -> post( 'id' );
                //$type = $this -> input -> post( 'type' );
                $current = $this -> input -> post( 'current' );
                $newstatus = ($current == "1") ? 0 : 1;

                $status = $this -> Topics_model -> changeActiveStatus( $id, $newstatus );
                $msg = "Action performed successfully";
                echo json_encode( array ( "status" => $status, "message" => $msg ) );
        }

        
        function changeTrendingTopic() {
                $id = $this -> input -> post( 'id' );
                //$type = $this -> input -> post( 'type' );
                $current = $this -> input -> post( 'current' );
                $newstatus = ($current == "1") ? 0 : 1;

                $status = $this -> Topics_model -> changeTrendingStatus( $id, $newstatus );
                $msg = "Action performed successfully";
                echo json_encode( array ( "status" => $status, "message" => $msg ) );
        }

}
