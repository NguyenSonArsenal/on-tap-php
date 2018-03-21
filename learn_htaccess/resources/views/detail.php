<?php
use Library\Session;
use Library\Cookie;

$name       =   isset($user['name']) ? $user['name'] : '';
$email      =   isset($user['email']) ? $user['email'] : '';
$phoneNumber=   isset($user['phoneNumber']) ? $user['phoneNumber'] : '';
$gender     =   $user['gender'];
$hobbies    =   isset($user['hobbies']) ? $user['hobbies'] : '';
$programs   =   isset($user['programs']) ? $user['programs'] : '';

//dump($user);

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $_SESSION['user'][] = $user;
}

?>


<?php require 'includes/header.php'?>

<div class="main">
    <h3>Thong tin chi tiet user</h3>
    <h5>Username: <?=$name?></h5>
    <h5>Email: <?=$email?></h5>
    <h5>Phone: <?=$phoneNumber?></h5>
    <h5>Gender:
        <?php
            if ($gender == 1)
                echo 'Boy';
            else if ($gender == 0)
                echo 'Girl';
        ?>
    </h5>

    <h5>Hobbies:
        <?php
            foreach ($hobbies as $hobby)
            {
                echo $hobby['name'] . '-';
            }
        ?>
    </h5>

    <h5>Programs:
        <?php
        foreach ($programs as $program)
        {
            echo $program['name'] . '-';
        }
        ?>
    </h5>
    <form action="#" method="post">
        <button class="btn btn-success btn-sm" title="Add to cart">Save me</button>
    </form>
</div>

<?php require 'includes/footer.php'?>