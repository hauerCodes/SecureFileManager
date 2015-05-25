<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
    <div class="container">
        <h1 class="pull-left">View thread</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="/forum/index">Forum</a></li>
            <li class="active">View thread</li>
        </ul>
    </div>
    <!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<div class="container content">
    <?
    $thread = null;

    if($viewModel->exists("thread"))
    {
        $thread = $viewModel->get("thread");
    }
    ?>

    <?
    if($viewModel->exists("error")){
        echo '<h3 class="color-red">' . $viewModel->get("error") . '</h3>';
    } else {
        if(isset($_SESSION["createdThread"])) {
            echo '<h3 class="color-green">' . $_SESSION["createdThread"] . '</h3>';
            $_SESSION["createdThread"] = null;
        }

        if(!is_null($thread)) {
            echo "<h1>" . $thread->Title ."</h1>";
            echo "<p>" . $thread->Description . "</p>";
        }
    }
    ?>
    <div class="col-lg-6 text-right">
        <p><a class="color-green" href="/forum/index">Return to forum.</a></p>
    </div>
</div>