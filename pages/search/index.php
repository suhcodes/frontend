<? include_once($_SERVER['DOCUMENT_ROOT'].'/_inc/functions.php'); ?>
<? $title = "YYYY"; ?>
<? inc('partial','head') ?>
<? inc('partial','banner') ?>

    <main class="main" role="main">
        <header class="preface">
            <h1 class="preface_title">Search results for &#8220;<?= $_GET['q'] ?>&#8221;</h1>
        </header><!--/.preface-->

        <ol class="list list-articles">
            <li class="list_item">
<?              inc('partial','summary-article') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-article') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-article') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-article') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-article') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-article') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-article') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-article') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-article') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-article') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-article') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-article') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-article') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-article') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-article') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-article') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-article') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-article') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-article') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-article') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-article') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-article') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-article') ?>
            </li>
            <li class="list_item">
<?              inc('partial','summary-article') ?>
            </li>
        </ol><!--/.list--articles-->
        <a class="button button-more" href="?page=2">Show me another 24 ways</a>
    </main><!--/@main-->

<?  inc('partial','navigation') ?>
<?  inc('partial','search') ?>
<?  inc('partial','contentinfo') ?>
<?  inc('partial','foot') ?>