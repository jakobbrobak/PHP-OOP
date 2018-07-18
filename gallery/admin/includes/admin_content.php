
            <div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Dashboard
            <small>Subheading</small>
        </h1>

        <?php 



        $user = new User();

        $user->username = "Jensen";
        $user->password = "adsf";
        $user->first_name = "Hans";
        $user->last_name = "Petersen";

        $user->create();
        
        // $user = User::find_user_by_id(4); 
        // $user->password = "dadadad";
        // $user->save();
        

        // $user = new User();
        // $user->username = "Kasper";
        // $user->save();
        


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