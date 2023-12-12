<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>مخاطبین</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <table class="table table-striped">
      <thead>

        <tr>
          <th scope="col">#</th>
          <th scope="col">نام</th>
          <th scope="col">شماره</th>
          <th scope="col">ایمیل</th>
          <th scope="col">ویرایش</th>
          <th scope="col">حذف</th>
        </tr>

      </thead>
      <tbody>
        <?php
        $number = 0;
        foreach ($contacts as $contact):
          $number++;
          $name = $contact['name'];
          $number1 = $contact['number'];
          $email = $contact['email'];
          $id = $contact['id'];
            ?>
          <tr>
            <th scope="row">
              <?= $number ?>
            </th>
            <td>
              <?= $contact['name'] ?>
            </td>
            <td>
              <?= $contact['number'] ?>
            </td>
            <td>
              <?= $contact['email'] ?>
            </td>
            <td>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal1<?= $id ?>">
                ویرایش
              </button>
 <!-- Modal -->
 <div class="modal fade" id="exampleModal1<?= $id ?>" tabindex="-1" aria-labelledby="exampleModalLabel1"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel1">
                        ویرایش مخاطب
                      </h1>
                    </div>
                    <form action="edit" method="post">
                      <div class="modal-body">
                        <label for="name">نام :</label>
                        <input type="text" id="name" class="form-control m-1" name="name"
                          value="<?= $contact["name"]  ?>" />
                        <label for="numbar">شماره :</label>
                        <input type="text" id="number" class="form-control m-1" name="number"
                          value="<?= $contact["number"] ?>" />
                        <label for="email">ایمیل :</label>
                        <input type="text" id="email" class="form-control m-1" name="email"
                          value="<?= $contact["email"] ?>" />
                        <input type="hidden" id="hidden" class="form-control m-1" name="hidden"
                          value="<?= $contact["id"] ?>" />
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                          لغو
                        </button>
                        <input type="submit" class="btn btn-warning" name="edit" value="ویرایش" />
                      </div>
                    </form>
                  </div>
                </div>
             
            </td>
            <td><a href="del?id=<?= $id ?>" class="btn btn-danger">حذف</a></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
    style="position: absolute; right: 30px; bottom: 30px;">
    +
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">
            افزودن مخاطب
          </h1>
        </div>
        <form action="add" method="post">
          <div class="modal-body">
            <label for="name">نام :</label>
            <input type="text" id="name" class="form-control m-1" name="name" />
            <label for="numbar">شماره :</label>
            <input type="text" id="number" class="form-control m-1" name="number" />
            <label for="email">ایمیل :</label>
            <input type="text" id="email" class="form-control m-1" name="email" />
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
              لغو
            </button>
            <input type="submit" class="btn btn-success" name="sub" value="افزودن" />
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>