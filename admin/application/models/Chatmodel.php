
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chatmodel extends CI_Model {

    public function replymsg($chatid,$data){
        $this->db->where('id', $chatid);
        $this->db->update('chat_room', $data);
        return true;
    }

    public function asktouser_process($data){
        $query  =   $this->db->insert('ask_reply',$data);
        return true;
    }
    
    public function getuserchat(){
        $q = $this->db->query('SELECT `users`.`user_id` as `uid`, `users`.`name` as `u_name`, `ask_reply`.* FROM `ask_reply` INNER JOIN `users` ON (`ask_reply`.`sent_by` = `users`.`user_id` OR `ask_reply`.`sent_to` = `users`.`user_id`) WHERE `ask_reply`.`sent_by` = 0 OR `ask_reply`.`sent_to` = 0 GROUP by `users`.`user_id`');
        return $q->result();
    }
    public function getallchat(){
        $q = $this->db->get('ask_reply');
        return $q->result();
    }

    public function getchat_byuserid($useid){
        $this->db->where('sent_to',$useid);
        $this->db->or_where('sent_by',$useid);
        $query=$this->db->get('ask_reply');
        $chats = $query->result();
        $retData = "";
        foreach ($chats as $chat) {
            if($chat->sent_to == '0'){
                $retData .= '<div class="userchat">'.$chat->msg.'<br><span style="font-size: xx-small;">'.$chat->sent_time.'</span></div><input type="hidden" class="iduserr" value="'.$chat->sent_by.'" ><br>';
            }else{
                $retData .= '<div class="adminchat">'.$chat->msg.'<br><span style="font-size: xx-small;">'.$chat->sent_time.'</span></div><br>';
            }
        }
        return $retData;
    }

    public function insertadminchat_process($data){
        $query  =   $this->db->insert('ask_reply',$data);
        return true;
    }

}
