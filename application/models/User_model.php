<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class User_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function authenticate_user($username, $password) {
        $this->db->select("*");
        $this->db->from("admin");
        $this->db->where(array("email" => $username, "password" => md5($password)));
        return $this->db->get()->row_array();
    }


	
    function get_list($offset = 0) {
        $this -> db -> select( "u.*,loc.name as location,p.name as party" );
        $this -> db -> from( "users u" );
        $this -> db -> join( "states loc", "loc.id = u.location", "INNER" );
        $this -> db -> join( "parties p", "p.id = u.party_affiliation", "INNER" );
        $this -> db -> group_by( "u.id" );
        $this -> db -> order_by( "u.is_active ASC, u.id DESC" );
        $this -> db ->limit(10, $offset);
        return $this -> db -> get() -> result_array();

    }

    function get_export_list() {
        $this -> db -> select( "u.*,loc.name as location,p.name as party" );
        $this -> db -> from( "users u" );
        $this -> db -> join( "states loc", "loc.id = u.location", "INNER" );
        $this -> db -> join( "parties p", "p.id = u.party_affiliation", "INNER" );
        $this -> db -> group_by( "u.id" );
        $this -> db -> order_by( "u.is_active ASC, u.id DESC" );
        return $this -> db -> get() -> result_array();

    }


    function get_filtered_list( $inputs ) {

        $offset = 0;
        $alias = $inputs[ 'user_alias' ];
        $mail = $inputs[ 'user_mail' ];
        $startdate = $inputs[ 'start_date' ];
        $enddate = $inputs[ 'end_date' ];
        $offset = $inputs[ 'offset' ];

        $start_date = date("y-m-d", strtotime($startdate));
        $end_date = date("y-m-d", strtotime($enddate));

        //$params = array('alise' => $alias, 'email' => $mail);
        //$this -> db -> where($params);

        $this -> db -> select( "u.*,loc.name as location,p.name as party" );
        $this -> db -> from( "users u" );
        if($alias != ""){
        $this -> db -> where('alise', $alias);
        }
        if($mail != ""){
        $this -> db -> where('email', $mail);
        }
        if($startdate != ""){
        $this -> db -> where('u.created_date >=', $start_date);
        }
        if($enddate != ""){
        $this -> db -> where('u.created_date <=', $end_date);
        }
        $this -> db -> join( "states loc", "loc.id = u.location", "INNER" );
        $this -> db -> join( "parties p", "p.id = u.party_affiliation", "INNER" );
        $this -> db -> group_by( "u.id" );
        $this -> db -> order_by( "u.is_active ASC, u.id DESC" );
        $this -> db ->limit(10, $offset);
        return $this -> db -> get() -> result_array();
        //echo  $this->db->last_query();exit;

    }


    function get_filtered_list_exported( $inputs ) {

        $offset = 0;
        $alias = $mail = $startdate = $enddate = "";

        if(isset($inputs[ 'user_alias' ])){
            $alias = $inputs[ 'user_alias' ];
        }
        if(isset($inputs[ 'user_mail' ])){
            $mail = $inputs[ 'user_mail' ];
        }
        if(isset($inputs[ 'start_date' ])){
            $startdate = $inputs[ 'start_date' ];
        }
        if(isset($inputs[ 'end_date' ])){
            $enddate = $inputs[ 'end_date' ];
        }
        //$offset = $inputs[ 'offset' ];

        $start_date = date("y-m-d", strtotime($startdate));
        $end_date = date("y-m-d", strtotime($enddate));

        //$params = array('alise' => $alias, 'email' => $mail);
        //$this -> db -> where($params);

        $this -> db -> select( "u.*,loc.name as location,p.name as party" );
        $this -> db -> from( "users u" );
        if($alias != ""){
        $this -> db -> where('alise', $alias);
        }
        if($mail != ""){
        $this -> db -> where('email', $mail);
        }
        if($startdate != ""){
        $this -> db -> where('u.created_date >=', $start_date);
        }
        if($enddate != ""){
        $this -> db -> where('u.created_date <=', $end_date);
        }
        $this -> db -> join( "states loc", "loc.id = u.location", "INNER" );
        $this -> db -> join( "parties p", "p.id = u.party_affiliation", "INNER" );
        $this -> db -> group_by( "u.id" );
        $this -> db -> order_by( "u.is_active ASC, u.id DESC" );
        //$this -> db ->limit(10, $offset);
        return $this -> db -> get() -> result_array();
        //echo  $this->db->last_query();exit;

    }


    function get_user_points_filtered( $inputs ) {

        $offset = 0;
        $userid = $inputs[ 'user_id' ];
        $type = $inputs[ 'points_type' ];
        $point_type = $inputs[ 'points_pointType' ];
        $startdate = $inputs[ 'points_cstart_date' ];
        $enddate = $inputs[ 'points_cend_date' ];
        $offset = $inputs[ 'offset' ];

        $start_date = date("y-m-d", strtotime($startdate));
        $end_date = date("y-m-d", strtotime($enddate));

        $this -> db -> select( "*" );
        $this -> db -> from( "points_history" );
        $this -> db -> where( "user_id", $userid );
        if($type != ""){
        $this -> db -> where('type', $type);
        }
        if($point_type != ""){
        $this -> db -> where('point_type', $point_type);
        }
        if($startdate != ""){
        $this -> db -> where('created_date >=', $start_date);
        }
        if($enddate != ""){
        $this -> db -> where('created_date <=', $end_date);
        }
        $this -> db -> order_by( 'id', 'desc' );
        $this -> db ->limit(10, $offset);
        return $this -> db -> get() -> result_array();        

    }


    function get_user_points_filtered_exported( $inputs ) {

        //$offset = 0;
        $userid = $type = $point_type = $startdate = $enddate = "";

        if(isset($inputs[ 'user_id' ])){
            $userid = $inputs[ 'user_id' ];
        }
        if(isset($inputs[ 'points_type' ])){
            $type = $inputs[ 'points_type' ];
        }
        if(isset($inputs[ 'points_pointType' ])){
            $point_type = $inputs[ 'points_pointType' ];
        }
        if(isset($inputs[ 'points_cstart_date' ])){
            $startdate = $inputs[ 'points_cstart_date' ];
        }
        if(isset($inputs[ 'points_cend_date' ])){
            $enddate = $inputs[ 'points_cend_date' ];
        }
        //$offset = $inputs[ 'offset' ];

        $start_date = date("y-m-d", strtotime($startdate));
        $end_date = date("y-m-d", strtotime($enddate));

        $this -> db -> select( "*" );
        $this -> db -> from( "points_history" );
        $this -> db -> where( "user_id", $userid );
        if($type != ""){
        $this -> db -> where('type', $type);
        }
        if($point_type != ""){
        $this -> db -> where('point_type', $point_type);
        }
        if($startdate != ""){
        $this -> db -> where('created_date >=', $start_date);
        }
        if($enddate != ""){
        $this -> db -> where('created_date <=', $end_date);
        }
        $this -> db -> order_by( 'id', 'desc' );
        return $this -> db -> get() -> result_array();        

    }


    function get_user_details( $user_id ) {
        $this -> db -> select( "u.*,loc.name as location,p.name as party" );
        $this -> db -> from( "users u" );
        $this -> db -> join( "states loc", "loc.id = u.location", "INNER" );
        $this -> db -> join( "parties p", "p.id = u.party_affiliation", "INNER" );
        $this -> db -> where( "u.id = '$user_id'" );
        $user_data = $this -> db -> get() -> row_array();
        return $user_data;

    }

    
    function get_user_predictions( $user_id ) {
        $this -> db -> select( "p.*,pc.name as category,group_concat(pch.choice) as choices,right_choice" );
        $this -> db -> from( "poll p" );
        $this -> db -> join( "poll_category pc", "pc.id = p.category_id", "INNER" );
        $this -> db -> join( "poll_choices pch", "pch.poll_id = p.id", "INNER" );
        $this -> db -> where( "user_id = '$user_id'" );
        $this -> db -> group_by( "p.id" );
        $this -> db -> order_by( "p.is_approved ASC, p.id DESC" );
        return $this -> db -> get() -> result_array();

    }

    function get_user_surveys( $user_id ) {
        $this -> db -> select( "p.*,group_concat(pch.choice) as choices" );
        $this -> db -> from( "survey p" );
        //$this->db->join("survey_category pc", "pc.id = p.category_id", "INNER");
        $this -> db -> join( "survey_choices pch", "pch.survey_id = p.id", "INNER" );
        $this -> db -> where( "user_id = '$user_id'" );
        $this -> db -> group_by( "p.id" );
        $this -> db -> order_by( "p.is_approved ASC, p.id DESC" );
        return $this -> db -> get() -> result_array();

    }


    function get_user_blogs( $user_id ) {
        $this -> db -> select( "*" );
        $this -> db -> from( "blogs" );
        //$this -> db -> where( "is_approve = '0'" );
        $this -> db -> where( "user_id = '$user_id'" );
        //$this->db->order_by('blog_order', 'asc');
        //$this -> db -> order_by( 'created_date', 'DESC' );
        $this -> db -> order_by( 'id', 'desc' );
        $this -> db ->limit(10, 0);
        return $this -> db -> get() -> result_array();

    }


    function get_user_ratedArticles( $user_id ) {
        $this -> db -> select( "p.*,group_concat(pch.choice) as choices" );
        $this -> db -> from( "article p" );
        //$this->db->join("article_category pc", "pc.id = p.category_id", "INNER");
        $this -> db -> join( "article_choices pch", "pch.article_id = p.id", "INNER" );
        $this -> db -> where( "user_id = '$user_id'" );
        $this -> db -> group_by( "p.id" );
        $this -> db -> order_by( "p.is_approved ASC, p.id DESC" );
        return $this -> db -> get() -> result_array();

    }


    function get_user_points( $user_id ) {
        $this -> db -> select( "*" );
        $this -> db -> from( "points_history" );
        $this -> db -> where( "user_id = '$user_id'" );
        $this -> db -> order_by( 'id', 'desc' );
        $this -> db ->limit(10, 0);
        return $this -> db -> get() -> result_array();

    }


    function get_user_counts( $user_id ){
    	$this -> db -> select( "count(1) as total_polls" );
        $this -> db -> from( "poll" );
        $this -> db -> where( "user_id = '$user_id'" );
        $user_counts_data['prediction'] = $this -> db -> get() -> row_array();

        $this -> db -> select( "count(1) as total_surveys" );
        $this -> db -> from( "survey" );
        $this -> db -> where( "user_id = '$user_id'" );
        $user_counts_data['surveys'] = $this -> db -> get() -> row_array();

        $this -> db -> select( "count(1) as total_articles" );
        $this -> db -> from( "article" );
        $this -> db -> where( "user_id = '$user_id'" );
        $user_counts_data['articles'] = $this -> db -> get() -> row_array();

        $this -> db -> select( "count(1) as total_blogs" );
        $this -> db -> from( "blogs" );
        $this -> db -> where( "user_id = '$user_id'" );
        $user_counts_data['blogs'] = $this -> db -> get() -> row_array();

        $this -> db -> select( "count(1) as total_points" );
        $this -> db -> from( "points_history" );
        $this -> db -> where( "user_id = '$user_id'" );
        $user_counts_data['points'] = $this -> db -> get() -> row_array();


        return $user_counts_data;
    }


}
