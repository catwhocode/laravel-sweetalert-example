<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>.</title>
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-center">Hello, sweet alert!</h1>

                <div class="text-center"><button class="btn btn-primary" id="btnTest" style="font-size:18px;">Test</button></div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#btnTest').click(function(){
                $.ajax({
                    method: "POST",
                    url: "/test",
                    data: { name: "Cat who code", email: "catwhocode@gmail.com" }
                }).done(function( response ) {
                    console.log(response);
                    console.log(response.status);
                    console.log(response.message);
                    Swal.fire({
                        title: 'Info!',
                        text: 'Data has been saved',
                        icon: 'success',
                        confirmButtonText: 'Close'
                    });
                });
            });
        });
    </script>

  </body>
</html>
