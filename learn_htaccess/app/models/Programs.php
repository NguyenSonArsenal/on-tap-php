<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 20/03/18
 * Time: 14:06
 */

namespace app\models;


class Programs extends Model
{
    public function getListProgramsOfUser($user_id = -1)
    {
        if ($user_id == -1)
            $id = isset($_GET['id']) ? (int)$_GET['id'] : -1;
        else
            $id = $user_id;

        $type = self::TYPE_PROGRAM;

        if ($id != -1)
        {
            $sql = "SELECT program.name, program.id 
                    FROM user
                    INNER JOIN tag_user
                    ON tag_user.user_id = user.id
                    INNER JOIN program
                    ON tag_user.tag_id = program.id
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