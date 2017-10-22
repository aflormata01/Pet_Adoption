<?php

class admin_model extends CI_model

{
	private $petrescued = "petrescued";
	private $faqs = "faqs";
	private $news = "news";
	
	
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

}
?>
