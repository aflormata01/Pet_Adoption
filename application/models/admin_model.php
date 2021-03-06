<?php

class admin_model extends CI_model

{
	private $petrescued = "petrescued";
	private $faqs = "faqs";
	private $news = "news";

	private $events = "events";
	

	private $ownerinfo = "ownerinfo";
	private $messages = "messages";

	
	public function create_faqs($data)
		{
			$this->db->insert($this->faqs, $data);
			return TRUE;	
		}

		public function update_faqs($updatefaqs)
		{
			$this->db->replace($this->faqs,$updatefaqs);
		}
		public function del_faqs($where_array)
		{
			$this->db->delete($this->faqs,$where_array);	
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

		public function del_news($where_array)
		{
			$this->db->delete($this->news,$where_array);		

		}
		public function read_news($condition=null)
		{
			 $this -> db -> select('*');
			 $this -> db -> from($this-> news);
			 if ( isset($condition)) $this->db->where($condition);
			 $query= $this->db->get();
			 return $query-> result_array(); 
		}
		
		public function read_events($condition=null)
		{
			 $this -> db -> select('*');
			 $this -> db -> from($this-> events);
			 if ( isset($condition)) $this->db->where($condition);
			 $query= $this->db->get();
			 return $query-> result_array(); 
		}
		public function create_events($data)
		{
			$this->db->insert($this->events, $data);
			return TRUE;	
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

		public function del_petrescued($where_array)
		{
			$this->db->delete($this->petrescued,$where_array);		

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
		
		public function create_ownerinfo($data)
		{
			$this->db->insert($this->ownerinfo, $data);
			return TRUE;	
		}
		public function update_ownerinfo($settings)
		{
			$this->db->replace($this->ownerinfo,$settings);
		}

		public function del_ownerinfo($where_array)
		{
			$this->db->delete($this->ownerinfo,$where_array);
		}
		public function read_ownerinfo($condition=null)
		{
			 $this->db->select('*');
			 $this->db->from($this->ownerinfo);
			 if ( isset($condition)) $this->db->where($condition);
			 $query=$this->db->get();
			 return $query->result_array(); 
		}	

		public function create_messages($data)
		{
			$this->db->insert($this->messages, $data);
			return TRUE;	
		}
		public function update_messages($settings)
		{
			$this->db->replace($this->messages,$settings);
		}

		public function del_messages($where_array)
		{
			$this->db->delete($this->messages,$where_array);
		}
		public function read_messages($condition=null)
		{
			$this->db->order_by('msg# DESC');
			 $this->db->select('*');
			 $this->db->from($this->messages);
			 if ( isset($condition)) $this->db->where($condition);
			 $query=$this->db->get();
			 return $query->result_array(); 
		}	
}
?>
