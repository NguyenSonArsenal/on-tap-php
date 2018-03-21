<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 20/03/18
 * Time: 14:06
 */

namespace app\models;


class Hobbies extends Model
{
    public function getListHobbiesOfUser($user_id = -1)
    {
        $type = self::TYPE_HOBBY;

        if ($user_id == -1)
            $id = isset($_GET['id']) ? (int)$_GET['id'] : -1;
        else
            $id = $user_id;

        if ($id != -1 )
        {
            $sql = "SELECT hobbies.name, hobbies.id 
                FROM user
                INNER JOIN tag_user
                ON tag_user.user_id = user.id
                INNER JOIN hobbies
                ON tag_user.tag_id = hobbies.id
                WHERE tag_user.type = $type AND user.id = $id";

            $query = Database::query($sql);

            return $query->fetchAll();
        }
        else
        {
            echo '404.php';
            return false;
        }
    }
}