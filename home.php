<?php include('connection.php'); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>
        <div class="container"> 
            <div class="row">
                <div class="col-sm-12">
                        <div class="btn btn-success btn-lg" data-toggle="modal" data-target="#exampleModal" name="createblog" id="createblog"><i class="fa fa-plus"></i>Create Blog</div>
                        <!-- Button trigger modal -->
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="action/add_blog.php" method="POST" name="blog_create" id="blog_create" role="form"> 
                                    <div class="form-group">
                                        <lable>title</lable>
                                        <input type="text" name="title" id="title" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <lable>Description</lable>
                                        <input type="text" name="description" id="description" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <lable>Start Date</lable>
                                        <input type="date" name="start_date" id="start_date" class="form-control"required>
                                    </div>
                                    <div class="form-group">
                                        <lable>End Date</lable>
                                        <input type="date" name="end_date" id="end_date" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <lable>Image</lable>
                                        <input type="file" name="user_image" id="user_img" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                           <input type="submit" name="add_blogs" id="add_blogs" class="btn btn-information" required>     
                                    </div>

                                    </form>
                                </div>
                                
                                </div>
                            </div>
                            </div>
                        </div>
                </div>
            </div>



            <div>
                <table border="1px solid black" class="table table-responsive">
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Image</th>
                    <th>Action</th>
                    <?php
                        $sql="select * from bloggers ";
                        $querys=mysqli_query($con,$sql);

                        while($row=mysqli_fetch_assoc($querys))
                        {
                            $ids=$row['bid'];
                            ?>
                                <tr>
                                    <td><?php echo $row['bid'];?></td>
                                    <td><?php echo $row['title'];?></td>
                                    <td><?php echo $row['description'];?></td>
                                    <td><?php echo $row['start_date'];?></td>
                                    <td><?php echo $row['end_date'];?></td>
                                    <td><?php echo $row['user_image'];?></td>
                                    <td>
                                        <a href="action/edit.php"><i class="fa fa-edit"></i></a>
                                        <a href="action/delete.php&id=<?php echo $ids; ?>"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                        <?php } ?>


                </table>
            </div>
        </div>
</body>
</html>