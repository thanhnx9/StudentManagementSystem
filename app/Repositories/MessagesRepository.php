<?php

namespace App\Repositories;

use App\Models\Messages;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

/**
 * Class UsersRepository
 * @package App\Repositories
 * @version February 6, 2021, 3:08 am UTC
 */

class MessagesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'sender',
        'receiver',
        'message',
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Messages::class;
    }
    public function getSentMessage($name){
        return Messages::where(['sender' => $name])->orderBy('created_at', 'asc')->get();
       // return Messages::where('sender',$name)->get();
    }
    public function getReceivedMessage($name){
        return Messages::where(['receiver' => $name])->orderBy('created_at', 'asc')->get();
    }
}
