<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li class="active">My Profile</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <!-- <h1 class="h3 mb-4 text-black-800"><?= $title; ?></h1> -->
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-user"></i><strong class="card-title pl-2"><?= $title; ?></strong>
            </div>
            <div class="card-body">
                <div class="mx-auto d-block">
                    <img class="rounded-circle mx-auto d-block" src="<?= base_url(); ?>assets/images/admin.jpg"
                        alt="Card image cap">
                    <h5 class="text-sm-center mt-2 mb-1"><?= $user['username']; ?></h5>
                    <div class="location text-sm-center"><i class="fa fa-map-marker"></i> Indonesia
                    </div>
                </div>
                <hr>
                <div class="card-text text-sm-center">
                    <a href="#"><i class="fa fa-facebook pr-1"></i></a>
                    <a href="#"><i class="fa fa-twitter pr-1"></i></a>
                    <a href="#"><i class="fa fa-linkedin pr-1"></i></a>
                    <a href="#"><i class="fa fa-pinterest pr-1"></i></a>
                </div>
            </div>
        </div>
    </div>

</div>