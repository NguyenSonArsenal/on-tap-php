<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 20/03/18
 * Time: 12:49
 */

namespace app\models;
use Library\Database;
use app\models\Hobbies;

class User extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function findOneId()
    {
        $id = (isset($_GET['id']) &&  (int)$_GET['id'] > 0 )? (int)$_GET['id'] : '';

        $typeHobbies    = self::TYPE_HOBBY;
        $typePrograms   = self::TYPE_PROGRAM;

        $user = [];

        if ($id != '')
        {
            $sql = "SELECT * FROM user WHERE ID = $id" ;

            $result = $this->query($sql);

            $user = $result->fetchAll();

            if ($user)
            {
                $user = $user[0];
                $sql = "SELECT program.name 
                    FROM user
                    INNER JOIN tag_user
                    ON tag_user.user_id = user.id
                    INNER JOIN program
                    ON tag_user.tag_id = program.id
                    WHERE tag_user.type = $typePrograms AND user.id =" .  $user['id'];

                $result = $this->query($sql);
                $hobbiesOnUser = $result->fetchAll();

                $sql = "SELECT hobbies.name
                    FROM user
                    INNER JOIN tag_user
                    ON tag_user.user_id = user.id
                    INNER JOIN hobbies
                    ON tag_user.tag_id = hobbies.id
                    WHERE tag_user.type = $typeHobbies AND user.id =" .  $user['id'];

                $result = $this->query($sql);
                $programsOnUser = $result->fetchAll();

                $user['hobbies'] = $hobbiesOnUser;
                $user['programs'] = $programsOnUser;
            }
        }

        return $user;
    }

    public function listAllUsers()
    {
        $typeHobbies    = self::TYPE_HOBBY;
        $typePrograms   = self::TYPE_PROGRAM;

        $sql = "select * from user";

        $result = $this->query($sql);
        $users  = $result->fetchAll();

        $hobbiesOnUser = $programsOnUser = [];
        
        if ($users)
        {
            foreach ($users as &$user) {
                $sql = "SELECT program.name 
                    FROM user
                    INNER JOIN tag_user
                    ON tag_user.user_id = user.id
                    INNER JOIN program
                    ON tag_user.tag_id = program.id
                    WHERE tag_user.type = $typePrograms AND user.id =" .  $user['id'];

                $result = $this->query($sql);
                $hobbiesOnUser = $result->fetchAll();

                $sql = "SELECT hobbies.name
                    FROM user
                    INNER JOIN tag_user
                    ON tag_user.user_id = user.id
                    INNER JOIN hobbies
                    ON tag_user.tag_id = hobbies.id
                    WHERE tag_user.type = $typeHobbies AND user.id =" .  $user['id'];

                $result = $this->query($sql);
                $programsOnUser = $result->fetchAll();

                $user['hobbies'] = $hobbiesOnUser;
                $user['programs'] = $programsOnUser;
            }
        }

        return $users;
    }

}