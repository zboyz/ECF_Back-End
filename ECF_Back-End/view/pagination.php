<nav class="d-flex justify-content-center my-3">
    <ul class="pagination">
        <!-- Lien vers la page précédente (désactivé si on se trouve sur la 1ère page) -->
        <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
            <a href="../controller/allBeers.php?page=<?= $currentPage - 1 ?>" class="page-link"><i class="fa fa-chevron-left"></i></a>
        </li>
        <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
        <?php for($page = max(1, $currentPage - 10); $page <= min($currentPage + 10, $nbPages); $page++): ?>
            <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
            <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
                <a href="../controller/allBeers.php?page=<?= $page ?>" class="page-link"><?= $page ?></a>
            </li>
        <?php endfor ?>
        <!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
        <li class="page-item <?= ($currentPage == $nbPages) ? "disabled" : "" ?>">
            <a href="../controller/allBeers.php?page=<?= $currentPage + 1 ?>" class="page-link"><i class="fa fa-chevron-right"></i></a>
        </li>
    </ul>
</nav>