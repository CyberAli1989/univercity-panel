<?php
require_once "vendor/autoload.php";
require_once "inc/db.php";
?>
<nav>
    <ul>
        <li>
            <a href="index.php">خانه</a>
        </li>
        <li>
            <a href="students.php">
                لیست دانشجو
            </a>
        </li>
        <li>
            <a href="#">
                غذای دانشجو
            </a>
        </li>
        <?php if (isset($_SESSION['name'])): ?>
        <li>
            <a href="addStudent.php">افزودن دانشجو</a>
        </li>

        <?php endif; ?>
    </ul>
    <ul>
        <?php if (!isset($_SESSION['name'])): ?>
            <li>
                <a class="btn btn-login" href="login.php">ورود</a>
            </li>
        <?php endif; ?>

        <?php
        if (isset($_SESSION['name'])):
            ?>
            <li>
                <p class=mb-0>
                    <?php echo $_SESSION['name'] ?>
                    <a class="btn btn-danger" href="controller/logOutControl.php">خروج</a>

                </p>
            </li>

        <?php endif; ?>
        <li>
            <button id="theme">
                <i class="fa fa-moon"></i>
            </button>
        </li>
    </ul>
</nav>