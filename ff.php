<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>check id ff</title>
  </head>
  <body>

    <class class="container">
      <?php 
          if (isset($_GET['save'])){
            $id = $_GET['cek'];
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://api-xyz.com/trueid/freefire/?id=".$id."&token=NguyenThuWan");
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
            $result = curl_exec($ch);
            curl_close($ch);
            $res = json_decode($result,true);
          }
      ?>
        <form action="" method="get">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Masukan ID</label>
                <input type="number" class="form-control" name="cek" placeholder="776787xxx">
            </div>
            <button class="btn btn-danger" name="save">CEK ID</button>
        </form>
        <p><?php echo $res['nickname'] ?></p>
    </class>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>