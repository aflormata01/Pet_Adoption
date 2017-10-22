<?php

class peternity_model extends CI_model
{
    
	private $discussion = "discussion";
	private $events = "events";
	private $news = "news";
	private $faqs = "faqs";
	private $disc_comments = "disc_comments";
	private $ownedpets = "ownedpets";
	private $owneraccount = "owneraccount";
	private $account = "account";
	private $ownerinfo = "ownerinfo";
	private $petrescued = "petrescued";
	private $petadoption = "petadoption";
	private $stories = "stories";
	private $stories_like = "stories_like";
	
		public function create_discussion($data)
		{
			$this->db->insert($this->discussion, $data);
			return TRUE;	
		}
		public function update_discussion()
		{
			$this->db->where($data);
			$this->db->update($this->discussion, $data);
			return TRUE;	
		}
		public function del_discussion($where_array)
		{
			$this->db->delete($this->discussion,$where_array);
		}
		public function read_discussion($condition=null)
		{
			 $this->db->order_by('discuss# DESC');
			 $this -> db -> select('*');
			 $this -> db -> from($this-> discussion);
			 if ( isset($condition)) $this->db->where($condition);
			 $query= $this->db->get();
			 return $query-> result_array();
		 
		}
		
		
		public function create_events($data)
		{
			$this->db->insert($this->events, $data);
			return TRUE;	
		}
		public function update_events()
		{
			$this->db->where($data);
			$this->db->update($this->events, $data);
			return TRUE;	
		}
		public function del_events()
		{
			$this->db->where($data);
			$this->db->delete($this->events);
			return TRUE;	
		}
		public function read_events($condition=null)
		{
			 $this -> db -> select('*');
			 $this -> db -> from($this-> events);
			 if ( isset($condition)) $this->db->where($condition);
			 $query= $this->db->get();
			 return $query-> result_array();
		}
		
		public function create_faqs($data)
		{
			$this->db->insert($this->faqs, $data);
			return TRUE;	
		}
		public function update_faqs()
		{
			$this->db->where($data);
			$this->db->update($this->faqs, $data);
			return TRUE;	
		}
		public function del_faqs()
		{
			$this->db->where($data);
			$this->db->delete($this->faqs);
			return TRUE;	
		}
		public function read_faqs($condition=null)
		{
			 $this -> db -> select('*');
			 $this -> db -> from($this-> faqs);
			 if ( isset($condition)) $this->db->where($condition);
			 $query= $this->db->get();
			 return $query-> result_array();
		}
		
		
		
		public function create_news($data)
		{
			$this->db->insert($this->news, $data);
			return TRUE;	
		}
		public function update_news()
		{
			$this->db->where($data);
			$this->db->update($this->news, $data);
			return TRUE;	
		}
		public function del_news()
		{
			$this->db->where($data);
			$this->db->delete($this->news);
			return TRUE;	
		}
		public function read_news($condition=null)
		{
			 
			 $this -> db -> select('*');
			 $this -> db -> from($this-> news);
			 if ( isset($condition)) $this->db->where($condition);
			 $query= $this->db->get();
			 return $query-> result_array(); 
		}
		
		
		
		public function create_disc_comments($data)
		{
			$this->db->insert($this->disc_comments, $data);
			return TRUE;	
		}
		public function update_disc_comments()
		{
			$this->db->where($data);
			$this->db->update($this->disc_comments, $data);
			return TRUE;	
		}
		public function del_disc_comments($where_array)
		{
			$this->db->delete($this->disc_comments,$where_array);
		}
		public function read_disc_comments($condition=null)
		{
			 $this->db->order_by('comment# DESC');
			 $this -> db -> select('*');
			 $this -> db -> from($this-> disc_comments);
			 if ( isset($condition)) $this->db->where($condition);
			 $query= $this->db->get();
			 return $query-> result_array();
		 
		}
		
		
		
		
		// public function create_ownedpets($data)
		// {
			// $this->db->insert($this->ownedpets, $data);
			// return TRUE;	
		// }
		// public function update_ownedpets()
		// {
			// $this->db->where($data);
			// $this->db->update($this->ownedpets, $data);
			// return TRUE;	
		// }
		// public function del_ownedpets()
		// {
			// $this->db->where($data);
			// $this->db->delete($this->ownedpets);
			// return TRUE;	
		// }
		// public function read_ownedpets($condition=null)
		// {
			 // $this -> db -> select('*');
			 // $this -> db -> from($this-> ownedpets);
			 // if ( isset($condition)) $this->db->where($condition);
			 // $query= $this->db->get();
			 // return $query-> result_array();
		 
