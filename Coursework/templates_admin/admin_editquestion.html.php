<form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="questionid" value="<?= htmlspecialchars($question['id']) ?>">
    <label for="questiontext">Type your question here:</label>
    <textarea name="questiontext" id="questiontext" rows="3" cols="40"><?= htmlspecialchars($question['text']) ?></textarea>

    <label>User:</label>
    <select name="userid">
        <option value="">Select a user</option>
        <?php foreach ($users as $user): ?>
            <option value="<?=$user['id']?>" <?=($user['id'] == $question['userid']) ? 'selected' : ''?>><?=$user['name']?></option>
        <?php endforeach; ?>
    </select>
    <input type="text" name="newuser" placeholder="Type new user here">
    <input type="email" name="newuseremail" placeholder="Type user email here">

    <label for="moduleid">Type your module here:</label>
    <select name="moduleid" id="moduleid">
        <option value="">Select a module</option>
        <?php foreach ($modules as $module): ?>
            <option value="<?= htmlspecialchars($module['id']) ?>" <?= $question['moduleid'] == $module['id'] ? 'selected' : '' ?>>
                <?= htmlspecialchars($module['moduleName']) ?>
            </option>
        <?php endforeach; ?>
    </select>
    <input type="text" name="newmodule" id="newmodule" placeholder="Type your module here">

    <label for="image">Image (optional):</label>
    <input type="file" name="image" id="image" accept="image/*">
    <input type="hidden" name="current_image" value="<?= htmlspecialchars($question['image']) ?>">

    <input type="submit" value="Update">
</form>