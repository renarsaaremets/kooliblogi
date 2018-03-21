<h1>Posts</h1>
<h1><?=$post['post_subject']?></h1>
<p><?=$post['post_text']?></p>
<div><?=$post['post_created']?></div>
<a href="<?=BASE_URL?>tags/view/<?=$post['post_id']?>">sildid</a>
<?foreach($tags as $tag):?>
   <!-- <a href ="#"><span class="label label-info">
    <?/*=$tag['tag_name']*/?></span></a>

    <div class="span8">

        <h2> <a href="<?/*=BASE_URL*/?>posts/view<?/*$post['post_subject']*/?>"><?/*=$post['post_subject']*/?></a></h2>
        <p><?/*=$post['post_text']*/?></p>

        <div>
            <span class="badge badge-success"><?/*=$post['post_created']*/?></span>  <span class="badge badge-success"><?/*=$post['user_id']*/?></span>
        </div>
    </div>-->
<?endforeach?>



