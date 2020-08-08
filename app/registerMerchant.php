<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class registerMerchant extends Model
{
    protected $tablename = 'ms_merchants';

    public function getall(){
        return DB::table($this->tablename)->select('*')->orderByDesc('id')->get()->toArray();
    }

    public function getrec($id){
        return DB::table($this->tablename)->select('*')->where('id',$id)->get()->toArray();
    }

    public function insertrec($postdata){
        return DB::table($this->tablename)->insertGetId([
            'text' => $postdata['text'], 
            'body' => $postdata['body'], 
            'due' => $postdata['due'], 
            'created_at' => $postdata['created_date'], 
            'updated_at' => $postdata['updated_date']
        ]);
    }

    public function registermerchantapi($postdata){
        //print_r($postdata);exit;
        return DB::table($this->tablename)->insertGetId([
            'msm_name' => $postdata['name'], 
            'msm_mobile_no' => $postdata['mobile_no'], 
            'msm_email_id' => $postdata['email'], 
            'msm_created_date' => $postdata['created_date'], 
            'msm_updated_date' => $postdata['updated_date']
        ]);
    }

    public function updaterec($postdata,$id){
        return DB::table($this->tablename)->where('id', $id)->update($postdata);
    }


    
}
