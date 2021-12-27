<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function special_character($string) {
    $string = str_replace("'", "&#39;", $string); //convert single quote to html entity
    $string = str_replace('"', "&#34;", $string); //convert double quote to html entity
    $string = nl2br($string);  //convert enter to <br /> tag html entity
    return $string;
}

function br2nl($string) {
    return preg_replace('/\<br(\s*)?\/?\>/i', "\n", $string); //convert <br /> tag to new line
}

function createexcel($exceldata, $filename) {
    header('Content-Type: application/vnd.ms-excel'); //mime type
    header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
    header('Cache-Control: max-age=0'); //no cache
    $CI = & get_instance();
    $CI->load->library('excel');
    $objPHPExcel = new PHPExcel();
    $objPHPExcel->getProperties()->setCreator("Crowd Wisdom")
            ->setLastModifiedBy("Crowd Wisdom")
            ->setTitle("User_forecasting")
            ->setSubject("User_forecasting")
            ->setDescription("User_forecasting")
            ->setKeywords("User_forecasting")
            ->setCategory("User_forecasting");
    $objPHPExcel->getActiveSheet()->setTitle('User_forecasting');
    $row = 1;
    $col = 0;
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, "ID");
    $col++;
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, "USER_ID");
    $col++;
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, "ELECTION_PERIOD_ID");
    $col++;
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, "STATE_ID");
    $col++;
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, "PARTY_ID");
    $col++;
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, "SEAT_FORECAST");
    $col++;
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, "VOTE_FORECAST");
    $col++;
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, "CREATED_DATE");
    $col++;
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, "MODIFIED_DATE");
    $col++;
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, "NAME");
    $col++;
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, "TWITTER_ID");
    $col++;
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, "ABBREVATION");
    $col++;
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, "LOCATION");
    $col++;
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, "PARTY_AFFILIATION");
    $row++;
    foreach ($exceldata as $result) {
        $col = 0;
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $result['id']);
        $col++;
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $result['user_id']);
        $col++;
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $result['election_period_id']);
        $col++;
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $result['state_id']);
        $col++;
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $result['party_id']);
        $col++;
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $result['seat_forecast']);
        $col++;
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $result['vote_forcast']);
        $col++;
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $result['created_date']);
        $col++;
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $result['modified_date']);
        $col++;
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $result['name']);
        $col++;
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $result['twitter_id']);
        $col++;
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $result['abbreviation']);
        $col++;
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $result['location']);
        $col++;
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $result['party_affiliation']);
        $row++;
    }
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');

    $objWriter->save('php://output');
}

function get_dashboard_counts() {
    $dashboard_counts = array();

    //Polls count
    $CI = & get_instance();
    $CI->db->select("count(1) as total_polls");
    $CI->db->from("poll");
    $CI->db->where("is_approved = '1' and is_active = '1'");
    $dashboard_counts['polls'] = $CI->db->get()->result_array();

    //Blogs count
    $CI = & get_instance();
    $CI->db->select("count(1) as total_blogs");
    $CI->db->from("blogs");
    $CI->db->where("is_active = '1'");
    $dashboard_counts['blogs'] = $CI->db->get()->result_array();

    //Visitor count
    $CI = & get_instance();
    $CI->db->select("count(1) as total_users");
    $CI->db->from("users");
    $CI->db->where("is_active = '1'");
    $dashboard_counts['users'] = $CI->db->get()->result_array();

    return $dashboard_counts;
}

function getKeywords() {
    $CI = & get_instance();
    $getwords = "select keywords from banned_words";
    $result = $CI->db->query($getwords);
    $words = $result->get()->row_array();

    return explode(',', $words['keywords']);
}

function is_contain_badwords($string) {

    $keywords = getKeywords();

    foreach ($keywords as $bad) {
        $bad = trim($bad);
        if (stripos($string, $bad) !== false) {
            $badwordfound = FALSE;
            break;
        } else {
            $badwordfound = TRUE;
        }
    }

    if ($badwordfound) {
        return TRUE;
    } else {
        return FALSE;
    }
}

function getmetatags()
    {
        $CI = & get_instance();
        $url=$CI->input->post('url');
        $data = file_get_contents($url);
        $dom = new DomDocument;
        @$dom->loadHTML($data);

        $xpath = new DOMXPath($dom);
        # query metatags with og prefix
        $metas = $xpath->query('//*/meta[starts-with(@property, \'og:\')]');

        $og = array();

        foreach ($metas as $meta) {
            # get property name without og: prefix
            $property = str_replace('og:', '', $meta->getAttribute('property'));
            # get content
            $content = $meta->getAttribute('content');
            $og[$property] = $content;
        }
        //var_dump($og);exit;
        if(!isset($og['image'])){
            $og['image']=base_url().'images/common/no-image.png';
        }
        if(!isset($og['description'])){
            $og['description']="";
        }
        if(!isset($og['url'])){
            $og['url']="";
        }
        $og['url']=parse_url($url)['host'];
        if(!isset($og['title'])){
            $res = preg_match("/<title>(.*)<\/title>/siU", $data, $title_matches);
            if (!$res) 
                return null; 

            // Clean up title: remove EOL's and excessive whitespace.
            $title = preg_replace('/\s+/', ' ', $title_matches[1]);
            $title = trim($title);
            $og['title']=$title;
        }
        echo json_encode(array("status" => TRUE, "data" => $og)); 
        
    }

    function send_email( $to, $from, $subject, $msg ,$mail_type='') {
        $config = array ();
    
        $config[ 'api_key' ] = "8aa5eea08abe60782f6fb7a9ddc36a3f-52cbfb43-35bf5489";
        $config[ 'api_url' ] = "https://api.mailgun.net/v3/notifications.crowdwisdom.co.in/messages";
    
        $message = array ();
        if(!empty($mail_type)){
    
            $message[ 'to' ] = 'crowdwisdom360@gmail.com';
            $message[ 'bcc' ] = $to;
        }else{
    
            $message[ 'to' ] = $to;
        }
        $message[ 'from' ] = "Crowdwisdom Team <notifications@crowdwisdom.co.in>";
        //$message['replyto']=$from;
        $message[ 'subject' ] = $subject;
        $message[ 'html' ] = $msg;
        $message = http_build_query( $message );
    
        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_URL, $config[ 'api_url' ] );
        curl_setopt( $ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC );
        curl_setopt( $ch, CURLOPT_USERPWD, "api:{$config[ 'api_key' ]}" );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, 20 );
        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0 );
        curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0 );
        curl_setopt( $ch, CURLOPT_POST, true );
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $message );
    
        $result = curl_exec( $ch );
        curl_close( $ch );
        return $result;
    }
