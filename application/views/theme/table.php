
<div class="container">
  <h2>Show Sign up Data</h2>
  <table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Password</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data as $value) {
     ?>
      <tr>
        <td><?php echo $value->id?></td>
        <td><?php echo $value->username?></td>
        <td><?php echo $value->password?></td>
        <td><a href="<?php echo base_url($this->uri->segment(1).'/delete/'.$value->id)?>">Delete</a>/<a href="<?php echo base_url($this->uri->segment(1).'/edit/'.$value->id)?>">Edit</a></td>

      </tr>
   <?php } ?>
    </tbody>
  </table>
</div>
