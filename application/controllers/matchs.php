<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Matchs extends CI_Controller {

	function index()
	{
		$this->load->view('homeadmin');
	}
	function matching($teaId)
	{
		$this->Teacher->setTeaId($teaId);
		$data['teacher'] = $this->Teacher->getByPk();
		$data['match'] = $this->Admin->adminGetMatch();
		$data['student'] = $this->Admin->adminGetAllStu();
		$data['student2'] = $this->Admin->adminGetMatchByTeacher($teaId);
		if ($data['student']||$data['student2']){
		for($i=0; $i<count($data['student']); $i++)
			{
				for($ii=0; $ii<count($data['match']); $ii++)
				{
					if($data['student'][$i]['stuId'] == $data['match'][$ii]['stuId'])
					{
						$unset[$i]['value'] = $i;
					}
				}
			}
			sort($unset);
			for($i=0; $i<count($unset); $i++)
			{
				unset($data['student'][($unset[$i]['value'])]);
			}
				
		sort($data['student']);
		}
		$this->load->view('adminmaststu',$data);
		
		
	}
	function matchStuToTea($teaId,$stuId)
	{
		$this->Match->setTeaId($teaId);
		$this->Match->setStuId($stuId);
		$this->Match->addMatch();
		$this->matching($teaId);
	}
	function delStu($teaId,$id)
	{
		$this->Admin->delmatch($id);
		echo "<script>window.location.href='".base_url()."index.php/matchs/matching/".$teaId."';</script>";
		
	}
}
?>