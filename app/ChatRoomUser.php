<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChatRoomUser extends Model
{
    // 代入できるフィールド
    protected $fillable = ['chat_room_id', 'user_id'];

    // リレーション
    public function chatRoom()
    {
        return $this->belongsTo('App\ChatRoom');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
