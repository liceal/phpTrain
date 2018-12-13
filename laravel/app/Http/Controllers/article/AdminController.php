<?php

namespace App\Http\Controllers\article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\msg;
class AdminController extends Controller {
    private $arr;
	public function admin(Request $reg,$id=-1) {
	    if($id!=-1&&isset(msg::find($id)->Id)){
//            所有数据存放数组，以键值方式获取
            $msg=msg::find($id);
            $arr=['msg'=>$msg,'data'=>msg::get(),'content'=>$msg->content,'title'=>$msg->title];
//            dd($arr);
            return view('article/admin',['arr'=>$arr]);
        }
	    if (empty($_GET)){
            $arr=['content'=>'','title'=>'','data'=>msg::get()];
            return view('article/admin',['arr'=>$arr]);
        }else{
	        echo "111";
            //return view('article/admin');
        }
	}
	public function up(Request $reg){
        if(empty($_GET)){
            echo '111';exit();
        }else{
            echo '2222';exit();
        }
    }
}
