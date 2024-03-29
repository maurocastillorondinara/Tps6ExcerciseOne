<?php 
 include('header.php');
 include('nav-bar.php');
?>
<!-- ################################################################################################ -->
<div class="wrapper row2 bgded" style="background-image:url('../images/demo/backgrounds/1.png');">
  <div class="overlay">
    <div id="breadcrumb" class="clear"> 
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Add</a></li>
        <li><a href="#">List - Remove</a></li>
      </ul>
    </div>
  </div>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <main class="hoc container clear"> 
    <!-- main body -->
    <div class="content"> 
      <div class="scrollable">
      <form action="<?php echo URL ?>Celphone/remove/" method="post">
        <table style="text-align:center;">
          <thead>
            <tr>
              <th style="width: 15%;">Code</th>
              <th style="width: 30%;">Brand</th>
              <th style="width: 30%;">Model</th>
              <th style="width: 15%;">Price</th>
              <th style="width: 10%;">Action</th>
            </tr>
          </thead>
          <tbody>
          
            <?php foreach ($data as $cell) {?>
            <tr>
                <td><?php echo $cell->getCode()?></td>
                <td><?php echo $cell->getBrand()?></td>
                <td><?php echo $cell->getModel()?></td>
                <td><?php echo $cell->getPrice()?></td>
                <td>
                  <button type="submit" name = 'id' class="btn" value="<?php echo $cell->getId();?>"> Remove </button>
                </td>
            </tr>
            <?php }?>
            
          </tbody>
        </table>
        </form> 
      </div>
    </div>
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<?php 
  include('footer.php');
?>