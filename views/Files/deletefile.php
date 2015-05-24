<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
    <div class="container">
        <h1 class="pull-left">Delete File</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="/home/index">Home</a></li>
            <li><a href="/files/index">Upload List</a></li>
            <li class="active">Delete</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<?
if($viewModel->exists("model"))
{
    $model = $viewModel->get("model");
}
?>

<!--=== Content Part ===-->
<div class="container content">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <form class="reg-page" action="/files/delete&id=<? ModelValue($model, 'UserFileId')?>" method="post">
                <? CreateHiddenAntiCSRFTokenField(); ?>

                <div class="reg-header">
                    <h2>Delete your File</h2>
                </div>

                <?
                if($viewModel->exists("error")){
                    echo '<h3 class="color-red">' . $viewModel->get("error") . '</h3>';
                }
                ?>

                <div class="form-group">
                    <label>File Name <span class="color-red">*</span></label>
                    <label name="Name" class="form-control margin-bottom-20" <? ModelValue($model, 'Name')?>>
                </div>

                <div class="form-group">
                <label>File Description </label>
                <label name="Description" class="form-control margin-bottom-20"<? ModelValue($model, 'Description')?> > </label>
                </div>
                <hr>

                <div class="row">
                    <div class="col-lg-6 text-right">
                        <button class="btn-u" type="submit">Delete</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div><!--/container-->
<!--=== End Content Part ===-->