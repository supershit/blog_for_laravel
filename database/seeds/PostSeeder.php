<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = array();
        for ($i=4; $i <100 ; $i++) { 
        	$tmp['title'] = "文章标题".$i.str_random(10);
        	$tmp['content'] = str_random(100);
        	$tmp['img'] = "/upload/20171014/150797555378667.jpg";
        	$tmp['user_id'] = 1;
        	$tmp['cat_id'] = rand(1,11);
            $tmp['created_at'] = date('Y-m-d H:i:s');
            $tmp['updated_at'] = date('Y-m-d H:i:s');
        	$arr[] = $tmp;
        }
        
        \App\Post::insert($arr);
    }
}
