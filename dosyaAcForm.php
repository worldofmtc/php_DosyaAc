<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
      <div class="row mt-5">
        <div class="col-lg-6">
            <h2 class="p-2 ms-5">Yeni</h2>
           <div  class="form">
             <form style="display:grid;" class="justify-content-center" action="dosyaAc.php?D=ac" method="post">
              <label for="">ad</label>
               <input type="text" name="ad" value="">
                <label for="">soyad</label>
                 <input type="text" name="soyad" value="">
                  <label for="">adres</label>
                   <input type="text" name="adres" value="">
                   <button class="mt-2" type="submit" name="button">GÖNDER</button>
             </form>
           </div>
        </div>
        <div class="col-lg-6">
          <h2 class="p-2 ">Mevcut</h2>
           <div class="form ">
             <form style="display:grid;" class="justify-content-center" action="dosyaAc.php?D=Ac" method="post">
              <label for="">ad</label>
               <input type="text" name="ad" value="">
                <label for="">soyad</label>
                 <input type="text" name="soyad" value="">
                  <label for="">adres</label>
                   <input type="text" name="adres" value="">
                   <button class="mt-2" type="submit" name="button">GÖNDER</button>
            </form>
          </div>
        </div>
      </div>
  </body>
</html>
