<?php
/**
 * @var array $invitations array consist of types (array)
 */
include __DIR__.'/../_partials/header.php';

if (count($invitations) > 0) {
?>
<table class="types-list">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Text</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($invitations as $invitation) { ?>
        <tr>
            <td><a href="/invitations/show.php?id=<?=$invitation['id'];?>"><?=$invitation['id'];?></a></td>
            <td><?= htmlentities($invitation['name']);?></td>
            <td><?= htmlentities($invitation['text']);?></td>
            <td>
                <a class="button" href="/invitations/delete.php?id=<?=$invitation['id'];?>">Delete</a>
            </td>
        </tr>
    <?php }?>
    </tbody>
</table>
<?php } else { ?>
    <h4>No invitations have been added yet.</h4>
<?php } ?>
<div>
    <a id='invitation-new' class="button" href="/invitations/new.php">New Invintation</a>
</div>

<?php include __DIR__.'/../_partials/footer.php' ?>
