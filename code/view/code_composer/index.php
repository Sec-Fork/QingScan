{include file='public/head' /}

<?php
$searchArr = [
    'action' => $_SERVER['REQUEST_URI'],
    'method' => 'get',
    'inputs' => [
        ['type' => 'text', 'name' => 'search', 'placeholder' => "search"]
    ]];
?>
{include file='public/search' /}

<div class="col-md-12 ">
    <div class="row tuchu">
        <!--            <div class="col-md-1"></div>-->
        <div class="col-md-12 ">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>项目名称</th>
                    <th>name</th>
                    <th>version</th>
                    <th>source</th>
                    <th>authors</th>
                    <th>keywords</th>
                    <th>时间</th>
                    <!--<th style="width: 200px">操作</th>-->
                </tr>
                </thead>
                <?php foreach ($list as $value) { ?>
                    <tr>
                        <td><?php echo $value['id'] ?></td>
                        <td><?php echo $value['code_name'] ?></td>
                        <td><?php echo $value['name'] ?></td>
                        <td><?php echo $value['version'] ?></td>
                        <td><?php echo $value['source'] ?></td>
                        <td><?php echo $value['authors'] ?></td>
                        <td><?php echo $value['keywords'] ?></td>
                        <td><?php echo $value['time'] ?></td>
                        <!--<td>
                            <a href="<?php /*echo url('xray/del',['id'=>$value['id']])*/ ?>" class="btn btn-sm btn-outline-danger">删除</a>
                        </td>-->
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>

    {include file='public/fenye' /}
</div>
{include file='public/footer' /}