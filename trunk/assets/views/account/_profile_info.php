<p class="text-right">
    <a href="/account/profile/edit">Edit Profile</a>
</p>

<table class="table profile-table">
    <tr>
        <td>Username:</td>
        <td><?php $_($user->username); ?></td>
    </tr>
    <tr>
        <td>E-mail:</td>
        <td><?php $_($user->email); ?></td>
    </tr>
    <tr>
        <td>First Name:</td>
        <td><?php $_($user->first_name); ?></td>
    </tr>
    <tr>
        <td>Last Name:</td>
        <td><?php $_($user->last_name); ?></td>
    </tr>
    <tr>
        <td>Phone:</td>
        <td><?php $_($user->user_phone); ?></td>
    </tr>
    <?php if (isset($user->photo) && $user->photo): ?>
    <tr>
        <td>Photo:</td>
        <td><img src="/user_pictures/<?php $_($user->photo); ?>" alt="" class="profile-picture" /></td>
    </tr>
    <?php endif; ?>
</table>
