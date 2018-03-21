<?php
$stt = 1;

?>

<?php require ROOT . '/resources/views/includes/header.php'?>

<div class="main">
    <table class="table table-hover">
        <thead class="thead">
            <tr class="tr">
                <th scope="col" class="th td" width="5%">#</th>
                <th scope="col" class="th td" width="18%">Name</th>
                <th scope="col" class="th td" width="18%">Email</th>
                <th scope="col" class="th td" width="18%">Phone</th>
                <th scope="col" class="th td" width="18%">Hobbies</th>
                <th scope="col" class="th td" width="18%">Program</th>
                <th scope="col" class="th td" width="5%">Action</th>
            </tr>
        </thead>
        <tbody class="tbody">
        <?php foreach ($users as $user) : ?>
            <tr class="tr">
                <td class="td"><?=$stt++; ?></td>
                <td class="td"><a href="user/<?=$user['id']?>"><?=$user['name']?></a></td>
                <td class="td"><a href="user/<?=$user['id']?>"><?=$user['email']?></a></td>
                <td><?=$user['phone']?></td>
                <td>
                    <?php foreach ($user['hobbies'] as $hobby) : ?>
                        <?=$hobby['name'] . ' - '?>
                    <?php endforeach; ?>
                </td>
                <td>
                    <?php foreach ($user['programs'] as $program) : ?>
                        <?=$program['name'] . ' - '?>
                    <?php endforeach; ?>
                </td>
                <td><a href="" title="Show detail"><i class="fa fa-info-circle"></i></a></td>
            </tr>
        <?php endforeach ; ?>

        </tbody>
    </table>
</div>

<?php require ROOT . '/resources/views/includes/footer.php'?>