		// }
		
		
		public function create_ownerinfo($data)
		{
			$this->db->insert($this->ownerinfo, $data);
			return TRUE;	
		}
		public function update_ownerinfo($settings)
		{
			$this->db->replace($this->ownerinfo,$settings);
		}

		public function del_ownerinfo()
		{
			$this->db->where($data);
			$this->db->delete($this->ownerinfo);
			return TRUE;	
		}
		public function read_ownerinfo($condition=null)
		{
			 $this->db->select('*');
			 $this->db->from($this->ownerinfo);
			 if ( isset($condition)) $this->db->where($condition);
			 $query=$this->db->get();
			 return $query->result_array(); 
		}	
		
		
		// public function create_account($data)
		// {
			// $this->db->insert($this->account, $data);
			// return TRUE;	
		// }
		// public function update_account()
		// {
			// $this->db->where($data);
			// $this->db->update($this->account, $data);
			// return TRUE;	
		// }
		// public function del_account()
		// {
			// $this->db->where($data);
			// $this->db->delete($this->account);
			// return TRUE;	
		// }
		// public function read_account($condition=null)
		// {
			 // $this->db->select('*');
			 // $this->db->from($this->account);
			 // if ( isset($condition)) $this->db->where($condition);
			 // $query=$this->db->get();
			 // return $query->result_array(); 
		// }
		
		
		
		
		
		public function create_owneraccount($data)
		{
			$this->db->insert($this->owneraccount, $data);
			return TRUE;	
		}
		public function update_owneraccount($change)
		{
			$this->db->replace($this->owneraccount,$change);	
		}
		public function del_owneraccount()
		{
			$this->db->where($data);
			$this->db->delete($this->owneraccount);
			return TRUE;	
		}
		public function read_owneraccount($condition=null)
		{
			 $this -> db -> select('*');
			 $this -> db -> from($this-> owneraccount);
			 if ( isset($condition)) $this->db->where($condition);
			 $query= $this->db->get();
			 return $query-> result_array();
		 
		}
		function getLastRecordID(){
        $this->db->select_max('username');
        $query = $this->db->get($this->owneraccount,1);
        
        return $query->row_array();
    }
		
		
		public function create_petrescued($data)
		{
			$this->db->insert($this->petrescued, $data);
			return TRUE;	
		}
		public function update_petrescued($data)
		{
			$this->db->replace($this->petrescued, $data);
			return TRUE;	
		}
		public function del_petrescued()
		{
			$this->db->where($data);
			$this->db->delete($this->petrescued);
			return TRUE;	
		}
		public function read_petrescued($condition=null)
		{
			 $this -> db -> select('*');
			 $this -> db -> from($this->petrescued);
			 if ( isset($condition)) 
				 $this->db->where($condition);
			 $query= $this->db->get();
			 return $query-> result_array();
		 
		}
		
		
		
		public function create_stories($data)
		{
			$this->db->insert($this->stories,$data);
			return TRUE;	
		}
		public function update_stories()
		{
			$this->db->where($data);
			$this->db->update($this->stories, $data);
			return TRUE;	
		}
		public function del_stories($where_array)
		{
			$this->db->delete($this->stories,$where_array);
		}
		public function read_stories($condition=null)
		{	
			 $this->db->order_by('story# DESC');
			 $this -> db -> select('*');
			 $this -> db -> from($this-> stories);
			 if ( isset($condition)) $this->db->where($condition);
			 $query= $this->db->get();
			 return $query-> result_array();
		 
		}
		
		public function read_signUp()
		{
			$this -> db -> select('*');
			$this -> db -> from($this-> stories);
			if ( isset($condition)) $this->db->where($condition);
			$query= $this->db->get();
			return $query-> result_array();
		}
		public function create_form($data)
		{
			$this->db->insert($this->ownerinfo, $data);
			return TRUE;
		}
		
		public function create_adopt($adoption)
		{
			$this->db->insert($this->petadoption, $adoption);
			return TRUE;
		}
		function getLastRecordPetID(){
        $this->db->select_max('petID');
        $query = $this->db->get($this->petadoption,1);
        
        return $query->row_array();
		}
		
		public function create_stories_like($data)
		{
			$this->db->insert($this->stories_like, $data);
			return TRUE;	
		}
	
		public function del_stories_like($data)
		{
			$this->db->where($data);
			$this->db->delete($this->stories_like);
			return TRUE;	
		}
		public function read_stories_like($condition=null)
		{
			$this->db->order_by('time DESC');
			$this -> db -> select('*');
			$this -> db -> from($this-> stories_like);
			if ( isset($condition)) $this->db->where($condition);
			$query= $this->db->get();
			return $query-> result_array();
		}
}

?>

