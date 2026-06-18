<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SCP Foundation CRUD Application</title>

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
        box-shadow: 0 4px 14px rgba(245,166,35,0.4), inset 0 1px 0 rgba(255,255,255,0.25);
        transition: all 0.2s cubic-bezier(0.34,1.56,0.64,1);
    }

    .nav-add:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 8px 20px rgba(245,166,35,0.5);
    }

    .container {
        max-width: 900px;
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
        margin-bottom: 20px;
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

    .card-title {
        font-size: 1.6rem;
        color: #f5a623;
        font-weight: 700;
        font-family: 'Courier New', Courier, monospace;
        letter-spacing: 2px;
        margin-bottom: 10px;
    }

    .badge {
        display: inline-block;
        padding: 4px 14px;
        border-radius: 20px;
        font-size: 0.72rem;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin-bottom: 16px;
    }

    .badge-euclid {
        background: rgba(33,118,174,0.15);
        color: #64b5f6;
        border: 1px solid #2176ae;
    }

    .badge-safe {
        background: rgba(46,125,50,0.15);
        color: #81c784;
        border: 1px solid #388e3c;
    }

    .badge-keter {
        background: rgba(198,40,40,0.15);
        color: #ef9a9a;
        border: 1px solid #c62828;
    }

    .scp-img {
        width: 100%;
        max-height: 300px;
        object-fit: cover;
        border-radius: 10px;
        margin-bottom: 20px;
        border: 1px solid #2a2d35;
    }

    .section-label {
        font-size: 0.65rem;
        font-weight: 700;
        color: #f5a623;
        letter-spacing: 3px;
        text-transform: uppercase;
        margin-bottom: 8px;
        font-family: 'Courier New', Courier, monospace;
    }

    .section-content {
        font-size: 0.88rem;
        color: #aaa;
        line-height: 1.75;
        background: #0d0f14;
        border-left: 3px solid #f5a623;
        padding: 12px 16px;
        border-radius: 0 8px 8px 0;
        margin-bottom: 20px;
    }

    .btn-row {
        display: flex;
        gap: 14px;
        flex-wrap: wrap;
        margin-top: 8px;
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

    .btn-update {
        background: linear-gradient(135deg, #f5a623, #e8920a);
        color: #0d0f14;
        box-shadow: 0 5px 18px rgba(245,166,35,0.4), inset 0 1px 0 rgba(255,255,255,0.2);
    }

    .btn-update:hover {
        box-shadow: 0 10px 28px rgba(245,166,35,0.55);
    }

    .btn-delete {
        background: linear-gradient(135deg, #ef5350, #c62828);
        color: #fff;
        box-shadow: 0 5px 18px rgba(198,40,40,0.35), inset 0 1px 0 rgba(255,255,255,0.15);
    }

    .btn-delete:hover {
        box-shadow: 0 10px 28px rgba(198,40,40,0.5);
    }

    .welcome {
        background: #13161e;
        border-radius: 14px;
        padding: 48px 30px;
        text-align: center;
        border: 1px solid #2a2d35;
        position: relative;
        overflow: hidden;
    }

    .welcome::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(90deg, transparent, #f5a623, transparent);
    }

    .welcome h2 {
        font-family: 'Courier New', Courier, monospace;
        color: #f5a623;
        font-size: 1.4rem;
        letter-spacing: 3px;
        margin-bottom: 14px;
    }

    .welcome p {
        color: #777;
        font-size: 0.9rem;
        line-height: 1.9;
    }

    .welcome .clearance {
        color: #444;
        font-size: 0.72rem;
        margin-top: 14px;
        letter-spacing: 3px;
        font-family: 'Courier New', Courier, monospace;
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

    .alert-warning {
        background: rgba(245,166,35,0.1);
        border: 1px solid #f5a623;
        color: #f5a623;
        padding: 12px 16px;
        border-radius: 8px;
        margin-bottom: 20px;
    }

</style>
</head>
<body>

<?php include "connection.php"; ?>

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
    <h1>&#9632; SCP Foundation CRUD Application</h1>

    <?php

    // Show success message after creating a record
    if(isset($_GET['created']))
    {
        echo "<div class='alert-success'>Record successfully created!</div>";
    }

    // DELETE a record
    if(isset($_GET['delete']))
    {
        $delID = $_GET['delete'];
        $delete = $connection->prepare("DELETE FROM scp WHERE id = ?");
        $delete->bind_param("i", $delID);

        if($delete->execute())
        {
            echo "<div class='alert-warning'>Record deleted.</div>";
        }
        else
        {
            echo "<div class='alert-danger'>Error: " . $delete->error . "</div>";
        }
    }

    // READ - show a selected record
    if(isset($_GET['link']))
    {
        $item = $_GET['link'];

        $stmt = $connection->prepare("SELECT * FROM scp WHERE item_number = ?");
        $stmt->bind_param("s", $item);
        $stmt->execute();
        $res = $stmt->get_result();

        if($res->num_rows > 0)
        {
            $row = $res->fetch_assoc();

            // Badge colour based on object class
            $badge = 'badge-euclid';
            if(strtolower($row['object_class']) == 'safe')  $badge = 'badge-safe';
            if(strtolower($row['object_class']) == 'keter') $badge = 'badge-keter';

            echo "<div class='card'><div class='card-inner'>";
            echo "<div class='card-title'>" . htmlspecialchars($row['item_number']) . "</div>";
            echo "<span class='badge " . $badge . "'>Object Class: " . htmlspecialchars($row['object_class']) . "</span>";

            if(!empty($row['image']))
            {
                echo "<img src='images/" . htmlspecialchars($row['image']) . "' class='scp-img'>";
            }

            echo "<div class='section-label'>Special Containment Procedures</div>";
            echo "<div class='section-content'>" . nl2br(htmlspecialchars($row['containment'])) . "</div>";

            echo "<div class='section-label'>Description</div>";
            echo "<div class='section-content'>" . nl2br(htmlspecialchars($row['description'])) . "</div>";

            echo "<div class='btn-row'>";
            echo "<a href='update.php?update=" . $row['id'] . "' class='btn btn-update'>Update Record</a>";
            echo "<a href='index.php?delete=" . $row['id'] . "' class='btn btn-delete' onclick=\"return confirm('Are you sure?')\">Delete Record</a>";
            echo "</div>";
            echo "</div></div>";
        }
        else
        {
            echo "<p style='color:#ef9a9a;'>No record found.</p>";
        }
    }
    else
    {
        // Welcome screen
        echo "
        <div class='welcome'>
            <h2>&#9632; SECURE. CONTAIN. PROTECT.</h2>
            <p>Welcome to the SCP Foundation database system.</p>
            <p>Select an SCP item from the navigation above to view its containment file.</p>
            <p class='clearance'>AUTHORISED PERSONNEL ONLY &mdash; LEVEL 3 CLEARANCE REQUIRED</p>
        </div>";
    }

    ?>

</div>
</body>
</html>
