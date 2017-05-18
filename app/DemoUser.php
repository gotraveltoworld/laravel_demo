<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class DemoUser extends Model
{
    /**
     * 與模型關聯的資料表。
     *
     * @var string
     */
    protected $table = 'demo_user';

    /**
     * 資料表主鍵。
     *
     * @var int
     */
    protected $primaryKey = 'id';

    /**
     * 指定是否模型應該被戳記時間。
     *
     * @var bool
     */
    public $timestamps = true;
}
