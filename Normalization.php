<?php include("template_beforebody.php"); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/LinearRegression/normalization.js"></script>

<div class="w3-container">
  <div class="w3-row" style="margin-top:-50px;">
    <p style="font-size:18px;">This is a simple linear regression model. Type in your inputs (X) and your outputs (Y), then click on run.<br></p>
  </div>
  <div class="w3-row" style="padding-bottom:30px;">

    <div class="w3-col l6 m12" style="height:430px; border-right:1px solid #CCCCCC;">
      <div class="w3-padding">
        <canvas id="myChart" style="width:100%; max-height:400px;"></canvas>
      </div>
    </div>

    <div class="w3-col l6 m12">

        <div class="w3-row w3-padding">
          <div class="w3-col l4 m4 w3-padding">
            <label class="w3-text">X values</label>
          </div>
          <div class="w3-col l8 m8">
            <input type="text" name="X" value="0, 1, 2, 3, 4, 5" class="w3-input" id="X-values" placeholder="Please input your x values, seperated by commas">
          </div>
        </div>

        <div class="w3-row w3-padding">
          <div class="w3-col l4 m4 w3-padding">
            <label class="w3-text">Y values</label>
          </div>
          <div class="w3-col l8 m8">
            <input type="text" name="Y" value="4, 7, 10, 13, 16, 19" class="w3-input" id="Y-values" placeholder="Please input your x values, seperated by commas">
          </div>
        </div>

        <div class="w3-row w3-padding">
          <div class="w3-col l4 m4 w3-padding">
            <label class="w3-text">Current f(x)</label>
          </div>
          <div class="w3-col l8 m8 w3-padding">
            f(x) = <div id="w0" style="display:inline-block;">0</div>&nbsp;&nbsp;+&nbsp;&nbsp;
            <div id="w1" style="display:inline-block;">0</div>x
          </div>
        </div>

        <div class="w3-row w3-padding">
          <div class="w3-col l4 m4 w3-padding">
            <label class="w3-text">Error function value</label>
          </div>
          <div class="w3-col l8 m8 w3-padding">
            <div id="error" style="display:inline-block;">0</div>
          </div>
        </div>

        <div class="w3-row w3-padding">
          <div class="w3-col l4 m4">
            <div style="padding-right:5px;">
              <div id="run" class="w3-btn" style="width:100%; background-color:#1A85FF">Run</div>
            </div>
          </div>
          <div class="w3-col l4 m4">
            <div style="padding-right:5px;">
              <div id="reset" class="w3-btn w3-red" style="width:100%;">Reset</div>
            </div>
          </div>
        </div>

    </div>

  </div>
</div>

<?php include("template_afterbody.php"); ?>
