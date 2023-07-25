<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign-In Page</title>
  <link rel="stylesheet" href="#">
  <!-------------Para ma activate yung css side ng bootstrap----------->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <script src="https://kit.fontawesome.com/de116611ba.js" crossorigin="anonymous"></script>
  <!-------------------------------------------------------------------->
</head>
<body>

  <section class="h-100" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
  
                  <div class="text-center">
                    <img src="img/jjandra_logo.png"
                      style="width: 185px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1">Welcome to Jandra Global Traders Corp.</h4>
                  </div>
  
                  <form action="/login" method="post">
                    @csrf
                    <p>Please login to your account</p>
  
                    <div class="form-outline mb-4">
                      <input type="email" id="form2Example11" name="username" class="form-control"
                        placeholder="Phone number or email address" />
                      <label class="form-label" for="form2Example11">Username</label>
                    </div>
  
                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example22" name="password" class="form-control" />
                      <label class="form-label" for="form2Example22">Password</label>
                    </div>
  
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" style="padding: 14px 40px; font-size: 18px;">Log in</button>
                      <a class="text-muted" href="#!">Forgot password?</a>
                    </div>
  
                    @if(session('error'))
                      <p style="color: red">{{ session('error') }}</p>
                    @endif
  
                  </form>
  
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center" style="background: #fccb90;
                background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
                background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">We are more than just a company</h4>
                  <p class="small mb-0">At JANDRA GLOBAL TRADERS CORP, we are not just a company, we are a family united by a passion for excellence in the import and export industry. Founded in 2004 by MA. Lourdes 'Dess' Jimenez Villaroman, our strong foundation, dedicated family members, and loyal staff have propelled us to prominence. We strive to be more than just a business; we are committed to creating meaningful connections, delivering exceptional products, and making a positive impact on the global trade landscape.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  


   <!--Horizontal Line-->
 <hr class="my-4">
 <!---------------Eto rin need rin to --------------------------------->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
 </script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
 <!-------------------------------------------------------------------->
</body>
</html>