<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class TestController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function search()
    {
        $tags = DB::select('select * from hs_property_tags ');
       /* $tag = DB::connection('mysql_spare')->select('select * from hs_project_tags where project_tag_id =1');*/
        return memory_get_usage();
    }
}

