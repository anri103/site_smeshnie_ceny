<!doctype html>
<html lang="ru">

<head>
  <title>Страница</title>

<?require($_SERVER["DOCUMENT_ROOT"]."/header.php");?>

    <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="mb-4">Заголовок страницы</h1>
          </div>
        </div> <!-- End site-title -->

        <div class="row">
          <!-- main-content -->
          <div class="col-lg-8 main-content">
            <div class="row mb-5">
              <div class="col-lg-12">
                <p class="mb-5"><img src="/img/ximg_6.jpg.pagespeed.ic.ER9FTb3UNz.jpg" alt="Image placeholder" class="img-fluid"></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum minima eveniet recusandae suscipit
                  eum laboriosam fugit amet deleniti iste et. Ad dolores, necessitatibus non saepe tenetur impedit
                  commodi quibusdam natus repellat, exercitationem accusantium perferendis officiis. Laboriosam impedit
                  quia minus pariatur!</p>
                <p>Dignissimos iste consectetur, nemo magnam nulla suscipit eius quibusdam, quo aperiam quia quae est
                  explicabo nostrum ab aliquid vitae obcaecati tenetur beatae animi fugiat officia id ipsam sint?
                  Obcaecati ea nisi fugit assumenda error totam molestiae saepe fugiat officiis quam?</p>
                <p>Culpa porro quod doloribus dolore sint. Distinctio facilis ullam voluptas nemo voluptatum saepe
                  repudiandae adipisci officiis, explicabo eaque itaque sed necessitatibus, fuga, ea eius et aliquam
                  dignissimos repellendus impedit pariatur voluptates. Dicta perferendis assumenda, nihil placeat, illum
                  quibusdam. Vel, incidunt?</p>
                <p>Dolorum blanditiis illum quo quaerat, possimus praesentium perferendis! Quod autem optio nobis,
                  placeat officiis dolorem praesentium odit. Vel, cum, a. Adipisci eligendi eaque laudantium dicta
                  tenetur quod, pariatur sunt sed natus officia fuga accusamus reprehenderit ratione, provident possimus
                  ut voluptatum.</p>
                <form action="#" method="post">
                    <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" id="name" class="form-control">
                    </div>
                    <div class="mb-3">
                      <label for="phone" class="form-label">Phone</label>
                      <input type="text" id="phone" class="form-control">
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" id="email" class="form-control">
                    </div>
                    <div class="mb-3">
                      <label for="message" class="form-label">Write Message</label>
                      <textarea name="message" id="message" class="form-control" rows="8"></textarea>
                    </div>
                    <div class="mb-3">
                      <button type="submit" class="btn btn-primary">Отправить</button>
                    </div>
                </form>
              </div>
            </div>
          </div> <!-- End main-content -->

<?require($_SERVER["DOCUMENT_ROOT"]."/sidebar.php");?>

        </div>
      </div>
    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/footer.php");?>