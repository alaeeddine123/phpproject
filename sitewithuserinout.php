
          <!DOCTYPE html>
          <html>
          <head>

          <title>  weight calculator </title>

              <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
              <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
              <script src="./bootstrap/js/bootstrap.js"></script>
              <link rel="stylesheet" href="./bootstrap/css/sheet.css">

          </head>
            <body>

              <header class="bgimage">
              <h1>weight calculator</h1>
              </header>

            <!--  stylee  -->

          <form action ='results.php' method='post'>
                      <br>
                      <div class="container">
                      <div class="row">
                         <div class="box">
                           <h1 class="text-center">weight calculator 123</h1>
                        <div class="col-lg-12 center-block">



        <div class="row">
              <div class="col-sm-offset-3 col-sm-6">

                   <form method="post" role="form" class="form-horizontal">

                        <div class="form-group">
                     <div class="col-sm-12">
                      <h1><label><input type="text" name="name" placeholder="name" /><label></h1>
                            <h1><label><input type="number" name="Age" placeholder="Age" /><label></h1>
                              <h1><label><input type="number" step"0.01" name="weight"placeholder="weight" /><label></h1>

                                <div class="col-sm-offset-3 col-sm-6">
                              <h3>  kg : <input type ="checkbox" name ="weightinkg">
                                pounds : <input type ="checkbox" name ="weightinpounds"> </h3>
                              </div>

                                <h1><label><input type="number" step="0.01" name="height" placeholder="height" /><label></h1>

                                  <div class="col-sm-offset-3 col-sm-6">
                                <h3>  Cm : <input type ="checkbox" name ="heightincm">
                                  Inch : <input type ="checkbox" name ="heightininch"> </h3>
                        </div>

                                    <div class="col-sm-offset-4 col-sm-6">
                                      <h3>  <input type="submit" name="submit" value"calculate"> </h3>
                                      </div>
                         </div>

                          </div>
                        </div>
                      </div>
                          </form>

        <!-- php  code   -->
        <!-- ____________________________________________________________________________________________   -->

            <?php include "footer.html"  ?>

              </body>
          </html>
