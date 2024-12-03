<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Sing up</title>
</head>
<body>
    <!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-color" style="
        background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));
        height: 300px;
        "></div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background-color:Snow; 
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Sign up now</h2>
          <form>
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="form3Example1" class="form-control" />
                  <label class="form-label" for="form3Example1">First name</label>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="form3Example2" class="form-control" />
                  <label class="form-label" for="form3Example2">Last name</label>
                </div>
              </div>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form3Example3" class="form-control" />
              <label class="form-label" for="form3Example3">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" id="form3Example4" class="form-control" />
              <label class="form-label" for="form3Example4">Password</label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">
              Sign up
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
</body>
</html>