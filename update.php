<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SCP Foundation - Update Record</title>

<style>

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        background: #0d0f14;
        font-family: Arial, sans-serif;
        min-height: 100vh;
        color: #ccc;
    }

    .scp-navbar {
        background: #13161e;
        border-bottom: 2px solid #f5a623;
        padding: 14px 24px;
        display: flex;
        align-items: center;
        gap: 8px;
        flex-wrap: wrap;
        box-shadow: 0 4px 20px rgba(245,166,35,0.1);
    }

    .brand {
        color: #f5a623;
        font-size: 1.1rem;
        font-weight: 700;
        letter-spacing: 2px;
        margin-right: 12px;
        font-family: 'Courier New', Courier, monospace;
        text-decoration: none;
    }

    .nav-link {
        color: #aaa;
        font-size: 0.78rem;
        padding: 6px 14px;
        border: 1px solid #2a2d35;
        border-radius: 20px;
        text-decoration: none;
        transition: all 0.2s ease;
        font-family: 'Courier New', Courier, monospace;
        letter-spacing: 1px;
        background: #1a1d25;
    }

    .nav-link:hover {
        border-color: #f5a623;
        color: #f5a623;
        box-shadow: 0 0 10px rgba(245,166,35,0.2);
        transform: translateY(-2px);
    }

    .nav-add {
        margin-left: auto;
        background: linear-gradient(135deg, #f5a623, #e8920a);
        color: #0d0f14;
        font-size: 0.8rem;
        padding: 8px 18px;
        border-radius: 20px;
        text-decoration: none;
        font-weight: 700;
        letter-spacing: 1px;
        box-shadow: 0 4px 14px rgba(245,166,35,0.4);
        transition: all 0.2s cubic-bezier(0.34,1.56,0.64,1);
    }

    .nav-add:hover {
        transform: translateY(-3px) scale(1.05);
    }

    .container {
        max-width: 700px;
        margin: 30px auto;
        padding: 0 20px;
    }

    h1 {
        font-size: 1.5rem;
        color: #f5a623;
        letter-spacing: 2px;
        font-family: 'Courier New', Courier, monospace;
        margin-bottom: 24px;
        border-left: 4px solid #f5a623;
        padding-left: 14px;
    }

    .card {
        background: #13161e;
        border-radius: 14px;
        border: 1px solid #2a2d35;
        box-shadow: 0 4px 30px rgba(0,0,0,0.4);
        overflow: hidden;
        position: relative;
    }

    .card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(90deg, transparent, #f5a623, transparent);
    }

    .card-inner {
        padding: 28px;
    }

    label {
        display: block;
        font-size: 0.68rem;
        color: #f5a623;
        letter-spacing: 2px;
        text-transform: uppercase;
        font-family: 'Courier New', Courier, monospace;
        margin-bottom: 6px;
        margin-top: 16px;
    }

    .form-control {
        width: 100%;
        background: #0d0f14;
        border: 1px solid #2a2d35;
        color: #ccc;
        padding: 10px 14px;
        border-radius: 8px;
        font-family: Arial, sans-serif;
        font-size: 0.88rem;
        transition: border-color 0.2s;
    }

    .form-control:focus {
        outline: none;
        border-color: #f5a623;
        box-shadow: 0 0 0 3px rgba(245,166,35,0.1);
    }

    select.form-control option {
        background: #13161e;
    }

    textarea.form-control {
        resize: vertical;
        min-height: 100px;
    }

    .btn-row {
        display: flex;
        gap: 14px;
        flex-wrap: wrap;
        margin-top: 24px;
    }

    .btn {
        padding: 11px 26px;
        border: none;
        border-radius: 25px;
        font-size: 0.82rem;
        font-weight: 700;
        letter-spacing: 1px;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
        position: relative;
        transition: transform 0.2s cubic-bezier(0.34,1.56,0.64,1), box-shadow 0.2s ease;
        overflow: hidden;
    }

    .btn::after {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 60%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.25), transparent);
        transform: skewX(-20deg);
        transition: left 0.4s ease;
    }

    .btn:hover::after {
        left: 150%;
    }

    .btn:hover {
        transform: translateY(-4px) scale(1.06);
    }

    .btn:active {
        transform: translateY(2px) scale(0.97);
    }

    .btn-submit {
        background: linear-gradient(135deg, #f5a623, #e8920a);
        color: #0d0f14;
        box-shadow: 0 5px 18px rgba(245,166,35,0.4), inset 0 1px 0 rgba(255,255,255,0.2);
    }

    .btn-submit:hover {
        box-shadow: 0 10px 28px rgba(245,166,35,0.55);
    }

    .btn-back {
        background: #1a1d25;
        color: #aaa;
        border: 1px solid #2a2d35;
        box-shadow: none;
    }

    .btn-back:hover {
        border-color: #f5a623;
        color: #f5a623;
    }

    .alert-success {
        background: rgba(46,125,50,0.15);
        border: 1px solid #388e3c;
        color: #81c784;
        padding: 12px 16px;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .alert-danger {
        background: rgba(198,40,40,0.15);
        border: 1px solid #c62828;
        color: #ef9a9a;
        padding: 12px 16px;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    small {
        color: #555;
        font-size: 0.75rem;
        margin-top: 4px;
        display: block;
    }

    .upload-row {
        display: flex;
        gap: 10px;
        align-items: center;
        margin-top: 6px;
    }

    .upload-row .form-control {
        flex: 1;
    }

    .btn-upload {
        background: linear-gradient(135deg, #f5a623, #e8920a);
        color: #0d0f14;
        border: none;
        padding: 10px 16px;
        border-radius: 8px;
        font-weight: 700;
        font-size: 0.8rem;
        cursor: pointer;
        white-space: nowrap;
        transition: transform 0.2s cubic-bezier(0.34,1.56,0.64,1);
    }

    .btn-upload:hover {
        transform: translateY(-2px) scale(1.04);
    }

    #preview {
        margin-top: 10px;
        max-width: 100%;
        max-height: 160px;
        border-radius: 8px;
        border: 1px solid #2a2d35;
        display: none;
    }

    .current-img {
        max-width: 100%;
        max-height: 160px;
        border-radius: 8px;
        border: 1px solid #2a2d35;
        margin-top: 8px;
        display: block;
    }

</style>
</head>
<body>

<?php

include "connection.php";

$row = [];

// Load the record to update
if(isset($_GET['update']))
{
    $id = $_GET['update'];
    $stmt = $connection->prepare("SELECT * FROM scp WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $res = $stmt->get_result();
    $row = $res->fetch_assoc();
}

// Save the updated record
if(isset($_POST['update']))
{
    $imageName = $_POST['image'];

    // If file was uploaded
    if(isset($_FILES['image_file']) && $_FILES['image_file']['error'] == 0)
    {
        $imageName = basename($_FILES['image_file']['name']);
        $uploadDir = 'images/';
        $uploadFile = $uploadDir . $imageName;
        
        // Make sure images folder exists
        if(!is_dir($uploadDir))
        {
            mkdir($uploadDir, 0755, true);
        }
        
        // Upload the file
        if(move_uploaded_file($_FILES['image_file']['tmp_name'], $uploadFile))
        {
            // File uploaded successfully
        }
        else
        {
            echo "<div class='alert-danger'>Error uploading file</div>";
        }
    }

    $update = $connection->prepare("UPDATE scp SET item_number=?, object_class=?, containment=?, description=?, image=? WHERE id=?");
    $update->bind_param("sssssi", $_POST['item_number'], $_POST['object_class'], $_POST['containment'], $_POST['description'], $imageName, $_POST['id']);

    if($update->execute())
    {
        echo "<div class='alert-success'>Record updated successfully.</div>";
    }
    else
    {
        echo "<div class='alert-danger'>Error: " . $update->error . "</div>";
    }
}

?>

<!-- Navbar -->
<div class="scp-navbar">
    <a href="index.php" class="brand">&#9632; SCP FOUNDATION</a>
    <?php foreach($result as $link): ?>
        <a href="index.php?link=<?php echo urlencode($link['item_number']); ?>" class="nav-link">
            <?php echo htmlspecialchars($link['item_number']); ?>
        </a>
    <?php endforeach; ?>
    <a href="create.php" class="nav-add">+ Add New Record</a>
</div>

<div class="container">
    <h1>&#9632; Update SCP Record</h1>

    <div class="card">
        <div class="card-inner">
            <form method="post" action="update.php" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?php echo isset($row['id']) ? $row['id'] : ''; ?>">

                <label>Item Number</label>
                <input type="text" name="item_number" class="form-control" value="<?php echo isset($row['item_number']) ? htmlspecialchars($row['item_number']) : ''; ?>">

                <label>Object Class</label>
                <select name="object_class" class="form-control">
                    <?php
                    $classes = ['Safe', 'Euclid', 'Keter', 'Thaumiel', 'Neutralized'];
                    foreach($classes as $class)
                    {
                        $selected = (isset($row['object_class']) && $row['object_class'] == $class) ? 'selected' : '';
                        echo "<option value='$class' $selected>$class</option>";
                    }
                    ?>
                </select>

                <label>Special Containment Procedures</label>
                <textarea name="containment" class="form-control"><?php echo isset($row['containment']) ? htmlspecialchars($row['containment']) : ''; ?></textarea>

                <label>Description</label>
                <textarea name="description" class="form-control"><?php echo isset($row['description']) ? htmlspecialchars($row['description']) : ''; ?></textarea>

                <label>Image</label>
                <?php if(!empty($row['image'])): ?>
                    <small style="color:#aaa;">Current image:</small>
                    <img src="images/<?php echo htmlspecialchars($row['image']); ?>" class="current-img">
                <?php endif; ?>
                <div class="upload-row">
                    <input type="text" name="image" placeholder="e.g. SCP_173.jpg" class="form-control" id="imageFilename" value="<?php echo isset($row['image']) ? htmlspecialchars($row['image']) : ''; ?>">
                    <button type="button" class="btn-upload" onclick="document.getElementById('imageUpload').click()">&#128193; Upload</button>
                    <input type="file" name="image_file" id="imageUpload" accept="image/*" style="display:none" onchange="previewImage(this)">
                </div>
                <img id="preview" src="" alt="Preview">
                <small>Type a filename OR click Upload to choose a new image.</small>

                <div class="btn-row">
                    <input type="submit" name="update" value="Update Record" class="btn btn-submit">
                    <a href="index.php" class="btn btn-back">&#8592; Back</a>
                </div>

            </form>
        </div>
    </div>
</div>

<script>
function previewImage(input) {
    if(input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('preview').src = e.target.result;
            document.getElementById('preview').style.display = 'block';
            document.getElementById('imageFilename').value = input.files[0].name;
        }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>

</body>
</html>
