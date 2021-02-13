<!DOCTYPE html>
<html>
<head>
	<title>Админка</title>
<meta charset="utf-8">
</head>
<body style="margin-top: 70px;">


<div class="container col-3 mt-4">
  <form name="aaa" method="post" action="admin" enctype="multipart/form-data">

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Название</label>
    <input type="text" name="name" class="form-control" id="exampleInputPassword1" value="<? echo $_POST['name']; ?>">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Описание</label>
    <input type="text" name="content_small" class="form-control" id="exampleInputPassword1" value="<? echo $_POST['content_small']; ?>">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Категория</label>
    <input type="text" name="category" class="form-control" id="exampleInputPassword1" value="<? echo $_POST['category']; ?>">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Цена</label>
    <input type="text" name="price" class="form-control" id="exampleInputPassword1" value="<? echo $_POST['price']; ?>">
  </div>

	<div class="mb-3">
  <label for="formFileMultiple" class="form-label">Фотография</label>
  <input class="form-control" name="picture" type="file" id="formFileMultiple" multiple>
</div>
<button type="submit" class="btn btn-warning" name="load_product">Создать товар</button>


</form>
</div>


</form>
</body>
</html>
