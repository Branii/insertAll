<?php require __DIR__ . '/autoload.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin server</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .box{
        padding: 10px;
        border:solid 1px #ccc;
    }
    .titlebar{
        display: flex;
        justify-content: space-between;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Live Monitoring Server</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#menu1">Five Dee</a></li>
    <li><a data-toggle="tab" href="#menu2">Three Dee</a></li>
    <li><a data-toggle="tab" href="#menu3">Fast Three</a></li>
    <li><a data-toggle="tab" href="#menu4">Eleven Five</a></li>
    <li><a data-toggle="tab" href="#menu5">PK Ten</a></li>
  </ul>

  <div class="tab-content">
    <div id="menu1" class="tab-pane fade in active">
      <h3>Menu 1</h3>
      <div class='box'>
       <div class='titlebar'>
        <span></span>
        <div>
            <span>1</span>
            <span>1</span>
        </div>
       </div>
      <table class="table table-bordered">

      <?php 
      
        $data = Games::getDrawPeriod(1,'2024-04-19');
        var_dump($data);
      
      ?>

        <tr>
            <th>Period</th>
            <th>Total Amount</th>
            <th>Total Bets</th>
            <th>Settled</th>
            <th>Pending</th>
            <th>Draw Nnumber</th>
        </tr>
        <tbody>

        </tbody>
      </table>

      </div>
    </div>
    <div id="menu2" class="tab-pane">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
    <div id="menu4" class="tab-pane fade">
      <h3>Menu 4</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
    <div id="menu5" class="tab-pane fade">
      <h3>Menu 5</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>

</body>
</html>
