
            <div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Dashboard
            <small>Subheading</small>
        </h1>

        <?php 
        

        $result = User::find_all_users();

        while($user_found = mysqli_fetch_array($result)) {
            
            echo $user_found['username'] . "<br>"; 

        }
        

        $user_found = User::find_user_by_id(1);
            
            echo $user_found['last_name'] . "<br>"; 

        
        


        ?>

        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-file"></i> Blank Page
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

</div>
<!-- /.container-fluid -->