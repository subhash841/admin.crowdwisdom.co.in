<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Topics_model extends CI_Model {

        function __construct() {
                parent::__construct();
        }

        function get_topics_list() {
                $this -> db -> select( 't.*, bc.name as categoryname' );
                $this -> db -> from( 'topics t' );
                $this -> db -> join( "blog_category bc", "bc.id = t.category", "LEFT" );
                $result = $this -> db -> get() -> result_array();
                return $result;
        }

        function add_update_topic( $inputs ) {
                // print_r($inputs);die;
                $topicid = $inputs[ 'topicid' ];
                $uploaded_filename = $inputs[ 'uploaded_filename' ];
                $uploaded_icon_filename = $inputs[ 'uploaded_icon_filename' ];
                $category = $inputs[ 'blog_id' ];
                $title=$inputs['topic_name'];

                if(isset($inputs[ 'topic_trending' ])){
                    $trending = 1;
                } else {
                    $trending = 0;
                }

                $data = array (
                    "topic" => $inputs[ 'topic_name' ],
                    "image" => $uploaded_filename,
                    "icon" => $uploaded_icon_filename,
                    "category" => $category,
                    "is_trending" => $trending,
                    "is_private" => $inputs['is_private'],
                    "email_ids" => $inputs['emails'],
                    'trending_created_date' => date('Y-m-d h:i:s')
                );

                if ( $topicid == 0 ) {
                        $this -> db -> insert( "topics", $data );
                        $last_topic_id = $this->db->insert_id();
                        $url= "http://www.crowdwisdom.co.in/HotTopics/detail/" . $last_topic_id;
                } else {
                        $this -> db -> where( "id = '$topicid'" );
                        $this -> db -> update( "topics", $data );
                        $url= "http://www.crowdwisdom.co.in/HotTopics/detail/" . $topicid;
                }
                if($inputs['is_private'] == 1){
                $message = "Hello, <br /><br />";
                $message .="We are excited to invite you to our exclusive Smart Community - <br /><br />";
                $message .= "<b>$title</b><br /><br />";
                $message .= "To Join the Smart Community, click here: <br />" . $url;                        
                $message .= "<br /><br />";
                $message .= "<b>What is this Smart community about?</b>";
                $message .= "<br /><br />";
                $message .= "- You can ask interesting polls and debate";
                $message .= "<br /><br />";
                $message .=  "◦ https://www.crowdwisdom.co.in/AskQuestions/raise_question";
                $message .= "<br /><br />";
                $message .= "◦ Share your smart thoughts with others in the community";
                $message .= "<br /><br />";
                $message .= "◦ Hear from other smart people also about this topic";
                $message .= "<br /><br />";
                $message .= "- Post content";
                $message .= "<br /><br />";      
                $message .= "◦ https://www.crowdwisdom.co.in/FromTheWeb/post_article";
                $message .= "<br /><br />";
                $message .= "- The community manager asks predictions everyday";
                $message .= "<br /><br />";
                $message .= "◦ Every participant can answer those predictions";
                $message .= "<br /><br />";
                $message .= "◦  After a few days of answering predictions, the software offers an ‘expert’ answer by studying past answers"; 
                $message .= "<br /><br />";
                $message .= "◦ So whether it is elections, dream11, bigg boss or NIFTY, the expert answer will be very useful to you as these expert answers are only available to the members of the small community";
                $message .= "<br /><br />";
                $message .= "<b>How is this better than Twitter or Whatsapp groups?</b>";
                $message .= "<br /><br />";
                $message .= "- Intelligent Polls which are exclusive to you";
                $message .= "<br /><br />";
                $message .= "- Credibility of each person is on the basis of performance and not followers or likes";
                $message .= "<br /><br />";                        
                $message .= "Regards,<br /><br />Crowdwisdom360 Smart Communities Team";
 // print_r($message);die;
                        send_email($inputs['emails'], '', $title, $message, 'send_bcc');
                }
                return TRUE;
        }

        function changeActiveStatus( $id, $newstatus ) {

                $this -> db -> where( 'id', $id );
                $this -> db -> update( "topics", array ( 'is_active' => $newstatus ) );
                if ( $newstatus == 0 ) {
                        return FALSE;
                } else {
                        return TRUE;
                }
        }

        function changeTrendingStatus( $id, $newstatus ) {

                $this -> db -> where( 'id', $id );
                $this -> db -> update( "topics", array ( 'is_trending' => $newstatus, 'trending_created_date' => date('Y-m-d h:i:s')));
                if ( $newstatus == 0 ) {
                        return FALSE;
                } else {
                        return TRUE;
                }
        }

        function get_blog_category() {
                $this -> db -> select( 'name,id' );
                $this -> db -> from( 'blog_category' );
                $this -> db -> where( 'is_active', '1' );
                $result = $this -> db -> get() -> result_array();
                return $result;
        }

}
