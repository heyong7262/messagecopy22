<?php  
namespace Controller;
class ActiveController extends Controller
{
	public function active(){

		$this->display("admin/article-list.html");
	}
}