<nav>
    <ul>
        <li><a href="?menu=kontak">KONTAK</a></li>
        <li><a href="?menu=sejarah">SEJARAH</a></li>
        <li><a href="?menu=jurusan">JURUSAN</a></li>
    </ul>
</nav>

<?php
if (isset($_GET['menu'])) {
    $menu = $_GET['menu'];
    require_once $menu . '.php';
}



?>