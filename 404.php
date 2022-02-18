<!doctype html>
<html lang="ru">

<head>
  <title>Страница</title>

<?require($_SERVER["DOCUMENT_ROOT"]."/header.php");?>

    <section class="site-section page-404">
      <div class="container">

        <div class="row">
          <!-- main-content -->
          <div class="col-lg-8 main-content">
            <div class="row mb-5">
              <div class="col-lg-12">
                <h1>404</h1>
              	<h2 class="mb-50">Такой страницы нет!</h2>
              	<p class="mb-20">Можете перейти <a href="/">на главную</a> или использовать поиск.</p>
              </div>
            </div>
          </div> <!-- End main-content -->

<?require($_SERVER["DOCUMENT_ROOT"]."/sidebar.php");?>

        </div>
      </div>
    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/footer.php");?>