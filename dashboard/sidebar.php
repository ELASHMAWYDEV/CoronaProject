<div class="sides">
        <aside class="side-head">
            
            <div class="navbar-head">
                
                <div class="user-info">
                    <h4><?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name']; ?></h4>
                    <h6><?php getUserType($_SESSION['user_type']); ?></h6>
                </div>
                <div class="closing-side">
                    <i class="fas fa-times"></i>
                </div>
            </div>
        </aside>
        <aside class="side-content">
            <div class="navbar-content">
                <div class="navbar-links">
                    <a href="mixs.php">جميع المخالطين</a>
                    <?php if(assistant()):?>
                    <a href="assistant.php">الحالات غير المكتملة</a>
                    <?php endif;?>
                    <?php if(!teamMember()):?>
                    <a href="new.php">الحالات الجديدة</a>
                    <?php endif;?>
                    <a href="transfered.php">الحالات المستلمة</a>
                    <?php if(!teamHead() && !teamMember() && !assistant()): ?>
                    <a href="patient.php">اضافة مريض جديد</a>
                    <a href="mix.php">اضافة مخالط جديد</a>
                    <?php endif; ?>
                    <?php if(admin()): ?>
                    <a href="teams.php">الفرق المسجلة</a>
                    <a href="hospitals.php">المستشفيات</a>
                    <a href="districts.php">الأحياء</a>
                    <a href="nationalities.php">الجنسيات</a>
                    <a href="users.php">المستخدمين</a>
                    <?php endif; ?>
                </div>
                <div class="user-settings-btn logout-btn">
                    <a href="/dashboard/userSettings.php">اعدادات الحساب</a>
                </div>
                <div class="logout-btn">
                    <a href="/account/logout.php">تسجيل الخروج</a>
                </div>

            </div>
        </aside>
    </div>
<div class="main-container">
    <div class="container">
    <header>
        <div class="burger-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="header-title">
            <h2><?php echo $headerTitle; ?></h2>
        </div>
    </header>
    <!-- </div> -->
<!-- </div> -->